<?php

/**
 *   配置账号信息
 */

class FddConfig
{
    //=======【基本信息设置】=====================================
    /**
     * TODO: 修改这里配置法大大调用接口地址
     *
     * FddServer ：法大大接口调用地址（必须配置）
     *
     */
    //通用接口调用地址
    const FddServer = '';
    //法大大企业页面认证接口调用地址
    const FddServerSyncCompany = 'https://partner-test.fadada.com';

    //=======【法大大商户密钥信息】===================================
    /**
     * TODO: 修改这里配置法大大密钥
     *
     * AppId ：接入方的ID
     *
     * ApiPort：接入方的密钥
     *
     */
    const AppId = '';
    const AppSecret = '';
}
