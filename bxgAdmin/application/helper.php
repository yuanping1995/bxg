<?php

//------------------------
// ThinkPHP 助手函数
//-------------------------
use think\Config;
use Wechat\Loader;
use Alipay\Aliloader;
use QQpay\Qqloader;
/**
 * 获取微信操作对象
 * @staticvar array $wechat
 * @param type $type
 * @return WechatReceive
 */
function & load_wechat($type = '') {
    static $wechat = array();
    $index = md5(strtolower($type));
    if (!isset($wechat[$index])) {
        $config = Config::get('wechat');
        $config['cachepath'] = CACHE_PATH . 'Data/';
        $wechat[$index] = & Loader::get($type, $config);
    }
    return $wechat[$index];
}
/**
 * 获取支付宝操作对象
 * @staticvar array $alipai
  * @param type $type  模块
 * @return WechatReceive
 */
function & load_alipay($type = '') {
	  static $alipay = array();
    $index = md5(strtolower($type));
    if (!isset($alipay[$index])) {
        $config = Config::get('alipay');
        $config['cachepath'] = CACHE_PATH . 'Data/';
        $alipay[$index] = & Aliloader::get($type, $config);
    }
    return $alipay[$index];
}
/**
 * 获取QQ操作对象
 * @staticvar array $alipai
  * @param type $type  模块
 * @return WechatReceive
 */
function & load_qqpay($type = '') {
	  static $qqpay = array();
    $index = md5(strtolower($type));
    if (!isset($qqpay[$index])) {
        $config = Config::get('qqpay');
        $config['cachepath'] = CACHE_PATH . 'Data/';
        $qqpay[$index] = & Qqloader::get($type, $config);
    }
    return $qqpay[$index];
}