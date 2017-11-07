<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class Seller extends \think\Controller
{
	public function index(){
		return $this->fetch();
	}
	public function seller_earnings(){
		return $this->fetch();
	}
	public function seller_info(){
		return $this->fetch();
	}
}