<?php
namespace app\admin\controller;

use app\admin\model\info;
use app\admin\model\Recommend;
use app\admin\model\Resume;
use think\Request;

class Index extends \think\Controller
{

    function _initialize()
    {
        if(empty(cookie('adminuid'))){
            header("Location:admin/login/index");
        }else{
//            dump(cookie('adminuid'));
        }

    }

// 首页框架
    public function index()
    {
       return $this->fetch();
    }

// 用户管理

    // 用户列表
    public function user_list()
    {
        $list = info::with("Wallt,basic_Oder")->paginate()->toArray();
        $list = $list['data'];
        $arr = array(2,3,4,5,);
        $i = 0;
        foreach ($list as $key => $val)
        {
//            switch ($list[$key]['Upower'])
//            {
//                case 1:  $list[$key]['Upower'] = "普通";  break;
//                case 2:  $list[$key]['Upower'] = "vip";   break;
//                case 3:  $list[$key]['Upower'] = "svip";  break;
//                default: $list[$key]['Upower'] = "ovip";
//            }
            $list[$key]['Upower'] =  Membership($list[$key]['Upower']);
              $num[$key]= arraySum($val['basic_oder'], 'Total_fee',$arr);
              Array_unshift($list[$key], $num[$key]);
        }
        $this->assign('arr',$list);
    	return $this->fetch();
    }

