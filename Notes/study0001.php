<?php

// use Illuminate\Support\Facades\Route;

// //routes/web.php
// Route::get('/', function () {
//     return 'Hello,World!';
// });

// // 简单的网站
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('about', function () {
//     return view('about');
// });

// Route::get('products', function () {
//     return view('products');
// });

// Route::get('services', function () {
//     return view('services');
// });

// $route->get('/', function () {
//     return 'Hello,World!';
// });

// // 路由动词（Verb）
// Route::get('/', function () {
//     return 'Hello,World!';
// });

// Route::post('/', function () {
// });

// Route::put('/', function () {
// });

// Route::delete('/', function () {
// });

// Route::any('/', function () {
// });

// Route::match(['get', 'post'], '/', function () {
// });

// // 路由处理
// Route::get('/', 'WelcomController@index');

// // 路由参数
// Route::get('user/{id}/friends', function ($id) {
// });

// // 路由参数与闭包/控制器方法之间的命名关系
// Route::get('users/{userId}/comments/{commentId}', function ($thisIsActuallyTheRouteId, $thisisReallyTheCommentId) {
// });

// // 可选路由参数
// Route::get('user/{id?}', function ($id = 'fallbackId') {
// });

// // 通过正则表达式来定义路由
// Route::get('users/{id}', function ($id) {
// })->where('id', '[0-9]+');
// Route::get('users/{username}', function ($username) {
// })->where('username', '[a-zA-Z]+');
// Route::get('post/{id}/{slug}', function ($id, $slug) {
// })->where(['id' => '[0-9]+', 'slug' => '[a-zA-Z]+']);

// URL助手
/**
 * <a href="<?php echo url('/'); ?>">
 */
// 输出<a href="http://myapp.com/">

// 定义路由名称
// Route::get('members/{id}', 'MembersController@show')->name('mmebers.show');
/**
 * <a href="<?php echo route('members.show',['id'=>14]); ?>">
 */

// // 自定义路由
// Route::get('members/{id}', [
//     'as' => 'members.show',
//     'uses' => 'MembersController@show'
// ]);

// 路由命名规则
/**
 * photos.index
 * photos.create
 * photos.store
 * photos.show
 * photos.edit
 * photos.update
 * photos.destroy
 */

// 将路由参数传递给route()助手
// route('users.comments.show', [1, 2]);
/**
 * http://myapp.com/users/1/comments/2
 */
// route('users.comments.show', ['userId' => 1, 'commentId' => 2]);
/**
 * http://myapp.com/users/1/comments/2
 */
// route('users.comments.show', ['commentId' => 2, 'userId' => 1]);
/**
 * http://myapp.com/users/1/comments/2
 */
// route('users.comments.show', ['userId' => 1, 'commentId' => 2, 'opt' => 'a']);
/**
 * http://myapp.com/users/1/comments/2?opt=a
 */

// // 路由组
// Route::group([], function () {
//     Route::get('hello', function () {
//         return 'Hello';
//     });
//     Route::get('world', function () {
//         return 'World';
//     });
// });

// // 将一组路由限制为只允许登录用户访问
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('dashboard', function () {
//         return view('dashboard');
//     });
//     Route::get('account', function () {
//         return view('account');
//     });
// });

// 中间件在控制器中的应用
// class DashboardController extends Controller
// {
//     public function __construct()
//     {
//         $this->middleware('auth');
//         $this->middleware('admin-auth')->only('admin');
//         $this->middleware('team-member')->except('admin');
//     }
// }

// // 为一组路由设置路径前缀
// Route::group(['prefix' => 'api'], function () {
//     Route::get('/', function () {
//     });
//     Route::get('users', function () {
//     });
// });

// // 子域名路由
// Route::group(['domain' => 'api.myapp.com'], function () {
//     Route::get('/', function () {
//     });
// });

// // 参数化的子域名路由
// Route::group(['domain' => '{account}.myapp.com'], function () {
//     Route::get('/', function ($account) {
//     });
//     Route::get('users/{id}', function ($account, $id) {
//     });
// });

// // 命名空间前缀
// //App\Http\Controllers\ControllerA
// Route::get('/', 'ControllerA@index');
// Route::group(['namespace' => 'API'], function () {
//     //App\Http\Controllers\API\ControllerB
//     Route::get('api/', 'ControllerB@index');
// });

// // 名称前缀
// Route::group(['as' => 'users.', 'prefix' => 'users'], function () {
//     Route::group(['as' => 'comments.', 'prefix' => 'comments'], function () {
//         Route::get('{id}', function () {
//         })->name('show');
//     });
// });

// // view()的用法演示
// Route::get('/', function () {
//     return view('home');
// });

// 传递变量给视图
// Route::get('tasks', function () {
//     return view('tasks.index')->with('tasks', Task::all());
// });

/*
<!-- 默认生成的控制器 -->
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller
{
}
?>
*/

/*
<!-- 简单的控制器的例子 -->
<?php

use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function home()
    {
        return 'Hello,World!';
    }
}
?>
 */


// Route::get('/', 'TasksController@home');

/*
通用控制器方法
public function index(){
    return view('tasks.index')->with('tasks',Task::all());
}
*/

// Route::get('tasks/create', 'TasksController@create');
// Route::post('tasks', 'TasksController@store');

// class TasksController
// {
//     public function store()
//     {
//         $task = new Task();
//         $task->title = Input::get('title');
//         $task->description = Input::get('description');
//         $task->save();
//         return redirect('tasks');
//     }
// }

// namespace App\Http\Controllers;

// use Illuminate\Support\facades\Input;

// class TasksController
// {
//     public function store()
//     {
//         $task = new Task;
//         $task->title = Input::get('title');
//         $task->description = Input::get('description');
//         $task->save();
//         return redirect('tasks');
//     }

//     // 通过指定（type-html）方式实现控制器方法注入
//     public function store2(Illuminate\Http\Request $request)
//     {
//         $task = new Task;
//         $task->title = $request->input('title');
//         $task->description = $request->input('description');
//         $task->save();
//         return redirect('tasks');
//     }
// }

// Route::get('conference/{id}', function () {
//     $conference = Conference::findOrFail($id);
// });

// 隐式路由绑定
// Route::get('conferences/{conference}', function (Conference $conference) {
//     return view('conferences.show')->with('conference', $conference);
// });

// 获取每个路由的资源
// Route::get('conferences/{id}', function ($id) {
//     $conference = Conference::findOrFail($id);
// });

// 使用隐式路由模型绑定
// Route::get('conferences/{conference}', function (Conference $conference) {
//     return view('conferences.show')->with('conference', $conference);
// });

// public function getRouteKeyName(){
//     return 'slug';
// }

// App\Providers\RouteServiceProvider
// public function boot(Router $router){
// parent::boot($router);
// $router->model('event',Conference::class);
// }

// 使用显式路由绑定
// Route::get('events/{event}', function (Conference $event) {
//     return view('events.show')->with('event', $event);
// });

// 表单方式欺骗
// <form action="/tasks/5" method="POST">
//     <input type="hidden" name="_method" value="DELETE">
// </form>

// CSRF令牌
/*
<form action="/task/5" method="POST">
    <?php echo csrf_field(); ?>
    <!-- 或者： -->
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>
 */
/*
<meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
*/

// 全局绑定CSRF的header
// $.ajaxSetup({
//    headers:{
//        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
//    } 
// });

// Vue.http.interceptors.push((request,next)=>{
//     request.headers['X-CSRF-TOKEN'] = 
//     document.querySelector('#token').getAttribute('content');
//     next();
// });

// // 使用重定向全局助手生成重定向响应
// Route::get('redirect-with-helper', function () {
//     return redirect()->to('login');
// });

// Route::get('redirect-with-helper-shortcut', function () {
//     return redirect('login');
// });

// Route::get('redirect-with-facade', function () {
//     return Redirect::to('login');
// });

// Route::get('redirect', function () {
//     return redirect()->to('home');
//     return redirect('home');
// });

// Route::get('redirect', function () {
//     return redirect()->route('conferences.index');
// });

// Route::get('redirect', function () {
//     return redirect()->route('conferences.show', ['conference' => 99]);
// });

// // 附带数据的重定向
// Route::get('redirect-with-key-value', function () {
//     return redirect('dashboard')->with('error', true);
// });


// Route::get('redirect-with-array', function () {
//     return redirect('dashboard')->with(['error' => true, 'message' => 'Whoops!']);
// });

// Route::get('form', function () {
//     return view('form');
// });

// Route::post('form', function () {
//     return redirect('form')->withInput()->with(['error' => true, 'message' => 'Whoops!']);
// });

/*
<input name="username" value="<? 
    old('username','Default username instructions here') 
?>">
*/

// 带有错误信息的重定向
// Route::post('form', function () {
//     $validator = Validator::make($request->all(), $this->validationRules);
//     if ($validator->fails()) {
//         return redirect('form')->withErrors($validator)->withInput();
//     }
// });

// // 403 Forbidden中止
// Route::post('something-you-can\'t-do',function(Illuminate\Http\Request){
//     abort(403, 'You cannot do that!');
//     abort_unless($request->has('magicToken',403));
//     abort_if($request->user()->isBanned,403);
// });

// response()->make()
// return respose()->make('Hello,World!');

// response()->json()和->jsonp()
// return response()->json(User::all());

// response()->download()和->file()
return response()->download('file501751.pdf', 'myFile.pdf');

// // 编写一个简单的POST路由测试
// public function test_post_creates_new_assignment(){
//     $this->post('/assignments',[
//         'title'=>'My great assignment'
//     ]);
//     $this->seeInDatabase('assignments',[
//         'title'=>'My great assignment'
//     ]);
// }

// 编写一个简单的GET路由测试
// public function test_list_page_shows_all_assignments(){
//     $assignment = Assignment::creat([
//         'title'=>'My great assignment'
//     ]);
//     $this->visit('assignments')->dee(['My great assignment']);
// }

// Route::post('form',function(Illuminate\Http\Request){
//     $request->etc();
// });

// <from method="post" actiopn="/post-route?utm=12345">
//     {{ csrf field() }}
//     <input type="text" name="fristName">
//     <input type="submit">
// </from>

// Route::post('/post-route',function(Request $request){
//     var_dump($request->all());
// });

// $request->except();
// Route::post('/post-route',function(Request $request){
//     var_dump($request->except('_token'));
// });

// $request->only();
// Route::post('/post-route',function(Request $request){
//     var_dump($request->only(['firstName','utm']));
// });

// // $request->has();
// if ($request->has('utm')) {
// }

// $request->input();
// Route::post('/post-route',function(Request $request){
//     $userName = $request->input('name','(anonymous)');    
// });

// 通过/post-route传递路由
// Route::post('/post-route',function(Request $request){
//     $employeeZeroFirstName = $request->input('employees.0.firstName');
//     $allLastNames=$request->input('employees.*.lastName');
//     $employeeOne=$request->input('employees.1');
// });

// post-route
// Route::post('post-route',function(Request $request){
//     $firstName = $request->input('firstName');
//     $spouseFirstname = $request->input('spouse.firstName');
// });

// // 从路由参数获取URL详细信息
// Route::get('users/{id}', function ($id) {
// });

// 上传文件的表单
// <from method="post" enctype="multipart/form-data">
//     {{ csrf_field() }}
//     <input type="text" name="name">
//     <input type="file" name="profile_picture">
//     <input type="submit">
// </form>

// Route::post('form',function(Request $request){
//     var_dump($request->all());
// });

// Route::post('form',function(Request $request){
//     if($request->hasFile('profile_picture')){
//         var_dump($request->file('profile_picture'));
//     }
// });

// if ($request->hasFile('profile_picture') && $request->file('profile_picture')->isValue()) {
// }

// guessExtension()
// getMimeType()
// store($path,$storageDisk=default disk)
// storeAs($path,$newName,$storageDisk=default disk)
// storePublicly($path,$storageDisk=default disk)
// storePubliclyAs($path,$newName,$storageDisk=default disk)
// move($directory,$newName=null)
// getClientOriginalName()
// getClientOriginalExtension()
// getClientMimeType()
// guessClientExtension()
// getClientSize()
// getError()
// isValue()

// 通用文件上传工作流
// if($request->hasFile('profile_picture')){
//     $path=$request->profile_picture->store('profile','s3');
//     auth()->user()->profile_picture=$path;
//     auth()->user()->save();
// }

// // 控制器验证的基本用法
// Route::get('recipes/create', 'RecipesController@create');
// Route::post('recipes', 'RecipesController@store');

// namespace App\Http\Controllers;
// use Illuminate\Http\Request;
// class RecipesController extends Controller{
//     public function create(){
//         return view('recipes.create');
//     }
//     public function strore(Reuqest $request){
//         $this->validate($request,[
//             'title'=>'required|unique:recipes|max:125',
//             'body'=>'required'
//         ]);
//     }
// }

// $this->validate($request, [
//     'user.name' => 'required',
//     'user.email' => 'required|email',
// ]);

// // 手动验证
// Route::get('recipes/create', function () {
//     return view('recipes.create');
// });

// Route::post('recipes',function(Illuminate\Http\Request $request){
//     $validator = Validator::make($request->all(),[
//         'title'=>'required|unique:recipes|max:125',
//         'body'=>'required'
//     ]);
//     if($validator->fails()){
//         return redirect('recipes/create')
//         ->withErrors($validator)
//         ->withInput();
//     }
// });

// php artisan make:request CreateCommentRequest

// 表单请求示例
// namespace App\Http\Requests;
// use App\BlogPost;
// use App\Http\Requests\Request;
// class CreateCommentRequest extends Request{
//     public function rules(){
//         return ['body'=>'required|max:1000'];
//     }

//     public function authorize(){
//         $blogPostId=$this->route('blogPost');
//         return auth()->check() && BlogPost::where('id',$blogPostId)->where('user_id',auth()->user()->id)->exists();
//     }
// }

// Route::post('blogPost/{blogPost}', function () {
//     //Do stuff
// });
// $this->route('parameter name');

// Route::post('comments',function(App\Http\Requests\CreateCommentRequest $request){
//     //Store comment
// });

// 将整个表单传递给Eloquent模型
// Route::post('posts', function (Request $request) {
//     $newPost = Post::create($request->all());
// });

// 从恶意质量分配中保护Eloquent模型
// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     // 在author_id字段上禁用质量分配
//     protected $guarded = ['author_id'];
// }

// Route::post('posts', function (Request $request) {
//     $newPost = Post::create($request->only(['title', 'body']));
// });

// 测试无效输入并被拒绝
// public function test_input_missing_a_title_is_rejected(){
//     $this->post('posts',['body'=>'This is the body of my post']);
//     $this->assertRedirectedTo('posts/create');
//     $this->assertSessionHasErrors();
//     $this->assertHasOldInput();
// }

// 测试有效输入并对输入进行处理
// public function test_valid_input_should_create_a_post_in_the_database(){
//     $this->post('posts',['title'=>'Post Title','body'=>'This is the body']);
//     $this->seeInDatabase(['title'=>'Post Title']);
// }

// php artisan make:controller PostsController

// php artisan list
// php artisan help commandName
// clear-compiled
// down
// app()->environment()
// migrate
// optimize bootstrap/cache/compile.php
// --no-interaction
// php artisan optimize
// php artisan app:name MyApplication
// php artisan key:generate
// php artisan help make:migration
// php artisan make:migration create_posts_table--create=posts
// migrate:install
// migrate:reset
// migrate:refresh
// migrate:rollback
// migrate:status
// queue:listen
// queue:table
// queue:flush
// route:list
// route:cache
// route:clear
// * * * * * * php /home/myapp.com/artisan schedule:run >> /dev/null 2>&1
// vendor:publish
// php artisan make:command YourCommandName
// php artisan make:command
// console:make
// make:console
// make:command
// appname:action
// php artisan make:console WelcomNewUsers --command=email:newusers

// namespace App\Console\Commands;
// use Illuminate\Console\Command;
// class WelcomNewUsers extends Command
// {
//     protected $signature = 'email:newusers';
//     protected $description = 'Command description';
//     public function __construct()
//     {
//         parent::__construct();
//     }
//     public function handle()
//     {
//     }
// }

// // 在控制台内核中注册新命令
// class Kernel extends ConsoleKernel
// {
//     protected $commands = [
//         \App\Console\Commands\WelcomeNewUsers::class,
//     ];
// }

// Artisan::command(
//     'password:reset{userId}{--sendEmail}',
//     function ($userId, $sendEmail) {
//     }
// );

// // Artisan命令中的handle方法实例
// class WelcomNewUSers extends Command
// {
//     public function handle()
//     {
//         User::signedUpThisWeek()->each(function ($user) {
//             Mail::send(
//                 'email.welcome',
//                 ['name' => $user->name],
//                 function ($m) use ($user) {
//                     $m->to($user->email)->subject('Welcome');
//                 }
//             );
//         });
//     }
// }

// // 重构的代码
// class WelcomeNewUsers extends Command
// {
//     public function __construct(UserMailer $userMailer)
//     {
//         parent::__construct();
//         $this->userMailer = $userMailer;
//     }

//     public function handle()
//     {
//         $this->userMailer->welcomeNewUsers();
//     }
// }

// protected $signature = 'password:reset {userId} {--sendEmail}';

// protected $signature='password:reset {userId:The ID of the user} {--sendEmail : Whether to send user an email}';

// php artisan password:reset 5
// [
//     "command":"password:reset",
//     'userId':"5",
// ]

// public function handle(){
//     $arguments = $this->argument();
//     // 仅'userId'参数
//     $userid = $this->argument('userId');
//     $options = $this->option();
//     $sendEmail = $this->option('sendEmail');
// }

// $winner = $this->choice(
//     'Who is the best football team?'
//     ['gators'=>'Gators','wolverines'=>'Wolverines'],
//     'gators'
// );  

// $this->info('Your command has run successfully.');

// $headers = ['name', 'email'];
// $data = [
//     ['Dhriti', 'dhriti@amrit.com'],
//     ['Moses', 'moses@gutierez.com']
// ];

// // Artisan表输出
// $totalUnits = 10;
// $this->output->progerssStart($totallUnits);
// for ($i = 0; $i < $totalUnits; $i++) {
//     sleep(1);
//     $this->output->progressFinish();
// }

// // 在其他代码中调用Artisan
// Route::get('test-artisan', function () {
//     $exitCode = Artisan::call('password:rest', [
//         'userId' => 15, '--sendEmail' => true
//     ]);
// });

// // 在其他命令中调用Artisan命令
// public function handle(){
//     $this->callSilent('password:reset',[
//      'userId'=>15
//     ]);
// }

// 在测试中调用Artisan命令
// public function test_empty_log_command_empties_logs_table(){
//     DB::table('logs')->insert(['message'=>'Did something']);
//     Artisan::call('logs:empty');
//     $this->assertCount(0,DB::table('logs')->get());
// }

// // 不使用Artisan的facade,而是注入一个Kernel
// use Illuminate\Contracts\Console\Kernel;

// class NightlyCleanup extends Job
// {
//     public function handle(kernel $kernel)
//     {
//         $kernel->call('logs:empty');
//     }
// }

// 数据库默认连接列表
// 'connections'=>[
//     'sqlite'=>[
//         'driver'=>'sqlite',
//         'database'=>database_path('database.sqlite'),
//         'prefix'=>'',
//     ],
//     'mysql'=>[
//         'driver'=>'mysql',
//         'host'=>env('DB_HOST','localhost'),
//         'database'=>env('DB_DATABASE','forge'),
//         'username'=>env('DB_USERNAME','forge'),
//         'password'=>env('DB_PASSWORD',''),
//         'charset'=>'utf8',
//         'collation'=>'utf8_unicode_ci',
//         'prefix'=>'',
//         'strict'=>false,
//         'engine'=>null,
//     ],
//     'pgsql'=>[
//         'driver'=>'pgsql',
//         'host'=>env('DB_HOST','localhost'),
//         'database'=>env('DB_DATABASE','forge'),
//         'username'=>env('DB_USERNAME','forge'),
//         'password'=>env('DB_PASSWORD',''),
//         'charset'=>'utf8',
//         'prefix'=>'',
//         'schema'=>'public',
//     ],
//     'sqlsrv'=>[
//         'driver'=>'sqlsrv',
//         'host'=>env('DB_HOST','localhost'),
//         'database'=>env('DB_DATABASE','forge'),
//         'username'=>env('DB_USERNAME','forge'),
//         'password'=>env('DB_PASSWORD',''),
//         'charset'=>'utf8',
//         'prefix'=>'',
//     ],
// ];

// laravel中的默认“创建用户表”迁移
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;

// class CreateUsersTable extends Migration
// {
//     public function up()
//     {
//         Schema::create('users', function (Blueprint $table) {
//             $table->increments('id');
//             $table->string('name');
//             $table->string('email')->unique();
//             $table->string('password', 60);
//             $table->rememberToken();
//             $table->timestamps();
//         });

//         Schema::create('tablename', function (Blueprint $table) {
//             $table->string('name');
//         });

//         Schema::table('users', function (Blueprint $table) {
//             $table->string('email')->nullable()->after('last_name');
//         });

//         Schema::table('users', function ($table) {
//             $table->string('name', 100)->change();
//         });

//         Schemal::table('contacts', function ($table) {
//             $table->string('deleted_at')->nullable()->change();
//         });

//         Schemal::table('contacts', function ($table) {
//             $table->renameColumn('promoted', 'is_promoted');
//         });

//         Schema::table('contacts', function ($table) {
//             $table->dropColumn('votes');
//         });
//     }

//     public function down()
//     {
//         Schema::drop('users');
//     }

//     public function up()
//     {
//         Schema::table('contacts', function (Blueprint $table) {
//             $table->dropColumn('is_promoted');
//         });

//         Schema::table('contacts', function (Blueprint $table) {
//             $table->dropColumn('alternate_email');
//         });

//         $table->primary('primary_id');
//         $table->primary(['first_name', 'last_name']);
//         $table->unique('email');
//         $table->unique('email', 'optional_custom_index_name');
//         $table->index('amount');
//         $table->index('amount', 'optional_custom_index_name');
//         $table->dropPrimary('contacts_id_primary');
//         $table->dropUnique('contacts_email_unique');
//         $table->dropIndex('optional_custom_index_name');
//         $table->dropIndex(['email', 'amount']);
//         $table->foreign('user_id')->references('id')->on('users');
//         $table->foreign('user_id')
//             ->references('id')
//             ->on('users')
//             ->onDelete('cascade');
//         $table->dropForeign('contacts_user_id_foreign');
//         $table->dropForeign(['user_id']);

//         <<<EOT
//         php artisan migrate
//         php artisan migrate --seed
//         migrate:install
//         migrate:reset
//         migrate:refresh
//         migrate:rollback
//         migrate:status
//         php artisan migrate --seed
//         php artisan migrate:refresh --seed
//         php artisan db:seed
//         php artisan db:seed --class=VotesTableSeeder
//         php artisan make:seeder ContactsTableSeeder
//         database/seeds/DatabaseSeeder.php
//         Public function run(){
//             $this->call(ContactsTableSeeder::class);
//         }

// EOT;
//     }
// }

// use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;

// class ContactsTableSeeder extends Seeder
// {
//     public function run()
//     {
//         DB::table('contacts')->insert([
//             'name' => 'Lupita Smith',
//             'email' => 'lupita@gmail.com',
//         ]);

//         $factory->define(User::class, function (Faker\Generator $faker) {
//             return [
//                 'name' => $faker->name,
//             ];
//         });
//         $factory->define('users', function (Faker\Generator $faker) {
//             return [
//                 'name' => $faker->name,
//             ];
//         });
//         $factory->define(Contact::class, function (Faker\Generator $faker) {
//             return [
//                 'name' => 'Lupita Smith',
//                 'email' => 'lupita@gmail.com',
//             ];
//         });
//         $contact = factory(Contact::class)->create();
//         factory(Contact::class, 20)->create();

//         $factory->define(Contact::class, function (Faker\Generator $faker) {
//             return [
//                 'name' => $faker->name,
//                 'email' => $faker->email,
//             ];
//         });

//         factory(Post::class)->create([
//             'title' => 'My greatest post ever'
//         ]);

//         factory(User::class, 20)->create()->each(function ($u) use ($post) {
//             $post->comments()->save(factory(Comment::class)->make([
//                 'user_id' => $u->id
//             ]));
//         });

//         $factory->define(Contact::class, function (Faker\Generator $faker) {
//             return [
//                 'name' => $faker->name,
//                 'email' => $faker->email,
//             ];
//         });

//         // 为同一个模型定义多个工厂类型
//         $factory->define(Contact::class, function (Faker\Generator $faker) {
//             return [
//                 'name' => $faker->name,
//                 'email' => $faker->email,
//             ];
//         });

//         $factory->define(Contact::clss, 'vip', function (Faker\Generator $faker) {
//             return [
//                 'name' => $faker->name,
//                 'email' => $faker->email,
//                 'vip' => true,
//             ];
//         });
//         // 继承工程类型
//         $factory->define(Contact::class, function (Faker\Generator $faker) {
//             return [
//                 'name' => $faker->name,
//                 'email' => $faker->email,
//             ];
//         });
//         $factory->defineAs(
//             contact::class,
//             'vip',
//             function (Faker\Generator $faker) use ($factory) {
//                 $contact = $factory->raw(Contact::class);
//                 return array_merge($contact, ['vip' = true]);
//             }
//         );
//         $vip = factory(Contact::class, 'vip')->create();
//         $vips = factory(Contact::class, 'vip', 3)->create();

//         $users = DB::select(['table' => 'users', 'where' => ['tyep' => 'donor']]);
//         $users = DB::table('users')->where('type', 'donor')->get();

//         DB::statement('drop table users');
//         DB::select('select * from contacts where validated=?', [true]);

//         $users = DB::table('users')->get();
//         DB::table('users')
//             ->join('contacts', function ($join) {
//                 $join->on('users.id', '=', 'contacts.user_id')
//                     ->where('contacts.type', 'donor');
//             })->get();
//         $userOfType = DB::select(
//             'select * from users where type = ?',
//             [$type]
//         );
//         $userType = DB::select(
//             'select * from users where type = :type',
//             ['type' => $userType]
//         );
//         DB::insert(
//             'insert into contacts (name,email) values (?,?)',
//             ['sally', 'sally@me.com']
//         );
//         $countUpdated = DB::spdate(
//             'update contacts set status = ? where id = ?',
//             ['donor', $id]
//         );
//         $countDeleted = DB::delete(
//             'delete from contacts where archived = ?',
//             [true]
//         );
//         $usersOfType = DB::table('users')
//             ->where('type', $type)
//             ->get();
//         $email = DB::table('contacts')
//             ->select('email', 'email2 as second_email')
//             ->get();
//         $emails = DB::table('contacts')
//             ->select('email')
//             ->addSelect('email2 as second_email')
//             ->get();
//         $newContacts = DB::table('contact')
//             ->where('created_at', '>', Carbon::now()->subDay())
//             ->get();
//         $vipContacts = DB::table('contacts')->where('vip', true)->get();
//         $newVips = DB::table('contacts')
//             ->where('vip', true)
//             ->where('create_at', '>', Carbon::now()->subDay());
//         $newVips = DB::table('contacts')->where([
//             ['vip', true],
//             ['created_at', '>', Carbon::now()->subDay()],
//         ]);
//         $priorityContacts = DB::table('contacts')
//             ->where('vip', true)
//             ->orWhere('created_at', '>', Carbon::now()->subDay())
//             ->get();
//         $contacts = DB::table('contacts')
//             ->where('vip', true)
//             ->orWhere(function ($query) {
//                 $query->where('created_at', '>', Carbon::now()->subDay())
//                     ->where('trial', false);
//             })
//             ->get();
//         $canEdit = DB::table('users')
//             ->where('admin', true)
//             ->orWhere('plan', 'premium')
//             ->whre('is_plan_owner', true)
//             ->get();

//         $canEdit = DB::table('users')
//             ->where('admin', true)
//             ->orWhere(function ($query) {
//                 $query->where('plan', 'premium')
//                     ->where('is_plan_owner', true);
//             })
//             ->get();
//         $mediumDrinks = DB::table('drinks')
//             ->whereBetween('size', [6, 12])
//             ->get();
//         $closeBy = DB::table('contacts')->whereIn('state', ['FL', 'GA', 'AL'])->get();
//         $closeBy = DB::table('contacts')->whereIn('state', ['FL', 'GA', 'AL'])->get();
//         DB::table('contacts')->whereRaw('id = 12345')->get();
//         $commenters = DB::table('users')
//             ->whereExists(function ($query) {
//                 $query->select('id')
//                     ->from('comments')
//                     ->whereRaw('comments.user_id = user.id');
//             })
//             ->get();
//         $contacts = DB::table('contacts')
//             ->orderBy('last_name', 'asc')
//             ->get();
//         $populousCities = DB::table('contacts')
//             ->groupBy('city')
//             ->havingRaw('count(contact_id)>30')
//             ->get();
//         $page = DB::table('contacts')->skip(30)->take(10)->get();
//         $contacts = DB::table('contacts')->get();
//         $vipContacts = DB::table('contacts')->where('vip', true)->get();
//         $newestContact = DB::table('contacts')
//             ->orderBy('created_at', 'desc')
//             ->first();
//         $contactFive = DB::table('contacts')->find(5);
//         $newestContactEmail = DB::table('contacts')
//             ->orderBy('created_at', 'desc')
//             ->value('email');
//         $countVips = DB::table('contacts')
//             ->where('vip', true)
//             ->count();
//         $highestCost = DB::table('orders')->max('amount');
//         $averageCost = DB::table('orders')
//             ->where('status', 'completed')
//             ->avg('amount');
//         $contacts = DB::table('contacts')
//             ->select(DB::raw('*,(score * 100) AS integer_score'))
//             ->get();
//         $users = DB::table('users')
//             ->join('contacts', 'users.id', '=', 'contacts.user_id')
//             ->select('users.*', 'contacts.name', 'contacts.status')
//             ->get();
//         DB::table('users')
//             ->join('contacts', function ($join) {
//                 $join->on('users.id', '=', 'contacts.user_id')
//                     ->orOn('users.id', '=', 'contacts.proxy_user_id');
//             })
//             ->get();
//         $first = DB::table('contacts')->whereNull('first_name');
//         $contacts = DB::table('contacts')
//             ->whereNull('last_name')
//             ->union($first)
//             ->get();
//         $id = DB::table('contacts')->insertGetId([
//             'name' => 'Abe Thomas',
//             'email' => 'athomas1987@gmail.com',
//         ]);

//         DB::table('contacts')->insert([
//             ['name' => 'Tamika Johnson', 'email' => 'tamikaj@gmail.com'],
//             ['name' => 'Jim Patterson', 'email' => 'james.patterson@hotmail.com'],
//         ]);
//         DB::table('contacts')
//             ->where('points', '>', 100)
//             ->update(['status' => 'vip']);
//         DB::table('contacts')->increment('token', 5);
//         DB::table('contacts')->decrement('token');
//         DB::table('users')
//             ->where('last_login', '<', Carbon::now()->subYear())
//             ->delete();
//         DB::table('contacts')->truncate();
//         DB::table('users')->where('options->isAdmin', true)->get();
//         DB::table('users')->update(['options->isVerified', true]);
//         DB::transaction(function () use ($userId, $numVotes) {
//             DB::table('users')
//                 ->where('id', $userId)
//                 ->update(['votes' => $numVotes]);
//             DB::table('votes')
//                 ->where('user_id', $userId)
//                 ->delete();
//         });
//         DB::beginTransaction();
//         DB::commit();
//         DB::rollBack();
//     }
// }

// use Illuminate\Database\Eloquent\Model;

// class Contact extends Model
// {
//     public function save(Request $request)
//     {
//         $contact = new Contact();
//         $contact->first_name = $reuqest->input('first_name');
//         $contact->last_name = $request->input('last_name');
//         $contact->email = $request->input('email');
//         $contact->save();
//         return redirect('contacts');
//     }

//     public function show()
//     {
//         return Contact::findOrFail($contactId);
//     }

//     public function vips()
//     {
//         return Contact::where('vip', true)->get()->map(function ($contact) {
//             $contact->formalName = "The exalted {$contact->first_name} of the {$contact->last_name}s";
//             return $contact;
//         });
//     }
// <<<EOF
//     php artisan make:model Contact
// EOF

// }

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Contact extends Model
// {
//     public function test()
//     {
//         <<<TOT
//             php artisan make:model Contact --migration
//             protected $table='contacts_secondary';
//             protected $primaryKey = 'contact_id';
//             public $incrementing = false;
//             public $timestamps = false;
//             protected $dataFormat = 'U';    

//         TOT;

//         $allContacts = Contact::all();
//         $vipContacts = Contact::where('vip', true)->get();
//         $newestContacts = Contact::orderBy('created_at', 'desc')
//             ->take(10)
//             ->get();
//     }

//     public function show($contactId)
//     {
//         return view('contacts.show')
//             ->with('contact', Contact::findOrFail($contactId));
//     }

//     $vipContacts = Contact::where('vip',true)->get();
//     $contacts = Contact::all();
//     Contact::chunk(100,function($contacts){
//         foreach($contacts as $contact){}
//     });
//     $countVips = Contact::where('vip',true)->count();
//     $sumVotes = Contact::sum('votes');
//     $averageSkill = User::avg('skill_level');

//     $contact = new Contact;
//     $contact->name = 'Ken Hirata';
//     $contact->email='ken@hirata.com';
//     $contact->save();

//     $contact=new Contact([
//         'name'=>'Ken Hirata',
//         'email'=>'ken@hirata.com'
//     ]);
//     $contact->save();

//     $contact=Contact::create([
//         'name'=>'Keahi Hale',
//         'email'=>'halek38@yahoo.com'
//     ]);
//     $contact = Contact::find(1);
//     $contact->email = 'natalie@parkfamily.com';
//     $contact->save();
//     Contact::where('created_at','<',Carbon::now()->subYear())
//         ->update(['longevity'=>'ancient']);
//     $contact = Contact::find(1);
//     $Contact->update(['longevity'=>'ancient']);

//     public function update(Contact $contact,Request $request){
//         $contact->update($request->all());
//     }
// }

// class Contact
// {
//     protected $fillable = ['name', 'email'];
//     protected $guarded = ['id', 'created_at', 'updated_at', 'owner_id'];
// }

// Contact::create($request->only('name', 'email'));
// $contact = Contact::firstOrCreate(['email' => 'luis.ramos@myacme.com']);

// $contact = Contact::find(5);
// $contact->delete();
// Contact::destroy(1);
// Contact::destroy([1, 5, 7]);
// Contact::where('updated_at', '<', Carbon::now()->subYear())->delete();

// Schema::table('contacts', function (Blueprint $table) {
//     $table->softDeletes();
// });

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Softdeletes;

// class Contact extends Model
// {
//     use SoftDeletes;
//     protected $dates = ['deleted_at'];
// }

// $allHistoricContacts = Contact::withTrashed()->get();
// if ($contact->trashed) {
// }
// $deletedContacts = Contact::onlyTrashed()->get();
// $contact->restore();
// Contact::onlyTrashed()->where('vip', true)->restore();
// $contact->forceDelete();
// Contact::onlyTrashed()->forceDelete();
// $activeVips = Contact::where('vip', true)->where('trial', false)->get();
// $activeVips = Contact::activeVips()->get();
// class Contact
// {
//     public function scopeActiveVips($query)
//     {
//         return $query->where('vip', true)->where('trial', false);
//     }
// }

// class Contact
// {
//     public function scopeStatus($query, $status)
//     {
//         return $query->where('status', $status);
//     }
// }

// $friends = Contact::status('friend')->get();

// class Contact extends Model
// {
//     protected static function boot()
//     {
//         parent::boot();
//         static::addGlobalScope('active', function (Builder $builder) {
//             $builder->where('active', true);
//         });
//     }
// }

// namespace App\Scopes;

// use Illuminate\Database\Eloquent\Scope;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Builder;

// class ActiveScope implements Scope
// {
//     public function apply(Builder $builder, Model $model)
//     {
//         return $builder->where('active', true);
//     }
// }

// use App\Scopes\ActiveScope;
// use Illuminate\Database\Eloquent\Model;

// class Contact extends Model
// {
//     protected static function boot()
//     {
//         parent::boot();
//         static::addGlobalScope(new ActiveScope);
//     }
// }
// $allContacts = Contact::withoutGlobalScope('active')->get();

// Contact::withoutGlobalScope(ActiveScope::class)->get();
// Contact::withoutGlobalScope([ActiveScope::class, VipScope::class])->get();
// Contact::withoutGlobalScopes()->get();

// class Contact extends Model
// {
//     public function getNameAttribute($value)
//     {
//         return $value ?: '(No name provided)';
//     }
// }
// $name = $contact->name;

// class Contact extends Model
// {
//     public function getFullNameAttribute()
//     {
//         return $this->first_name . ' ' . $this->last_name;
//     }
// }
// $fullname = $contact->full_name;

// class Order extends Model
// {
//     public function setAmountAttribute($value)
//     {
//         $this->attributes['amount'] = $value > 0 ? $value : 0;
//     }
// }
// $order->amount = '15';

// class Order extends Model
// {
//     public function setWorkgroupNameAttribute($workgroupName)
//     {
//         $this->attributes['email'] = "{$workgroupName}@ourcompany.com";
//     }
// }
// $order->workgroup_name = 'jstott';

// class Contact
// {
//     protected $casts = [
//         'vip' => 'boolean',
//         'children_names' => 'array',
//         'birthday' => 'date'
//     ];
// }

// class Contact
// {
//     protected $data = [
//         'met_at'
//     ];
// }

// $collection = collect([1, 2, 3]);
// $odds = $collection->reject(function ($item) {
//     return $item % 2 === 0;
// });

// $multiplied = $collection->map(function ($item) {
//     return $item * 10;
// });

// $sum = $collection
//     ->filter(function ($item) {
//         return $item % 2 == 0;
//     })->map(function ($item) {
//         return $item * 10;
//     })->sum();

// class OrderCollection extends Collection
// {
//     public function sumBillableAmount()
//     {
//         return $this->reduce(function ($carry, $order) {
//             return $carry + ($order->billable ? $order->amount : 0);
//         }, 0);
//     }
// }

// class Order extends Model
// {
//     public function newCollection(array $models = [])
//     {
//         return new OrderCollection($models);
//     }
//     $orders = Order::all();
//     $billableAmount = $orders->sumBillableAmount();
// }

// $contactArray = Contact::first()->toArray();
// $contactJson = Contact::first()->toJson();
// $contactArray = Contact::all()->toArray();
// $contactJson = Contact::all()->toJson();

// Route::get('api/contacts', function () {
//     return Contact::all();
// });

// Route::get('api/contacts/{id}', function ($id) {
//     return Contact::findOrFail($id);
// });

// class Contact extends Model
// {
//     public $hidden = ['password', 'remember_token'];
// }

// class Contact extends Model
// {
//     public $visble = ['name', 'email', 'status'];
// }

// class User extends Model
// {
//     public $hidden = ['contacts'];
//     public function contacts()
//     {
//         return $this->hasMany(Contact::class);
//     }
// }

// $user = User::with('contacts')->first();
// $array = $user->makeVisible('remeber_token')->toArray();

// class Contact extends Model
// {
//     protected $appends = ['full_name'];
//     public function getFullNameAttribute()
//     {
//         return "{$this->first_name}{$this->last_name}";
//     }
// }

// // Eloquent关系
// class Contact extends Model
// {
//     public function phoneNumber()
//     {
//         return $this->hasOne(PhoneNumber::class);
//     }
// }

// return $this->hasOne(PhoneNumber::class, 'owner_id');

// $contact = Contact::first();
// $contactPhone = $contact->phoneNumber;

// class phoneNumber extends Model
// {
//     public function contact()
//     {
//         return $this->belongTo(Contact::class);
//     }
//     $contact = $phoneNumber->contact;
// }

// $contact = Contact::first();
// $phoneNumber = new PhoneNumber;
// $phoneNumber->number = 8008675309;
// $contact->phoneNumbers()->save($phoneNumber);
// $contact->phoneNumbers()->saveMany([
//     PhoneNumber::find(1),
//     PhoneNumber::find(2),
// ]);

// $contact->phoneNumbers()->create([
//     'number'=>'+13138675309'
// ]);

// class User extends Model
// {
//     public function contacts()
//     {
//         return $this->hasMany(Contact::class);
//     }
// }

// $user = User::first();
// $usersContacts = $user->contacts;

// $donors = $uer->contacts->filter(function ($contact) {
//     return $contact->status = 'donor';
// });

// $lifetimeValue = $contact->orders->reduce(function ($carry, $order) {
//     return $carry + $order->amoount;
// }, 0);

// class Contact extends Model
// {
//     public function user()
//     {
//         return $this->belongTo(User::class);
//     }
// }
// $userName = $contact->user->name;
// $contact = Contact::first();
// $contact->user()->associate(User::first());
// $contact->save();
// $contact->user()->dissociate();
// $contact->save();
// $donors = $user->contacts()->where('status', 'door')->get();
// $postsWithComments = Post::has('comments')->get();
// $postsWithManyComments = Post::has('comments', '>=', 5)->get();
// $userWithPhoneBooks = User::has('contacts.phoneNumbers')->get();
// $jennyIGotYourNumber = Contact::whereHas('phoneNumbers', function ($query) {
//     $query->where('number', 'like', '%867-5309%');
// });
// class User extends Model
// {
//     public function phoneNumbers()
//     {
//         return $this->hasManyThrough(PhoneNumber::class, Contact::class);
//     }
// }

// class User extends Model
// {
//     public function contacts()
//     {
//         return $this->belongToMany(Contact::class);
//     }
// }

// class Contact extends Model
// {
//     public function users()
//     {
//         return $this->belongsToMany(User::class);
//     }
// }

// $user = User::first();
// $user->contacts->each(function ($contact) {
// });
// $contact = Contact::first();
// $contact->users->each(function ($user) {
// });
// $donors = $user->contacts()->where('status', 'donor')->get();
// $user = User::first();
// $contact = Contact::first();
// $user->contacts()->save($contact, ['status' => 'donor']);
// $user = User::first();
// $user->contacts()->attach(1);
// $user->contacts()->attach(2, ['status' => 'donor']);
// $user->contacts()->attach([1, 2, 3]);
// $user->contacts()->attach([
//     1 => ['status' => 'donor'],
//     2,
//     3
// ]);
// $user->contacts()->detach(1);
// $user->contacts()->detach([1, 21]);
// $user->contacts()->detach();
// $user->contacts()->updateExistingPivot($contactId, [
//     'status' => 'inactive'
// ]);
// $user->contacts()->sync([1, 2, 3]);
// $user->contacts()->sync([
//     1 => ['status' => 'donor'],
//     2,
//     3
// ]);
// public function contacts(){
//   return $this->belongsToMany(Contact::class)
//   ->withTimestamps()
//   ->withPivot('status','preferred_greeting');  
// }

// $user = User::first();
// $user->contacts->each(function ($contact) {
//     echo sprintf(
//         'Contact associated with this user at: %s',
//         $contact->pivot->create_at
//     );
// });

// class Star extends Model
// {
//     public function starrable()
//     {
//         return $this->morphsTo();
//     }
// }

// class Contact extends Model
// {
//     public function stars()
//     {
//         return $this->morphMany(Star::class, 'starrable');
//     }
// }

// class Event extends Model
// {
//     public function stars()
//     {
//         return $this->morphMany(Star::class, 'starrable');
//     }
// }

// $contact = Contact::first();
// $Contact->stars()->create();

// $contact = Contact::first();
// $contact->stars->each(function ($star) {
// });

// $stars = Star::all();
// $stars->each(function ($star) {
//     var_dump($star->starrable);
// });

// class Star extends Model
// {
//     public function starrable()
//     {
//         return $this->morphsTo;
//     }
//     public function user()
//     {
//         return $this->belongsTo(user::class);
//     }
// }

// class User extends Model
// {
//     public function stars()
//     {
//         return $this->hasMany(Star::class);
//     }
// }

// $user = User::first();
// $event = Event::first();
// $event->stars()->create(['user_id' => $user->id]);

// class Contact extends Model
// {
//     public function tags()
//     {
//         return $this->morphToMany(Tag::class, 'taggable');
//     }
// }

// class Event extends Model
// {
//     public function tags()
//     {
//         return $this->morphToMany(Tag::class, 'taggable');
//     }
// }

// class Tag extends Model
// {
//     public function contacts()
//     {
//         return $this->morphedByMany(Contact::class, 'taggable');
//     }
//     public function events()
//     {
//         return $this->morphedByMany(Event::class, 'taggable');
//     }
// }

// $tag = Tag::firstOrCreate(['name' => 'likes-cheese']);
// $contact = Contact::first();
// $contact->tags()->attach($tag->id);

// $contact = Contact::first();
// $contact->tags->each(function ($tag) {
// });
// $tag = Tag::first();
// $tag->contacts->each(function ($contact) {
// });

// class PhoneNumber extends Model
// {
//     protected $touches = ['contact'];
//     public function contact()
//     {
//         return $this->belongsTo(Contact::class);
//         $contacts = Contact::all();
//         foreach ($contacts as $contact) {
//             foreach ($contact->phone_numbers as $phone_number) {
//                 echo $phone_number->number;
//             }
//         }
//         $contacts = Contact::with('phoneNumbers')->get();
//         $contacts = Contact::with('phoneNumbers', 'addresses')->get();
//         $authors = Author::with('posts.comments')->get();
//         $contacts = Contact::with(['addresses' => function ($query) {
//             $query->where('mailable', true);
//         }])->get();
//         $contacts = Contact::all();
//         if ($showPhoneNumbers) {
//             $contacts->load('phoneNumbers');
//         }
//         $authors = Author::withCount('posts')->get();
//     }
// }

// class AppServiceProvider extends ServiceProvider
// {
//     public function boot()
//     {
//         $thirdPartyService = new SomeThirdPartyService;
//         Contact::creating(function ($contact) use ($thirdPartyService) {
//             try {
//                 $thirdPartyService->addContact($contact);
//             } catch (Exception $e) {
//                 Log::error('Failed adding contact to ThirdPartyService;cancelled.');
//                 return false;
//             }
//         });
//     }

//     public function test_active_page_shows_active_and_not_inactive_contacts()
//     {
//         $activeContact = factory(Contact::class, 'active')->create();
//         $inactiveContact = factory(Contact::class, 'inactive')->create();
//         $this->visit('active-contacts')
//             ->see($activeContact->name)
//             ->dontSee($inactiveContent->name);
//     }

//     public function test_contact_creation_works()
//     {
//         $this->post('contacts', [
//             'email' => 'jim@bo.com'
//         ]);
//         $this->seeInDatabase('contacts', [
//             'email' => 'jim@bo.com'
//         ]);
//     }

//     public function test_full_name_accessor_works()
//     {
//         $contact = factory(Contact::class)->make([
//             'first_name' => 'Alphonse',
//             'last_name' => 'Cumberbund'
//         ]);
//         $this->assertEquals('Alphonse Cumberbund', $contact->fullName);
//     }

//     public function test_vip_scope_filters_out_non_vips()
//     {
//         $vip = factory(Contact::class, 'vip')->create();
//         $nonVip = factory(Contact::class)->create();
//         $vips = Contact::vips()->get();
//         $this->assertTrue($vips->contains(['id' => $vip->id]));
//         $this->assertFalse($vips->contains(['id' => $nonVip->id]));
//     }
// }

// // 默认的用户迁移
// Schema::create('users', function (Blueprint $table) {
//     $table->increments('id');
//     $table->string('name');
//     $table->string('email')->unique();
//     $table->string('password');
//     $table->rememberToken();
//     $table->timestamps();
// });

// namespace App;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable
// {
//     use Notifiable;
//     protected $fillable = [
//         'name', 'email', 'password'
//     ];
//     protected $hidden = [
//         'password', 'remember_token'
//     ];
// }

// // namesapce Illuminate\Foundation\Auth;
// use Illuminate\Auth\Authenticatable;
// use Illuminate\Auth\Passwords\CanResetPassword;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\Access\Authorizable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

// class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
// {
//     use Authenticatable, Authorizable, CanResetPassword;
// }

// 使用auth()全局助手和认证Facade
// public function dashboard(){
//     if(auth()->guest()){
//         return redirect('sign-up');
//     }

//     return view('dashboard')->with('user',auth()->user());
// }

// // Auth控制器
// class RegisterController extends Controller
// {
//     use RegistersUsers;
//     protected $redirectTo = '/home';

//     protected function validator(array $data)
//     {
//         return Validator::make($data, [
//             'name' => 'required|max:255',
//             'email' => 'required|email|max:255|unique:users',
//             'password' => 'required|min:6|confirmed',
//         ]);
//     }

//     protected function create(array $data)
//     {
//         return User::create([
//             'name' => $data['name'],
//             'email' => $data['email'],
//             'password' => bcrypt($data['password']),
//         ]);
//     }
// }
// $this->get('login', 'Auth\LoginController@showLoginForm');
// $this->post('login', 'Auth\LoginController@login');
// $this->get('logout', 'Auth\LoginController@logout');

// $this->get('register', 'Auth\RegisterController@showRegistrationForm');
// $this->post('register', 'Auth\RegisterController@register');

// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');

// <<<TOT

// app/Http/Controllers/HomeController.php
// resources/views/auth/login.blade.php
// resources/views/auth/register.blade.php
// resources/views/auth/passwords/email.blade.php
// resources/views/auth/passwords/reset.blade.php
// resources/views/layout/app.blade.php
// resources/views/home.blade.php
// TOT

// if (auth()->attempt([
//     'email' => request()->input('email'),
//     'password' => request()->input('password')
// ])) {

// }

// if(auth()->attempt([
//     'email'=>request()->input('email'),
//     'password'=>request()->input('password')
//     ]),
//     request()->has('remember'){

//     }
// );

// // 手动认证用户
// auth()->loginUsingId(5);
// auth()->login($user);
// protected $routeMiddleware=[
//     'auth'=>\Illuminate\Auth\Middleware\Authentiate::class,
//     'auth.basic'=>\Illuminate\Auth\Middleware\AuthenticateWith::class,
//     'bindings'=>\Illuminate\Routing\Middleware\SubstituteBindings::class,
//     'can'=>\Illuminate\Auth\Middleware\Authorize::class,
//     'guest'=>\App\Http\Middleware\RedirectIfAuthenticated::class,
//     'throttle'=>\Illuminate\Routing\Middleware\ThrouttleRequest::class,
// ];

// Route::group(['middleware'=>'auth'],function(){
//     Route::get('account','AccountController@dashboard');
// });
// Route::get('login','Auth\LoginController@getLogin')->middleware('guest');

// <<<TOT
//     'default'=>[
//         'guard'=>'web',
//         'password'=>'users',
//     ],
//     'guards'=>[
//         'trainess'=>[
//             'driver'=>'session',
//             'provider'=>'trainees',
//         ],
//     ],
//     'providers'=>[
//         'users'=>[
//             'driver'=>'eloquent',
//             'model'=>App\User::class,
//         ],
//         'trainees'=>[
//             'driver'=>'eloquent',
//             'model'=>App\Trainee::class,
//         ]
//     ]
// TOT;

// $apiUser = auth()->guard('api')->user();
// auth()->guard(users);
// auth()->guard(trainees);
// Route::group(['middleware'=>'auth.trainees'],function(){

// });
// auth()->provider('riak',function($app,array $config){
//     return new RiakUserProvider($app['riak.connection']);
// });

// protected $listen = [
//     'Illuminate\Auth\Events\Attempting' => [],
//     'Illuminate\Auth\Evnets\Login' => [],
//     'Illuminate\Auth\Events\Logout' => [],
//     'Illuminate\Auth\Events\lockout' => [],
// ];

// if (Gate::denies('edit', $contact)) {
//     abort(403);
// }

// if (!Gate::check('create', Contact::class)) {
//     abort(403);
// }

// class AuthServiceProvider extends ServiceProvider
// {
//     public function boot(GateContract $gate)
//     {
//         $this->registerPolicies($gate);
//         $gate->define('update-contact', function ($user, $contact) {
//             return $user->id === $contact->user_id;
//         });
//     }
// }

// $gate->define('updatecontact', 'ContactACLChecker@updateContact');

// if (Gate::allows('update-contact', $contact)) {
// }
// if (Gate::denies('update-contact', $contact)) {
//     about(403);
// }

// $gate->define('add-contact-to-group', function ($user, $contact, $group) {
//     return $user->id === $contact->user_id && $user->id === $group->user_id;
// });

// if (Gate::denies('add-contact-to-group', [$contact, $group])) {
//     abort(403);
// }

// if (Gate::forUser($user)->denies('create-contact')) {
//     bort(403);
// }

// Authorize中间件
// Route::get('people/create', function () {
// })->middleware('can:create-person');

// Route::get('people/{people}/edit', function () {
// })->middleware('can:create,person');

// public function show($contactId){
//     $contact = Contact::findOrFail($contactId);
//     if(Gate::cannot('update-contact',$contact)){
//         abort(403);
//     }    
// }

// public function show($contactId){
//     $contact = Contact::findOrFail($contactId);
//     $this->authorize('update-contact',$contact);
// }

// $this->authorizeForUser($user,'update-contact',$contact);

// class ContactsController extends Controller
// {
//     public function __construct()
//     {
//         $this->authorizeResource(Contact::class);
//     }

//     public function index()
//     {
//         $this->authorize('view', Contact::class);
//     }

//     public function create()
//     {
//         $this->authorize('create', Contact::class);
//     }

//     public function store(Request $request)
//     {
//         $this->authorize('create', Contact::class);
//     }

//     public function show(Contact $contact)
//     {
//         $this->authorize('view', $contact);
//     }

//     public function edit(Contact $contact)
//     {
//         $this->authorize('update', $contact);
//     }

//     public function update(Request $request, Contract $contract)
//     {
//         $this->authorize('update', $contact);
//     }

//     public function destroy(Contact $contact)
//     {
//         $this->authorize('delete', $contact);
//     }
// }

// $user = User::find(1);
// if ($user->can('create-contact')) {
// }

// $gate->before(function ($user, $ability) {
//     if ($user->isOwner()) {
//         return true;
//     }
// });

// <<<TOT
//     php artisan make:policy ContactPolicy
// TOT;

// class AuthServiceProvider extends ServiceProvider
// {
//     Protected $policies = [
//         Contact::class => ContactPolicy::class;
//     ];
// }

// namespace App\Policies;

// use Illuminate\Auth\Access\Gate;

// class ContactPolicy
// {
//     public function update($user, $contact)
//     {
//         return $this->id === $contact->user_id;
//     }
// }

// class ContactPolicy
// {
//     public function createAny($user)
//     {
//         return $user->canCreateContacts();
//     }
// }

// // Gate
// if (Gate::denies('update', $contact)) {
//     abort(403);
// }

// if (!Gate::check('create', Contact::class)) {
//     abort(403);
// }

// if ($user->can('update', $contact)) {
// }

// if (policy($contact)->update($user, $contact)) {
// }

// public function before($user,$ability)
// {
//     if($user->isAdmin()){
//         return true;
//     }
// }
// public function test_it_creates_a_new_contact(){
//     $user = factory(User::class)->create();
//     $this->be($user);
//     $this->post('contacts',[
//         'email'=>'my@email.com'
//     ]);
//     $this->seeInDatabase('contacts',[
//         'email'=>'my@email.com',
//         'user_id'=>$user->id,
//     ]);
// }

// public function test_non_admins_cant_create_users(){
//     $user = factory(User::class)->create([
//         'admin'=>false
//     ]);
//     $this->be($user);
//     $this->post('users',['email'=>'my@email.com']);
//     $this->dontSeeInDatabase('users',[
//         'email'=>'my@email.com'
//     ]);
// }

// public function test_non_admins_cant_create_users(){
//     $user = factory(User::class)->create([
//         'admin'=>false
//     ]);
//     $this->be($user);
//     $this->post('users',['email'=>'my@email.com']);
//     $this->assertResponseStatus(403);
// }

// public function test_users_can_register(){
//     $this->post('register',[
//         'name'=>'Sal Leibowitz',
//         'email'=>'sal@leibs.net',
//         'password'=>'abcdefg123',
//         'password_confirmation'=>'abcdefg123',
//     ]);
//     $this->followRedirects()->assertResponseOk();
//     $this->seeInDatabase('users',[
//         'name'=>'Sal Leibowitz',
//         'email'=>'sal@leibs.net',
//     ]);
// }

// public function test_users_can_log_in(){
//     $user = factory(User::class)->create([
//         'password'=>bcrypt('abcdefg123')
//     ]);
//     $this->post('login',[
//         'email'=>$user->email,
//         'password'=>'abcdefg123',
//     ]);
//     $this->followRedirects()->assertResponseOk();
//     $this->assertTrue(auth()->check());
// }

// class GitHubServiceProvider extends ServiceProvider
// {
//     protected $defer = true;
//     public function provides()
//     {
//         $request = Illuminate\Http\Request::capture();
//         return [GitHubClient::class];
//     }
// }

// use Illuminate\Http\Request;

// class PeopleController extends Controller
// {
//     public function index(Request $request)
//     {
//         $allInput = $request->all();
//         $request = request();
//         $allInput = request()->all();
//         $request = app(Illuminate\Http\Request::class);
//         $request = app('request');
//         // echo $bag->get('name');
//         // 12.5 / 7 * 6 = 75 / 7 = 10.7
//         // 12.5 / 15 = 0.83
//     }
// }

// Route::post('form', function (Request $request) {
//     echo 'name is ' . $request->input('name');
//     echo 'all input is ' . print_r($request->all());
//     echo 'user provided email address: ' . $request->has('email') ? true : false;
// });


Route::get('route', function () {
    return new Illuminate\Http\Response('Hello!');
});
Route::get('route', function () {
    return response('Hello!');
});
// 包含自定义状态和表头的简单HTTP响应
Route::get('route', function () {
    return response('Error!', 400)
        ->header('X-Header-Name', 'header-value')
        ->cookie('cookie-name', 'cookie-value');
});
// 为响应添加cookie
return response($content)
    ->cookie('signup_dismissed', true);
// shiyong view()响应类型
Route::get('/', function (XmlGetterService $xml) {
    $data = $xml->get();
    return response()
        ->view('xml-structure', $data)
        ->header('Content-Type', 'text/xml');
});
// 使用download()响应类型
// public function export(){
//     return response()
//         ->download('file.csv','export.csv',['header'=>'value']);
// }
// public function otherExport(){
//     return response()->download('file.pdf');
// }
// 使用file()响应类型
// public function invoice($id){
//     return response()->file("./invoices/{$id}.pdf",['header'=>'value']);
// }
// // 使用json()响应类型
// public function contacts(){
//     return response()->json(Contact::all());
// }
// public function jsonContacts(Request $request){
//     return response()
//     ->json(Contact::all())
//     ->setCallback($request->input('callback'));
// }
// public function nonEloquentContacts(){
//     return response()->json(['Tom','Jerry']);
// }
// 使用redirect()全局助手示例
return redirect('account/payment');
return redirect()->to('account/payment');
return redirect()->route('account.payment');
return redirect()->action('AccountController@showPayment');
return redirect()->route('contact.edit', ['id' => 15]);
return redirect()->action('ContactsController@edit', ['id' => 15]);
// 通过输入往回重定向
// public function store(){
//     return back()->withInput();
// }
// 根据暂存数据重定向
Route::post('contacts', function () {
    return redirect('dashboard')->with('message', 'Contact created!');
});
Route::get('dashboard', function () {
    echo session('message');
});
// 创建自定义响应宏
class AppServiceProvider
{
    public function boot()
    {
        Response::macro('myJson', function ($content) {
            return response(json_encode($content))
                ->headers(['ContentType' => 'application/json']);
        });
    }
}
return response()->myJson(['name' => 'Sangeetha']);
/**
 * php artisan make::middleware BanDeleteMethod
 */
class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
// 中间件调用过程伪代码
class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
        if ($request->ip() == '192.168.1.1') {
            return response('BANNED IP ADDRESS!', 403);
        }
        $response = $next($request);
        $response->cookie('visited-our-site', true);
        return $response;
    }
}
// 中间件禁止delete方法
class BanDeleteMethod
{
    public function handle($request, Closure $next)
    {
        if ($request->method() === 'DELETE') {
            return response(
                "Get out of here with that delete method",
                405
            );
        }
        $response = $next($request);
        $response->cookie('visited-out-site', true);
        return $response;
    }
}
// 绑定全局中间件
// Protected $middleware=[
//     \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
//     \App\Http\Middleware\BanDeleteMethod::class,
// ];
// 绑定路由中间件
// protected $routeMiddleware=[
//     'auth'=>\App\Http\Middleware\Authenticate::class,
//     'nodelete'=>\App\Http\Middleware\BanDeleteMethod::class,
// ];
// 在路由定义中使用路由中间件
Route::get('contacts', [
    'middleware' => 'nodelete',
    'uses' => 'ContactsController@index'
]);
Route::group(['prefix' => 'api', 'middleware' => 'nodelete', function () {
}]);
Route::get('/', 'HomeController@index')->middleware('web');
// Laravel5.3中默认的路由服务提供者
// public function map(){
//     $this->mapApiRoutes();
//     $this->mapWebRoutes();
// }
// protected function mapApiRoutes(){
//     Route::group([
//         'middleware'=>'api',
//         'namespace'=>$this->namespace,
//         'prefix'=>'api'
//     ],function($router){
//         require base_path('routes/api.php');
//     });
// }
// protected function mapWebRoutes(){
//     Route::group([
//         'middleware'=>'web',
//         'namespace'=>$this->namespace,
//     ],function($router){
//         require base_path('route/wab.php');
//     });
// }
// 向中间件传参
Route::get('company', function () {
    return view('company.admin');
})->middleware('auth::owner');
// public function handle($request,$next,$role){
//     if(auth()->check() && auth()->user()->hasRole($role)){
//         return $next($request);
//     }
//     return redirect('login');
// }
Route::get('company', function () {
    return view('company.admin');
})->middleware('auth::owner,view');
$request = new Illuminate\Http\Request(
    $query,
    $request,
    $attributes,
    $cookies,
    $files,
    $server,
    $content
);
$response = new Illuminate\Http\Response(
    $content,
    $status,
    $headers
);
// 基本的依赖注入
class UserMailer
{
    protected $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    public function welcome($user)
    {
        return $this->mailer->mail($user->email, 'Welcome!');
    }
}

$mailer = new MailgunMailer($mailgunKey, $mailgunSecret, $mailgunOptions);
$userMailer = new UserMailer($mailer);
$userMailer->welcome($user);
// 更复杂的手动依赖注入
$mailer = new MailgunMailer($mailgunKey, $mailgunSecret, $mailgunOptions);
$logger = new Logger($logPath, $minimumLogLevel);
$slack = new Slack($slackKey, $slackSecret, $channelName, $channelIcon);
$userMailer = new UserMailer($mailer, $logger, $slack);
$userMailer->welcome($user);
$logger = app(Logger::class);
// Laravel自动装配
class Bar
{
    public function __construct()
    {
    }
}
class Baz
{
    public function __construct()
    {
    }
}
class Foo
{
    public function __construct(Bar $bar, Baz $baz)
    {
    }
}
$foo = app(Foo::class);
// public function __construct(Logger $logger){
// }
// 基本容器绑定
class test
{
    public function register()
    {
        $this->app->bind(Logger::class, function ($app) {
            return new Logger('\log\path\here', 'error');
        });
    }
    // 绑定单例模式、别名和实例
    public function register2()
    {
        $this->app->singleton(Logger::class, function () {
            return new Logger('\log\path\here', 'error');
        });
    }
    public function register3()
    {
        $logger = new Logger('\log\path\here', 'error');
        $this->app->instance(Logger::class, $logger);
    }
    // 语境绑定
    public function register4()
    {
        $this->app->when(FileWrangler::class)
            ->needs(Interfaces\Logger::class)
            ->give(Loggers\Syslog::class);
        $this->app->when(Jpbs\SendWelcomeEmail::class)
            ->needs(Interfaces\Logger::class)
            ->give(Loggers\PaperTrail::class);
    }
}
$this->app->bind(UserMailer::class, function ($app) {
    return new UserController(
        $app->make(Mailer::class),
        $app->make(Logger::class),
        $app->make(Slack::class)
    );
});
$this->bind(Logger::class, FirstLogger::class);
$this->bind('log', FirstLogger::class);
$this->bind(FirstLogger::class, 'log');
// 指定并绑定到接口
use Interfaces\Mailer;

class UserMailer
{
    protected $mailer;
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

// public function register(){
//     $this->app->bind(\Interfaces\Mailer::class,function(){
//         return new MailgunMailer();
//     });
// }

// 将依赖关系注入控制器
class MyController extends Controller
{
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    public function index()
    {
        $this->logger->error('Something happened');
    }
}


// 方法注入
// 将依赖关系注入单个控制器方法
class MyController extends Controller
{
    public function show(Logger $logger, $id)
    {
        $logger->error('Something happened');
    }
}
// 使用容器的call()方法手动调用类的方法
class Foo
{
    public function bar($parameter1)
    {
    }
}
$foo = new Foo;
app()->call($foo, 'bar', ['parameter1' => 'value']);


// facade与容器
Log::alert('Something has gone wrong!');
$logger = app('log');
$logger->alert('Something has gone wrong!');
// 导入facade命名空间
use Illuminate\Support\Facades\Log;

class Controller extends Controller
{
    public function index()
    {
        Log::error('Something went wrong!');
    }
}
// Logfacade类
// namespace Illuminate\Supoport\Facades;

// class Log extends facade
// {
//     protected static function getFacadeAccessor()
//     {
//         return 'log';
//     }
// }

Log::error('Help!');
app('log')->error('Help!');

// 在测试中重写绑定
class test
{
    public function test_it_does_something()
    {
        return new DevNullLogger;
    }
}
// 覆盖所有测试的绑定
class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    public function setUp()
    {
        parent::setUp();
        app()->bind('whatever', 'whatever else');
    }
}

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    function testBasicExample()
    {
        $this->visit('/')->see('Laravel');
    }
    public function test_people_list_shows_person_after_creation()
    {
        $this->json('post', 'people', ['name' => 'matt']);
        $this->json('get', 'people');
        $this->seeJson(['name' => 'matt']);
    }
}
// 命名PHPUnit方法
class Naming
{
    public function test_it_names_things_well()
    {
    }

    public function testItNamesThingsWell()
    {
    }

    /** @test */
    public function it_names_things_well()
    {
    }

    public function it_names_things_well()
    {
    }
}

if (file_exists(dirname(__DIR__) . '/.env.test')) {
    (new \Dotenv\Dotenv(dirname(__DIR__), '.env.test'))->load();
}
$this->visit('/')->see('Laravel');
$this->visit($url);
class test
{
    public function visit($uri)
    {
        $uri = $this->prepareUrlForRequest($uri);
        $this->call($method, $uri, $parameters, $cookies, $files);
        $this->clearInputs()->followRedirects()->assertPageLoaded($uri);
        $this->currentUri = $this->app->make('request')->fullUrl();
        $this->crawler = new Crawler(
            $this->response->getContent(),
            $this->currentUri
        );
        return $this;
    }
}
$this->call($method, $uri, $params = [], $cookies = [], $files = [], $server = [], $content = null);
// $this->get($uri,$headers=[]),->post($uri,$data=[],$headers=[]),->put($uri,$data=[],$headers=[]),->patch(),和->delete();
$this->json($method, $uri, $data = [], $headers = []);
$this->followRedirects();
$this->assertPageLoaded();
$this->see();
$this->dontSee();
$this->seeLink();
$this->dontSeeLink();
$this->seeHeader();
$this->seeCookie();
$this->seePagels();
$this->seeInDatabase();
$this->dontSeeInDatabase();

class test2
{
    public function test_database_has_user_after_registration()
    {
        $this->visit('register')
            ->fillForm([
                'email' => 'matt@mattstauffer.co'
            ])
            ->submitForm();
        $this->seeInDatabase('email', ['email' => 'matt@mattstauffer.co']);
    }
    public function test_api_returns_certain_json()
    {
        $this->json('get', 'users');
        $this->seeJson(['username' => 'mattstauffer']);
    }
    public function test_pages_load_the_way_we_want()
    {
        $this->get('people');
        $this->assertResponseOK();
        $this->call('post', 'owners');
        $this->assertResponseStatus(405);
    }
    public function test_view_gets_data()
    {
        $this->get('test');
        $this->assertViewHas('foo');
        $this->assertViewHas('foo', 'bar');
        $this->assertViewHas('foo', 'baz');
    }
    public function test_view_gets_data()
    {
        $this->get('test');
        $this->assertViewHasAll([
            'foo' => 'bar',
            'baz' => 'qux'
        ]);
    }
    public function test_events_are_owned_by_user_1()
    {
        $this->get('events');
        $this->assertViewHas('events', function ($events) {
            return $events->reject(function ($event) {
                return $event->user_id === 1;
            })->isEmpty();
        });
    }
    public function test_redirector_works()
    {
        $this->get('redirector');
        $this->assertRedirectedTo('/');
        $this->assertRedirectedToRoute('home');
        $this->assertRedirectedToAction('HomeController@index');
    }
    public function test_session_has_stuff()
    {
        Session::put('foo', 'bar');
        Session::put('baz', 'qux');
        $this->assertSessionHas('foo');
        $this->assertSessionHas('foo', 'bar');
        $this->assertSessionHasAll([
            'foo' => 'bar',
            'baz' => 'qux'
        ]);
    }
    public function test_posting_empty_errors_out()
    {
        $this->post('form', []);
        $this->assertSessionHasErrors();
        $this->assertSessionHasErrors(['email' => 'The email field is required.']);
        $this->assertSessionHasErrors(
            ['email' = '<p>The email field is required.</p>'],
            '<p>:message</p>'
        );
    }
}
Route::get('test', function () {
    return view('test')->with('foo', 'bar');
});
Route::get('test', function () {
    return view('test')->with('foo', 'bar')->with('baz', 'qux');
});
$this->assertRedirectedTo();
$this->assertRedirectedToRoute();
$this->assertRedirectedToAction();
Route::get('redirector', function () {
    return redirect('/');
});
Route::get('/', 'HomeController@index')->name('home');
$this->assertSessionHas($key, $value = '');

$this->check($element);
$this->uncheck($element);
$this->select($options, $element);
$this->attach($filePath, $element);
$this->press($buttonText);
$this->submitForm($buttonText, $input = [], $uploads = []);
$this->fileForm($buttonText, $inputs = []);
$this->clearInputs();
$this->expectsEvents($eventClassName);

// public function test_usersubscribed_event_fires_when_subscribing(){
//     $this->expectsEvents(App\Events\UserSubscribed::class);
//     $this->visit('subscribe')->type('me@me.com','email')->press('Subscribe');
// }
// $this->withoutEvents();
$this->expectsJobs();

// public function test_number_of_subscriptions_crunches_reports(){
//     $this->expectsJobs(App\Jobs\CrunchReports::class);
//     $this->visit('subscribe')->type('me@me.com','email')->press('Subscribe');
// }

$this->session(['key' => 'value']);
$this->flushSession();
$this->be($authenticatable);

// public function test_members_cant_see_admin_dashboard(){
//     $member = factory(\App\User::class,'member')->create();
//     $this->be($member);
//     $this->get('admin-dashboard');
//     $this->assertResponseStatus(403);
// }

// public function test_admins_can_see_admin_dashboard(){
//     $admin=factory(\App\User::class,'admin')->create();
//     $this->be($admin);
//     $this->get('admin-dashboard');
//     $this->assertResponseOK();
// }

// public function test_set_value(){
//     $this->value = $this->setValue;
//     $this->key = $this->setKey;
//     $this->column = $this->setColumn;
//     $this->filed = $this->setField;
//     $this->submitForm = $this->setSubMitForm();
//     $this->check = Tool::checkThisValue();
//     $value = Tool::returnTrueValue($this->value);
//     foreach($value as $k => $v){
//         $v = $k==0?$value[$k]:$value[$k-1];
//     }
// }

// Artisan和Seed
$this->artisan($command, $parameters = []);
// public function test_returns_certain_code(){
//     $this->artisan('do:thing',['--flag0fSomeSort'=>true]);
//     $this->assertEquals(0,$this->code);
// }
$this->seed($seederClassName = 'DatabaseSeeder');
// 在Laravel中使用Mockery
class SlackClient
{
    public function send($message, $channel)
    {
    }
}
class Notifier
{
    private $slack;
    public function __construct(SlackClient $slack)
    {
        $this->slack = $slack;
    }
    public function notifyAdmins($message)
    {
        $this->slack->send($message, 'admins');
    }
}
class test
{
    public function test_notifier_notifies_admins()
    {
        $slackMock = Mockery::mock(SlackClient::class)->shouldIgnoreMissing();
        $notifier = new Notifier($slackMock);
        $notifier->notifyAdmins('Test message');
    }
}
$slackMock = Mockery::mock(SlackClient::class)->shouldIgnoreMissing();

// 在Mockery中使用shouldReceive方法
// public function test_notifier_notifies_admins(){
$slackMock = Mockery::mock(SlackClient::class);
$slackMock->shouldReceive('send')->once();
$notifier = new Notifier($slackMock);
$notifier->notifyAdmins('Test message');
// }
// 绑定Mockery实例和容器
// public function test_notifier_notifies_admins(){
$slackMock = Mockery::mock(SlackClient::class);
$slackMock->shouldReceive('send')->once();
app()->instance(SlackClient::class, $slackMock);
$notifier = app(Notifier::class);
$notifier->notifyAdmins('Test message');
// }
// 模拟facade
// public function index(){
return Cache::remember('people', function () {
    return Person::all();
});
// }
// public function test_all_people_route_should_be_cached(){
$person = factory(Person::class)->make();
Cache::shouldReceive('remember')->once()->andReturn(collect([$person]));
$this->visit('people')->seeJson(['name' => $person->name]);
// }
// facade spy
// public function test_queue_job_should_be_pushed_after_regisration(){
Cache::spy();
$this->post('register', ['email' => 'joaquin@me.com']);
Cache::shouldHaveReceived('push')->with(SendWelcomeEmail::class, ['email' => 'joaquin@me.com']);
// }

// 常见的REST API端点结构

// php artisan make:controller Api\DogsController --resource
// 一个已生成的资源控制器
// <?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Migrations\Migration;

class DogsController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}

