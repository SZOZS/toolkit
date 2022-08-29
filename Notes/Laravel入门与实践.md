### 第14章 存储和检索
    本书的第8章讲解了怎样在关系型数据库中存储数据，但是这里还有更多的存储方式，包括本地存储和远程存储。本章会讲解文件系统、内存存储、文件上传操作、非关系型数据存储、会话、缓冲cookie和全文搜索。

#### 本地和云端文件管理器
    Laravel通过storage、facade提供了一系列文件操作工具，以及一些帮助方法。
    Laravel的文件系统访问工具可以链接本地文件系统以及S3、Racksapce和FTP。S3和Rackspace文件驱动器由Flysystem提供，我们可以很容易地在Laravel应用中添加额外的Flysystem提供商，如Dropbox或WebDAV。

#### 配置文件访问
    Laravel的文件管理器定义位于config/filesystems.php中。每个链接都被称作"磁盘"，示例14-1列出了Laravel自带的、可用的磁盘。

###### 示例14-1默认可用的存储磁盘
```
    ...
    "disks"=>[
        "local"=>[
            "driver"=>"local",
            "root"=>storage_pate("app"),
        ],
        "public"=>[
            "driver"=>"local",
            "root"=>storage_path("app/public"),
            "visibility"=>"public",
        ],
        "s3"=>[
            "driver"=>"s3",
            "key"=>"your-key",
            "secret"=>"your-secret",
            "region"=>"your-region",
            "bucket"=>"your-bucket",
        ],
    ],
```

##### storage_path()助手
    示例14-1中用到的storage_path()助手链接了Laravel中已配置的存储目录storage/。任何传入storage_path()的内容都会被添加到目录名的末尾，所以storage_path("public")会返回字符串storage/public。

    local磁盘与本地存储系统相连，并假设它将与存储路径的app目录，也就是storage/app，进行交互。

    public磁盘也是一种本地磁盘(尽管可以根据需要进行更改)，它适用于应用程序的任何文件。该磁盘默认位于storage/app/public目录下，如果想要将这个目录用于向公共磁盘提供文件，则需要在public/directory中添加一个符号链接(symlink)。Laravel提供了一行完成此操作的Artisan命令，如下所示。

    #映射 publi/storage,从storage/app/public中提供文件
    php artisan storage:link

    s3磁盘展示了Laravel怎样链接基于云端的文件存储系统。如果曾经链接过S3或者其他的云端存储提供商，你应该对这个只是点很熟悉：传入密钥、密码，以及一些定义正在使用的"文件夹"的信息，也就是S3的区域和存储桶。

#### 使用存储facade
    可以在config/filesystem.php中设置默认磁盘，在调用Storage facade而不指定磁盘时就会使用默认磁盘。在facade中调用dick("dickname")可以指定一个磁盘，代码如下。
```
    Storage::disk("s3")->get("file.jpg");
```
    每个文件系统都提供了下列方法。
    get("file.jpg")                     检索文件file.jpg。
    put("file.jpg",$contentsOrStream)   将给定的文件内容放到file.jpg中。
    putFile("myDir",$file)              将给定文件的内容(Illuminate\Http\File或Illuminate\Http\UploadedFile实例的格式)放到myDir目录中，Laravel管理整个流程并命名文件。
    exists("file.jpg")                  返回表示file.jpg是否存在的布尔值。
    copy("file.jpg","newfile.jpg")      将file.jp复制到newfile.jpg中。
    move("file.jpg","newfile.jpg")      将file.jpg移动到newfile.jpg中。
    prepend("my.log","log.txt")         将内容添加到my.log的开始位置。
    append("my.log","log.txt")          将内容添加到my.log的结束位置。
    delete("file.jpg")                  删除file.jpg。
    deleteDirectory("myDir")            删除myDir。
    size(file.jpg)                      返回file.jpg的字节大小。
    lastModified("file.jpg")            返回最近一次修改file.jpg的UNIX时间戳。
    files("myDir")                      在myDir目录中返回一个文件名称数组。
    allFiles("myDir")                   在myDir目录及其子目录中返回一个文件名称数组。
    directories("myDir")                在myDir目录中返回一个目录名称数组。
    allDirectories("myDir")             在myDir目录及其子目录中返回一个目录名称数组

##### 注入实例
    如果希望注入一个实例而不使用File facade、类型提示或注入Illuminate\Filesystem\Filesystem,那么同样可以得到所有的方法。

#### 添加额外的Flysystem提供商
    如果想要添加一个额外的Flysystem提供商，则需要"集成"Laravel的本地存储系统。服务提供商中包含了AppServiceProvider的boot()方法，但是使用Storage facade来添加新的存储系统为每个新的绑定创建一个唯一的服务提供商，这样更为合适，如示例14-2所示。

###### 示例14-2添加额外的Flysystem提供商
    // 某些服务提供商
```
    public function boot(){
        Storage::extend("dropbox",function($app,$config){
            $client = new DropboxClient(
                $config["accessToken"],$config["clientIdentifier"]
            );
            return new Filesystem(new DropboxAdapter($client));
        });
    }
```

#### 基本的文件上传和操作
    Storage facade 中最常见的一个应用就是从用户那里接受文件上传。下面通过实例14-3来看看常见的工作流程。

###### 常见的文件上传流程
```
    ···
    class DogsController{
        public function updatePicture(Request $request,Dog $dog){
            Storage::put{
                "dogs/".$dog->id,
                file_get_contents($request->file("picture")->getRealPath())
            };
        }
    }
```
    这里用put()方法把内容放到一个名为dogs/{id}的文件中并且从上传的文件中获取内容。每个上传的文件都继承自SplFileInfo类,这个类提供了一个返回文件路径的getRealPath()方法。所以可以得到用户上传文件暂时的上传路径，通过file_get_contents()方法读取，然后将它传入Storage::put()。
    现在得到了这个可用的文件，在存储之前我们可以对其进行任意操作————如果是一张图片，则可以使用图片操作包来重新设置图片大小、验证该文件；如果不符合我们的标准，则可以拒绝该文件的上传以及其他任何操作。
    在config/filesystem.php中已经存储了证书的情况下，如果想要将同样的文件上传到S3，则只需要调整示例14-3来调用Storage::disk("s3")->put(),这样就可以将文件上传到S3.我们来看一个更复杂的例子，如示例14-4所示。

###### 示例14-4使用Intervention进行更复杂的文件上传
```
    ···
    class DogsController{
        public function updatePicture(Request $request,Dog $dog){
            $original = $request->file("picture");
            // 将图像大小调整为最大宽度150
            $image = Image::make($original)->resize(150,null,function($constraint){
                $constraint->aspectRatio();
            })->encode("jpg",75);
            Storage::put(
                "dogs/thumbs".$dog->id,$image->getEncoded()
            );
        }
    }
```
    在实例14-4中使用了一个名为Intervention的图片包，也可以使用其他软件包。大家需要记住的一点就是，在存储文件之前，可以对其进行任何操作。

##### 对上传文件使用store()和storeAs()方法
    Laravel5.3引入了使用文件本身存储上传文件的功能，参见eg6-11。

