<?php
require_once "Fdd.Config.php";
require_once "Fdd.Exception.php";

/**
 * 数据对象基础类，该类中定义数据类最基本的行为，包括：
 * 计算/设置/获取签名、输出xml格式的参数、从xml读取数据对象等
 * @author widyhu
 */
class FddDataBase
{
    protected $values = array();

    /**
     * 输出xml字符
     * @throws FddException
     **/
    public function ToXml()
    {
        if (!is_array($this->values) || count($this->values) <= 0) {
            throw new FddException("数组数据异常！");
        }

        $xml = "<xml>";
        foreach ($this->values as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "<" . $key . ">";
            } else {
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]><" . $key . ">";
            }
        }
        $xml .= "</xml>";
        return $xml;
    }

    /**
     * 将xml转为array
     * @param string $xml
     * @throws FddException
     * @return  $this->value
     */
    public function FromXml($xml)
    {
        if (!$xml) {
            throw new FddException("xml数据异常！");
        }
        //将XML转为array
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $this->values = json_decode(json_encode(simplexml_load_string($xml, "SimpleXMLElement", LIBXML_NOCDATA)), true);
        return $this->values;
    }

    /**
     * 格式化参数格式化成url参数
     */
    public function ToUrlParams()
    {
        $buff = "";
        foreach ($this->values as $k => $v) {
            if ($k != "sign" && $v != "" && !is_array($v)) {
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }

    /**
     * 设置AppID
     * @param string $value
     **/
    public function SetApp_id($value)
    {
        $this->values["app_id"] = $value;
    }

    /**
     * 获取AppId
     * @return 值
     **/
    public function GetApp_id()
    {
        return $this->values["app_id"];
    }

    /**
     * 判断AppId是否存在
     * @return true 或 false
     **/
    public function IsApp_idSet()
    {
        return array_key_exists("organization", $this->values);
    }

    /**
     * 设置请求时间
     * @param string $value
     **/
    public function SetTimestamp($value)
    {
        $this->values["timestamp"] = $value;
    }
    /**
     * 获取请求时间
     * @return 值
     **/
    public function GetTimestamp()
    {
        return $this->values["timestamp"];
    }
    /**
     * 判断请求时间是否存在
     * @return true 或 false
     **/
    public function IsTimestampSet()
    {
        return array_key_exists("timestamp", $this->values);
    }
    /**
     * 设置版本号
     * @param string $value
     **/
    public function SetV($value)
    {
        $this->values["v"] = $value;
    }
    /**
     * 获取版本号
     * @return 值
     **/
    public function GetV()
    {
        return $this->values["v"];
    }
    /**
     * 判断版本号是否存在
     * @return true 或 false
     **/
    public function IsVSet()
    {
        return array_key_exists("v", $this->values);
    }

    /**
     * 设置消息摘要
     * @param string $value
     **/
    public function SetMsg_digest($value)
    {
        $this->values["msg_digest"] = $value;
    }
    /**
     * 获取消息摘要
     * @return 值
     **/
    public function GetMsg_digest()
    {
        return $this->values["msg_digest"];
    }
    /**
     * 判断消息摘要是否存在
     * @return true 或 false
     **/
    public function IsMsg_digestSet()
    {
        return array_key_exists("msg_digest", $this->values);
    }

    /**
     * 获取设置的值
     */
    public function GetValues()
    {
        return $this->values;
    }
}

/**
 * 合规化方案 账号注册
 * Class FddAccount
 */
class FddAccount extends FddDataBase
{

    /**
     * 设置 用户在接入方的唯一标识
     * @param string $value
     **/
    public function SetOpenID($value)
    {
        $this->values['open_id'] = $value;
    }

    /**
     * 判断 唯一标识 是否存在
     * @return true 或 false
     **/
    public function IsOpenIDSet()
    {
        return array_key_exists('open_id', $this->values);
    }

    /**
     * 设置用户类型 1:个人，2:企业
     * @param string $value
     **/
    public function SetAccountType($value)
    {
        $this->values['account_type'] = $value;
    }

    /**
     * 判断 唯一标识 是否存在
     * @return true 或 false
     **/
    public function IsAccountTypeSet()
    {
        return array_key_exists('account_type', $this->values);
    }
}
/**
 * 合规化方案 印章上传
 * Class FddAccount
 */
class FddSignature extends FddDataBase
{

    /**
     * 设置 客户编号
     * @param string $value
     **/
    public function SetCustomerId($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     * 判断 客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCustomerId()
    {
        return array_key_exists('customer_id', $this->values);
    }

    /**
     * @param string $value
     **/
    public function SetSignatureImgBase64($value)
    {
        $this->values['signature_img_base64'] = $value;
    }

    /**
     * @return true 或 false
     **/
    public function IsSignatureImgBase64()
    {
        return array_key_exists('signature_img_base64', $this->values);
    }
}

/**
 * 合规化方案 印章自定义内容
 * Class FddAccount
 */
class FddSignatureContent extends FddDataBase
{

    /**
     * 设置 客户编号
     * @param string $value
     **/
    public function SetCustomerId($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     * 判断 客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCustomerId()
    {
        return array_key_exists('customer_id', $this->values);
    }

    /**
     * @param string $value
     **/
    public function SetContent($value)
    {
        $this->values['content'] = $value;
    }

    /**
     * @return true 或 false
     **/
    public function IsContent()
    {
        return array_key_exists('content', $this->values);
    }
}
/**
 * 合同文档模板和生成类
 * Class FddTemplate
 */
class FddTemplate extends FddDataBase
{
    /**
     * 设置 模板编号
     * @param string $value
     **/
    public function SetTemplate_id($value)
    {
        $this->values['template_id'] = $value;
    }
    /**
     * 获取 模板编号
     * @return 值
     **/
    public function GetTemplate_id()
    {
        return $this->values['template_id'];
    }
    /**
     * 判断 模板编号 是否存在
     * @return true 或 false
     **/
    public function IsTemplate_idSet()
    {
        return array_key_exists('template_id', $this->values);
    }
    /**
     * 设置 文档类型
     * @param string $value
     **/
    public function SetDoc_type($value)
    {
        $this->values['doc_type'] = $value;
    }
    /**
     * 判断 文档类型 是否存在
     * @param string $value
     **/
    public function IsDoc_typeSet()
    {
        return array_key_exists('doc_type', $this->values);
    }
    /**
     * 设置 文档地址
     * @param string $value
     **/
    public function SetDoc_url($value)
    {
        $this->values['doc_url'] = $value;
    }
    /**
     * 判断 文档地址 是否存在
     * @return true 或 false
     **/
    public function IsDoc_urlSet()
    {
        return array_key_exists('doc_url', $this->values);
    }
    /**
     * 设置 文档标题
     * @param string $value
     **/
    public function SetDoc_title($value)
    {
        $this->values['doc_title'] = $value;
    }
    /**
     * 获取 文档标题
     * @return 值
     **/
    public function GetDoc_title()
    {
        return $this->values['doc_title'];
    }
    /**
     * 判断 文档标题 是否存在
     * @return true 或 false
     **/
    public function IsDoc_titleSet()
    {
        return array_key_exists('doc_title', $this->values);
    }
    /**
     * 设置 PDF模板
     * @param string $value
     **/
    public function SetFile($value)
    {
        $this->values['file'] = $value;
    }
    /**
     * 判断 PDF模板 是否存在
     * @return true 或 false
     **/
    public function IsFileSet()
    {
        return array_key_exists('file', $this->values);
    }
    /**
     * 设置 合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }
    /**
     * 获取 合同编号
     * @return 值
     **/
    public function GetContract_id()
    {
        return $this->values['contract_id'];
    }
    /**
     * 判断 合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idSet()
    {
        return array_key_exists('contract_id', $this->values);
    }
    /**
     * 设置 字体大小
     * @param string $value
     **/
    public function SetFont_size($value)
    {
        $this->values['font_size'] = $value;
    }
    /**
     * 获取 字体大小
     * @return 值
     **/
    public function GetFont_size()
    {
        return $this->values['font_size'];
    }
    /**
     * 判断 字体大小 是否存在
     * @return true 或 false
     **/
    public function IsFont_sizeSet()
    {
        return array_key_exists('font_size', $this->values);
    }
    /**
     * 设置 字体类型
     * @param string $value
     **/
    public function SetFont_type($value)
    {
        $this->values['font_type'] = $value;
    }
    /**
     * 获取 字体类型
     * @return 值
     **/
    public function GetFont_type()
    {
        return $this->values['font_type'];
    }
    /**
     * 判断 字体类型 是否存在
     * @return true 或 false
     **/
    public function IsFont_typeSet()
    {
        return array_key_exists('font_type', $this->values);
    }
    /**
     * 设置 填充内容
     * @param string $value
     **/
    public function SetParameter_map($value)
    {
        $this->values['parameter_map'] = $value;
    }
    /**
     * 获取 填充内容
     * @return 值
     **/
    public function GetParameter_map()
    {
        return $this->values['parameter_map'];
    }
    /**
     * 判断 填充内容 是否存在
     * @return true 或 false
     **/
    public function IsParameter_mapSet()
    {
        return array_key_exists('parameter_map', $this->values);
    }
    /**
     * 设置 动态表格
     * @param string $value
     **/
    public function SetDynamic_tables($value)
    {
        $this->values['dynamic_tables'] = $value;
    }
    /**
     * 获取 动态表格
     * @return 值
     **/
    public function GetDynamic_tables()
    {
        return $this->values['dynamic_tables'];
    }
    /**
     * 判断 动态表格 是否存在
     * @return true 或 false
     **/
    public function IsDynamic_tablesSet()
    {
        return array_key_exists('dynamic_tables', $this->values);
    }
    /**
     * 设置 页面添加table
     * @param string $value
     **/
    public function SetInsertWay($value)
    {
        $this->values['insertWay'] = $value;
    }
    /**
     * 获取 页面添加table
     * @return 值
     **/
    public function GetInsertWay()
    {
        return $this->values['insertWay'];
    }
    /**
     * 判断 页面添加table 是否存在
     * @return true 或 false
     **/
    public function IsInsertWaySet()
    {
        return array_key_exists('insertWay', $this->values);
    }
    /**
     * 设置 关键字
     * @param string $value
     **/
    public function SetKeyword($value)
    {
        $this->values['keyword'] = $value;
    }
    /**
     * 获取 关键字
     * @return 值
     **/
    public function GetKeyword()
    {
        return $this->values['keyword'];
    }
    /**
     * 判断 关键字 是否存在
     * @return true 或 false
     **/
    public function IsKeywordSet()
    {
        return array_key_exists('keyword', $this->values);
    }
    /**
     * 设置 从第几页开始
     * @param string $value
     **/
    public function SetPageBegin($value)
    {
        $this->values['pageBegin'] = $value;
    }
    /**
     * 获取 从第几页开始
     * @return 值
     **/
    public function GetPageBegin()
    {
        return $this->values['pageBegin'];
    }
    /**
     * 判断 从第几页开始 是否存在
     * @return true 或 false
     **/
    public function IsPageBeginSet()
    {
        return array_key_exists('pageBegin', $this->values);
    }
    /**
     * 设置 边框
     * @param string $value
     **/
    public function SetBorderFlag($value)
    {
        $this->values['borderFlag'] = $value;
    }
    /**
     * 获取 边框
     * @return 值
     **/
    public function GetBorderFlag()
    {
        return $this->values['borderFlag'];
    }
    /**
     * 判断 边框 是否存在
     * @return true 或 false
     **/
    public function IsBorderFlagSet()
    {
        return array_key_exists('borderFlag', $this->values);
    }
    /**
     * 设置 正文行高
     * @param string $value
     **/
    public function SetCellHeight($value)
    {
        $this->values['cellHeight'] = $value;
    }
    /**
     * 获取 正文行高
     * @return 值
     **/
    public function GetCellHeight()
    {
        return $this->values['cellHeight'];
    }
    /**
     * 判断 正文行高 是否存在
     * @return true 或 false
     **/
    public function IsCellHeightSet()
    {
        return array_key_exists('cellHeight', $this->values);
    }
    /**
     * 设置 Table中每个单元的水平对齐方式
     * @param string $value
     **/
    public function SetCellHorizontalAlignment($value)
    {
        $this->values['cellHorizontalAlignment'] = $value;
    }
    /**
     * 获取 Table中每个单元的水平对齐方式
     * @return 值
     **/
    public function GetCellHorizontalAlignment()
    {
        return $this->values['cellHorizontalAlignment'];
    }
    /**
     * 判断 Table中每个单元的水平对齐方式 是否存在
     * @return true 或 false
     **/
    public function IsCellHorizontalAlignmentSet()
    {
        return array_key_exists('cellHorizontalAlignment', $this->values);
    }
    /**
     * 设置 Table中每个单元的垂直对齐方式
     * @param string $value
     **/
    public function SetCellVerticalAlignment($value)
    {
        $this->values['cellVerticalAlignment'] = $value;
    }
    /**
     * 获取 Table中每个单元的垂直对齐方式
     * @return 值
     **/
    public function GetCellVerticalAlignment()
    {
        return $this->values['cellVerticalAlignment'];
    }
    /**
     * 判断 Table中每个单元的垂直对齐方式 是否存在
     * @return true 或 false
     **/
    public function IsCellVerticalAlignmentSet()
    {
        return array_key_exists('cellVerticalAlignment', $this->values);
    }
    /**
     * 设置 表头上方的一级标题
     * @param string $value
     **/
    public function SetTheFirstHeader($value)
    {
        $this->values['theFirstHeader'] = $value;
    }
    /**
     * 获取 表头上方的一级标题
     * @return 值
     **/
    public function GetTheFirstHeader()
    {
        return $this->values['theFirstHeader'];
    }
    /**
     * 判断 表头上方的一级标题 是否存在
     * @return true 或 false
     **/
    public function IsTheFirstHeaderSet()
    {
        return array_key_exists('theFirstHeader', $this->values);
    }
    /**
     * 设置 表头信息
     * @param string $value
     **/
    public function SetHeaders($value)
    {
        $this->values['headers'] = $value;
    }
    /**
     * 获取 表头信息
     * @return 值
     **/
    public function GetHeaders()
    {
        return $this->values['headers'];
    }
    /**
     * 判断 表头信息 是否存在
     * @return true 或 false
     **/
    public function IsHeadersSet()
    {
        return array_key_exists('headers', $this->values);
    }
    /**
     * 设置 表头对齐方式
     * @param string $value
     **/
    public function SetHeadersAlignment($value)
    {
        $this->values['headersAlignment'] = $value;
    }
    /**
     * 获取 表头对齐方式
     * @return 值
     **/
    public function GetHeadersAlignment()
    {
        return $this->values['headersAlignment'];
    }
    /**
     * 判断 表头对齐方式 是否存在
     * @return true 或 false
     **/
    public function IsHeadersAlignmentSet()
    {
        return array_key_exists('headersAlignment', $this->values);
    }
    /**
     * 设置 正文
     * @param string $value
     **/
    public function SetDatas($value)
    {
        $this->values['datas'] = $value;
    }
    /**
     * 获取 正文
     * @return 值
     **/
    public function GetDatas()
    {
        return $this->values['datas'];
    }
    /**
     * 判断 正文 是否存在
     * @return true 或 false
     **/
    public function IsDatasSet()
    {
        return array_key_exists('datas', $this->values);
    }
    /**
     * 设置 各列宽度比例
     * @param string $value
     **/
    public function SetColWidthPercent($value)
    {
        $this->values['colWidthPercent'] = $value;
    }
    /**
     * 获取 各列宽度比例
     * @return 值
     **/
    public function GetColWidthPercent()
    {
        return $this->values['colWidthPercent'];
    }
    /**
     * 判断 各列宽度比例 是否存在
     * @return true 或 false
     **/
    public function IsColWidthPercentSet()
    {
        return array_key_exists('colWidthPercent', $this->values);
    }
    /**
     * 设置 table的水平对齐方式
     * @param string $value
     **/
    public function SetTableHorizontalAlignment($value)
    {
        $this->values['tableHorizontalAlignment'] = $value;
    }
    /**
     * 获取 table的水平对齐方式
     * @return 值
     **/
    public function GetTableHorizontalAlignment()
    {
        return $this->values['tableHorizontalAlignment'];
    }
    /**
     * 判断 table的水平对齐方式 是否存在
     * @return true 或 false
     **/
    public function IsTableHorizontalAlignmentSet()
    {
        return array_key_exists('tableHorizontalAlignment', $this->values);
    }
    /**
     * 设置 table宽度的百分比
     * @param string $value
     **/
    public function SetTableWidthPercentage($value)
    {
        $this->values['tableWidthPercentage'] = $value;
    }
    /**
     * 获取 table宽度的百分比
     * @return 值
     **/
    public function GetTableWidthPercentage()
    {
        return $this->values['tableWidthPercentage'];
    }
    /**
     * 判断 table宽度的百分比 是否存在
     * @return true 或 false
     **/
    public function IsTableWidthPercentageSet()
    {
        return array_key_exists('tableWidthPercentage', $this->values);
    }
    /**
     * 设置 设置table居左居中居右后的水平偏移量
     * @param string $value
     **/
    public function SetTableHorizontalOffset($value)
    {
        $this->values['tableHorizontalOffset'] = $value;
    }
    /**
     * 获取 设置table居左居中居右后的水平偏移量
     * @return 值
     **/
    public function GetTableHorizontalOffset()
    {
        return $this->values['tableHorizontalOffset'];
    }
    /**
     * 判断 设置table居左居中居右后的水平偏移量 是否存在
     * @return true 或 false
     **/
    public function IsTableHorizontalOffsetSet()
    {
        return array_key_exists('tableHorizontalOffset', $this->values);
    }
}

/**
 * 合同签署类
 * Class FddSignContract
 */
class FddSignContract extends FddDataBase
{

    /**
     * 设置 存证方案手动签署时所传身份证--用于刷脸验证，姓名和身份证需要同时传
     * @param string $value
     **/
    public function SetCustomerIdentNo($value)
    {
        $this->values['customer_ident_no'] = $value;
    }
    /**
     * 获取 存证方案手动签署时所传身份证--用于刷脸验证，姓名和身份证需要同时传
     * @param string $value
     **/
    public function GetCustomerIdentNo()
    {
        return $this->values['customer_ident_no'];
    }
    /**
     * 判断 存证方案手动签署时所传身份证 是否存在
     * @return true 或 false
     **/
    public function IsCustomerIdentNoSet()
    {
        return array_key_exists('customer_ident_no', $this->values);
    }

    /**
     * 设置 存证方案手动签署时所传姓名--用于刷脸验证，姓名和身份证需要同时传
     * @param string $value
     **/
    public function SetCustomerName($value)
    {
        $this->values['customer_name'] = $value;
    }
    /**
     * 获取 存证方案手动签署时所传姓名--用于刷脸验证，姓名和身份证需要同时传
     * @param string $value
     **/
    public function GetCustomerName()
    {
        return $this->values['customer_name'];
    }
    /**
     * 判断 存证方案手动签署时所传姓名 是否存在
     * @return true 或 false
     **/
    public function IsCustomerNameSet()
    {
        return array_key_exists('customer_name', $this->values);
    }
    /**
     * 设置 存证方案手动签署时所传手机号
     * @param string $value
     **/
    public function SetCustomerMobile($value)
    {
        $this->values['customer_mobile'] = $value;
    }
    /**
     * 获取 存证方案手动签署时所传手机号
     * @param string $value
     **/
    public function GetCustomerMobile()
    {
        return $this->values['customer_mobile'];
    }
    /**
     * 判断 存证方案手动签署时所传手机号 是否存在
     * @return true 或 false
     **/
    public function IsCustomerMobileSet()
    {
        return array_key_exists('customer_mobile', $this->values);
    }
    /**
     * 设置 签署时所传合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }
    /**
     * 获取 签署时所传合同编号
     * @param string $value
     **/
    public function GetContract_id()
    {
        return $this->values['contract_id'];
    }
    /**
     * 判断 签署时所传合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idSet()
    {
        return array_key_exists('contract_id', $this->values);
    }
    /**
     * 设置 签署时所传客户编号
     * @param string $value
     **/
    public function SetCustomer_id($value)
    {
        $this->values['customer_id'] = $value;
    }
    /**
     * 获取 签署时所传合同编号
     * @param string $value
     **/
    public function GetCustomer_id()
    {
        return $this->values['customer_id'];
    }
    /**
     * 判断 签署时所传客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCustomer_idSet()
    {
        return array_key_exists('customer_id', $this->values);
    }
    /**
     * 设置 签署时所传交易号
     * @param string $value
     **/
    public function SetTransaction_id($value)
    {
        $this->values['transaction_id'] = $value;
    }
    /**
     * 获取 是否设置有效期
     * @param string $value
     **/
    public function GetTransaction_id()
    {
        return $this->values['transaction_id'];
    }
    /**
     * 判断 签署时所传交易号 是否存在
     **/
    public function IsTransaction_idSet()
    {
        return array_key_exists('transaction_id', $this->values);
    }
    /**
     * 设置 有效时间
     * @param string $value
     **/
    public function SetExpire_time($value)
    {
        $this->values['expire_time'] = $value;
    }
    /**
     * 设置 传入url
     * @param string $value
     **/
    public function SetSource_url($value)
    {
        $this->values['source_url'] = $value;
    }
    /**
     * 判断 传入url 是否存在
     **/
    public function IsSource_urlSet()
    {
        return array_key_exists('source_url', $this->values);
    }
    /**
     * 设置 短信标识
     * @param string $value
     **/
    public function SetPush_type($value)
    {
        $this->values['push_type'] = $value;
    }
    /**
     * 判断 短信标识 是否存在
     **/
    public function IsPush_typeSet()
    {
        return array_key_exists('push_type', $this->values);
    }
    /**
     * 设置 定位关键字
     * @param string $value
     **/
    public function SetSign_keyword($value)
    {
        $this->values['sign_keyword'] = $value;
    }
    /**
     * 获取 有效期
     **/
    public function GetSign_keyword()
    {
        return $this->values['sign_keyword'];
    }
    /**
     * 判断 定位关键字 是否存在
     **/
    public function IsSign_keywordSet()
    {
        return array_key_exists('sign_keyword', $this->values);
    }
    /**
     * 设置 定位关键字(多)
     * @param string $value
     **/
    public function SetSign_keywords($value)
    {
        $this->values['sign_keywords'] = $value;
    }
    /**
     * 判断 定位关键字（多） 是否存在
     **/
    public function IsSign_keywordsSet()
    {
        return array_key_exists('sign_keywords', $this->values);
    }
    /**
     * 设置 是否设置有效期
     * @param string $value
     **/
    public function SetLimit_type($value)
    {
        $this->values['limit_type'] = $value;
    }
    /**
     * 获取 是否设置有效期
     **/
    public function GetLimit_type()
    {
        return $this->values['limit_type'];
    }
    /**
     * 判断 是否设置有效期 是否存在
     **/
    public function IsLimit_typeSet()
    {
        return array_key_exists('limit_type', $this->values);
    }
    /**
     * 设置 有效期
     * @param string $value
     **/
    public function SetValidity($value)
    {
        $this->values['validity'] = $value;
    }
    /**
     * 获取 有效期
     **/
    public function GetValidity()
    {
        return $this->values['validity'];
    }
    /**
     * 判断 有效期 是否存在
     **/
    public function IsValiditySet()
    {
        return array_key_exists('validity', $this->values);
    }
    /**
     * 设置 页面跳转url（签名结果同步通知）
     * @param string $value
     **/
    public function SetReturn_url($value)
    {
        $this->values['return_url'] = $value;
    }
    /**
     * 判断 页面跳转url（签名结果同步通知） 是否存在
     **/
    public function IsReturn_urlSet()
    {
        return array_key_exists('return_url', $this->values);
    }
    /**
     * 设置 签名结果异步步通知url
     * @param string $value
     **/
    public function SetNotify_url($value)
    {
        $this->values['notify_url'] = $value;
    }
    /**
     * 设置 签名结果异步步通知url
     * @param string $value
     **/
    public function IsNotify_urlSet()
    {
        return array_key_exists('notify_url', $this->values);
    }
    /**
     * 设置 文档标题
     * @param string $value
     **/
    public function SetDoc_title($value)
    {
        $this->values['doc_title'] = $value;
    }
    /**
     * 获取 文档标题
     * @param string $value
     **/
    public function GetDoc_title()
    {
        return $this->values['doc_title'];
    }
    /**
     * 判断 文档标题 是否存在
     * @return true 或 false
     **/
    public function IsDoc_titleSet()
    {
        return array_key_exists('doc_title', $this->values);
    }
    /**
     * 设置 手写章
     * @param string $value
     **/
    public function SetHandsignimg($value)
    {
        $this->values['handsignimg'] = $value;
    }
    /**
     * 设置 短信验证码
     * @param string $value
     **/
    public function SetSms($value)
    {
        $this->values['sms'] = $value;
    }
    /**
     * 判断 短信验证码 是否存在
     * @param string $value
     **/
    public function IsSmsSet()
    {
        return array_key_exists('sms', $this->values);
    }
    /**
     * 设置 短信校验令牌
     * @param string $value
     **/
    public function SetMarkUUID($value)
    {
        $this->values['markUUID'] = $value;
    }
    /**
     * 判断 短信校验令牌 是否存在
     * @param string $value
     **/
    public function IsMarkUUIDSet()
    {
        return array_key_exists('markUUID', $this->values);
    }
    /**
     * 设置 批量签署记录主键
     * @param string $value
     **/
    public function SetExtBatchSignId($value)
    {
        $this->values['extBatchSignId'] = $value;
    }
    /**
     * 判断 批量签署记录主键 是否存在
     * @param string $value
     **/
    public function IsExtBatchSignIdSet()
    {
        return array_key_exists('extBatchSignId', $this->values);
    }
    /**
     * 设置 填充内容
     * @param string $value
     **/
    public function SetParameter_map($value)
    {
        $this->values['parameter_map'] = $value;
    }
    /**
     * 判断 填充内容 是否存在
     * @return true 或 false
     **/
    public function IsParameter_mapSet()
    {
        return array_key_exists('parameter_map', $this->values);
    }
    /**
     * 设置 签署截止时间
     * @param string $value
     **/
    public function SetExpiration_time($value)
    {
        $this->values['expiration_time'] = $value;
    }
    /**
     * 判断 签署截止时间 是否存在
     * @return true 或 false
     **/
    public function IsExpiration_timeSet()
    {
        return array_key_exists('expiration_time', $this->values);
    }
    /**
     * 设置 是否发送通知（短信 及邮件）
     * @param string $value
     **/
    public function SetSend_msg($value)
    {
        $this->values['send_msg'] = $value;
    }
    /**
     * 判断 是否发送通知（短信 及邮件） 是否存在
     * @return true 或 false
     **/
    public function IsSend_msgSet()
    {
        return array_key_exists('send_msg', $this->values);
    }
    /**
     * 设置 待签署人姓名
     * @param string $value
     **/
    public function SetUser_names($value)
    {
        $this->values['user_names'] = $value;
    }
    /**
     * 判断 待签署人姓名 是否存在
     * @return true 或 false
     **/
    public function IsUser_namesSet()
    {
        return array_key_exists('user_names', $this->values);
    }
    /**
     * 设置 待签署人手机号
     * @param string $value
     **/
    public function SetUser_mobiles($value)
    {
        $this->values['user_mobiles'] = $value;
    }
    /**
     * 判断 待签署人手机号 是否存在
     * @return true 或 false
     **/
    public function IsUser_mobilesSet()
    {
        return array_key_exists('user_mobiles', $this->values);
    }
    /**
     * 设置 待签署人邮箱
     * @param string $value
     **/
    public function SetUser_emails($value)
    {
        $this->values['user_emails'] = $value;
    }
    /**
     * 判断 待签署人邮箱 是否存在
     * @return true 或 false
     **/
    public function IsUser_emailsSet()
    {
        return array_key_exists('user_emails', $this->values);
    }
    /**
     * 设置 批次号（流水号）
     * @param string $value
     **/
    public function SetBatch_id($value)
    {
        $this->values['batch_id'] = $value;
    }
    /**
     * 获取 批次号（流水号）
     * @param string $value
     **/
    public function GetBatch_id()
    {
        return $this->values['batch_id'];
    }
    /**
     * 判断 批次号（流水号） 是否存在
     * @return true 或 false
     **/
    public function IsBatch_idSet()
    {
        return array_key_exists('batch_id', $this->values);
    }
    /**
     * 设置 代理人客户编号
     * @param string $value
     **/
    public function SetOuth_customer_id($value)
    {
        $this->values['outh_customer_id'] = $value;
    }
    /**
     * 获取 代理人客户编号
     * @param string $value
     **/
    public function GetOuth_customer_id()
    {
        return $this->values['outh_customer_id'];
    }
    /**
     * 判断 代理人客户编号 是否存在
     * @return true 或 false
     **/
    public function IsOuth_customer_idSet()
    {
        return array_key_exists('outh_customer_id', $this->values);
    }
    /**
     * 设置 签章数据
     * @param string $value
     **/
    public function SetSign_data($value)
    {
        $this->values['sign_data'] = $value;
    }
    /**
     * 获取 签章数据
     * @param string $value
     **/
    public function GetSign_data()
    {
        return $this->values['sign_data'];
    }
    /**
     * 判断 签章数据 是否存在
     * @return true 或 false
     **/
    public function IsSign_dataSet()
    {
        return array_key_exists('sign_data', $this->values);
    }
    /**
     * 设置 批量请求标题
     * @param string $value
     **/
    public function SetBatch_title($value)
    {
        $this->values['batch_title'] = $value;
    }
    /**
     * 获取 批量请求标题
     * @param string $value
     **/
    public function GetBatch_title()
    {
        return $this->values['batch_title'];
    }
    /**
     * 判断 批量请求标题 是否存在
     * @return true 或 false
     **/
    public function IsBatch_titleSet()
    {
        return array_key_exists('batch_title', $this->values);
    }
    /**
     * 设置 客户类型
     * @param string $value
     **/
    public function SetClientType($value)
    {
        $this->values['clientType'] = $value;
    }
    /**
     * 判断 客户类型 是否存在
     * @return true 或 false
     **/
    public function IsClientTypeSet()
    {
        return array_key_exists('clientType', $this->values);
    }
    /**
     * 设置 客户角色
     * @param string $value
     **/
    public function SetClient_role($value)
    {
        $this->values['client_role'] = $value;
    }
    /**
     * 判断 客户角色 是否存在
     * @return true 或 false
     **/
    public function IsClient_roleSet()
    {
        return array_key_exists('client_role', $this->values);
    }
    /**
     * 设置 有效次数
     * @param string $value
     **/
    public function SetQuantity($value)
    {
        $this->values['quantity'] = $value;
    }
    /**
     * 获取 有效次数
     * @param string $value
     **/
    public function GetQuantity()
    {
        return $this->values['quantity'];
    }
    /**
     * 判断 有效次数 是否存在
     * @return true 或 false
     **/
    public function IsQuantitySet()
    {
        return array_key_exists('quantity', $this->values);
    }
    /**
     * 设置 关键字签章策略
     * @param string $value
     **/
    public function SetKeyword_strategy($value)
    {
        $this->values['keyword_strategy'] = $value;
    }
    /**
     * 判断 关键字签章策略 是否存在
     * @return true 或 false
     **/
    public function IsKeyword_strategySet()
    {
        return array_key_exists('keyword_strategy', $this->values);
    }
    /**
     * 设置 关键字签章策略
     * @param string $value
     **/
    public function SetAcrosspage_customer_id($value)
    {
        $this->values['acrosspage_customer_id'] = $value;
    }
    /**
     * 判断 关键字签章策略 是否存在
     * @return true 或 false
     **/
    public function IsAcrosspage_customer_idSet()
    {
        return array_key_exists('acrosspage_customer_id', $this->values);
    }
    /**
     * 设置 定位类型
     * @param string $value
     **/
    public function SetPosition_type($value)
    {
        $this->values['position_type'] = $value;
    }
    /**
     * 获取 定位类型
     * @param string $value
     **/
    public function GetPosition_type()
    {
        return $this->values['position_type'];
    }
    /**
     * 判断 定位类型 是否存在
     * @return true 或 false
     **/
    public function IsPosition_typeSet()
    {
        return array_key_exists('position_type', $this->values);
    }
    /**
     * 设置 盖章点x坐标
     * @param string $value
     **/
    public function SetX($value)
    {
        $this->values['x'] = $value;
    }
    /**
     * 获取 盖章点X坐标
     * @param string $value
     **/
    public function GetX()
    {
        return $this->values['x'];
    }
    /**
     * 判断 盖章点x坐标 是否存在
     * @return true 或 false
     **/
    public function IsXSet()
    {
        return array_key_exists('x', $this->values);
    }
    /**
     * 设置 签章页码，从0开始。
     * @param string $value
     **/
    public function SetPagenum($value)
    {
        $this->values['pagenum'] = $value;
    }
    /**
     * 获取 盖章点Y坐标
     * @param string $value
     **/
    public function GetPagenum()
    {
        return $this->values['pagenum'];
    }
    /**
     * 判断 签章页码，从 0开始。 是否存在
     * @return true 或 false
     **/
    public function IsPagenumSet()
    {
        return array_key_exists('pagenum', $this->values);
    }
    /**
     * 设置 定位坐标
     * @param string $value
     **/
    public function SetSignature_positions($value)
    {
        $this->values['signature_positions'] = $value;
    }
    /**
     * 设置 盖章点Y坐标
     * @param string $value
     **/
    public function SetY($value)
    {
        $this->values['y'] = $value;
    }
    /**
     * 获取 盖章点Y坐标
     * @param string $value
     **/
    public function GetY()
    {
        return $this->values['y'];
    }

    /**
     * 判断 盖章点Y坐标 是否存在
     * @return true 或 false
     **/
    public function IsYSet()
    {
        return array_key_exists('Y', $this->values);
    }
    /**
     * 设置 签章图片类型
     * @param string $value
     **/
    public function SetShow_type($value)
    {
        $this->values['show_type'] = $value;
    }
    /**
     * 设置 替换标志
     * @param string $value
     **/
    public function SetReplace_signature_flag($value)
    {
        $this->values['replace_signature_flag'] = $value;
    }

    /**
     * 设置 合同 url 地址
     * @param string $value
     **/
    public function SetDoc_url($value)
    {
        $this->values['doc_url'] = $value;
    }
    /**
     * 判断 合同 url 地址 是否存在
     * @return true 或 false
     **/
    public function IsDoc_urlSet()
    {
        return array_key_exists('doc_url', $this->values);
    }
    /**
     * 设置 合同流文件
     * @param string $value
     **/
    public function SetFile($value)
    {
        $this->values['file'] = $value;
    }
    /**
     * 判断 合同流文件 是否存在
     * @return true 或 false
     **/
    public function IsFileSet()
    {
        return array_key_exists('file', $this->values);
    }
}

/**
 * 合同签署状态查询类
 * Class FddQuerySignResult
 */
class FddQuerySignResult extends FddDataBase
{
    /**
     * 设置 签署时所传合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }
    /**
     * 判断 签署时所传合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idSet()
    {
        return array_key_exists('contract_id', $this->values);
    }
    /**
     * 设置 签署时所传客户编号
     * @param string $value
     **/
    public function SetCustomer_id($value)
    {
        $this->values['customer_id'] = $value;
    }
    /**
     * 判断 签署时所传客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCustomer_idSet()
    {
        return array_key_exists('customer_id', $this->values);
    }
    /**
     * 设置 签署时所传交易号
     * @param string $value
     **/
    public function SetTransaction_id($value)
    {
        $this->values['transaction_id'] = $value;
    }
    /**
     * 判断 签署时所传交易号 是否存在
     * @param string $value
     **/
    public function IsTransaction_idSet()
    {
        return array_key_exists('transaction_id', $this->values);
    }
}

/**
 * 合同管理类
 * Class FddContractManageMent
 */
class FddContractManageMent extends FddDataBase
{
    /**
     * 设置 合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }
    /**
     * 获取 签署时所传合同编号
     * @param string $value
     **/
    public function GetContract_id()
    {
        return $this->values['contract_id'];
    }
    /**
     * 判断 签署时所传合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idSet()
    {
        return array_key_exists('contract_id', $this->values);
    }
    /**
     * 设置 合同编号（多）
     * @param string $value
     **/
    public function SetContract_ids($value)
    {
        $this->values['contract_ids'] = $value;
    }
    /**
     * 判断 签署时所传合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idsSet()
    {
        return array_key_exists('contract_ids', $this->values);
    }
    /**
     * 设置用户ID
     * @param string $value
     **/
    public function SetCustomer_id($value)
    {
        $this->values['customer_id'] = $value;
    }
    /**
     * 设置 有效期
     * @param string $value
     **/
    public function SetValidity($value)
    {
        $this->values['validity'] = $value;
    }
    /**
     * 判断 有效期 是否存在
     * @param string $value
     **/
    public function IsValiditySet()
    {
        return array_key_exists('validity', $this->values);
    }
    /**
     * 设置 有效次数
     * @param string $value
     **/
    public function SetQuantity($value)
    {
        $this->values['quantity'] = $value;
    }
    /**
     * 判断 有效次数 是否存在
     * @return true 或 false
     **/
    public function IsQuantitySet()
    {
        return array_key_exists('quantity', $this->values);
    }
}

/**
 * 用户管理类
 * Class FddUserManage
 */
class FddUserManage extends FddDataBase
{
    /**
     * 设置 合同ID
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }
    /**
     * 设置 用户ID
     * @param string $value
     **/
    public function SetCustomer_id($value)
    {
        $this->values['customer_id'] = $value;
    }
    /**
     * 判断 用户ID 是否存在
     * @return true 或 false
     **/
    public function IsCustomer_idSet()
    {
        return array_key_exists('customer_id', $this->values);
    }

    /**
     * 设置 电子邮箱
     * @param string $value
     **/
    public function SetEmail($value)
    {
        $this->values['email'] = $value;
    }
    /**
     * 设置 手机号码
     * @param string $value
     **/
    public function SetMobile($value)
    {
        $this->values['mobile'] = $value;
    }
}

/**
 * 合规化方案 实名认证类
 * Class FddCertification
 */
class FddCertification extends FddDataBase
{
    /**
     * 客户编号 注册账号时返回
     * @param $value
     */
    public function SetCustomerID($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     *  判断 客户编号 是否存在
     * @return bool
     */
    public function IsCustomerIDSet()
    {
        return array_key_exists('customer_id', $this->values);
    }
    /**
     * 实名认证套餐类型
     * @param $value
     */
    public function SetVerifiedWay($value)
    {
        $this->values['verified_way'] = $value;
    }

    /**
     *  判断 实名认证套餐类型 是否存在
     * @return bool
     */
    public function IsVerifiedWaySet()
    {
        return array_key_exists('verified_way', $this->values);
    }

    /**
     * 管理员 实名认证套餐类型 0:三要素标准方案； 6补充三要素方案+人工审核
     * @param $value
     */
    public function SetMVerifieday($value)
    {
        $this->values['m_verified_way'] = $value;
    }

    /**
     *  判断 管理员 实名认证套餐类型 是否存在
     * @return bool
     */
    public function IsMVerifiedaySet()
    {
        return array_key_exists('m_verified_way', $this->values);
    }
    /**
     * 是否允许用户页面修改 1允许，2不允许
     * @param $value
     */
    public function SetPageModify($value)
    {
        $this->values['page_modify'] = $value;
    }

    /**
     *  判断 是否允许用户页面修改 是否存在
     * @return bool
     */
    public function IsPageModifySet()
    {
        return array_key_exists('page_modify', $this->values);
    }

    /**
     *  认证回调地址
     * @param $value
     */
    public function SetNotifyUrl($value)
    {
        $this->values['notify_url'] = $value;
    }

    /**
     *  判断 认证回调地址 是否存在
     * @return bool
     */
    public function IsNotifyUrlSet()
    {
        return array_key_exists('notify_url', $this->values);
    }

    /**
     *  认证同步通知url
     * @param $value
     */
    public function SetReturnUrl($value)
    {
        $this->values['return_url'] = $value;
    }

    /**
     *  判断 认证同步通知url 是否存在
     * @return bool
     */
    public function IsReturnUrlSet()
    {
        return array_key_exists('return_url', $this->values);
    }

    /**
     *  企业信息
     * @param $value
     */
    public function SetCompanyInfo($value)
    {
        $this->values['company_info'] = $value;
    }

    /**
     *  判断 企业信息 是否存在
     * @return bool
     */
    public function IsCompanyInfo()
    {
        return array_key_exists('company_info', $this->values);
    }

    /**
     *  对公账号信息
     * @param $value
     */
    public function SetBankInfo($value)
    {
        $this->values['bank_info'] = $value;
    }

    /**
     *  判断 对公账号信息 是否存在
     * @return bool
     */
    public function IsBankInfo()
    {
        return array_key_exists('bank_info', $this->values);
    }

    /**
     *  企业负责人身份: 1.法人，2 代理人
     * @param $value
     */
    public function SetCompanyPrincipalType($value)
    {
        $this->values['company_principal_type'] = $value;
    }

    /**
     *  判断 企业负责人身份: 1.法人，2 代理人 是否存在
     * @return bool
     */
    public function IsCompanyPrincipalType()
    {
        return array_key_exists('company_principal_type', $this->values);
    }

    /**
     *  企业负责人身份: 1.法人，2 代理人
     * @param $value
     */
    public function SetLegalnfo($value)
    {
        $this->values['legal_info'] = $value;
    }

    /**
     *  判断 企业负责人身份: 1.法人，2 代理人 是否存在
     * @return bool
     */
    public function IsLegalnfo()
    {
        return array_key_exists('legal_info', $this->values);
    }

    /**
     *  企业负责人身份: 1.法人，2 代理人
     * @param $value
     */
    public function SetAgentInfo($value)
    {
        $this->values['agent_info'] = $value;
    }

    /**
     *  判断 企业负责人身份: 1.法人，2 代理人 是否存在
     * @return bool
     */
    public function IsAgentInfo()
    {
        return array_key_exists('agent_info', $this->values);
    }

    /**
     *  管理员 实名认证套餐类型
     * @param $value
     */
    public function SetMVerifiedWay($value)
    {
        $this->values['m_verified_way'] = $value;
    }

    /**
     *  判断 实名认证套餐类型 是否存在
     * @return bool
     */
    public function IsMVerifiedWay()
    {
        return array_key_exists('m_verified_way', $this->values);
    }


    /**
     * 设置代理人姓名
     * @param string $value
     **/
    public function SetAgentName($value)
    {
        $this->values['agent_name'] = $value;
    }
    /**
     * 获取代理人姓名
     * @return 值
     **/
    public function GetAgentName()
    {
        return $this->values['agent_name'];
    }
    /**
     * 判断代理人姓名是否存在
     * @return true 或 false
     **/
    public function IsAgentName()
    {
        return array_key_exists('agent_name', $this->values);
    }

    /**
     * 设置代理人身份证号码
     * @param string $value
     **/
    public function SetAgentID($value)
    {
        $this->values['agent_id'] = $value;
    }
    /**
     * 获取代理人身份证号码
     * @return 值
     **/
    public function GetAgentID()
    {
        return $this->values['agent_id'];
    }
    /**
     * 判断代理人身份证号码是否存在
     * @return true 或 false
     **/
    public function IsAgentIDSet()
    {
        return array_key_exists('agent_id', $this->values);
    }


    /**
     * 设置代理人身份证号码
     * @param string $value
     **/
    public function SetAgentMobile($value)
    {
        $this->values['agent_mobile'] = $value;
    }
    /**
     * 获取代理人身份证号码
     * @return 值
     **/
    public function GetAgentMobile()
    {
        return $this->values['agent_mobile'];
    }
    /**
     * 判断代理人身份证号码是否存在
     * @return true 或 false
     **/
    public function IsAgentMobileSet()
    {
        return array_key_exists('agent_mobile', $this->values);
    }


    /**
     * 设置代理人身份证号码
     * @param string $value
     **/
    public function SetAgentIdFrontPath($value)
    {
        $this->values['agent_id_front_path'] = $value;
    }
    /**
     * 获取代理人身份证号码
     * @return 值
     **/
    public function GetAgentIdFrontPath()
    {
        return $this->values['agent_id_front_path'];
    }
    /**
     * 判断代理人身份证号码是否存在
     * @return true 或 false
     **/
    public function IsAgentIdFrontPath()
    {
        return array_key_exists('agent_id_front_path', $this->values);
    }

    /**
     * 设置代理人姓名
     * @param string $value
     **/
    public function SetLegal_name($value)
    {
        $this->values['legal_name'] = $value;
    }
    /**
     * 获取法人姓名
     * @return 值
     **/
    public function GetLegal_name()
    {
        return $this->values['legal_name'];
    }
    /**
     * 判断法人姓名是否存在
     * @return true 或 false
     **/
    public function IsLegal_nameSet()
    {
        return array_key_exists('legal_name', $this->values);
    }

    /**
     * 设置代理人姓名
     * @param string $value
     **/
    public function SetlegaldIFrontPath($value)
    {
        $this->values['legal_id_front_path'] = $value;
    }
    /**
     * 获取法人姓名
     * @return 值
     **/
    public function GetlegaldIFrontPath()
    {
        return $this->values['legal_id_front_path'];
    }
    /**
     * 判断法人姓名是否存在
     * @return true 或 false
     **/
    public function IslegaldIFrontPath()
    {
        return array_key_exists('legal_id_front_path', $this->values);
    }
    /**
     * 设置银行名称
     * @param string $value
     **/
    public function SetBankName($value)
    {
        $this->values['bank_name'] = $value;
    }
    /**
     * 获取银行名称
     * @return
     **/
    public function GetBankName()
    {
        return $this->values['bank_name'];
    }
    /**
     * 判断银行名称是否存在
     * @return true 或 false
     **/
    public function IsBankNameSet()
    {
        return array_key_exists('bank_name', $this->values);
    }
    /**
     * 设置银行账号
     * @param string $value
     **/
    public function SetBankId($value)
    {
        $this->values['bank_id'] = $value;
    }
    /**
     * 获取银行账号
     * @return
     **/
    public function GetBankId()
    {
        return $this->values['bank_id'];
    }
    /**
     * 判断银行账号是否存在
     * @return true 或 false
     **/
    public function IsBankIdSet()
    {
        return array_key_exists('bank_id', $this->values);
    }
    /**
     * 设置开户支行名称
     * @param string $value
     **/
    public function SetSubbranchName($value)
    {
        $this->values['subbranch_name'] = $value;
    }
    /**
     * 获取开户支行名称
     * @return
     **/
    public function GetSubbranchName()
    {
        return $this->values['subbranch_name'];
    }
    /**
     * 判断开户支行名称是否存在
     * @return true 或 false
     **/
    public function IsSubbranchNameSet()
    {
        return array_key_exists('subbranch_name', $this->values);
    }
    /**
     * 设置企业名称
     * @param string $value
     **/
    public function SetCompanyName($value)
    {
        $this->values['company_name'] = $value;
    }
    /**
     * 获取企业名称
     * @return
     **/
    public function GetCompanyName()
    {
        return $this->values['company_name'];
    }
    /**
     * 判断企业名称是否存在
     * @return true 或 false
     **/
    public function IsCompanyNameSet()
    {
        return array_key_exists('company_name', $this->values);
    }
    /**
     * 设置统一社会信用代码
     * @param string $value
     **/
    public function SetCreditNo($value)
    {
        $this->values['credit_no'] = $value;
    }
    /**
     * 获取统一社会信用代码
     * @return
     **/
    public function GetCreditNo()
    {
        return $this->values['credit_no'];
    }
    /**
     * 判断统一社会信用代码是否存在
     * @return true 或 false
     **/
    public function IsCreditNoSet()
    {
        return array_key_exists('credit_no', $this->values);
    }
    /**
     * 设置统一社会信用代码证件照路径
     * @param string $value
     **/
    public function SetCreditImagePath($value)
    {
        $this->values['credit_image_path'] = $value;
    }
    /**
     * 获取统一社会信用代码证件照路径
     * @return
     **/
    public function GetCreditImagePath()
    {
        return $this->values['credit_image_path'];
    }
    /**
     * 判断统一社会信用代码证件照路径是否存在
     * @return true 或 false
     **/
    public function IsCreditImagePathSet()
    {
        return array_key_exists('credit_image_path', $this->values);
    }
    /**
     * 设置法人姓名
     * @param string $value
     **/
    public function SetLegalName($value)
    {
        $this->values['legal_name'] = $value;
    }
    /**
     * 获取法人姓名
     * @return
     **/
    public function GetLegalName()
    {
        return $this->values['legal_name'];
    }
    /**
     * 判断法人姓名是否存在
     * @return true 或 false
     **/
    public function IsLegalNameSet()
    {
        return array_key_exists('legal_name', $this->values);
    }
    /**
     * 设置法人证件号（身份证）
     * @param string $value
     **/
    public function SetLegalId($value)
    {
        $this->values['legal_id'] = $value;
    }
    /**
     * 获取法人证件号（身份证）
     * @return
     **/
    public function GetLegalId()
    {
        return $this->values['legal_id'];
    }
    /**
     * 判断法人证件号（身份证）是否存在
     * @return true 或 false
     **/
    public function IsLegalIdSet()
    {
        return array_key_exists('legal_id', $this->values);
    }
    /**
     * 设置法人手机号（仅支持国内运营商）
     * @param string $value
     **/
    public function SetlegalMobile($value)
    {
        $this->values['legal_mobile'] = $value;
    }
    /**
     * 获取法人手机号（仅支持国内运营商）
     * @return
     **/
    public function GetlegalMobile()
    {
        return $this->values['legal_mobile'];
    }
    /**
     * 判断法人手机号（仅支持国内运营商）是否存在
     * @return true 或 false
     **/
    public function IslegalMobileSet()
    {
        return array_key_exists('legal_mobile', $this->values);
    }

    /**
     * 设置姓名
     * @param string $value
     **/
    public function SetCustomerName($value)
    {
        $this->values['customer_name'] = $value;
    }
    /**
     * 获取姓名
     * @return
     **/
    public function GetCustomerName()
    {
        return $this->values['customer_name'];
    }
    /**
     * 判断姓名 是否存在
     * @return true 或 false
     **/
    public function IsCustomerName()
    {
        return array_key_exists('customer_name', $this->values);
    }

    /**
     * 设置证件类型 目前仅支持身份证-0
     * @param string $value
     **/
    public function SetCustomerIdentType($value)
    {
        $this->values['customer_ident_type'] = $value;
    }
    /**
     * 获取证件类型
     * @return
     **/
    public function GetCustomerIdentType()
    {
        return $this->values['customer_ident_type'];
    }
    /**
     * 判断证件类型 是否存在
     * @return true 或 false
     **/
    public function IsCustomerIdentType()
    {
        return array_key_exists('customer_ident_type', $this->values);
    }


    /**
     * 设置证件类型 目前仅支持身份证-0
     * @param string $value
     **/
    public function SetCustomerIdentNo($value)
    {
        $this->values['customer_ident_no'] = $value;
    }
    /**
     * 获取证件类型
     * @return
     **/
    public function GetCustomerIdentNo()
    {
        return $this->values['customer_ident_no'];
    }
    /**
     * 判断证件类型 是否存在
     * @return true 或 false
     **/
    public function IsCustomerIdentNo()
    {
        return array_key_exists('customer_ident_no', $this->values);
    }
    /**
     * 设置 手机号码
     * @param string $value
     **/
    public function SetMobile($value)
    {
        $this->values['mobile'] = $value;
    }
    /**
     * 获取 手机号码
     * @return
     **/
    public function GetMobile()
    {
        return $this->values['mobile'];
    }
    /**
     * 判断 手机号码 是否存在
     * @return true 或 false
     **/
    public function IsMobile()
    {
        return array_key_exists('mobile', $this->values);
    }

    /**
     * 设置 证件正面照下载地址
     * @param string $value
     **/
    public function SetIdentFrontPath($value)
    {
        $this->values['ident_front_path'] = $value;
    }
    /**
     * 获取 证件正面照下载地址
     * @return
     **/
    public function GetIdentFrontPath()
    {
        return $this->values['ident_front_path'];
    }
    /**
     * 判断 证件正面照下载地址  是否存在
     * @return true 或 false
     **/
    public function IsIdentFrontPath()
    {
        return array_key_exists('ident_front_path', $this->values);
    }


    /**
     * 设置 实名认证序列号
     * @param string $value
     **/
    public function SetVerifiedVSerialNo($value)
    {
        $this->values['verified_serialno'] = $value;
    }
    /**
     * 获取 实名认证序列号
     * @return
     **/
    public function GetVerifiedVSerialNo()
    {
        return $this->values['verified_serialno'];
    }
    /**
     * 判断 实名认证序列号  是否存在
     * @return true 或 false
     **/
    public function IsVerifiedVSerialNo()
    {
        return array_key_exists('verified_serialno', $this->values);
    }

    /**
     * 设置 uuid 查询认证结果时返回
     * @param string $value
     **/
    public function SetUUID($value)
    {
        $this->values['uuid'] = $value;
    }
    /**
     * 获取 uuid 查询认证结果时返回
     * @return
     **/
    public function GetUUID()
    {
        return $this->values['uuid'];
    }
    /**
     * 判断uuid 查询认证结果时返回  是否存在
     * @return true 或 false
     **/
    public function IsUUID()
    {
        return array_key_exists('uuid', $this->values);
    }

    public function SetResultType($value)
    {
        $this->values['result_type'] = $value;
    }
    public function IsResultTypeSet()
    {
        return array_key_exists('result_type', $this->values);
    }
    public function SetCertFlag($value)
    {
        $this->values['cert_flag'] = $value;
    }
    public function IsCertFlagSet()
    {
        return array_key_exists('cert_flag', $this->values);
    }
    public function SetOption($value)
    {
        $this->values['option'] = $value;
    }
    public function IsOptionSet()
    {
        return array_key_exists('option', $this->values);
    }

    public function SetAuthorizationFile($value)
    {
        $this->values['authorization_file'] = $value;
    }
    public function IsAuthorizationFileSet()
    {
        return array_key_exists('authorization_file', $this->values);
    }
    public function SetLang($value)
    {
        $this->values['lang'] = $value;
    }
    public function IsLangSet()
    {
        return array_key_exists('lang', $this->values);
    }
    public function SetIdPhotoOptional($value)
    {
        $this->values['id_photo_optional'] = $value;
    }
    public function IsIdPhotoOptionalSet()
    {
        return array_key_exists('id_photo_optional', $this->values);
    }
    public function SetOrganizationType($value)
    {
        $this->values['organization_type'] = $value;
    }
    public function IsOrganizationTypeSet()
    {
        return array_key_exists('organization_type', $this->values);
    }
    public function SetEncryption($value)
    {
        $this->values['encryption'] = $value;
    }
    public function IsEncryptionSet()
    {
        return array_key_exists('encryption', $this->values);
    }
    public function SetBankCardNo($value)
    {
        $this->values['bank_card_no'] = $value;
    }
    public function IsBankCardNoSet()
    {
        return array_key_exists('bank_card_no', $this->values);
    }
    public function SetCertType($value)
    {
        $this->values['cert_type'] = $value;
    }
    public function IsCertTypeSet()
    {
        return array_key_exists('cert_type', $this->values);
    }
    public function SetIsMiniProgram($value)
    {
        $this->values['is_mini_program'] = $value;
    }
    public function IsIsMiniProgramSet()
    {
        return array_key_exists('is_mini_program', $this->values);
    }
    public function SetAreaCode($value)
    {
        $this->values['area_code'] = $value;
    }
    public function IsAreaCodeSet()
    {
        return array_key_exists('area_code', $this->values);
    }
}
