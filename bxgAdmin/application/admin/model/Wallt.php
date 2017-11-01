<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/30 0030
 * Time: 下午 4:37
 */

namespace app\admin\model;
use think\Model;

class Wallt extends Model
{
    protected $name='Wallt';
    public function info()
    {
        return   $this->belongsTo("info", "uId", "id");
    }

}