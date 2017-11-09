<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/31 0031
 * Time: 下午 4:53
 */

namespace app\admin\model;
use think\Model;

class Card  extends Model
{
    protected $name = "Card";
    public function Coupon(){
        $coupon = $this->hasMany('Coupon','uId','uId');
        return $coupon;
    }
}