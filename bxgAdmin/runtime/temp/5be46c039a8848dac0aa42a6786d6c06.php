<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_3.html";i:1510037471;}*/ ?>
<div class="row full-height-scroll">
    <div class="col-sm-3">
        <div class="resumeAvactor">
            <img src="<?php echo $arr['resume']['Photo']; ?>">


            <!--<button class="btn btn-success dim btn-large-dim" type="button" title="下载简历"><i class="fa fa-download"></i>-->
              <!--</button>-->
        </div>
    </div>
    <div class="col-sm-8">
        <div class="ibox float-e-margins">
            <!--工作-->
            <div class="ibox-content" style="border:none;">
                <div class="alert alert-success">
                    基本资料<small>（BASIC MATERIAL）</small>
                </div>
                <div class="basic" style="padding:0 15px;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>姓名：<?php echo $arr['resume']['Idname']; ?></td>
                                <td>学历：<?php echo $arr['resume']['Education']; ?></td>
                            </tr>
                            <tr>
                                <td>性别：<?php echo $arr['resume']['Sex']; ?></td>

                            </tr>


                            <tr>
                                <td>婚姻状态：<?php echo $arr['resume']['Mstatus']; ?></td>
                                <td>出生日期：<?php echo date("Y/m/d ",$arr['resume']['birthday'] ); ?></td>

                            </tr>
                            <tr>
                                <td>期望薪资：<?php echo $arr['resume']['Salary']; ?></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="alert alert-info">
                    联系方式<small>（CONTACT WAY）</small>
                </div>
                <div class="contact" style="padding:0 15px;">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>联系电话：<?php echo $arr['resume']['Moblie']; ?></td>
                                <td>QQ：<?php echo $arr['resume']['QQ']; ?></td>
                            </tr>
                            <tr>
                                <td>电子邮箱：<?php echo $arr['resume']['Email']; ?></td>

                            </tr>
                            <tr>
                                <td>住址：<?php echo $arr['resume']['Address']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="alert alert-warning">
                    职业技能<small>（VOCATIONAL SKILLS）</small>
                </div>
                <div class="skills" style="padding:0 15px;">
                    <ol style="padding:0 15px;line-height:30px;">
                        <li><?php echo $arr['resume']['Skill']; ?></li>

                    </ol>
                </div>

                <div class="alert alert-danger">
                    工作经历<small>（WORK EXPERIENCE）</small>
                </div>
                <div class="work" >
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            <?php if(is_array($arr['resume']['Experjson']) || $arr['resume']['Experjson'] instanceof \think\Collection || $arr['resume']['Experjson'] instanceof \think\Paginator): if( count($arr['resume']['Experjson'])==0 ) : echo "" ;else: foreach($arr['resume']['Experjson'] as $key=>$vo_1): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseOne">
                                            <ul class="row" style="padding:0;list-style:none;text-align:left;">
                                                <li class="col-sm-4"><?php echo $vo_1['time']; ?></li>
                                                <li class="col-sm-4"><?php echo $vo_1['gsnaem']; ?></li>
                                                <li class="col-sm-4"><?php echo $vo_1['gz']; ?></li>
                                            </ul>

                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                       <div>
                                            项目名称：<?php echo $vo_1['project']; ?>
                                        </div>
                                        <div>
                                            工作描述：<?php echo $vo_1['describe']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>


                </div>





            </div>
        </div>
    </div>
</div>