<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/14 0014
 * Time: 下午 5:15
 */

namespace app\api\controller;


use app\admin\model\BasicOder;
use app\admin\model\Seller;

class Order extends Base
{
    static public function showReturnCode($code = '', $data = [], $msg = '')
    {
        $return_data = [
            'code' => '500',
            'msg' => '未定义消息',
            'data' => $code == 1111 ? $data : [],
        ];
        if (empty($code)) return $return_data;
        $return_data['code'] = $code;
        if(!empty($msg)){
            $return_data['msg'] = $msg;
        }else if (isset(ReturnCode::$return_code[$code]) ) {
            $return_data['msg'] = ReturnCode::$return_code[$code];
        }
        return $return_data;
    }
    public function Orderlist(){
        if(empty(is_visit(1))){
            $U['uId'] = cookie("user_id");
            $U['Status'] = input("Status");
            if(is_null1($U)=="0000"){
                return isnull();
            }else{
                $Orderlist = BasicOder::where(['uId'=>$U['uId'],'Status'=>$U['Status']])->paginate(1);
                if(!empty($Orderlist)){
                    $Orderlist = $Orderlist->toArray();
                }
                foreach ($Orderlist['data'] as $key=>$value){
                    $Orderlist['data'][$key]['Goods'] = json_decode($value['Goods'],true);
                    $Orderlist['data'][$key]['Delivery'] = json_decode($value['Delivery'],true);
                   $shopName = Seller::where('shopid',$value['sellerId'])->find()->toArray();
                    $Orderlist['data'][$key]['sellerId'] = $shopName['shopName'];
                    $Orderlist['data'][$key]['Placetime'] =1800-(time()-$value['Placetime']);
                    unset(  $Orderlist['data'][$key]['Delitime']);
                    unset(  $Orderlist['data'][$key]['Delivery']);
                    unset(  $Orderlist['data'][$key]['Tradetime']);
                    unset(  $Orderlist['data'][$key]['PayType']);
                    unset(  $Orderlist['data'][$key]['Payetitle']);
                    unset(  $Orderlist['data'][$key]['OrderType']);
                    unset(  $Orderlist['data'][$key]['Is_ok']);
                    unset(  $Orderlist['data'][$key]['Closeid']);
                }
                return json(self::showReturnCode('1111',$Orderlist,'查询成功'));
            }
        }else{
            return is_visit(1);
        }
    }
    public function Ordercancel(){
        if(empty(is_visit(1))){
            $U['id'] = input("out_trade_no");
            if(is_null1($U)=="0000"){
                return isnull();
            }else{
                         $Status['Status'] = 7;
                $info = BasicOder::where('out_trade_no',$U['id'])->update(['Status'=>'7']);
                if(!empty($info)){
                    return json(self::showReturnCode('1111',$info,"取消成功！"));
                }else{
                    return json(self::showReturnCode("0000",'',"无该订单"));
                }
            }
        }else{
            return is_visit(1);
        }
    }

}