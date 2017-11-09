<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/1 0001
 * Time: 下午 1:36
 */

namespace app\api\controller;


use app\admin\model\Asset;
use app\admin\model\Close;
use app\admin\model\Coupon;
use app\admin\model\Honor_detail;
use app\admin\model\info;
use app\admin\model\log;
use app\admin\model\Safe;
use app\admin\model\Staff;
use app\admin\model\Wallt;
use app\admin\model\Water;
use app\admin\model\Wish;
use think\Db;
use think\Request;
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

    /**设置角色
     * @return \think\response\Json
     */
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

    /**会员充值
     * @return \think\response\Json
     */
    public function Rechargemoney(){
        $U['uId'] = input('uId');
        $U['Total_fee'] = input('money');
        $state = '0000';
        $msg = "充值失败！";
        $time = time();
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
            $logrest = $logtb->addlog(cookie('adminuid'),'系统后台充值',$time);//增加管理员日志
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

    /**设置认证状态
     * @return \think\response\Json
     */
    public function Setenable()
    {
        if (0) {
            return json("非法访问！");
        } else {
            $U['uId'] = input('uId');
            $U['Enable'] = input('enable');
            $time = time();
            $state = '0000';
            $msg = "设置失败！";
            $logtb = new log();
            Db::startTrans();//开启事物
            try{

                if (is_null1($U) == '0000') {
                    $msg = "缺少必要参数";
                    $state = '0001';
                } else {
                    $uId['uId'] = $U['uId'];
                    $infores = info::where($uId)->update($U);
                    $aa = cookie('adminuid');
                    $logrest = $logtb->addlog($aa,'用户'. $U['uId'].'状态设置为'.$U['Enable'],$time);//增加管理员日志
                }
                if($infores &&  $logrest){
                    Db::commit();// 提交事务
                    $state = '1111';
                    $msg = "设置成功！";
                }
            } catch (\Exception $e) {
                Db::rollback();    // 回滚事务
            }
            $return = array(
                'state' => $state,
                'msg' => $msg,
                'time'=>$time
            );
            return json($return);
        }
    }

    /**后台登录
     * @return \think\response\Json
     */
    public function Login(){
        if (request()->isGet()) {
            return json("非法访问！");
        } else {
            $U['Mobilenumber'] = input('Mobilenumber');
            $U['uPass'] =  input('pass');
            $time = time();
            $cookie = "登录未成功";
            if(is_null1($U)=='0000'){
                $state = '0002';
                $msg = "缺少必要参数";
            }else {
                $U['uPass'] = md5( $U['uPass']);
                $info = info::with("Staff")->where($U)->find();
                if ($info) {
                    $info = $info->toArray();
                    if ($info['staff']['Staffrole'] == 8) {
                        cookie('adminuid', $info['uId'],3600);
                        cookie('Staffrole', $info['staff']['Staffrole'],3600);
                        $state = '1111';
                        $msg = "登录成功！";
                        $cookie = cookie('adminuid');
                    } else {
                        $state = '0000';
                        $msg = "对不起你不能登录管理系统";
                    }
                } else {
                    $state = '0001';
                    $msg = "密码错误or账号错误";
                }
            }
            $return = array(
                'state'=>$state,
                'msg'=>$msg,
                'time'=>date("Y-m-d H:m:s",$time),
                'cookie'=>$cookie
            );
          return json($return);
        }
    }

    /**信用修改接口
     * @return \think\response\Json
     */
    public function Creditupgrade(){
        if (request()->isGet()) {
            return json("非法访问！");
        }else{
            $U['uId'] = input("uId");
            $U['Honorval'] = input('Credit');
            $U['Honorsource'] = input('content');
            $time = time();
            if(is_null1($U)=='0000'){
                $state = '0000';
                $msg = '必要参数不完整';
            }else {
                $logtb = new log();
                Db::startTrans();//开启事物
                try {
                    $wallt = DB::execute('update user_honor set Honorval=Honorval+' . $U['Honorval'] . ' where uId=' . $U['uId']);//修改用户钱包
                    $honordetail = Honor_detail::where('uId',$U['uId'])->insert($U);
                    $aa = cookie('adminuid');
                    $logrest = $logtb->addlog($aa,'给'.$U['uId'].'用户增加信用'.$U['Honorval'],$time);//增加管理员日志
                    if ($wallt && $honordetail && $logrest) {
                        Db::commit();// 提交事务
                        $state = '1111';
                        $msg = "设置成功！";
                    }else{
                        $state = '0001';
                        $msg = "设置失败！";
                    }
                } catch (\Exception $e) {
                    Db::rollback();    // 回滚事务
                }
            }
            $return = array(
                'state'=>$state,
                'msg'=>$msg,
                'time'=>date("Y-m-d H:m:s",$time)
            );
            return json($return);
        }
    }

    /**删除亲密人
     * @return array|string
     */
    public function Deleteclose(){
        if(empty(is_visit(2))) {//访问是post是执行
            $U['id'] = array();
            $U['id'] = input('arr');//接受情亲密人id数组
            $U['uId'] = input('uId');
            $time = time();
            if (is_null1($U) == '0000') {
                $state = '0000';
                $msg = '必要参数不完整';
            } else {
                $logtb = new log();
                DB::startTrans();
                try {
                    $uId['uId'] = $U['uId'];
                    $deletclose = Close::destroy($U['id']);
                    $aa = cookie('adminuid');
                    $logrest = $logtb->addlog($aa,'删除'.$U['uId'].'的亲密人id有'.json_encode($U['id'])."",$time);//增加管理员日志
                    if($deletclose && $logrest){
                        Db::commit();// 提交事务
                        $state = '1111';
                        $msg = "删除成功！";
                    }else{
                        $state = '0001';
                        $msg = "删除失败！";
                    }
                }catch (\Exception $e) {
                    Db::rollback();    // 回滚事务
                    $state = '0002';
                    $msg = "数据库操作失败";
                }
            }
            $retrn = array(
                'state'=>$state,
                'msg'=>$msg,
                'time'=>date("Y-m-d H:m:s",$time)
            );
            return $retrn;
        }
        else{//非get时返回错误
                return is_visit(2);
            }
    }

    /**删除保险单
     * @return array|string
     */
    public function DeleteInsurance(){
        if(empty(is_visit(2))) {//访问是post是执行
            $U['safeId'] = array();
            $U['safeId'] =input('arr');//接受保险单号id数组
            $U['uId'] = input('uId');
            $time = time();
            if (is_null1($U) == '0000') {
                $state = '0000';
                $msg = '必要参数不完整';
            } else {
                $logtb = new log();
                DB::startTrans();
                try {
                    $uId['uId'] = $U['uId'];
                    $deletInsurance = Safe::destroy($U['safeId']);
                    $aa = cookie('adminuid');
                    $logrest = $logtb->addlog($aa,'删除'.$U['uId'].'的保险单号id有'.json_encode($U['safeId'])."",$time);//增加管理员日志
                    if($deletInsurance && $logrest){
                        Db::commit();// 提交事务
                        $state = '1111';
                        $msg = "删除成功！";
                    }else{
                        $state = '0001';
                        $msg = "删除失败！";
                    }
                }catch (\Exception $e) {
                    Db::rollback();    // 回滚事务
                    $state = '0002';
                    $msg = "数据库操作失败";
                }
            }
            $retrn = array(
                'state'=>$state,
                'msg'=>$msg,
                'time'=>date("Y-m-d H:m:s",$time)
            );
        }else{
            return is_visit(2);
        }
        return $retrn;
    }

    /**删除用户心愿表
     * @return array
     */
    public function Deletewish(){
        if(empty(is_visit(2))){
            $U['uId'] = input('uId');
            $U['wishId'] = input('id');
            $time = time();
//            dump($U);
            if(is_null1($U)=='0000'){
                $state = '0000';
                $msg = "必要参数为空";
            }else{
                $logtb = new log();
                DB::startTrans();
                try {
                    $uId['uId'] = $U['uId'];
                    $deletInsurance = Wish::destroy($U['wishId']);
                    $aa = cookie('adminuid');
                    $logrest = $logtb->addlog($aa,'删除'.$U['uId'].'的保险单号id有'.json_encode($U['wishId'])."",$time);//增加管理员日志
                    if($deletInsurance && $logrest){
                        Db::commit();// 提交事务
                        $state = '1111';
                        $msg = "删除成功！";
                    }else{
                        $state = '0001';
                        $msg = "删除失败！";
                    }
                }catch (\Exception $e) {
                    Db::rollback();    // 回滚事务
                    $state = '0002';
                    $msg = "数据库操作失败";
                }
            }
            $retrn = array(
                'state'=>$state,
                'msg'=>$msg,
                'time'=>date("Y-m-d H:m:s",$time)
            );
            return $retrn;
        }else{
          return  is_visit(2);
        }
    }

    /**删除优惠券
     * @return array|string
     */
    public function Deletecoupon(){
        if(empty(is_visit(1))){
            $U['uId'] = input("uId");
            $U['id'] = input("id");
            $time = time();
            if (is_null1($U) == '0000') {
                $state = '0000';
                $msg = '必要参数不完整';
            } else {
                $logtb = new log();
                DB::startTrans();
                try {
                    $Delectcoupon = Coupon::destroy(  $U['id']);
                    $aa = cookie('adminuid');
                    $logrest = $logtb->addlog($aa,'删除'.$U['uId'].'的保险单号id有'.json_encode($U['id'])."",$time);//增加管理员日志]
                    if($Delectcoupon && $logrest){
                        DB::commit();
                        $state = '1111';
                        $msg = "删除成功！";
                    }else{
                        $state = '0001';
                        $msg = "删除失败！";
                    }
                }catch (\Exception $e) {
                    Db::rollback();    // 回滚事务
                    $state = '0002';
                    $msg = "数据库操作失败";
                }

            }
            $retrn = array(
                'state'=>$state,
                'msg'=>$msg,
                'time'=>date("Y-m-d H:m:s",$time)
            );
            return $retrn;
        }else{
            return is_visit(1);
        }
    }
    public function Selectoder(){
        
    }

}