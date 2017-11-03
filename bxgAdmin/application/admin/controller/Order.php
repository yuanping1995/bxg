<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class Order extends \think\Controller
{

// 订单管理

    // 普通订单列表
    public function common_order(){
        return $this->fetch();
    }
    // 预定订单列表
    public function reserve_order(){
        return $this->fetch();
    }
    // 附属订单列表
    public function belong_order(){
        return $this->fetch();
    }
    // 订单信息
    public function order_detail(){
        return $this->fetch();
    }
}