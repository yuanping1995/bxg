<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
class Order extends \think\Controller
{

// ��������

    // ��ͨ�����б�
    public function common_order(){
        return $this->fetch();
    }
    // Ԥ�������б�
    public function reserve_order(){
        return $this->fetch();
    }
    // ���������б�
    public function belong_order(){
        return $this->fetch();
    }
    // ������Ϣ
    public function order_detail(){
        return $this->fetch();
    }
}