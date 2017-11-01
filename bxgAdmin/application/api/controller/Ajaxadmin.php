<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/1 0001
 * Time: 下午 1:36
 */

namespace app\api\controller;


use app\admin\model\Asset;
use app\admin\model\info;
use think\Db;
class Ajaxadmin extends \think\Controller
{
    /**
     * 修改头像的ajax操作
     */
    public function ModifyAvatar()
    {

        $base64_img = trim(input('post.img'));
        $up_dir = './upload/';//存放在当前目录的upload文件夹下
        $U['uId'] = input("post.uId");

        if (!file_exists($up_dir)) {
            mkdir($up_dir, 0777);
        }
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_img, $result)) {
            $type = $result[2];
            if (in_array($type, array('pjpeg', 'jpeg', 'jpg', 'gif', 'bmp', 'png'))) {
                $new_file = $up_dir . date('YmdHis_') . '.' . $type;
                if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $base64_img)))) {
                    $img_path = str_replace('../../..', '', $new_file);
                    $path = new info();

                    $rest = $path->where($U)->update(['Icon' => $img_path]);
                    if (!empty($rest)) {
                        $arr = array('state' => '1111');
                    } else {
                        $arr = array('state' => '1114');
                    }
                }

            }
        }
    }

    /**
     * 会员升级
     */
    public function Memberupgrade()
    {
        $Member['Upower'] = input('Member');
        $uId['uId'] = input('uId');
        $money = input('money');
        $arr = array(
            $Member['Upower'],
            $uId['uId'],
            $money
        );
        if (is_null1($arr) == "0000") {
            $arr1 = "0000";
        } else {
            {
                $info = new info();
                $asset = new Asset();
                $rest = $info->where($uId)->update(['Upower' => $Member['Upower']]);
                $inforaa = info::with('asset')->where($uId)->find()->toArray();
                $inforaa['asset']['Salesprice'] += $money;
                $asd = $inforaa['asset']['Salesprice'];
                $rest1 = $asset->where($uId)->update(['Salesprice' => $asd]);
                if ($rest && $rest1) {
                    $arr1 = '1111';
                }else{
                    $arr1 = '00001';
                }
            }

        }
        return json($arr1);
    }
}