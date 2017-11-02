<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 下午 4:37
 */

namespace app\admin\model;
use think\Model;

class Water extends Model
{
    protected $name='Water';
    public function info()
    {
        return   $this->belongsTo("info", "uId", "id");
    }

}