<?php
namespace app\admin\logic;
use think\Model;
use app\admin\model\info;
use app\admin\model\Wallt;
class user extends Model
{
    //获取学生所在班级的所有作业
    public function getTasks($stuno)
    {
        $stu=$this::get(['stu_no'=>$stuno]);
        $clas=Clas::get(['clas_id'=>$stu['clas_id']]);
        return $clas->task;
    }
}