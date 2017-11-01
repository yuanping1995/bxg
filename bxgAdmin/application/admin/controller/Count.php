<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class Count extends \think\Controller
{
	//首页数据展示
    public function index()
    {
       return $this->fetch();
    }

// 数据统计
    //用户统计
    public function count_user(){
        return $this->fetch();
    }
    // 商家统计
    public function count_seller(){
        return $this->fetch();
    }
}