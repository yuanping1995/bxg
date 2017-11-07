<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 下午 12:00
 */
namespace app\admin\model;

use think\Model;

class BasicOder  extends Model
{
    protected $name='basic_order';
    public function info()
    {
        return   $this->belongsTo("BasicOder", "uId", "id");
    }
    public function Seller(){
        return $this->hasOne("Seller","shopId","");
    }
}