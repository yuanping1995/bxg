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
/**二维数组相同字段求和
 * @param $arr二维数组
 * @param $cont 求和的字段
 * @param $ver 满足要求的数组
 * @return int
 */

function arraySum($arr,$cont,$ver){
    $i = count($arr);
    $num=0;
    foreach ($arr as $key =>$val)
    {   if(in_array($val['Status'], $ver))
    {
        $num+=$val[$cont];
    }
    }
    return $num;
}

/**
 * @param $arr 比较的数据
 * @return string
 */
function Membership($arr){
    switch ($arr)
    {
        case 1:  $arr = "普通";  break;
        case 2:  $arr = "vip";   break;
        case 3:  $arr = "svip";  break;
        default: $arr = "ovip";
    }
    return $arr;
}

/**
 * @param $arr 比较的数据ss
 * @return string
 */
function Role($arr)
{
    switch ($arr) {
        case 1:
            $arr = "用户";
            break;
        case 2:
            $arr = "商家";
            break;
        case 3:
            $arr = "站点";
            break;
        case 4:
            $arr = "员工";
            break;
        default:
            $arr = "兼职";
    }
    return $arr;
}
    /**
     * @param $arr 比较的数据
     * @return string
     */
function AuthStatus($arr)
{
    switch ($arr) {
        case 1:
            $arr = "未认证";
            break;
        case 2:
            $arr = "已认证";
            break;
        case 3:
            $arr = "审核中";
            break;
//        case 4:  $arr = "员工";  break;
        default:
            $arr = "错误";
    }
    return $arr;
}

    /**
     * @param $arr 比较的数字
     * @return string
     */
function Enable($arr){
    switch ($arr) {
        case 1:
            $arr = "锁定";
            break;
        case 2:
            $arr = "正常";
            break;
        default:
            $arr = "错误";
    }
    return $arr;
}

    /**店铺审核
     * @param $arr
     * @return string
     */
function shopStatus($arr){
    switch ($arr) {
        case 1:
            $arr = "未开通";
            break;
        case 2:
            $arr = "待审核";
            break;
        case 3;
            $arr = "正常营业";
            break;
        default:
            $arr = "被冻结";
    }
    return $arr;
}

