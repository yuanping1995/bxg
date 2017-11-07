<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
use app\admin\model\Seller;

class User extends \think\Controller
{
    function _initialize()
    {
        $uId['uId']  = input("id");
        $list = info::with("honor,follow,Collection,agreement,resume,recommend,close,health")->where($uId)->find()->toArray();
        $recommendcId['uId'] = $list['recommend']['uId'];
        $recommendinfo = Recommend::with("info")->where($recommendcId)->find();
        if(!empty($recommendinfo)){
            $recommendinfo = $recommendinfo->toArray();
        }
        $list['recommend']['CoverId'] = $recommendinfo['info'];
        $list['Upower'] =  Membership($list['Upower']);
        $list['Role'] = Role($list['Role']);
        for ($i=0;$i<count($list['health']);$i++){
            $list['health'][$i]['Prove'] = json_decode($list['health'][$i]['Prove'],true);
    }
        $list['AuthStatus'] = AuthStatus($list['AuthStatus']);
        $list['Enable'] = Enable($list['Enable']);
        $list['resume']['Sex'] = Sex($list['resume']['Sex']);
        $list['resume']['Experjson'] = json_decode($list['resume']['Experjson']);
        for($i=0;$i<count($list['resume']['Experjson']);$i++) {
            $list['resume']['Experjson'][$i] = object2array($list['resume']['Experjson'][$i]);
        }
        $list['resume']['Mstatus'] = Mstatus($list['resume']['Mstatus']);
        $list['resume']['IdPhoto'] = object2array(json_decode($list['resume']['IdPhoto']));
        $list['shopStatus'] = shopStatus($list['shopStatus']);
//        dump($list);
        $this->assign('arr',$list);
    }
	public function tab_1(){
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
	    $uId['shopid'] = input("shopid");
	    $Seller = Seller::where()->find()->toArray();
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