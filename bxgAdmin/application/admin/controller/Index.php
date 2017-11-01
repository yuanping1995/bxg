<?php
namespace app\admin\controller;

use app\admin\model\info;

class Index extends \think\Controller
<<<<<<< HEAD
{
=======
{	
    // 登录
     public function login()
    {
       return $this->fetch();

    }
>>>>>>> 47179af9004878bdc19e518abb19506a3180cfff
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
    /*
     *
     */
    public function user_list()
    {
        $list = info::with("Wallt,basic_Oder")->paginate(3)->toArray();
        $list = $list['data'];
        $arr = array(2,3,4,5,);
        $i = 0;
        foreach ($list as $key => $val)
        {
//            switch ($list[$key]['Upower'])
//            {
//                case 1:  $list[$key]['Upower'] = "普通";  break;
//                case 2:  $list[$key]['Upower'] = "vip";   break;
//                case 3:  $list[$key]['Upower'] = "svip";  break;
//                default: $list[$key]['Upower'] = "ovip";
//            }
            $list[$key]['Upower'] =  Membership($list[$key]['Upower']);
              $num[$key]= arraySum($val['basic_oder'], 'Total_fee',$arr);
              Array_unshift($list[$key], $num[$key]);
        }
        $this->assign('arr',$list);
    	return $this->fetch();
    }
<<<<<<< HEAD
    //
=======
    // 用户信息
>>>>>>> 47179af9004878bdc19e518abb19506a3180cfff
    public function user_info(){
        $uId['uId']  = input("id");
        $list = info::with("honor,follow,Collection,agreement")->where($uId)->find()->toArray();

        $list['Upower'] =  Membership($list['Upower']);

        $this->assign('arr',$list);
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

}
