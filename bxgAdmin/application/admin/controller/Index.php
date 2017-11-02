<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
use think\Request;

class Index extends \think\Controller
{

    function _initialize()
    {
        if(empty(cookie('adminuid'))){
            header("Location:admin/login/index");
        }else{
//            dump(cookie('adminuid'));
        }

    }

// 首页框架
    public function index()
    {
       return $this->fetch();
    }


// 用户管理

    // 用户列表
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
<<<<<<< HEAD
//        dump($list);
=======
        // dump($list);
>>>>>>> 6a240e91ff692d9bd3f4db88dd2ca59761e73c58
        $this->assign('arr',$list);
    	return $this->fetch();
    }

    //用户信息
    public function user_info(){
        $uId['uId']  = input("id");
        $list = info::with("honor,follow,Collection,agreement,resume,recommend")->where($uId)->find()->toArray();
        $recommendcId['uId'] = $list['recommend']['uId'];
        $recommendinfo = Recommend::with("info")->where($recommendcId)->find();
        if(!empty($recommendinfo)){
              $recommendinfo = $recommendinfo->toArray();
        }
        $list['recommend']['CoverId'] = $recommendinfo['info'];
        $list['Upower'] =  Membership($list['Upower']);
        $list['Role'] = Role($list['Role']);
        $list['AuthStatus'] = AuthStatus($list['AuthStatus']);
        $list['Enable'] = Enable($list['Enable']);
        $list['shopStatus'] = shopStatus($list['shopStatus']);
        $this->assign('arr',$list);
        return $this->fetch();
    }



}