// php artisan make:model Dog --migration
// php artisan migrate

// dog实体的资源控制器示例
class DogsController extends Controller
{
    public function index()
    {
        return Dog::all();
    }
    public function strore(Request $request)
    {
        Dog::create($request->all());
    }
    public function show($id)
    {
        return Dog::findOrFail($id);
    }
    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->all());
    }
    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
    }
}

// 为资源控制器绑定路由
Route::group(['prefix' => 'api', 'namespace' => 'Api', function () {
    Route::resource('dogs', 'DogsController');
}]);
// Accept::application/vnd.github.v3+json
// 在Laravel中添加响应头
Route::get('dogs', function () {
    return response(Dog::all())->header('X-Greatness-Index', 9);
});
// 在Laravel中读取请求头
Route::get('dogs', function (Request $request) {
    echo $request->header('Accept');
});
// 分页的API路由
Route::get('dogs', function () {
    return Dog::paginate(20);
});
// 在查询构造器调用中使用paginate()方法
Route::get('dogs', function () {
    return DB::table('dogs')->paginate(20);
});
// 最简单的的API排序
Route::get('dogs', function (Request $request) {
    $sortCol = $request->input('sort', 'name');
    return Dog::orderBy($sortCol)->paginate(20);
});
// 指定排序方向的单列API排序
Route::get('dogs', function (Request $request) {
    $sortCol = $request->input('sort', 'name');
    $sortDir = starts_with($sortCol, '-') ? 'desc' : 'asc';
    $sortCol = ltrim($sort, '-');
    return Dog::orderBy($sortCol, $sortDir)->paginate(20);
});
// JSON API风格的排序
Route::get('dogs', function (Request $request) {
    $sorts = explode(',', $request->input('sort', ''));
    $query = Dog::query();
    foreach ($sorts as $sortCol) {
        $sortDir = starts_with($sortCol, '-') ? 'desc' : 'asc';
        $sortCol = ltrim($sort, '-');
        $query->orderBy($sortCol, $sortDir);
    }
    return $query->paginate(20);
});
// API结果的单词筛选
Route::get('dogs', function (Request $request) {
    $query = Dog::query();
    if ($request->has('filter')) {
        list($criteria, $value) = explode(':', $request->input('filter'));
        $query->where($criteria, $value);
    }
    return $query->paginate(20);
});
// API结果的多条件筛选
Route::get('dogs', function (Request $request) {
    $query = Dog::query();
    if ($request->has('filter')) {
        $filters = explode(',', $request->input('filter'));
        foreach ($filters as $filter) {
            list($criteria, $value) = explode(':', $filter);
            $query->where($criteria, $value);
        }
    }
    return $query->paginate(20);
});
// 简单的转换器
Route::get('users/{id}', function ($userId) {
    return (new UserTransformer(User::findOrFail($userId)));
});
class UserTransformer
{
    protected $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
    public function toArray()
    {
        return [
            'id' => $this->user->id,
            'name' => sprintf(
                "%S %S",
                $this->user->first_name,
                $this->user->last_name
            ),
            'friendsCount' => $this->user->friends->count()
        ];
    }
    public function toJson()
    {
        return json_encode($this->toArray());
    }
    public function __toString()
    {
        return $this->toJson();
    }
}
// 在转换器中允许资源的选择性嵌入
Route::get('users/{id}', function ($userId, Request $request) {
    $embeds = explode(',', $request->input('embed', ''));
    return (new UserTransformer(User::findOrFail($userId), $embeds));
});
class UserTransformer
{
    protected $user;
    protected $embeds;
    public function __construct($user, $embeds = [])
    {
        $this->user = $user;
        $this->embeds = $embeds;
    }
    public function toArray()
    {
        $append = [];
        if (in_array('friends', $this->embeds)) {
            $append['friends'] = $this->user->friends->map(function ($friend) {
                return (new FriendTransformer($friend))->toArray();
            });
        }
        return array_merge([
            'id' => $this->user->id,
            'name' => sprintf(
                "%S %S",
                $this->user->first_name,
                $this->user->last_name
            )
        ], $append);
    }
}
// composer require laravel/passport
// oauth/authorize
// oauth/clients
// oauth/clients/{client_id}
// oauth/personal-access-tokens
// oauth/personal-access-tokens/{token_id}
// oauth/scopes
// oauth/token
// oauth/token/refresh
// oauth/tokens
// oauth/tokens/{token_id}
// 通过Passport认证中间件保护API路由
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
// 使用Bearer令牌发送API请求
$http = new GuzzleHttp\Client;
$response = $http->request('GET', 'http://speakr.dev/api/user', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer' . $accessToken,
    ],
]);
// php artisan password:client --password
// 使用密码授权类型发送请求
Route::get('speaker/password-grant-auth', function () {
    $http = new GuzzleHttp\Client;
    $response = $http->post('http://speaker.dev/oauth/token', [
        'form_params' => [
            'grant_type' => 'password',
            'client_id' => config('speakr.id'),
            'client_secret' => config('speakr.secret'),
            'username' => 'matt@mattstauffer.co',
            'password' => 'my-speakr-password',
        ],
    ]);
    $thisUsersTokens = json_decode((string) $response->getBody(), true);
});
// 将用户重定向到OAuth服务器的消费性应用中
Route::get('speakr/redirect', function () {
    $query = http_build_query([
        'client_id' => config('speakr.id'),
        'redirect_uri' => url('speakr/callback'),
        'response_type' => 'code',
    ]);
    return redirect('http://speakr.dev/oauth/authorize?' . $query);
});
// php artisan vendor:publish --tag=passport-views
// 应用中的授权回调路由
Route::get('speakr/callback', function (Request $request) {
    if ($request->has('error')) {
    }
    $http = new GuzzleHttp\Client;
    $response = $http->post('http://speakr.dev/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => config('speakr.id'),
            'client_secret' => config('speakr.secret'),
            'redirect_uri' => url('speakr/callback'),
            'code' => $request->code,
        ],
    ]);
    $thisUsersTokens = json_decode((string)$response->getBody(), true);
});
// 设置一个较短的刷新时间
class test
{
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
        Passport::tokensExpireIn(
            Carbon::now()->addDays(15)
        );
        Passport::refreshTokensExpireIn(
            Carbon::now()->addDays(30)
        );
    }
}
// 在SpaceBook的routes/we.php中
Route::get(
    'speakr/request-refresh',
    function (Request $request) {
        $http = new GuzzleHttp\Client;
        $params = [
            'grant_type' => 'refresh_token',
            'client_id' => config('speakr.id'),
            'client_secret' => config('speakr.secret'),
            'redirect_uri' => url('speakr/callback'),
            'refresh_token' => $theTokenYouSaveEarlier,
        ];
        $response = $http->post(
            'http://speakr.dev/oauth/token',
            ['form_params' => $params]
        );
        $thisUsersTokens = json_decode(
            (string)$response->getBody(),
            true
        );
    }
);
// 创建个人访问客户端
// php artisan passport:client --personal

