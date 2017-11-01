<?php
namespace app\admin\model;

use think\Model;

class info extends Model
{
    protected $name='info';

    public  function Wallt()
    {
         $wallt = $this->hasOne('Wallt','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
         return  $wallt;
    }
     public function basicOder(){
         $num = $this->hasMany('basicOder','uId','uId');
         return $num;
     }
     public function honor(){
         $honor = $this->hasOne('Honor','uId','uId','','LEFT');
         return  $honor;
     }
     public function Follow(){
         $follow = $this->hasMany('Follow','uId','uId');
         return $follow;
     }
     public function collection(){
         $collection = $this->hasMany("Collection",'uId','uId');
         return $collection;
     }
     public function agreement(){
         $agreement = $this->hasMany("Agreement",'uId','uId');
         return $agreement;
     }


}