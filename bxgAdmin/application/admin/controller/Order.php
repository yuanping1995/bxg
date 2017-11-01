<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class Order extends \think\Controller
{

// 订单管理

    // 订单列表
    public function order_list(){
        return $this->fetch();
    }
    // 订单信息
    public function order_detail(){
        return $this->fetch();
    }
}