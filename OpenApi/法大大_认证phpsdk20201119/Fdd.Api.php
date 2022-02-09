<?php
require_once "Fdd.Exception.php";
require_once "Fdd.Config.php";
require_once "Fdd.Data.php";
require_once "Fdd.Encryption.php";

/**
 * 
 * 接口访问类，包含所有法大大API列表的封装，类中方法为static方法，
 * 每个接口有默认超时时间
 */
date_default_timezone_set('PRC'); //其中PRC为“中华人民共和国”
class FddApi
{
    /**
     * 4.1合规化接口 注册账号
     * @param Account $param
     * @param int $timeOut
     * @return array|mixed
     */
    public static function registerAccount(FddAccount $param, $timeOut = 6)
    {
        //注册接口
        $url = FddConfig::FddServer . '/account_register.api';
        try {
            //实例化3DES类
            $des = new FddEncryption();
            if (!$param->IsOpenIDSet())
                throw new FddException("缺少必填参数-open_id");
            if (!$param->IsAccountTypeSet())
                throw new FddException("缺少必填参数-account_type");
            $encArr = $param->GetValues();
            $encKey = array_keys($encArr);
            array_multisort($encKey);
            $enc = [
                'md5' => [],
                'sha1' => $encKey
            ];

            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }


    /**
     * 4.2获取企业实名认证地址
     * @param FddCertification $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function getCompanyVerifyUrl(FddCertification $param, $timeOut = 6)
    {
        //获取企业实名认证地址
        $url = FddConfig::FddServer . '/get_company_verify_url.api';
        try {
            $AgentInfo = [
                'agent_id' => $param->GetAgentID(),
                'agent_id_front_path' => $param->GetAgentIdFrontPath(),
                'agent_mobile' => $param->GetAgentMobile(),
                'agent_name' => $param->GetAgentName(),
            ];

            $bankInfo = [
                'bank_id' => $param->GetBankId(),
                'bank_name' => $param->GetBankName(),
                'subbranch_name' => $param->GetSubbranchName(),
            ];

            $companyInfo = [
                'company_name' => $param->GetCompanyName(),
                'credit_image_path' => $param->GetCreditImagePath(),
                'credit_no' => $param->GetCreditNo(),
            ];

            $LegalInfo = [
                'legal_id' => $param->GetLegalId(),
                'legal_id_front_path' => $param->GetlegaldIFrontPath(),
                'legal_name' => $param->GetLegalName(),
                'legal_mobile' => $param->GetlegalMobile(),
            ];

            //实例化3DES类
            $des = new FddEncryption();
            $param->SetAgentInfo(json_encode($AgentInfo));
            $param->SetBankInfo(json_encode($bankInfo));
            $param->SetCompanyInfo(json_encode($companyInfo));
            $param->SetLegalnfo(json_encode($LegalInfo));

            $encArr = $param->GetValues();
            $encKey = array_keys($encArr);
            array_multisort($encKey);
            $enc = [
                'md5' => [],
                'sha1' => $encKey
            ];

            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));

            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     * 4.3获取个人实名认证地址
     * @param FddCertification $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function getPersonVerifyUrl(FddCertification $param, $timeOut = 6)
    {
        //获取个人实名认证地址
        $url = FddConfig::FddServer . '/get_person_verify_url.api';
        try {
            //实例化3DES类
            $des = new FddEncryption();
            $encArr = $param->GetValues();
            $encKey = array_keys($encArr);
            array_multisort($encKey);
            $enc = [
                'md5' => [],
                'sha1' => $encKey
            ];

            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));

            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }
    /**
     * 4.4实名证书申请接口
     * @param FddCertification $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function ApplyCert(FddCertification $param, $timeOut = 6)
    {
        //获取实名证书申请接口
        $url = FddConfig::FddServer . '/apply_cert.api';
        try {
            //实例化3DES类
            $des = new FddEncryption();
            $enc = [
                'md5' => [],
                'sha1' => ['customer_id', 'verified_serialno']
            ];

            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));

            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }


    /**
     * 4.5上传印章
     * @param FddSignature $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function UploadSignature(FddSignature $param, $timeOut = 6)
    {
        //合同模板传输接口 地址
        $url = FddConfig::FddServer . '/add_signature.api';
        try {
            //参数处理
            if (!$param->IsCustomerId())
                throw new FddException("缺少必填参数-customer_id");
            if (!$param->IsSignatureImgBase64())
                throw new FddException("缺少必填参数-signature_img_base64");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['customer_id', 'signature_img_base64']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {
            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }
    /**
     * 4.6 自定义印章内容
     * @param FddSignatureContent $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function UploadSignatureContent(FddSignatureContent $param, $timeOut = 6)
    {
        //合同模板传输接口 地址
        $url = FddConfig::FddServer . '/custom_signature.api';
        try {
            //参数处理
            if (!$param->IsCustomerId())
                throw new FddException("缺少必填参数-customer_id");
            if (!$param->IsContent())
                throw new FddException("缺少必填参数-content");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['content', 'customer_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {
            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }


    /**
     *
     * 4.7合同文档传输接口
     * app_id、timestamp、msg_digest、v 、contract_id、doc_type 、doc_title必填参数
     * file、doc_url  选填参数
     * @param FddTemplate $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function Uploaddocs(FddTemplate $param, $timeOut = 6)
    {
        //合同文档传输接口 地址
        $url = FddConfig::FddServer . '/uploaddocs.api';
        try {
            //参数处理
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            if (!$param->IsDoc_titleSet())
                throw new FddException("缺少必填参数-doc_title");
            if (!$param->IsDoc_typeSet())
                throw new FddException("缺少必填参数-doc_type");
            if (!$param->IsFileSet() && !$param->IsDoc_urlSet())
                throw new FddException("缺少必填参数-file、doc_url 二选一");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['contract_id']
            ];
            // $param->SetMsg_digest($des::ContractDigest($param));
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            // file文件是为header 跳转
            // header('location:'.$url.$des->ArrayParamToStr($input));
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }
    /**
     *
     * 4.8合同模板传输接口
     * app_id、timestamp、msg_digest、v 、template_id 必填参数
     * file、doc_url  选填参数
     * @param FddTemplate $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function UploadTemplate(FddTemplate $param, $timeOut = 6)
    {
        //合同模板传输接口 地址
        $url = FddConfig::FddServer . '/uploadtemplate.api';
        try {
            //参数处理
            if (!$param->IsTemplate_idSet())
                throw new FddException("缺少必填参数-template_id");
            if (!$param->IsFileSet() && !$param->IsDoc_urlSet())
                throw new FddException("缺少必填参数-file、doc_url 二选一");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['template_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }
    /**
     *
     * 4.9 模板填充生成合同接口
     * app_id、timestamp、msg_digest、v 、template_id 必填参数
     * @param FddTemplate $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function GenerateContract(FddTemplate $param, $timeOut = 6)
    {
        //合同生成接口 地址
        $url = FddConfig::FddServer . '/generate_contract.api';
        try {
            //参数处理
            if (!$param->IsDoc_titleSet())
                throw new FddException("缺少必填参数-doc_title");
            if (!$param->IsTemplate_idSet())
                throw new FddException("缺少必填参数-template_id");
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            if (!$param->IsParameter_mapSet())
                throw new FddException("缺少必填参数-parameter_map");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            if ($param->GetInsertWay() == 0) {
                if (!$param->IsPageBeginSet())
                    throw new FddException("缺少必填参数-pageBegin");
            }
            if ($param->GetInsertWay() == 1) {
                if (!$param->IsKeywordSet())
                    throw new FddException("缺少必填参数-keyword");
            }
            $data = [];
            if ($param->GetInsertWay() != null) {
                $data['insertWay'] = $param->GetInsertWay();
            }
            if ($param->GetKeyword() != null) {
                $data['keyword'] = $param->GetKeyword();
            }
            if ($param->GetPageBegin() != null) {
                $data['pageBegin'] = $param->GetPageBegin();
            }
            if ($param->GetBorderFlag() != null) {
                $data['borderFlag'] = $param->GetBorderFlag();
            }
            if ($param->GetCellHeight() != null) {
                $data['cellHeight'] = $param->GetCellHeight();
            }
            if ($param->GetCellHorizontalAlignment() != null) {
                $data['cellHorizontalAlignment'] = $param->GetCellHorizontalAlignment();
            }
            if ($param->GetCellVerticalAlignment() != null) {
                $data['cellVerticalAlignment'] = $param->GetCellVerticalAlignment();
            }
            if ($param->GetTheFirstHeader() != null) {
                $data['theFirstHeader'] = $param->GetTheFirstHeader();
            }
            if ($param->GetHeaders() != null) {
                $data['headers'] = $param->GetHeaders();
            }
            if ($param->GetHeadersAlignment() != null) {
                $data['headersAlignment'] = $param->GetHeadersAlignment();
            }
            if ($param->GetDatas() != null) {
                $data['datas']  = $param->GetDatas();
            }
            if ($param->GetColWidthPercent() != null) {
                $data['colWidthPercent'] = $param->GetColWidthPercent();
            }
            if ($param->GetTableHorizontalAlignment() != null) {
                $data['tableHorizontalAlignment'] = $param->GetTableHorizontalAlignment();
            }
            if ($param->GetTableWidthPercentage() != null) {
                $data['tableWidthPercentage'] = $param->GetTableWidthPercentage();
            }
            if ($param->GetTableHorizontalOffset() != null) {
                $data['tableHorizontalOffset'] = $param->GetTableHorizontalOffset();
            }
            $param->SetHeaders(json_encode($param->GetHeaders()));
            $param->SetDatas(json_encode($param->GetDatas()));
            $param->SetColWidthPercent(json_encode($param->GetColWidthPercent()));
            $arr = array($data);
            $param->SetDynamic_tables(json_encode($arr));
            if (!$param->IsHeadersSet())
                throw new FddException("缺少必填参数-headers");
            //实例化3DES类
            $des = new FddEncryption();
            $param->SetMsg_digest($des::ContractDigest($param));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }
    /**
     *
     * 4.10文档签署接口（自动签）
     * app_id、timestamp、msg_digest、contract_id 、transaction_id、customer_id、必填参数
     * notify_url 选填参数
     * @param FddSignContract $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function ExtsignAuto(FddSignContract $param, $timeOut = 6)
    {
        // 文档签署接口（自动签） 地址
        $url = FddConfig::FddServer . '/extsign_auto.api';
        try {
            //参数处理
            if (!$param->IsTransaction_idSet())
                throw new FddException("缺少必填参数-transaction_id");
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            if (!$param->IsCustomer_idSet())
                throw new FddException("缺少必填参数-customer_id");
            if (!$param->IsDoc_titleSet())
                throw new FddException("缺少必填参数-doc_title");
            if (!$param->IsClient_roleSet())
                throw new FddException("缺少必填参数-client_role");
            if ($param->IsPosition_typeSet()) {
                if ($param->GetPosition_type() == 1) {
                    if (!$param->IsYSet() && !$param->IsXSet() && !$param->IsPagenumSet())
                        throw new FddException("缺少必填参数- x 、y 、pagenum");
                }
                if ($param->GetPosition_type() == 0) {
                    if (!$param->IsSign_keywordSet())
                        throw new FddException("缺少必填参数- Sign_keyword");
                }
            }
            $pagenum = $param->GetPagenum();
            $x = $param->GetX();
            $y = $param->GetY();
            $SearchLocation = array(
                array(
                    'pagenum' => $pagenum,
                    'x' => $x,
                    'y' => $y
                )
            );
            $param->SetSignature_positions(json_encode($SearchLocation));
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            $param->SetDoc_title(urlencode($param->GetDoc_title()));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            $param->SetMsg_digest($des::ExtsignDigest($param));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     * 4.11文档签署接口（手动签）
     * app_id、timestamp、msg_digest、contract_id 、transaction_id、customer_id、必填参数
     * notify_url 选填参数
     * @param FddSignContract $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function Extsign(FddSignContract $param, $timeOut = 6)
    {
        // 文档签署接口（手动签） 地址
        $url = FddConfig::FddServer . '/extsign.api';
        try {
            //参数处理
            if (!$param->IsTransaction_idSet())
                throw new FddException("缺少必填参数-transaction_id");
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            if (!$param->IsCustomer_idSet())
                throw new FddException("缺少必填参数-customer_id");
            if (!$param->IsDoc_titleSet())
                throw new FddException("缺少必填参数-doc_title");
            if (!$param->IsReturn_urlSet())
                throw new FddException("缺少必填参数-return_url");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            $param->SetDoc_title(urlencode($param->GetDoc_title()));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            $param->SetMsg_digest($des::ExtsignDigest($param));
            $input = $param->GetValues();
            header('location:' . $url . $des->ArrayParamToStr($input));
            // $res = self::https_request($url,$input);
            // return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }


    /**
     *
     * 文档签署接口（含有效期和次数限制）
     * app_id、timestamp、msg_digest、contract_id 、transaction_id 、customer_id、doc_title、return_url、validity、quantity必填参数
     * notify_url 、sign_keyword 、keyword_strategy 选填参数
     * @param FddSignContract $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function ExtsignValidation(FddSignContract $param, $timeOut = 6)
    {
        // 文档签署接口（含有效期和次数限制） 地址
        $url = FddConfig::FddServer . '/extsign_validation.api';
        try {
            //参数处理
            if (!$param->IsTransaction_idSet())
                throw new FddException("缺少必填参数-transaction_id");
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            if (!$param->IsCustomer_idSet())
                throw new FddException("缺少必填参数-customer_id");
            if (!$param->IsDoc_titleSet())
                throw new FddException("缺少必填参数-doc_title");
            if (!$param->IsReturn_urlSet())
                throw new FddException("缺少必填参数-return_url");
            if (!$param->IsValiditySet())
                throw new FddException("缺少必填参数-validity");
            if (!$param->IsQuantitySet())
                throw new FddException("缺少必填参数-quantity");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            $param->SetDoc_title(urlencode($param->GetDoc_title()));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            $param->SetMsg_digest($des::ExtsignValiityDigest($param));
            $input = $param->GetValues();
            header('location:' . $url . $des->ArrayParamToStr($input));
            // $res = self::https_request($url,$input);
            // return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     * 客户签署结果查询接口
     * @param FddQuerySignResult $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function QuerySignResult(FddQuerySignResult $param, $timeOut = 6)
    {
        //客户签署结果查询接口 地址
        $url = FddConfig::FddServer . '/query_sign_result.api';
        try {
            //参数处理
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            if (!$param->IsCustomer_idSet())
                throw new FddException("缺少必填参数-customer_id");
            if (!$param->IsTransaction_idSet())
                throw new FddException("缺少必填参数-transaction_id");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['contract_id', 'customer_id', 'transaction_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     * 4.12文档查看接口
     * @param FddContractManageMent $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function ViewContract(FddContractManageMent $param, $timeOut = 6)
    {
        //文档查看接口
        $url = FddConfig::FddServer . '/viewContract.api';
        try {
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['contract_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            header('location:' . $url . $des->ArrayParamToStr($input));
            // $res = self::https_request($url,$input);
            // return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     * 文档临时查看/下载地址接口（含有效期和次数）
     * @param FddContractManageMent $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常 Geturl
     */
    public static function GetUrl(FddContractManageMent $param, $timeOut = 6)
    {
        //文档临时查看/下载地址接口（含有效期和次数）
        $url = FddConfig::FddServer . '/geturl.api';
        try {
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            if (!$param->IsValiditySet())
                throw new FddException("缺少必填参数-validity");
            if (!$param->IsQuantitySet())
                throw new FddException("缺少必填参数-quantity");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => ['validity', 'quantity'],
                'sha1' => ['contract_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            // header('location:'.$url.$des->ArrayParamToStr($input));
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     * 4.13文档下载接口
     * @param FddContractManageMent $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常 
     */
    public static function DownLoadContract(FddContractManageMent $param, $timeOut = 6)
    {
        //文档下载接口 地址
        $url = FddConfig::FddServer . '/downLoadContract.api';
        try {
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['contract_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            header('location:' . $url . $des->ArrayParamToStr($input));
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     * 查询合同hash值接口
     * contract_id 必填参数
     * @param FddContractManageMent $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function GetContractHash(FddContractManageMent $param, $timeOut = 6)
    {
        //查询合同hash值接口
        $url = FddConfig::FddServer . '/getContractHash.api';
        try {
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['contract_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }


    /**
     *
     * 4.14合同归档接口
     * @param FddContractManageMent $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function ContractFiling(FddContractManageMent $param, $timeOut = 6)
    {
        //合同归档接口
        $url = FddConfig::FddServer . '/contractFiling.api';
        try {
            if (!$param->IsContract_idSet())
                throw new FddException("缺少必填参数-contract_id");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['contract_id']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            // header('location:'.$url.$des->ArrayParamToStr($input));
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     *  文档验签接口
     * app_id、timestamp、msg_digest、doc_url、file必填参数 
     * @param FddSignContract $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function ContractVerify(FddSignContract $param, $timeOut = 6)
    {
        //  文档验签接口 地址
        $url = FddConfig::FddServer . '/contract_verify.api';
        try {
            //参数处理
            if (!$param->IsFileSet() && !$param->IsDoc_urlSet())
                throw new FddException("缺少必填参数-file、doc_url 二选一");

            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            //设置加密串
            $enc = [
                'md5' => [],
                'sha1' => ['doc_url']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     * 4.15两个接口为回调接口，法大大回调平台方
     */

    /**
     * 4.16查询个人实名认证信息
     * @param FddCertification $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function FindPersonCertInfo(FddCertification $param, $timeOut = 6)
    {
        //查询个人实名认证信息
        $url = FddConfig::FddServer . '/find_personCertInfo.api';
        try {
            //实例化3DES类
            $des = new FddEncryption();
            $enc = [
                'md5' => [],
                'sha1' => ['verified_serialno']
            ];

            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));

            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     * 4.17查询企业实名认证信息
     * @param FddCertification $param
     * @param int $timeOut
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function FindCompanyCertInfo(FddCertification $param, $timeOut = 6)
    {
        //查询企业实名认证信息
        $url = FddConfig::FddServer . '/find_companyCertInfo.api';
        try {
            //实例化3DES类
            $des = new FddEncryption();
            $enc = [
                'md5' => [],
                'sha1' => ['verified_serialno']
            ];

            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));

            $input = $param->GetValues();
            $res = self::https_request($url, $input);
            return $res;
        } catch (FddException $e) {

            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     *
     * 4.18通过uuid下载文件
     * @param
     * @throws FddException
     * @return 成功时返回，其他抛异常
     */
    public static function getFile(FddCertification $param, $timeOut = 6)
    {
        // 通过uuid下载文件
        $url = FddConfig::FddServer . '/get_file.api';
        try {
            //参数处理
            if (!$param->IsUUID())
                throw new FddException("缺少必填参数-uuid");
            $param->SetApp_id(FddConfig::AppId);
            $param->SetTimestamp(date('YmdHis'));
            if (!$param->IsVSet()) {
                $param->SetV('2.0');
            }
            //实例化3DES类
            $des = new FddEncryption();
            $enc = [
                'md5' => [],
                'sha1' => ['uuid']
            ];
            $param->SetMsg_digest($des::GeneralDigest($param, $enc));
            $input = $param->GetValues();
            header('location:' . $url . $des->ArrayParamToStr($input));
            // $res = self::https_request($url,$input);
            // return $res;
            $end = $url . $des->ArrayParamToStr($input);
            return $end;
        } catch (FddException $e) {
            return ['result' => 'error', 'code' => 2001, 'msg' => $e->errorMessage()];
        }
    }

    /**
     * 通用http函数
     * @param $url
     * @param string $data
     * @param string $type
     * @param string $res
     * @return mixed
     */
    public static function https_request($url, $data = "", $type = "post", $res = "json")
    {
        //1.初始化curl
        $curl = curl_init();
        //2.设置curl的参数
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        if ($type == "post") {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        //3.采集
        $output = curl_exec($curl);
        //4.关闭
        curl_close($curl);
        if ($res == "json") {
            return json_decode($output, true);
        }
        return $output;
    }

    /**
     * 文件输出http函数
     * @param $url
     * @param string $data
     * @param string $type
     * @return mixed
     */
    public static function https_request_file($url, $data = "", $type = "post")
    {
        //1.初始化curl
        $curl = curl_init();
        //2.设置curl的参数
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        if ($type == "post") {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        //3.采集
        $output = curl_exec($curl);
        header("Content-type: application/octet-stream");

        header("Content-Disposition: attachment; filename=原文出证" . time() . ".pdf");

        echo $output;

        //4.关闭
        curl_close($curl);
    }

    /**
     * 图片转base64文件
     * @param $image_file
     * @return string
     */
    public function base64EncodeImage($image_file)
    {
        $base64_image = "";
        $image_info = getimagesize($image_file);
        $image_data = fread(fopen($image_file, "r"), filesize($image_file));
        $base64_image = "data:" . $image_info["mime"] . ";base64," . chunk_split(base64_encode($image_data));
        return $base64_image;
    }
}
