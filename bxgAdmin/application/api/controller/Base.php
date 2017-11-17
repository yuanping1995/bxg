<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/14 0014
 * Time: 上午 10:36
 */

namespace app\api\controller;


class Base  extends \think\Controller
{
    function _initialize(){
        cookie("user_id",20144230042);
        if(empty(cookie('user_id')))
        {
            header("Location:http://127.0.0.5/index.php/admin/login/index");
            exit();
        }
    }
}