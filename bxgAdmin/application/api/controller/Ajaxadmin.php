<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/1 0001
 * Time: 下午 1:36
 */

namespace app\api\controller;


use app\admin\model\Asset;
use app\admin\model\info;
use app\admin\model\log;
use app\admin\model\Wallt;
use app\admin\model\Water;
use think\Db;
class Ajaxadmin extends \think\Controller
{
    /**
     * 修改头像的ajax操作
     */
    public function ModifyAvatar()
    {

        $base64_img = trim(input('post.img'));
        $up_dir = './upload/';//存放在当前目录的upload文件夹下
        $U['uId'] = input("post.uId");

        if (!file_exists($up_dir)) {
            mkdir($up_dir, 0777);
        }
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_img, $result)) {
            $type = $result[2];
            if (in_array($type, array('pjpeg', 'jpeg', 'jpg', 'gif', 'bmp', 'png'))) {
                $new_file = $up_dir . date('YmdHis_') . '.' . $type;
                if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_img)))) {
                    $img_path = str_replace('../../..', '', $new_file);
                    $path = new info();

                    $rest = $path->where($U)->update(['Icon' => $img_path]);
                    if (!empty($rest)) {
                        $arr = array('state' => '1111');
                    } else {
                        $arr = array('state' => '1114');
                    }
                }

            }
        }
    }

    /**
     * 会员升级
     */
    public function Memberupgrade()
    {
        $Member['Upower'] = input('Member');
        $uId['uId'] = input('uId');
        $money = input('money');
        $arr = array(
            $Member['Upower'],
            $uId['uId'],
            $money
        );
        if (is_null1($arr) == "0000") {
            $arr1 = "0000";
        } else {

                $info = new info();
//                $asset = new Asset();
                $rest = $info->where($uId)->update(['Upower' => $Member['Upower']]);
                $inforaa = info::with('asset')->where($uId)->find()->toArray();
                $inforaa['asset']['Salesprice'] += $money;
                $asd = $inforaa['asset']['Salesprice'];
//                $rest1 = $asset->where($uId)->update(['Salesprice' => $asd]);
                if ($rest) {
                    $arr1 = '1111';
                }else{
                    $arr1 = '0001';
                }
        }
        return json($arr1);
    }
    public function Setrole(){
        $U['uId'] = input('uId');
        $U['Role'] = input('role');
        if(is_null1($U)=='0000'){
            $arr = '0000';
        }else{
            $uId['uId'] =  $U['uId'];
            $info = new info();
            $rest = $info->where($uId)->update(['Role' =>  $U['Role'] ]);
            if($rest){
                $arr = '1111';
            }else{
                $arr = '0001';
            }
        }
        return json($arr);
    }
    public function Rechargemoney(){
        $U['uId'] = input('uId');
        $U['Total_fee'] = input('money');
        $state = '0000';
        $msg = "充值失败！";
        $time = time();
        dump(is_null1($U));
        if(is_null1($U)=='0000'){
            $msg = '必要参数为空！';
        }else{
        Db::startTrans();//开启事物
        try{
            $Watertb = new Water();
            $logtb = new log();
            $wallt = DB::execute('update user_wallt set notTotal=notTotal+'.$U['Total_fee'] .' where uId='.$U['uId']);//修改用户钱包
            $asset = DB::execute('update user_asset   set Recharprice=Recharprice+'.$U['Total_fee']  .' where uId='.$U['uId']);//修改用户资产
            $U['Fundsource'] = "充值";
            $U['Fundtype'] = '3';
            $U['Reckontime'] = time();
            $Water = $Watertb->insert($U);//增加用户流水
            $logrest = $logtb->addlog($U['uId'],'系统后台充值',$time);//增加管理员日志
            if($Water &&  $wallt && $asset && $logrest){
                Db::commit();// 提交事务
                $state = '1111';
                $msg = "充值成功！";
            }
        } catch (\Exception $e) {
            Db::rollback();    // 回滚事务
        }
        }
        $return = array(//返回状态
            'state'=>$state,
            'msg'=>$msg,
            'time'=>date("Y-m-d H:m:s",$time)
        );

        return json($return);
    }
}