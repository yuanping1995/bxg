<?php
namespace app\admin\controller;

class Index extends \think\Controller
{	
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
    // 用户列表
    public function user_list(){
    	return $this->fetch();
    }
    // 
    public function user_info(){
    	return $this->fetch();
    }
}
