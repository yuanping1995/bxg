<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class Login extends \think\Controller
{

// 登录
    public function index(){
        return $this->fetch();
    }

}