##### 会话
    在Web应用中，会话存储是用于在界面请求之间存储状态的主要工具。Laravel的会话管理器通过文件、cookie、数据库、Memcached、Redis或内存中的数组（页面请求后到期，并且仅适用于测试）来支持会话驱动。
    可以在config/session.php中配置所有的会话设置和驱动器。也可以选择是否加密会话数据、使用哪个驱动器(默认是file驱动器)，以及更多指定连接的详细信息，如会话存储长度以及要使用的文件或数据库表。查看会话文档（https://laravel.com/docs/master/session）,可以了解需要选择使用驱动器准备的、特定的依赖和设置。
    会话工具的常用API，允许通过唯一键值来保存和检索数据。例如，session()->put("user_id")和session()->get("user_id")。因为Laravel仅在内部使用闪存(仅适用于下一页请求)进行会话存储，所以应当避免将内容保存到闪存会话秘钥中。

##### 访问会话
    使用会话facade是最常见的访问会话的方式，如下所示。
        session()->get("user_id");
    也可以在给定的Illuminate响应对象上使用session()方法，如eg14-5所示。
###### eg14-5 在响应对象上使用session()方法
    Route::get("dashboard",function(Request $request){
        $request->session()->get("user_id");
    });
    或者也可以注入一个Illumination\Session\Store实例，如eg14-6。
###### eg14-6 为会话注入支持类
    Route::get("dashboard",function(Illuminate\Session\Store $session){
        return $session->get("user_id");
    });
    最后可以使用全局session()助手。使用它时不添加任何参数便可以得到一个会话实例，可以通过单字符串参数从会话中“获取”数据，或者通过一个数组将数据“放入”会话中，如eg14-7
###### eg14-7 使用全局session()帮手
    // get
    $value = session()->get("key");
    $value = session("key");
    // put
    session()->put("key","value");
    session(["key","value"]);
    如果刚开始使用Laravel不清楚应该使用哪一种方法，那么推荐使用全局助手。
#### 会话实例的可用方法
    会话中最常见的俩个方法就是get()和put()，首先来看看每一个方法以及它们的参数，如下所示。
    session()->get($key,$fallbackValue)
    get()从会话中获取提供的键值。如果该键中不含键，则会返回回调值（如果没有提供回调值，则get()会返回null）。回调值可以是一个字符串或一个闭包，如下所示。
    $points = session()->get("points");
    $points = session()->get("points",0);
    $points = session()->get("points",function(){
        return (new PointGetterService)->getPoints();
    });
    session()->put($key,$value)
    put()将会话中提供的值存储到对应的键值中。
        session()->put("points",45);
        $points = session()->get("points");
    session()->push($key,$value)
    如果会话的值是数组，则可以使用push()方法向数组中添加元素，如下所示。
    session()->put("friends",["Saul","Quang","Mechteld"]);
    session()->push("friends","Javier");
    session()->has($key)
    has() 检查给定键值中是否包含值。
    if(session()->has("points")){
        // 进行操作
    }
    也可以传入一个键值数组，如果所有键值都已经存在，则会返回true。
    session()->has()和null
    如果一个会话值已经被设为null，那么session()->has()将会返回false。
    session()->all()
    all()返回会话中所有内容的数组，包括在框架中设置的值。这里可能会看到键下的值，如_token(CSRF令牌)、_previous(back()重定向)和flash(用于闪存存储)等。
    session()->forget($key)和session()->flush()
    forget()删除之前设置的会话的值。flush()删除每个会话的值，包括在括号里设置的值，如下所示。
        session()->put("a","awesome");
        session()->put("b","bodacious");
        session()->forget("a");
        // a不再是一个集合，b仍是一个集合
        session()->flush();
    // 会话不再为空
    session()->pull($key,$fallbackValue)
    pull()和get()类似,不同在于pull()获取值之后删除该值。
    session()->regenerate()
    这个方法并不常见，用于重新生成会话ID。
#### 闪存会话存储
    我们还有是哪个方法没有讲解，这三个方法都用于处理叫做"闪存"的会话存储。
    会话存储中非常常见的模式，是设置一个只能用于下一页加载的值。比如可能想要存储如"成功更新帖子"这样的信息。可以手动获取该消息，然后在下一次加载是擦除它。但是如果经常使用该模式，则可能造成很多浪费。若输入闪存会话存储，键(key)预计智能持续一个页面请求。
    Laravel实现了这个功能，需要使用flash()方法而不是put()方法，如下所示。
    session()->flash($key,$value)
    flash()将下一个界面请求提供的值设置为会话的键值。
    session()->reflash()和session()->keep($key)
    如果需要前一个界面的flash()闪存数据依附于多个请求，则可以使用reflash()来为下一个请求存储全部闪存内容或者使用keep($key)为下一个请求存储单个闪存值。keep()也可以接受一个键值数组从而重新保存闪存数据。
#### 高速缓存器cache
    cache的结构与会话非常类似。如果提供一个键值，那么Laravel会保存该值。二者最大的不同在于，高速缓存中的数据是为每个应用缓存的，而会话是为每个用户缓存的。也就是说，在进行存储大量的数据库结果，API调用或者其他慢查询时更常使用cache。
    cache的配置设置位于config/cache.php中。和会话一样，可以为任何驱动器进行特定的配置，也可以指定默认驱动。Laravel默认使用file高速缓存驱动器，也可以使用Memcached、Redis、API数据库或者编写自己的高速缓存驱动器。可以通过查看缓存文档（https://laravel.com/docs/master/cache）了解驱动程序所需的特定依赖项和设置。
#### 访问高速缓存
    跟会话一样，访问高速缓存器也有一些不同的方法。可以使用facade，如下所示。
    $users = Cache::get("users");
    可以从容器中获得一个实例，如eg14-8
###### eg14-8 注入一个高速缓存实例
    Route::get("users",function(Illuminate\Contracts\Cache\Repository $cache){
        return $cache->get("users");
    })
    也可以使用全局cache()助手(Laravel5.3的新特性),如eg14-9。
###### eg14-9 使用全局cache()助手
    // 从cache中获取
    $users = cache("key","default value");
    $users = cache()->get("key","default value");
    // 放置持续$minutes时间
    $users = cache(["key"=>"value"],$minutes);
    $users = cache()->put("key","value",$minutes);
    如果刚开始使用Laravel，不清楚应该使用哪一种办法，那么推荐使用全局助手。
