<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class User extends \think\Controller
{
	public function tab_1(){
		$uId['uId']  = input("id");
        $list = info::with("honor,follow,Collection,agreement,resume,recommend,close")->where($uId)->find()->toArray();
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
        $this->assign('arr',$recommendinfo);
        return $this->fetch();
	}
	public function tab_2(){
		return $this->fetch();
	}
	public function tab_3(){
		return $this->fetch();
	}
	public function tab_4(){
		return $this->fetch();
	}
	public function tab_5(){
		return $this->fetch();
	}
	public function tab_6(){
		return $this->fetch();
	}
	public function tab_7(){
		return $this->fetch();
	}
	public function tab_8(){
		return $this->fetch();
	}
	public function tab_9(){
		return $this->fetch();
	}
	public function user_earnings(){
		return $this->fetch();
	}
}