$token = $user->createToken('Token Name')->accessToken;
$token = $user->cerateToken('My Token', ['place-orders'])->accessToken;
// 设置jQuery以便传递所有AJAX请求的LaravelCSRF令牌
// $ajaxSetup({
//     'headers':{
//         'X-CSRF-TOKEN':"{{ csrf_token() }}"
//     }
// });
// /oauth/clients(GET,POST);
// /oauth/clients/{id}(DELETE,PUT);
// /oauth/personal-access-tokens(GET,POST);
// /oauth/personal-access-tokens/{id}(DELETE);
// /oauth/scopes(GET)
// /oauth/tokens(GET)
// /oauth/tokens/{id}(DELETE)
// php artisan vendor:publish --tag=passport-components
// 将Passport的Vue组件导入app.js
// require('./bootstrap');
// Vue.component(
//     'passport-clients',
//     require('./components/passport/Clients.vue')
// );
// Vue.component(
//     'passport-authorized-clients',
//     require('./components/passort/AuthorizedClients.vue')
// );
// Vue.component(
//     'passport-personal-access-tokens',
//     require('./components/passport/PersonalAccessTokens.vue')
// );
// const app = new Vue({
//     el:'body'
// });
// <passport-clients></passport-clients>
// <passport-authorized-clients></passport-authorized-clients>
// <passport-personal-access-tokens></passport-personal-access-tokens>
// 定义Passport作用域
use Laravel\Passport\Passport;
// public function boot(){
//     Passport::tokensCan([
//         'list-clips'=>'List sound clips',
//         'add-delete-clips'=>'Add new and delete old sound clips',
//         'admin-account'=>'Administer account details',
//     ]);
// }
// 请求授权访问特定作用域
Route::get('speakr/redirect', function () {
    $query = http_build_query([
        'client_id' => config('speakr.id'),
        'redirect_uri' => url('speakr/callback'),
        'response_type' => 'code',
        'scope' => 'list-clips add-delete-clips'
    ]);
    return redirect('http://speakr.dev/oauth/authorize?' . $query);
});
// 检查一个用户认证的令牌是否能执行给定的操作
Route::get('events', function () {
    if (auth()->user()->tokenCan('add-delete-clips')) {
    }
});
// 使用中间件来限制基于令牌作用域的访问
Route::get('clips', function () {
})->middleware('scopes:list-clips,add-delete-clips');
Route::get('clips', function () {
})->middleware('scope:list-clips,add-delete-clips');
$table->string('api_token', 60)->unique();
// 在路由组织中使用API认证中间件
Route::group(['prefix' => 'api', 'middleware' => 'auth:api'], function () {
});
$user = auth()->guard('api')->user();
// 一个常见的API测试模式
class DogsApiTest extends TestCase
{
    use WithoutMiddleware, DatabaseMigrations;
    public function test_it_gets_all_dogs()
    {
        $this->be(factory(User::class)->create());
        $dog1 = factory(Dog::class)->create();
        $dog2 = factory(Dog::class)->create();
        $this->visit('api/dogs');
        $this->seeJson([
            'name' => $dog1->name
        ]);
        $this->seeJson([
            'name' => $dog2->name
        ]);
    }
}
// 默认可用的存储磁盘
// 'disks'=>[
//     'local'=>[
//         'driver'=>'local',
//         'root'=>storage_path('app'),
//     ],
//     'public'=>[
//         'driver'=>'local',
//         'root'=>storage_path('app/public'),
//         'visibility'=>'public',
//     ],
//     's3'=>[
//         'driver'=>'s3',
//         'key'=>'your-key',
//         'secret'=>'your-secret',
//         'region'=>'your-region',
//         'bucket'=>'your-bucket',
//     ],
// ],
// php artisan storage:link
// get('file.jpg');
// put('file.jpg', $contentsOrStream);
// putFile('myDir', $file);
// exites('file.jpg');
// copy('file.jpg', 'newfile.jpg');
// move('file.jpg', 'newfile.jpg');
// prepend('my.log', 'log.text');
// append('my.log', 'log.text');