    //用户信息
    public function user_info(){
        $uId['uId']  = input("id");
        $list = info::with("honor,follow,Collection,agreement,resume,recommend,close")->where($uId)->find()->toArray();
        $recommendcId['uId'] = $list['recommend']['uId'];
        $recommendinfo = Recommend::with("info")->where($recommendcId)->find();
        if(!empty($recommendinfo)){
              $recommendinfo = $recommendinfo->toArray();
        }
        $list['recommend']['CoverId'] = $recommendinfo['info'];
        $list['Upower'] =  Membership($list['Upower']);
        $list['Role'] = Role($list['Role']);
        $list['AuthStatus'] = AuthStatus($list['AuthStatus']);
        $list['Enable'] = Enable($list['Enable']);
        $list['shopStatus'] = shopStatus($list['shopStatus']);
        $this->assign('arr',$list);
        return $this->fetch();
    }
    public function Download(){
        $input['uId'] = input('uId');
        $resumeinfo = Resume::where($input)->find()->toArray();


                            echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/TR/REC-html40">
                    <head>
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                    <xml><w:WordDocument><w:View>Print</w:View></xml>
                    </head>';
                            echo '<table class="table_dayin">';
                            echo'<table width="587">
    <colgroup>
        <col width="125"/>
        <col width="126"/>
        <col width="172"/>
        <col width="72"/>
        <col width="72"/>
        <col width="72"/>
        <col width="72"/>
        <col width="72"/>
    </colgroup>
    <tbody>
        <tr class="firstRow">
            <td class="et2" rowspan="6" width="93" style="font-size: 12pt; text-align: center; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
            <td class="et3" colspan="7" width="534" style="font-size: 12pt; text-align: center; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0); background: rgb(198, 224, 180);">
                基本资料（BASIC&nbsp;MATERIAL）
            </td>
        </tr>
        <tr>
            <td class="et7" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
                姓名
            </td>
            <td class="et8" width="129" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
                '.$resumeinfo['Idname'].'
            </td>
            <td class="et8" colspan="2" width="108" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
                学历
            </td>
            <td class="et9" colspan="3" width="162" style="font-size: 12pt; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0);">
              '.$resumeinfo['Education'].'
            </td>
        </tr>
        <tr>
            <td class="et11" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217);">
              性别
            </td>
            <td class="et12" width="129" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217);">
              '.$resumeinfo['Sex'].'
            </td>
            <td class="et12" colspan="2" width="108" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217);">
              专业
            </td>
            <td class="et13" colspan="3" width="162" style="font-size: 12pt; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0);">
         计算机
            </td>
        </tr>
        <tr>
            <td class="et7" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
               民族
            </td>
            <td class="et8" width="129" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
               汉
            </td>
            <td class="et8" colspan="2" width="108" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
                	毕业院校
            </td>
            <td class="et9" colspan="3" width="162" style="font-size: 12pt; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0);">
             河北大学
            </td>
        </tr>
        <tr>
            <td class="et11" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217);">
              出生日期
            </td>
            <td class="et12" width="129" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217);">
                 '.$resumeinfo['birthday'].'
            </td>
            <td class="et12" colspan="2" width="108" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217);">
             籍贯
            </td>
            <td class="et13" colspan="3" width="162" style="font-size: 12pt; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); background: rgb(217, 217, 217); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0);">
                四川
            </td>
        </tr>
        <tr>
            <td class="et7" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
                婚姻状态
            </td>
            <td class="et8" width="129" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
               '.$resumeinfo['Mstatus'].'
            </td>
            <td class="et8" colspan="2" width="108" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
                	职位状态
            </td>
            <td class="et9" colspan="3" width="162" style="font-size: 12pt; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0);">
                '.$resumeinfo['jobStatus'].' 
            </td>
        </tr>
        <tr>
            <td class="et2" rowspan="2" width="93" style="font-size: 12pt; text-align: center; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                求职意向
            </td>
            <td class="et17" colspan="7" width="534" style="font-size: 12pt; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0); background: rgb(242, 242, 242);">
                期望薪资：    '.$resumeinfo['Salary'].'
            </td>
        </tr>
        <tr>
            <td class="et21" colspan="7" width="534" style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); background: rgb(91, 155, 213);">
                联系方式（CONTACT&nbsp;WAY）
            </td>
        </tr>
        <tr>
            <td class="et2" rowspan="17" width="93" style="font-size: 12pt; text-align: center; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0);"></td>
            <td class="et7" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
              联系电话
            </td>
            <td class="et8" width="129" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
            '.$resumeinfo['Moblie'].'
            </td>
            <td class="et8" colspan="2" width="108" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
               QQ
            </td>
            <td class="et9" colspan="3" width="162" style="font-size: 12pt; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0);">
                     '.$resumeinfo['QQ'].'
            </td>
        </tr>
        <tr>
            <td class="et7" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; white-space: normal; border-left-width: 0.5pt; border-left-color: rgb(0, 0, 0); border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
              电子邮箱
            </td>
            <td class="et8" width="129" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
               '.$resumeinfo['Email'].'
            </td>
            <td class="et8" colspan="2" width="108" style="font-size: 12pt; text-align: center; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0);">
              	微信
            </td>
            <td class="et9" colspan="3" width="162" style="font-size: 12pt; vertical-align: middle; border-top-width: 0.5pt; border-top-color: rgb(0, 0, 0); border-bottom-width: 0.5pt; border-bottom-color: rgb(0, 0, 0); border-right-width: 0.5pt; border-right-color: rgb(0, 0, 0);">
               '.$resumeinfo['Email'].'
            </td>
        </tr>
        <tr>
            <td class="et17" colspan="7" width="534" style="font-size: 12pt; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0); background: rgb(242, 242, 242);">
              住址  '.$resumeinfo['Address'].'
            </td>
        </tr>
        <tr>
            <td class="et25" colspan="7" width="534" style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); background: rgb(255, 242, 204);">
                职业技能（VOCATIONAL&nbsp;SKILLS）
            </td>
        </tr>
        <tr>
            <td class="et17" colspan="7" width="534" style="font-size: 12pt; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0); background: rgb(242, 242, 242);">
               '.$resumeinfo['Skill'].'
            </td>
        </tr>
       
        <tr>
            <td class="et28" colspan="7" width="534" style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0); background: rgb(208, 206, 206);">
                工作经历（WORK&nbsp;EXPERIENCE）
            </td>
        </tr>
        <tr>
            <td class="et31" width="94" style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                时间
            </td>
            <td class="et32" colspan="3" width="312" style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                公司
            </td>
            <td class="et32" colspan="3" width="162" style="font-size: 12pt; text-align: center; vertical-align: middle; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                职位
            </td>
        </tr>
        <tr>
            <td class="et34" colspan="7" rowspan="2" width="534" style="font-size: 12pt; vertical-align: top; border-width: 0.5pt; border-color: rgb(0, 0, 0);">
                描述
            </td>
        </tr>
        <tr></tr>
      
        <tr></tr>
        <tr></tr>
    </tbody>
</table>
<p>
    <br/>
</p>';
        echo '</table>';
        ob_start(); //打开缓冲区
        header("Cache-Control: public");
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        if (strpos($_SERVER["HTTP_USER_AGENT"],'MSIE')) {
            header('Content-Disposition: attachment; filename=test.doc');
        }else if (strpos($_SERVER["HTTP_USER_AGENT"],'Firefox')) {
            Header('Content-Disposition: attachment; filename=test.doc');
        } else {
            header('Content-Disposition: attachment; filename=test.doc');
        }
        header("Pragma:no-cache");
        header("Expires:0");
        ob_end_flush();//输出全部内容到浏览器
    }



}
