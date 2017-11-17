<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
return [
    '__domain__'=>[
        'api '      => 'api',
        'login'     => 'login',
        'mobile'    => 'm',
        'pay'       => 'pay',
],
    // 下面是路由规则定义
    '__alias__' =>  [
        'Collectiion.list.bxg.api'  =>  'api/Collectiion/Collectlist',//收藏api路由
        'Collectiion.cancel.bxg.api'  =>  'api/Collectiion/Collectcancel',//取消收藏api路由
        'Collectiion.empty.bxg.api'  =>  'api/Collectiion/Collectempty',//清空收藏api路由
        'Follow.list.bxg.api'  =>  'api/Follow/Followlist',//查询收藏的店铺api路由(未完善）
        'Follow.cancel.bxg.api'  =>  'api/Follow/Followcancel',//删除我关注的店铺api路由
        'Order.cancel.bxg.api'  =>  'api/Order/Ordercancel',//取消我的订单api路由
        'Order.list.bxg.api'  =>  'api/Order/Orderlist',//订单查询api路由
    ]
    ];
  