// 添加额外的Flysystem提供商
// public function boot(){
//     Storage::extend('dropbox',function($app,$config){
//         $client = new DropboxClient(
//             $config['accessToken'],$config['clientIdentifier']
//         );
//         return new Filesystem(new DropboxAdapter($client));
//     });
// }

// 常见的文件上传流程
// class DogsController
// {
//     public function updatePicture(Request $request, Dog $dog)
//     {
//         Storage::put(
//             'dogs/' . $dog->id,
//             file_get_contents($request->file('picture')->getRealPath())
//         );
//     }
// }

// 使用Intervention进行更复杂的文件上传
class DogsController
{
    public function updatePicture(Request $request, Dog $dog)
    {
        $original = $request->file('picture');
        $image = Image::make($original)->resize(150, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 75);
        Storage::put(
            'dogs/thumbs' . $dog->id,
            $image->getEncoded()
        );
    }
}

// 在响应对象上使用session()方法
Route::get('dashboard', function (Request $request) {
    $request->session()->get('user_id');
});
// 为会话注入支持类
Route::get('dashboard', function (Illuminate\Session\Store $session) {
    return $session->get('user_id');
});
// 使用全局session()帮手
$value = session()->get('key');
$value = session('key');
session()->put('key', 'value');
session(['key', 'value']);
session()->get($key, $fallbackValue);

$points = session()->get('points');
$points = session()->get('points', 0);
$points = session()->get('points', function () {
    return (new PointGetterService)->getPoints();
});
session()->put($key, $value);
session()->put('points', 45);
$points = session()->get('points');
session()->push($key, $value);
session()->put('friends', ['Saul', 'Quang', 'Mechteld']);
session()->push('friends', 'Javier');
session()->has($key);
if (session()->has('points')) {
}
session()->forget($key);
session()->flush();
session()->put('a', 'awesome');
session()->put('b', 'bodacious');
session()->forget('a');
session()->flush();
session()->pull($key, $fallbackValue);
session()->regenerate();