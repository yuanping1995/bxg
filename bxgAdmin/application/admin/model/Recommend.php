<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/1 0001
 * Time: 上午 11:48
 */

namespace app\admin\model;

use think\Model;
class Recommend extends Model
{
 protected $name = "recommend";
 public function info(){
     $info  =  $this->hasOne("Info",'uId','CoverId')->field('uId,id,nickName');;
     return $info;
 }
}