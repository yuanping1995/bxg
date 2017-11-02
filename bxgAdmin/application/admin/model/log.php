<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/2 0002
 * Time: 上午 10:26
 */

namespace app\admin\model;

use think\Model;
use think\Db;
class log extends Model
{

    public function addlog($uId = "",$content = "",$time = ""){
        $loginf['staffId'] = $uId;
        $loginf['Content'] = $content;
        $loginf['Handletime'] = $time;
        $logrest = DB::name('log')->insert($loginf);
        if($logrest){
            $start = 1;
        }else{
            $start = 0;
        }
        return $start;
    }
}