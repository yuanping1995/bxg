<?php
namespace app\admin\controller;

class Index extends \think\Controller
{	
// 登录
     public function login()
    {
       return $this->fetch();

    }
// 首页框架
    public function index()
    {
       return $this->fetch();

    }
// 主页数据
    public function index_v()
    {
       return $this->fetch();
    }

// 用户管理

    // 用户列表
    public function user_list(){
    	return $this->fetch();
    }
    // 用户信息
    public function user_info(){
    	return $this->fetch();
    }

// 数据统计

    // 用户统计
    public function count_user(){
        return $this->fetch();
    }
    // 商家统计
    public function count_seller(){
        return $this->fetch();
    }

// 订单统计

    // 订单列表
    public function order_list(){
        return $this->fetch();
    }
    // 订单信息
    public function order_detail(){
        return $this->fetch();
    }
    
}
