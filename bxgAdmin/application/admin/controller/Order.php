<?php
namespace app\admin\controller;

use app\admin\model\BasicOder;
use app\admin\model\info;
use app\admin\model\Recommend;
use app\admin\model\Seller;

class Order extends \think\Controller
{


    public function order_list(){
        return $this->fetch();
    }

    public function order_detail(){
        $U['uId'] = input('uId');
        $oder = BasicOder::where($U)->find()->toArray();
        $oderdata1   = json_decode($oder['Goods'],true);
        $Address   = json_decode($oder['Address'],true);
        $Delivery   = json_decode($oder['Delivery'],true);
            is_array($oderdata1)?null:$oderdata1 = array();
            $Total = 0;
            $freight = 0;
            foreach ( $oderdata1  as $key => $info) {
                $Sellerid['shopId'] = $info['Sellerid'];
                $infoname = Seller::where($Sellerid)->find()->toArray();
                $info['Sellerid'] = $infoname['shopName'];
                $result[ $Sellerid['shopId']][] = $info;
                 for ($i = 0;$i<count($result[$Sellerid['shopId']]);$i++){
                     $result[$Sellerid['shopId']][$i]['goodsstate'] = oderstate($result[$Sellerid['shopId']][$i]['goodsstate']);
                     $Total+= $result[$Sellerid['shopId']][$i]['goodsmoney']* $result[$Sellerid['shopId']][$i]['bugnum'];
                     $freight+= $result[$Sellerid['shopId']][$i]['freight'] ;
                 }
            }
        foreach ($Delivery as $key=>$dinfo){
            $goodsid['goodsid'] = $dinfo['goodsid'];
            $resultDelivery[  $goodsid['goodsid']]= $dinfo;
        }
        $oder['Address'] = $Address;
        $oder['Delivery'] = $Delivery;
        $oder['Goods'] = $result;
//        dump($oder);
        $this->assign("arr",$result);
        $this->assign("Total",$Total);
        $this->assign("oder",$oder);
        $this->assign("freight",$freight);
        $this->assign("Delivery",$resultDelivery);
           return $this->fetch();
    }
}