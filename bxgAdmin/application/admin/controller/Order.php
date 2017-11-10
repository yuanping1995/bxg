<?php
namespace app\admin\controller;

use app\admin\model\BasicOder;
use app\admin\model\info;
use app\admin\model\Recommend;
use app\admin\model\Seller;

class Order extends \think\Controller
{



    public function order_list()
    {
    }
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

    public function order_detail(){
        $U['Mergeid'] = input('id');
        $oder = BasicOder::where($U)->paginate()->toArray();

        $Total = 0;
        $freight = 0;
        for ($i=0;$i<$oder['total'];$i++){
            $oder1 = $oder['data'][$i];
            $oder['data'][$i]['Goods']   = json_decode($oder1['Goods'],true);
            $oder['data'][$i]['Address']   = json_decode($oder1['Address'],true);
            $oder['data'][$i]['Delivery']   = json_decode($oder1['Delivery'],true);
            $Total+= $oder['data'][$i]['Total_fee'];
            $freight+= $oder['data'][$i]['Faretotal'];
//        dump($oder);
        $Delivery =  $oder['data'][$i]['Delivery'];
        $Sellerid['shopId'] =  $oder['data'][$i]['sellerId'];
            $infoname = Seller::where($Sellerid)->find()->toArray();
            $oder['data'][$i]['sellerId'] = $infoname['shopName'];

//            is_array($oderdata1)?null:$oderdata1 = array();
//            $Total = 0;
//            $freight = 0;
//            foreach ( $oderdata1  as $key => $info) {
//                $Sellerid['shopId'] = $info['Sellerid'];
//                $infoname = Seller::where($Sellerid)->find()->toArray();
//                $info['Sellerid'] = $infoname['shopName'];
//                $result[ $Sellerid['shopId']][] = $info;
//                 for ($i = 0;$i<count($result[$Sellerid['shopId']]);$i++){
//                     $result[$Sellerid['shopId']][$i]['goodsstate'] = oderstate($result[$Sellerid['shopId']][$i]['goodsstate']);
//                     $Total+= $result[$Sellerid['shopId']][$i]['goodsmoney']* $result[$Sellerid['shopId']][$i]['bugnum'];
//                     $freight+= $result[$Sellerid['shopId']][$i]['freight'] ;
//                 }
//            }

        foreach ($Delivery as $key=>$dinfo){
            $goodsid['goodsid'] = $dinfo['goodsid'];
            $resultDelivery[$goodsid['goodsid']][]= $dinfo;
        }
        }
//        $oder['Address'] = $Address;
//         $oder['Delivery'] = $Delivery;
//        dump($oder['Delivery']);exit;
//        $oder['Goods'] = $result;
//dump($oder);
        $this->assign("arr",$oder);
        $this->assign("Total",$Total);
        $this->assign("oder",  $oder['data'][0]);
        $this->assign("freight",$freight);

        $this->assign("Delivery",$resultDelivery);
           return $this->fetch();
    }
}