<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class Order extends \think\Controller
{

// ��������

    // �����б�
    public function order_list(){
        return $this->fetch();
    }
    // ������Ϣ
    public function order_detail(){
        return $this->fetch();
    }
}