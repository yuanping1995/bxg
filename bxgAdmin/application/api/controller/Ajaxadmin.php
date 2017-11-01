<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/1 0001
 * Time: 下午 1:36
 */

namespace app\api\controller;


use app\admin\model\info;

class Ajaxadmin extends \think\Controller
{
    /**
     * 修改头像的ajax操作
     */
    public function ModifyAvatar(){
        $base64_img = trim($_POST['img']);
        $up_dir = './upload/';//存放在当前目录的upload文件夹下
        $U['uId'] = input("uId");
        if(!empty($U['uId'])){
            $arr = array('state'=>'0003');
            exit;
        }
        if(!file_exists($up_dir)){
            mkdir($up_dir,0777);
        }
        if(preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_img, $result)){
            $type = $result[2];
            if(in_array($type,array('pjpeg','jpeg','jpg','gif','bmp','png'))){
                $new_file = $up_dir.date('YmdHis_').'.'.$type;
                if(file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_img)))){
                    $img_path = str_replace('../../..', '', $new_file);
                    $path = new info();
                    $img_path['Icon'] = $img_path;
                    $rest = $path->where($U)->save($img_path);
                    if(!empty($rest)){
                        $arr = array('state'=>'1111');
                    }else{
                        $arr = array('state'=>'1114');
                    }

                }else{
                    $arr = array('state'=>'0000');

                }
            }else{
                //文件类型错误
                $arr = array('state'=>'0001');
            }

        }else{
            //文件错误
            $arr = array('state'=>'0002');
        }
        return json($arr);
    }

}