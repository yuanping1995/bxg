<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/14 0014
 * Time: 上午 10:31
 */

namespace app\api\controller;

use app\admin\model\Collection;

class Collectiion  extends Base
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
    /**
     * 收藏列表
     * @return string|\think\response\Json
     */
        public function Collectlist(){
            header("Access-Control-Allow-Origin: *");
            if(empty(is_visit(1))){
                $U['uId'] = cookie('user_id');
                $U['CollectTime'] = time();
                 strtotime(date('Y-m-d',strtotime('+1 day')));
                 $list = Collection::where('uId',$U['uId'])->paginate(18);
                 if($list){
                     $list = $list->toArray();
                 }
                $listdata = $list['data'];
                 for ($i = 0;$i<count($listdata);$i++){
                     $listdata[$i]['Collection'] = json_decode( $listdata[$i]['Collection'],'turn');
                     $listdata[$i]['CollectTime'] = date( "Y-m-d",$listdata[$i]['CollectTime']);
                     unset( $listdata[$i]['uId']);
                     unset( $listdata[$i]['collectId']);
                     unset( $listdata[$i]['Colletype']);
                 }
                foreach ($listdata as $key => $dinfo) {
                    $goodsid['CollectTime'] = $dinfo['CollectTime'];
                    $resultDelivery[ $dinfo['CollectTime']][] = $dinfo;
                }
                if(!empty($resultDelivery)) {
                    return json($this->showReturnCode("1111",$resultDelivery,"查询成功！"));
                }else{
                     return json($this->showReturnCode("0000","","查询失败！"));
                }
            }else{
                return is_visit(1);
            }
        }

    /**
     * 删除我的收藏
     * @return array|string
     */
        public function Collectcancel(){
            header("Access-Control-Allow-Origin: *");
            if(empty(is_visit(1))){
                $U['uId'] = cookie('user_id');
                $U['id'] = input("id");
                if(is_null1($U)=='0000'){
                    return isnull();//必要参数不完整的提示
                }
                $cancel = Collection::where('id',$U['id'] )->delete();
                if(!empty($cancel)){
                    return    json($this->showReturnCode("1111",$cancel,"删除成功！"));
                }else{
                return    json($this->showReturnCode("0000", '',"删除失败！"));
                }

            }else{
                return is_visit(1);
            }
        }

    /**
     * 清空我的收藏
     * @return array|string
     */
        public function Collectempty(){
            header("Access-Control-Allow-Origin: *");
            if(empty(is_visit(1))){
                $U['uId'] = input("uId");
                if(is_null1($U)=='0000'){
                    return isnull();//必要参数不完整的提示
                }else{
                    $cancel = Collection::where('uId',$U['uId'] )->delete();
                    if(!empty($cancel)){
                        return    json($this->showReturnCode("1111",$cancel,"清空成功！"));
                    }else{
                        return    json($this->showReturnCode("0000", '',"清空失败！"));
                    }
                }
            }else{
                return is_visit(1);
            }
        }
}