#### Cache实例中可用的方法
    来看看在cache实例中可以使用的方法，如下所示。
    cache()->get($key,$fallbackValue)和cache()->put($key,$fallbackValue)
    get()能更容易地从给定的键中获取值。pull()和get()相似，不同在于pull()在获取高速缓存的值后会将它删除。
    cache()->put($key,$value,$minutesOrExpiration)
    put()设置给定分钟数的指定键值。如果想要设置过期日期/时间而不是分钟数，则可以将Carbon对象作为第三个参数传入。
    cache()->put("key","value",Carbon::now()->addDay());
    cache()->add($key,$value)
    add()与put()类似，不同之处在于，如果值已经存在，add()不会再次设置该值。
    add()同样会返回一个表示值是否已经被添加的布尔值。
    $someDate=Carbon::now();
    cache()->add("someDate",$someDate);//返回true
    $someOtherDate = Carbon::now()->addHour();
    cache()->add("someDate",$someOtherDate);//返回false
    cache()->forever($key,$value)
    forever()将一个值保存到特定键的缓存中，这与put()类似，但是forever()中的值永远不会过期(直到使用forget()方法删除)。
    cache()->has($key)
    has()返回一个表示提供的键是否有值的布尔值。
    cache()->remember($key,$minites,$closure)和cache()->rememberForever($key,$closure)
    remeber()提供了一个处理常规流程的方法:查询缓存中的指定键是否有值，如果不含有值就获取该值并保存到缓存中，再将其返回。
    remember()需要提供一个查询用的键、需要保存的分钟数和定义如何查询的闭包，以防键中不包含需要设置的值。rememberForever()与remember()类似，但是它不需要设置过期的分钟数。通过下面的例子来看看常见的用于remember()的使用场景。
    // 返回"users"缓存中的值或获取"User::all()"
    // 在"users"中缓存并返回该值
    $users = cache()->remember("users",120,function(){
        return User::all();
    });
    cache()->increment($key,$amount)和cache()->decrement($key,$amount)
    increment()和decrement()方法允许在缓存中增加或者减少整数型。如果给定的键中不含值，则该值会被当做0；如果通过第二个参数指定增加或者减少的值，该方法会根据指定的操作加1或者减1。
    cache()->forget($key) 和 cache()->flush()
    forget()与会话的forget()方法类似:首先传入一个键，然后它会删除对应的值。flush()会删除所有的缓存。
#### Cookie
    你可能希望cookie也和会话、缓存一样。cookie同样可以使用facade和全局助手里面的方法，也可以以同样的方法获取设定值。
    但是因为cookie本身就是附加在请求和响应上的，所以与cookie的交互方式有所不同。接下来看看为什么不同。
#### Laravel中的cookie
    在Laravel中，cookie可以存在于三个地方。首先是在请求中，也就是在访问界面时，用户会获得一个cookie。可以通过Cookie facade读取该cookie，也可以从请求对象中读取。
    其次，cookie也可以发出相应，也就是说响应会指示用户的浏览器保存cookie以便将来访问。也可以在返回cookie之前，将它添加到响应对象中。
    最后，cookie可以组成队列。如果使用Cookie facade来设置cookie，则可以将其放入"CookieJar"队列中，然后cookie将会被移除并通过AddQueuedCookiesToResponse中间件添加到响应对象中。
#### 访问cookie工具
    可以在三个地方获取和设置cookie:Cookie facade、cookie()全局助手、以及请求和响应对象。
    Cookie facade
    Cookie facade 是功能最齐全的选项，它不仅允许读取和创建cookie，还能将cookie通过队列添加到响应。它提供了下列方法。
    Cookie::get($key)
    获取请求中出现的cookie值，可以仅运行Cookie::get("cookie-name")。
    这是最简单的选项。
    Cookie::has($key)
    可以通过Cookie::has("cookie-name")检查cookie是否与请求一起使用，该cookie返回一个布尔值。
    Cookie::make(...params)
    如果想创建一个cookie但不排队，可以使用Cookie::make()。最常见的用法就是创建一个cookie，然后手动将它附加到响应对象。
    以下是make()的参数。
    $name是cookie的名字
    $value是cookie的内容
    $minutes指定了cookie留存的分钟数
    $path是cookie的有效路径
    $domain列出了cookie工作的域名
    $secure表示cookie是否应该仅通过安全(HTTPS)连接传输
    $httpOnly表明了cookie是否只能通过HTTP协议访问
    Cookie::make()
    返回一个Sysfony\Component\HttpFoundation\Cookie实例。
