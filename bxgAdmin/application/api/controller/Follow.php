<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/14 0014
 * Time: 下午 4:03
 */

namespace app\api\controller;


class Follow extends Base
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
     * 我的关注店铺（未完善）
     * @return array|string
     */
    public function Followlist(){
        if(empty(is_visit(1))){
            $U['uId'] = cookie('user_id');
            if(is_null1($U)=="0000"){
                return isnull();
            }else{
                $list =  \app\admin\model\Follow::where('uId',$U['uId'])->paginate(18);
                if($list){
                    $list = $list->toArray();
                }
                dump($list);

            }
        }else{
            return is_visit(1);
        }
    }

    /**删除我关注的店铺
     * @return array|\think\response\Json
     */
    public function Followcancel(){
        $U['followId'] = json_encode(input("followId"));

        if(is_null1($U)=="0000"){
            return isnull();
        }else{
            $rest = \app\admin\model\Follow::destroy($U['followId']);
            if(!empty($rest)){
                return    json($this->showReturnCode("1111",$rest,"删除成功！"));
            }else{
                return    json($this->showReturnCode("0000", '',"删除失败！"));
            }
        }

}
}