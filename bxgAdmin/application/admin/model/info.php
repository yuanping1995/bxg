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
     public function resume(){
         $resume = $this->hasOne('Resume','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
         return $resume;
     }
     public function recommend(){
         $recommend = $this->hasOne('Recommend','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
         return $recommend;
     }
     public function asset(){
         $asset = $this->hasOne('Asset','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
         return $asset;
     }
     public function staff(){
         $Staff = $this->hasOne('Staff','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
         return $Staff;
     }
    public function close(){
        $Close = $this->hasMany('Close','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
        return $Close;
    }
    public function Health(){
        $Health = $this->hasMany('Health','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
        return $Health;
    }
    public function Seller(){
        $Seller = $this->hasOne('Seller','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
        return $Seller;
    }
    public function Safe(){
        $Safe = $this->hasMany('Safe','uId','uId', ['info'=>'a', 'Wallt'=>'c'],'LEFT');
        return $Safe;
    }
    public function Wish(){
        $Wish = $this->hasMany("Wish","uId",'uId');
        return $Wish;
    }


}