##### cookie的默认设置
    Cookie facade 实例使用CookieJar从会话配置中读取默认设置。所以如果要在config/session.php中为会话cookie改变任何配置值，同样的默认设置也会被应用到用Cookie facade创建的所有cookie中。
    Cookie::queue(Cookie//...params)
    如果使用Cookie::make()，依旧需要将cookie附加到响应中的这个部分，我们稍后会讲到。Cookie::queue()与Cookie::make()的语法一样，但是它会将创建的cookie排入队列，然后自动附加到中间件的响应中。
    如果需要，也可以将创建的cookie传入Cookie::queun()中。
    下面是一个在Laravel中将cookie添加到响应的简单示例。
    Cookie::queue("dismissed-popup",true,15);
##### 将没有设置的cookie进行排队
    cookie只能作为响应的一部分返回。所以如果将cookie排队到Cookie facade中,响应便不能正面返回————例如使用PHP的exit()方法或某些操作停止脚本的执行，那么cookie将不会被设置。
##### cookie()全局助手
    如果不适用参数调用cookie()全局助手，那么它将会返回一个CookieJar实例。然而Cookie facade 中最方便的两个方法has()和get()，只存在于facade而不包含CookieJar。因此在这种情况下，全局助手实际上比其他选项更有用。
    cookie()全局助手的一个重要任务是创建一个cookie。如果将参数传入cookie()，它们会被直接传给Cookie::make(),所以这是创建cookie最快的方法，如下所示。
    $cookie = cookie("dismissed-popup",true,15)
##### 注入一个实例
    也可以在应用程序的任意位置注入一个Illuminate\Cookie\CookieJar实例，但是还会遇到以下提到的限制。
##### 请求和响应对象的cookie
    由于cookie被设置为响应的一部分并且作为请求的一部分被传入，这些Illuminate对象就会位于它实际应该存在的位置。Cookie facade的get()、has()和queun()方法只是与请求和响应对象交互的代理。
    所以与cookie交互的最简单方法就是从请求中获取cookie，然后将它们设置到响应中。
##### 从请求对象中读取cookie
    一旦获得一个请求对象的副本————如果不知道怎样获取一个请求对象，可以尝试使用app("request")————便可以使用请求对象的cookie()方法来读取它的cookie,如eg14-10。
###### eg14-10 从请求对象中读取一个cookie
    Route::get("dashboard",function(Illuminate\Http\Request $request){
        $userDismissedPopup = $request->cookie("dismissed-popup",false);
    });
    正如这个示例一样，cookie()方法包含两个参数：cookie名称和可选参数回调值。
##### 在响应对象中设置cookie
    当响应对象可用的时候，可以使用cookie()方法(或者Laravel5.3之前版本的withCookie()方法)讲一个cookie添加到响应中，如eg14-11
###### eg14-11 在响应对象中设置cookie
    Route::get("dashboard",function(){
        $cookie = cookie("saw-dashboard",true);
        return Response::view("dashboard")->cookie($cookie);
    });
    如果刚开始使用Laravel,不太清楚应该使用哪个选项，那么推荐在请求和响应对象中设置cookie。虽然这样工作量会大一点，但是如果以后的开发者不了解CookieJar队列，这样的设置就可以节省很多时间。
#### 基于Laravel Scout全文搜索
    Laravel Scout是一个独立的包，可以将它引入Laravel应用来为Eloquent模型添加全文搜索。Scout可以很容易地搜索Eloquent模型的内容，它随Algolia和Elasticsearch驱动程序一起提供，但也有其他服务提供商提供了社区版的软件包。这里假设读者使用的是Algolia。
##### 安装Scout
    首先从Laravel5.3以上版本的应用中获取软件包，如下所示。
    composer require laravel/scout
    然后将Laravel\Scount\ScoutServeiceProvider::class添加到config/app.php的提供商部分。
    为了配置Scout,需要先运行php artisan vendor:publish命令，然后将Algolia证书添加到config/scout.php中。
    最后安装Algolia SDK，如下所示。
    composer require algolia/algoliasearch-client-php
##### 标记索引模型
    在模型中(这里用Review模型作为示例)导入Laravel\Scout\Searchable特性。
    可以定义toSerachableArray()方法(默认为镜像toArray())和搜索的属性，然后使用searchavleAs()方法(默认是表名)定义模型的索引名称。
    Scout在标记的模型上订阅了create/delete/update事件。在创建更新或者删除任意行时，Scout会将这些修改同步到Algolia中。它既能使更新同步更改，也可以在Scout配置为使用队列是对排队进行更新。
##### 索引检索
    Scout的语法非常简单。例如检索包含词语Llew的Review,代码如下所示。
    Review::search("Llew")->get();
    也可以像修改常规Eloquent调动一样修改查询，如下所示。
    // 获取Review中所有与"Llew"匹配的记录。
    // 像Eloquent分页一样限制每页只显示20条记录读取界面查询参数Review::search("Llew")->paginate(20);
    // 获取Review中所有与"Llew"匹配的记录
    // 并把account_id字段设置为2
    Review::search("Llew")->where("account_id",2)->get();
    我们会检索出什么内容呢？结果是从数据库中获取的一个Eloquent模型的集合。Algolia中存储的Id返回一个匹配的Id列表,然后Scout从数据库中获取记录并将它们作为Eloquent对象返回。
    这里并没有完全用到复杂的SQL WHERE命令，但就像在代码示例中看到的那样，它为比较检索提供了一个基本框架。
##### 队列和Scout
    到现在为止，应用将在修改数据库记录的每个请求时向Algolia发出HTTP请求。这样可以快速减缓应用程序进程。这就是Scout可以轻松将其所有动作推送到队列中的原因。
    在config/scout.php中，将queue设为true就可以将这些更新设置为异步索引。全文本索引目前会保持"最终一致性"，也就是说数据库记录将立即接收到更新，并且搜索索引的更新将会尽可能快地按照队列允许的速度进行排队和更新。
##### 执行无索引操作
    如果想要这行一系列操作同时又不希望在响应中触发索引，那么可以在模型的withoutSyncingToSearch()方法中进行封装操作，代码如下。
    Review::withoutSyncingToSearch(function(){
        // 如添加一些评论
        factory(Review::class,10)->create();
    });
##### 通过代码手动触发索引
    如果希望在模型中手动触发索引，则可以在应用中使用代码或者通过命令行触发。
    在使用代码手动触发索引时，需要将searchable()添加到任意Eloquent查询的末尾，然后它将会为该查询里的所有记录添加索引。
    Review::all()->searchable();
    也可以在查询中选择希望添加索引的作用域。Scout非常智能，可以查询新的记录、更新旧的记录，所以我们可以选择仅对模型数据库表里的内容重新索引。
    也可以在关系方法中指定searchable(),如下所示。
    $user->reviews()->searchable();
    如果想要取消查询链中记录的索引，可以使用unsearchable(),如下所示。
    Review::where("sucky",true)->unsearchable();
##### 利用CLI手动触发索引
    还可以通过Artisan命令触发索引，如下所示。
    php artisan scout:import App\\Review
    该命令会将Review模型分块，并为这些块添加索引。
#### 测试
    测试大多数特性与在测试中使用它们一样简单，不需要模拟或者存根，默认配置已经有效————例如查看phpunit xml 可以看到会话驱动和缓存驱动已经被设置为适合测试的值了。
    但是在尝试测试所有这些方法之前，应该了解一些简便的方法。
#### 文件存储
    测试文件上传可能有一点麻烦，可以按照下面的步骤进行操作。
##### 上传假文件
    首先通过eg14-12来看看怎样在系统测试中手动创建一个sysfonyUploadedFile对象。注意，假设我们已经创建了storage/tests目录，存放用于测试的for-tests.jpg文件。
###### eg14-12 为测试创建一个假的UploadFile
```
    public function test_file_should_be_stored(){
        $path=storage_path("/tests/for-tests.jpg");
        $file=new UploadFile(
            $path, // 文件路径
            "for-tests.jpg", // 原始文件名
            "image/jpg", // MIME类型
            filesize($path), // 文件大小，最好硬编码到测试中
            test,null, // 错误代码
            true // 是否处于测试模式下
        );
        $this->call("post","upload-route",[],[],["upload"=>$file]);
        $this->assertResponseOk();
    }
```
    我们已经创建了一个参照测试文件的UploadFile实例，现在可以用它来测试路由。
##### 返回假文件
    如果希望路由测试真实的文件，最好的办法就是该文件真的存在。假设每个用户都必须拥有个人资料图片。
    首先，设置模型工厂供用户使用Faker制作图片的副本，如eg14-13
###### eg14-13 通过Faker返回假文件
```
    $factory->define(User::class,function(Faker\Generator $faker){
        return [
            "picture"=>$faker->file(
                storage_path("tests") // 源目录
                storage_path("app") // 目标目录
                false // 仅返回文件名，不返回完整路径
            ),
            "name"=>$faker->name,
        ];
    });
```
    Faker的file()方法从源目录中随机选取一个文件，将它复制到目标目录，然后返回文件名。我们只需要从storage/tests目录中随机选择一个文件将它复制到storage/app目录下，然后将它的文件名设置为User的picture属性即可。这样我们便可以在测试路由时使用这个包含图片的User，如eg14-14。
###### eg14-14
```
    public function test_user_profile_picture_echoes_correctly(){
        $user = factory(User::class)->create();
        $this->visit("users/{$user-id}");
        $this->see($user->picture);
    }
```
    当然在打赌多数情况下，甚至都不需要复制文件，只需要生成一个随机字符串。但是如果路由需要检查文件的存在或对文件执行某些操作，最好还是选择复制文件的方式。
##### 会话
    如果需要对会话中设置的某些内容进行断言，则可以使用Laravel为每个测试提供一些便利方法。所以这些方法都可以在测试的$this对象中使用，如下所示。
    assertSessionHas($key,$value=null)
    在断言会话具有特定键值的同时，如果传入了第二个参数，则该键值具有特定值。
    public function test_some_thing(){
        // 进行操作
        $this->assertSessionHas("key","value");
    }
    assertSessionHasAll(array $binding)
    如果传入了一个键值对数组，则断言所有的键与值相同。如果一个或多个数组元素只是一个值（使用PHP默认的数值键），那么它只在会话中被检索是否存在，如下所示。
    $check=[
        "has",
        "hasWithThisValue"=>"thisValue",
    ]
    $this->assertSessionHasAll($check);
    assertSessionMissing($key)
    断言该会话不具有特定键的值。
    assertSessionHasErrors($bindings=[],$forma=null)
    断言该会话包含一个errors值，这是Laravel用于从失败的验证中返回错误的键值。
    如果数组中只包含键，它将检查会话是否使用这些键设置错误。
    $this->post("test-route",["failing"=>"data"]);
    $this->assertSessionHasErrors(["name","email"]);
    可以为这些键传入值，也可以选择性地设置$format来检查返回的错误信息是否与期待的内容相符。
    $this->post("test-route",["failing"=>"data"]);
    $this->assertSessionHasErrors([
        "email"=>"<strong>The email field is required.</strong>"
    ],"<strong>:message</strong>");
    assertHasOldput()
    这里可以将之前界面的输入闪存到会话中，如果想要断言输入被正确闪存，如下所示。
    $this->post("test-route",["failing"=>"data"]);
    $this->assertHasOldinput();
#### 高速缓存
    缓存的测试并没有什么特别，直接测试即可。
    Cache::put("key","value",15);
    $this->assertEquals("value",Cache::get("key"));
    在测试环境中，Laravel默认使用"数组"缓存驱动器，将缓存值存在内容中。
#### cookie
    如果在系统测试中测试路由之前需要设置cookie，那么可以手动将cookie作为一个参数传入call()方法。可以查阅第12章学习更多的内容。
##### 在测试期间将cookie从加密中排除
    如果将cookie从Laraval的cookie加密中间件移除，那么它们在测试过程中就不会工作。这里可以在EncryptCookies中间件中暂停使用该cookie。
```
    use Illuminate\Cookie\Middleware\EncryptCookies;
    ...
    $this->app->resolving(
        EncryptCookies::class,
        function ($object){
            $object->disableFor("cookie-name");
        }
    );
```
    // ......运行测试
    这意味着可以设置和检索一个像eg14-5这样的cookie
###### eg14-5 为cookie运行单元设置
```
    public function test_cookie(){
        $this->app->resolving(EncryptCookies::class,function($object){
            $object->disableFor("my-cookie");
        })
        $this->call("get","route-echoing-my-cookie-value",[],["my-cookie"=>"baz"]);
        $this->see("baz");
    }
```
    如果不想停用加密，则可以像eg14-16一样为cookie设置加密值。
###### eg14-6 在设置前手动加密cookie
```
    use Illuminate\Contracts\Encryption\Encrypter;
    ...
    public function test_cookie(){
        $encryptedBaz = app(Encrypter::class)->encrypt("baz");
        $this->call(
            "get",
            "route-echoing-my-cookie-value",
            [],
            ["my-cookie"=>$encryptedBaz]
        );
        $this->see("baz");
    }
```
    如果想测试一个已经设置了cookie的响应，还可以使用seeCookie()测试该cookie,如下所示。
    $this->visit("cookie-setting-route");
    $this->seeCookie("cookie-name");
    或者使用seePlainCookie()来测试，然后断言该cookie没有被加密。
#### 本章小结
    Laravel为许多常见的存储操作提供了简单的接口:文件系统、访问会话、cookie缓存和检索。无论使用的是哪一个提供商，每一个API都是一样的，Laravel允许多个"驱动程序"提供相同的公共接口，这使得根据环境来切换所提供程序，或者根据应用程序的需求变化而变化更简单。

### 第15章 邮件和通知
    通过电子邮件、Slack、SMS或者其他通知系统来发送应用程序的用户通知，这是一个十分常见但却复杂到令人惊讶的要求。Laravel的邮件和通知功能提供了一个统一的API，它可以抽象出任何需要格外注意的特别的系统提供商。就像第14章中提到的，我们需要编写代码，然后在配置的时候选择使用哪个系统来发送邮件或通知。
#### 邮件
    Laravel的邮件功能在SwiftMailer(http:://swiftmailer.org/)顶部的一个便利层，除此之外，Laravel中也含有Mailgun、Mandrill、Sparkpost、SES、SMTP、PHP邮件和Sendmail驱动程序。
    对于所有的云服务器来说，我们可以在config.service.php中设置自己的身份验证信息。但是，如果仔细观察，就会发现其中已经包含了一些关键字，并且在config/mail.php中，可以使用如MAIL_DRIVER和MAILGUN_SECRET一样的变量在.env中自定义应用的邮件功能。
#### 基于云的API驱动程序依赖关系
    如果正在使用基于云的API驱动程序，则需要使用Composer将Guzzie插入。运行以下命令可以实现。
    composer require guzzlehttp/guzzle:"~5.3|~6.0"
    如果使用SES驱动程序，则需要运行以下命令。
    composer require aws/aws-sdk-php:3.0
#### "classic"邮件 ================================================= 434
    Laravel中有两种不同的用于发送邮件的语法：class（经典）语法和mailable（可邮寄）语法。mailable是Laravel5.3版本之后的首选语法，因此我们将在本书中重点介绍次语法。对于使用Laravel5.1或Laravel5.2版本的用户来说，我们会大致介绍一下classic语法是如何工作的，如示例15-1所示。
###### 实例15-1 基本“classic”的邮件语法
    Mail::send(
        "emails.assignment",
        ["trainer"=>$trainer,"trainee"=>$trainee],
        function($m)use($trainer,$trainee){
            $m->from($trainer->email,$trainer->name);
            $m->to($trainee->email,$trainee->name)->subject("A New Assignment!");
        }
    );
    Mail::send()
    第一个参数是视图的名称。需要注意的是，其中的emails.assignment是指resources/views/emails/assignment.blade.php或者resources/views/emails/assignment.php。
    第二个参数是要传递给视图的数据数组。
    第三个参数是一个闭包，我们可以在这个比包中定义如何发送邮件，在哪发送邮件，以及发送人、收件人、抄送、密送、主体及任何其他的元数据。需要确保在闭包中使用想要访问的变量，并且要注意这个闭包会传递一个名为$m的参数，这是一个消息对象。
    可以查看一些旧的文档来了解classic邮件语法。
#### 基本“mailable”邮件
    Laravel5.3版本引入了一种新的邮件语法，叫做mailable邮件语法。它和classic邮件语法的工作原理相同，不同的是，classic语法在一个闭包中定义邮件信息，而mailable语法可以创建一个特定的PHP类用来表示每个邮件。
    通过使用make：mail Artisan命令来说实现mailable语法的代码如下。
    php artisan make:mail Assignment
    示例15-2对上述PHP类进行了详细描述。
###### 示例15-2 一个自动生成的使用mailable语法的PHP类
```
    <?php
    namespace App\Mail;
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Contracts\Queue\ShouldQueue;

    class Assignment extends Mailable
    {
        use Queueable,SerializesModels;

        /**
         *  创建一个新的消息实例
         *
         *  @return voild
         */
        public function __construct()
        {
            //
        }

        /**
         * 构建消息
         *
         * @return $this
         */
        public function build()
        {
            return $this->view("view.name");
        }
    }
```
    这个类看起来可能很熟悉————它和job几乎一模一样。这个类甚至为邮件排队引入了Queueable trait和SerializesModels trait。因此，任何传递给构造函数的优秀的模型都将被正确序列化。
    那么这个类是如何工作的呢？基于mailable的build()方法是用来定义视图、主题的，同时可以调整除发送内容外的其他想要调整的内容。构造函数可以传递所有数据以及mailable类的所有可用于模板的公共属性。
    示例15-3显示了我们如何为实例更新自动生成的mailable语法。
###### 示例15-3 mailable语法
```
    <?php
    namespace App\Mail;
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Contracts\Queue\ShouldQueue;

    Class Assignment extends Mailable
    {
        use Queueable,SerializesModels;

        public $trainer;
        public $trainee;

        public function __construct($trainer,$trainee)
        {
            $this->trainer=$trainer;
            $this->trainee=$trainee;
        }

        public function build()
        {
            return $this->subject("New assignment from ".$this->trainer->name)->view("email.assignment");
        }
    }
```
    示例15-4显示了如何发送mailable语法。
###### 示例15-4 发送mailable语法的方法
    // 简单发送
    Mail::to($user)->send(new Assignment($trainer,$trainee));
    // 含有抄送、密送等内容的发送
    Mail::to($user)->cc($user2)->bcc($user3)->send(new Assignment($trainer,$trainee));
    // 含有收集的发送
    Mail::to("me@app.com")->bcc(User::all())->send(new Assignment($trainer,$trainee))
#### 邮件模板
    邮件模板与其他模板一样。它们可以扩展其他模板，使用分段、解析变量、包含条件或循环指令，并且可以实现普通Blade视图中能够实现的任何功能。
    示例15-5是为示例15-3补充的一个可行的mails.assignments模板。
###### 示例15-5 任务邮件示例
```
    <!-- resources/views/emails/assignment.blade.php -->
    <p>Hey {{ $trainee->name }}!</p>
    <p>You have received a new training assignment from <b>{{ $trainer->name }}</b>.Check out your <a href="{{ route('training-dashboard') }}">training dashboard</a> now!</p>
```
    在示例15-3中，$trainer和$trainee都是mailable的公共属性，可用于模板。
    如果想要明确定义传递到模板的变量，可以将with()方法连接到build()调用中，如示例15-6所示。
###### 示例15-6 自定义模板变量 ================================================= 438
```
    {
        return $this->subject("You have a new assignment!")->view("email.assignment")->with(["assignment"=>$this->event->name]);
    }
```
##### HTML与纯文本电子邮件
    到目前为止，我们已在build()调用堆栈中使用了view()方法，这是基于我们引用的模板会回传HTML的设想。如果想要传送一个纯文本版本，可以用text()方法来定义纯文本视图。
    public function build()
    {
        return $this->view("email.reminder")->text("emails.reminder_plain");
    }
#### build()中可用的方法
    以下是一些可以在mailable的build()方法中自定义信息的方法。
    from($address,$name=null)
    设置“from”的名字和地址，表示作者。
    subject($subject)
    设置电子邮件主题。
    attach($pathToFile,array $options=[])
    附加文件，符合MIME类型的mime和显示名称的as才是有效的项目。
    attachData($data,$name,array $options=[])
    从原始字符串中附加文件，和attach()的选择相同。
    priority($priority)
    设置电子邮件的优先级，1是最高级，5是最低级。
    如果想要对底层的Swift信息进行手动修改，需要使用withSwiftMessage()方法，如示例15-7所示。
    示例15-7修改底层SwiftMessage对象
    public function build()
    {
        return $this->subject("Howdy!")->withSwiftMessage(function($swift){
            $swift->setReplyTo("noreply@email.com");
        })->view("emails.howdy");
    }
#### 附加和内联图片
    示例15-8显示了向电子邮件中添加附加邮件或原始数据的两种方法。
###### 示例15-8 向mailables中附加文件或数据
    // 使用本地文件名添加文件
    public function build()
    {
        return $this->subject("Your whitepaper download")->attach(storage_path("pdfs/whitepaper.pdf"),[
            "mime"=>"application/pdf", // 可选
            "as"=>"whitepaper-barase,pdf" // 可选
            ])->view("emails.whitepaper");
    }
    // 传递元数据来添加文件
    public function build()
    {
        return $this->subject("Your whitepaper download")
            ->attachData(
                file_get_contents(storage_path("pdfs/whitepaper.pdf")),
                "whitepaper-barasa.pdf",
                [
                    "mine"=>"application/pdf" // 可选
                ]
            )
            ->view("emails.whitepaper");
    }
    示例15-9显示了如何在邮件中直接嵌入图像
###### 示例15-9内联图像
    <!-- emails/image.blade.php --!>
    Here is an image:
    <img src=>>{{ $message->embed(storage_path("embed.jpg")) }}>
    Or,the same image embedding the data;
    <img src=>>{{ $message->embedData(
        file_get_contents(storage_path("embed.jpg")),"embed.jpg"
    ) }}>
#### 队列
    发送电子邮件是一项耗时的任务，可能会导致应用程序运行减慢，因此，通常将发送电子邮件的任务转移到后台队列中。事实上，Laravel有一套内置的工具可以使邮件排队更加容易，不必为每封邮件编写队列任务。
##### 配置队列
    此处提到的一切都以队列正确配置为前提。通过第16章可以了解到更多关于队列如何工作以及如何让队列在应用程序中运行的内容。
##### queue()
    让邮件对象排队而不是立即发送，只要简单地将要发送的对象传递到Mail::queue()中即可，而不是Mail::send()中。
    Mail::queue(new Assignment($trainer,$trainee));
##### later()
    Mail::later()和Mail::queue()的工作原理相同，但是它允许添加一个延时————既可以在几分钟内添加，也可以通过传递一个DateTime或Carbon示例来设置指定的时间————电子邮件会在这个时间从队列中拉取并发送。
    $when=Carbon::now()->addMinutes(30);
    Mail::later($when,new Assignment($trainer,$trainee));
##### 指定队列或链接
    对于queue()和later()来说，如果想要指定将邮件添加到哪一个队列或队列链接中，就需要对即将传递的对象使用onConnection()和onQueue()方法。
    $message=(new Assignment($trainer,$trainee))
    ->onConnection("sqs")
    ->onQueue("emails");
    Mail::to($user)->queue($message);
#### 本地开发
    在实际生产环境中发送邮件没有任何问题。但是，如何对它们进行全测试呢？有三个主要工具可供参考:Laravel的日志驱动程序、名为Mailtrap的软件服务(SaaS)应用程序以及"universal to"配置选项。
##### 日志驱动程序
    Laravel提供了一个日志驱动程序，记录了我们试图发送到本地Laravel.log文件(默认情况下在storage/log中)的每一封电子邮件。
    如果想要使用这个日志，需要编辑.env并且设置MAIL_DRIVER来进行登录。现在打开或拖放storage/logs/laravel.log,从应用程序中发送一封电子邮件，可以看到如下所示内容。
    Message-Id:<04ee2e97289c68f0c919lf4b04fc0del@localhost>
    Date:Tue,17 May 2016 02:52:46 +0000
    Subject: Welcome to our app!
    From:Matt Stauffer<matt@mattstauffer.co>
    To: freja@jensen.no
    MIME-Version:1.0
    Content-Type:text/html;charset=utf-8
    Content-Transfer-Encoding:quoted-printable
    Welcom to our app!
##### Mailtrap.io
    Mailtrap(https://mailtrap.io)是一个在开发环境中捕捉和检查电子邮件的服务。通过SMTP将邮件发送到Mailtrap服务器，而不是直接发送给预期的收件人，无论这些电子邮件的地址是否在收件人区域，Mailtrap都会将它们全部捕捉到并提供一个基于网络的电子邮件客户端对其进行检查。
    设置Mailtrap需要先注册一个免费的Mailtrap账户，并且访问演示的基本信息版，从SMTP列中复制用户名和密码。
    编辑应用程序的.env文件并且将mail部分设置为以下值。
    MAIL_DRIVER=smtp
    MAIL_HOST=mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_username_from_mailtrap_here
    MAIL_PASSWORD=your_password_from_mailtrap_here
    MAIL_ENCRYPTION=null
    现在，由应用程序发送的所有电子邮件都会在Mailtrap收件箱中显示出来。
##### Universal to ================================================= 445
    如果想要在首选的客户端中检查电子邮件，可以使用“universal to”配置设置来覆盖每条信息中的to字段。要进行此设置，需要在config/mail.php文件中添加一个“to”关键字，代码如下。
    “to”=>[
        "address"=>"matt@mattstauffer.co",
        "name"=>"Matt Testing My Application"
    ],
    需要注意的是，要实际设置一个像Mailgun或Sendmail一样的真正的电子邮件驱动程序，之后才能使用。
#### 通知
    网络应用程序发送的大多数邮件具有以下目的：确实通知用户一个特定的动作已经发生或需要发生。由于用户的沟通倾向越来越多元化，因此我们通过Slack、SMS和其他途径收集到了越来越多的不同的包来进行通信。
    Laravel5.3版本引入了一个新的概念：通知。就好像邮件一样，通知是一个PHP类，代表我们想要发送给用户的单一通信内容。现在，来想象一下，假设我们正通知体能训练应用软件的用户，告诉他们软件中有一个新的锻炼项目。
    每个类都代表了给使用一个或多个通知频道的用户发送通知时需要的所有消息。单个通知具备发送电子邮件、通过Nexmo发送SMS、发送WebSocksts ping、向数据库添加记录、向Slack频道发送消息等诸多功能。
    创建通知的命令如下。
    php artisan make:notification WorkoutAvailable
    示例15-10显示了这个命令的返回情况。
###### 示例15-10 一个自动生成的通知类
```
    <?php
    namespace App\Notifications;
    
    use Illuminate\Bus\Queueable;
    use Illuminate\Notifications\Notification;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Notifications\Messages\MailMessage;

    class WorkoutAvailable extends Notification
    {
        use Queueable;
        /**
         * 创建一个新的通知实例
         *
         * @return void
         */
         public function __construct()
         {
            //  
         }
        // 获取通知的交付通道
        public function via($notifiable)
        {
            return ["mail"];
        }
        // 获取通知的邮件表示
        public function toMail($notifiable)
        {
            return (new MailMessage)
                ->line("The introduction to the notification.")
                ->action("Notification Action","https://laravel.com")
                ->line("Thank you for using our application!");
        }
        // 获取通知的数组表示形式
        public function toArray($notifiable)
        {
            return [];
        }
    }
```
    我们可以从以上的代码中学到一些知识。首先，要把相关数据传递到构造函数。其次，对于给定的用户，可以通过via()方法来定义应该使用哪一个通知频道($notifiable代表我们想要通知的系统中的实体，在大多数应用中，它表示一个用户，但并不总是)。最后，每个通知频道都有各自的方法，允许我们专门定义如何在该频道中发送通知。
##### 什么时候$notification不表示一个用户
    虽然最常见的通知目标是用户，但我们仍有可能通知其他实体。因为应用程序中有多个用户类型————因此，我们还可能想要通知“培训者”和“学员”，甚至可能想要通知某个“群组”，某个“公司”，或者某个“服务器”。
    若要实现上述目标，需要修改类的WorkoutAvailable示例。请参考示例15-11。
###### 示例15-11 WorkoutAvailable通知类
```
    class WorkoutAvailable extends Notification
    {
        use Queueable;
        public $workout;
        public function __construct($workout)
        {
            $this->workout=$workout;
        }
        public function via($notifiable)
        {
            // 这个方法目前在用户端不存在，我们正在努力实现这个功能
            return $notifiable->preferredNotificationChannels();
        }
        public function toMail($notifiable)
        {
            return (new MailMessage)
                ->line("You have a new workout available!")
                ->action("Check it out new",route("workout",[$this->workout]))
                ->line("Thank you for training with us!");
        }
        public function toArray($notifiable)
        {
            return [];
        }
    }
```
#### 为通知对象定义via()方法
    如示例15-11所示，我们要决定对于不同的通知以及通知对象，到底应该采用哪个通知频道。可以把所有的通知都当做邮件来发送，也可以把它们当做SMS来发送（见示例15-12）。
###### 示例15-12最简单可行的via()方法
    public function via($notifiable)
    {
        return "nexmo";
    }
    也可以让每一个用户选择一种偏好方法，并将其保存在User内部。
###### 示例15-13 每个用户自定义via()方法
    public function via($notifiable)
    {
        return $notifiable->preferred_notification_channel;
    }
    或者，参照示例15-11，为每一个通知对象创建一个允许复杂通知逻辑的方法。例如，可以在工作时间内利用某些频道通知用户，而在非工作时间采用别的频道。需要注意的是，via()是一个PHP类,因此我们可以通过它实现任何复杂逻辑。
#### 发送通知
    有两种发送通知的方式：使用Notification facade,或在一个Eloquent类（类似于User类）中添加Notifiable特性。
##### 使用Notifiable trait发送通知
    任何导入Laravel\Notifications\Notifiable trait(默认情况下是App\User类)的模型都具有一个可传递通知的notify()方法，如示例15-14所示。
###### 示例 15-14 使用Notifiable trait 发送通知
```
    use App\Notifications\WorkoutAvailable;
    ...
    $user->notify(new WorkoutAvailable($workout));
```
##### 使用Notification facade 发送通知
    Notification facade 发送通知是两种方法中较为“笨拙”的一种，因为我们要同时传递通知对象和通知，好处在于可以同时传递多个通知对象，如示例15-15所示。
###### 示例15-15 使用Notification facade 发送通知
```
    use App\Notifications\WorkoutAvailable;
    ...
    Notification::send($users,new WorkoutAvailable($workout));
``` 
#### 排队通知
    大多数通知驱动程序需要发送HTTP请求从而发送通知，这有可能会降低用户体验，因此我们将通知进行排队，从而提升用户体验。所有通知都会默认被导入Queuable triat，因此我们需要做的仅仅是在通知中添加一个implements ShouldQueue,Laravel便会立即把该通知移到队列中去。
    和其他所有的排队功能一样，需要保证队列都正确地设置配置，队列工作者也在运行中。
    如果想要延迟通知的传送，可以运行delay()方法。
```
    $delayUntil = Carbon::now()->addMinutes(15);
    $user->notify((new WorkoutAvailable($workout))->delay($delayUntil));
```
#### 开箱即用的通知类型
    开箱即用，即Laravel为电子邮件、数据库、广播、Nexmo SMS和Slack提供的通知驱动软件。下面我们简单介绍一下开箱即用，建议大家参考官方文档(https:/laravel.com/docs/notifications),以便全面深入理解。
    创建通知驱动软件非常容易，可以在Laravel Notification Channels网站(http://laravel-notification-channels.com)找到详细方法。
##### 电子邮件通知
    来看一下示例15-11中的电子邮件是如何创建的。
```
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line("You have a new workout available!")
            ->action("Check it out now",route("workout",[$this->workout]))
            ->line("Thank you for training with us!");
    }
```
    结果如图15-1所示，电子邮件通知系统将应用名放置于电子邮件的头部，也可以在config/app.php的name关键字中自定义应用程序的名称。
    这封电子邮件会自动发送给通知对象的email属性，我们也可以通过向一个名为routeNotificationForMail()的类添加方法来自定义上述操作，这个类会返回我们想要发送电子邮件通知的目标地址。
    电子邮件的主题是通过解析通知类名并转换成文字来设定的。因此，WorkoutAvailable通知将会具有Workout Available的默认主题。也可以通过将subject()方法连接到toMail()方法中的MailMessage上来自定义主题。
    如果想要修改模板，需要发布并编辑核心内容，方法如下。
```
    php artisan vender::publish --tag=laravel-notifications
```
    也可以将默认模板的样式更改为“错误”消息，该消息使用不同的编程语言，并且将主按钮的颜色变为红色。只需在toMail()方法中的MailMessage调用链中添加一个error()方法调用即可实现。
##### 数据库通知
    可以通过使用数据库通知频道向数据库表发送通知。首先没使用php artisan notifications : table语句创建一个新表。然后，在通知中创建一个toDatabase()方法,改方法会针对通知返回一个数据数组，该数据数组以JSON格式编码存储到数据库表的数据列中。
    Notifiable trait会向导入的所有模型中都添加一个通知关系，这样就可以轻松地访问通知表中的记录了，如果使用数据库通知，则可以像下面这样进行操作。
```
    User::first()->notifications->each(function($notification){
        // 完成某些功能
    });
```
    数据库通知频道也有一个表示通知是否“已读”的标记。可以试着只标记“未读”通知，代码如下。
```
    User::first()->unreadNotifiacations->each(function($notification){
        // 完成某些功能
    });
```
    也可以将某个或所有的通知都标记为已读。
```
    // 某个
    User::first()->notifications->each(function ($notification){
        if($condition){
            $notification->markAsRead();
        }
    });
    // 所有
    User::first()->unreadNotifications->markAsRead();
```
##### 广播通知
    广播通知频道使用Laravel的事件广播功能(Echo)来发送通知。
    在通知上创建一个toBroadcast()方法并返回数据数组，如果应用程序正确配置为事件广播，则数据将在名为{notifiable}{id}的私有频道上广播。{id}就是通知对象的ID，{notifiable}是通知对象的完全限定类名称，其中“斜杠”可以用“句点”来代替————例如，ID为1的App\User的私有频道可以表示为App.User.1。
##### SMS通知
    SMS通知是通过Nexmo发送的，因此，如果想要发送SMS通知，则需要注册一个nexmo账户，然后遵循文件(https://laravel.com/docs/notifications)中的说明进行操作。与其他频道一样，我们需要设置一个toNexmo()方法然后自定义消息内容。
##### Skack通知
    slack通知频道支持自定义通知形式，甚至可以向通知中添加附件。和其他频道一样，我们需要设置一个toSlack()方法然后自定义消息内容。
#### 测试
    下面介绍如何测试邮件和通知。
#### 邮件
    Laravel中有俩种测试邮件的选项。如果使用传统邮件语法，建议使用由Adam Wathan为Tighten编写的MailThief(https://github.com/tightenco/mailthief)工具。一旦使用Composer将MailThief引入应用程序中，就可以在测试中使用MailThief::hijack(),使MailThief捕捉到所有对Mail facade或邮件发送人类的调用。
    然后，MailThief就能对发件人、收件人、抄送、密件抄送，甚至邮件的内容及附件做出断言。
    想要了解更多内容请参考Github，或在应用程序中进行验证。
```
    composer require tightenco/mailthief --dev
```
    如果使用mailable，则有一个简单的语法可用于为发送的邮件编写所有断言(见实例15-16)。
###### 示例15-16 针对mailable编写断言
```
    public function test_signup_triggers_welcome_email()
    {
        ...
        Mail::assertSent(WelcomeEmail::class,function($e){
            return $e->subject == "Welcome";
        });
        // 也可以使用assertSentTo()方法直接测试收件人
    }
```
#### 通知
    laravel提供了一组内置的断言来测试通知，见示例15-17。
###### 示例15-17 发送断言通知
```
    public function test_new_signups_triggers_admin_notification()
    {
        ...
        Notification::assertSentTo($user,NewUsersSignedup::class,function($n,$channels){
            return $n->user->email == "user-who-signed-up@gmail.com" && $channels == ["mail"];
        });
        // 也可以使用assertNotSentTo()方法
    }
```
#### 本章小结
    Laravel的邮件和通知功能为多种不同的通知系统提供了简单、一致的界面。Laravel的邮件系统使用“mailable”表示电子邮件的PHP类，为不同的邮件驱动程序提供了一致的语法。通知系统可以轻易实现构建单个通知的功能，该通知可以在多种不同媒体中传送————无论通过电子邮件、SMS，还是实际生活中的邮寄。



### 第16章 队列，任务，事件，广播及调度程序
    到目前为止，我们已经介绍了驱动网络应用程序中最常见的一些结构:数据库、邮件、文件系统等。这些在大多数应用程序和框架中都很常见。
    laravel还为一些不太常见的架构模式和应用程序结构提供了可用工具。在这一章中，我们将介绍Laravel中用于实现队列、队列任务、事件和WebSocket事件发布的工具。我们还将讨论Laravel的调度程序，调度程序的出现是cron逐渐淡出人们的视线。
#### 队列
    要理解队列是什么，可以参考在银行中排队的场景。即使有很多行(队列)，但每一个队列中只有一个人在享受服务，每个人最终都将到达前端并享受服务。一些银行有严格的“先入先出”的原则，但在其他的一些银行中，并没有严格保障，保证不会有人在你前方某处插队。大体上来说，有的人可以插入队列并提前离开，或者成功地办理业务，然后离开。有的人甚至可能已经到达队列的前端但没有得到想要的服务，然后回到队列中再次等待办理。
    编程中的队列与上述场景是十分相似的。应用程序执行特定行为的大段代码作为“任务”被添加到队列中，然后通常作为“队列工作者”的其他独立的应用程序结构负责从队列中拉取一个任务并执行适当的行为。队列工作者可以删除任务，将它们延迟返回队列，或将其标记为处理成功的任务。
    Laravel可以通过使用Redis、beanstalkd、Amazon的SQS(简单队列服务)或数据库表单使得为队列提供服务变得容易。还可以选择sync驱动使任务在应用程序中正确运行但无需排队，否则任务的null驱动程序将被丢弃。以上两种情况用于本地开发或测试环境中。
#### 为什么使用队列
    使用队列可以很轻松地从同步调用中删除昂贵或缓慢的进程。最常见的例子是发送邮件————这样做可能比较慢，而且我们不希望用户等待邮件发送来相应他们的操作。相反，触发“发送邮件”排队任务，可以让使用者继续做他们自己的事情。有时我们不只是希望节省用户的时间，也可能会有一个cron任务或webhook进程需要处理，我们不希望它从头到尾只运行一次(可能超时)，因此可以选择对这些翻个部分进行排队，并让队列工作者逐个对其进行处理。
    此外，如果有一些超出服务器处理范围的重大进程，则可以让多个队列工作者加快转发速度，比正常应用程序服务器独自完成队列工作更快。