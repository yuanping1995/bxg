<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\index\user_info.html";i:1509505300;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
        .float-e-margins .btn{
            margin:0;
        }
        .showAvactor,.resumeAvactor{margin:15px 0;text-align: center;}
        .showAvactor img{
            margin:0 auto;
            width:160px;
            height:160px;
            border:1px solid #eee;
        }
        .resumeAvactor img{
            margin:0 auto;
            width:167px;
            height:220px;
            border:1px solid #eee;
        }
        .clients-list .tab-pane{height:auto !important;}
        tr:nth-child(2n){
            background: #f7f7f7;
        }
        .fixed-table-container{
            height:500px !important;
        }
        .control-label{
            padding:0 !important;
        }
        .col-sm-9 .form-group{
            padding:5px 0 30px;
            border-bottom: 1px solid #eee;
        }
        .modal-title{
            padding:0 0 15px;
            text-align:center;
            border-bottom: 1px solid #eee;
        }
        .alert{
            padding:5px 10px;
            font-size:15px;
        }
        .job-intension{
            padding:30px;
            font-size:16px;
        }
        .job-intension p{
            margin-top: 5px;
            font-weight: bold;
        }
        .panel-heading{
            padding:5px 15px;
        }

        .diagnosis-proof{
            padding:0 8px;
        }
        .shop-head img{
            display: block;
            padding:10px 0;
            margin:0 auto;
        }
        .card_main{
            width:100%;
            padding:5px;
            color: #fff;
            border-radius:5px;    
            background:-webkit-linear-gradient(315deg,#3b383a, #1d1419);
            background:-o-linear-gradient(315deg,#3b383a, #1d1419);
            background:linear-gradient(315deg,#3b383a, #1d1419); 
        }
        .identify-img{
            width: 100%;
            height:100%;
            border-radius: 7px;
        }
        .radio{
            padding-top:0 !important;
        }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated"> 
        <div class="ibox float-e-margins">
            <div class="ibox-content"> 
                <a href="user_list.html" class="btn btn-primary">返回上一级</a>
                <div class="clients-list">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">基本信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2">亲密信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3">简历信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4">健康信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-5">商家扩展信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-6">保险信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-7">用户心愿</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-8">订单信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-9">卡片信息</a></li>
                    </ul>
                    <div class="tab-content" >
                        <!-- 用户充值弹窗 -->
                        <div class="modal outmodal" id="upGrade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">会员升级</h4>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal m-t">
                                                 <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">等级：</label>
                                                    <div class="col-sm-9">
                                                        <div class="col-sm-3 radio i-checks" >
                                                            <label><input type="radio" checked="" value="1" name="grade"><i></i>vip</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="2" name="grade"> <i></i>svip</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="0" name="grade"> <i></i> ovip</label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">升级金额：</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" value="20" name="upgrade" disabled="disabled" style="padding-left:10px;border:1px solid #ccc;background:#fff;">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">保存</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                         <!-- 用户角色设置弹窗 -->
                        <div class="modal outmodal" id="setRole" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">设置用户角色</h4>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal m-t">
                                                <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">角色：</label>
                                                    <div class="col-sm-9">
                                                        <div class="col-sm-4 radio i-checks" >
                                                            <label><input type="radio" checked="" value="1" name="role"> <i></i>内部员工</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="2" name="role"> <i></i> 兼职</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="0" name="role"> <i></i> 大众</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">保存</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- 用户认证状态弹窗 -->
                         <div class="modal outmodal" id="identify" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">预览身份认证信息</h4>
                                        <div class="row modal-body">
                                            <div class="col-sm-12">
                                                <p>姓名：XXX</p>
                                                <p>身份证号：1111111111111111111111111</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4>正面照</h4>
                                                <a class="imgBig" href="http://sz.focus.cn/upload/photos/1786/K5cdnU75.jpg">
                                                    <img class="identify-img" src="http://sz.focus.cn/upload/photos/1786/K5cdnU75.jpg"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4>背面照</h4>
                                                <a class="imgBig" href="http://d.hiphotos.baidu.com/zhidao/pic/item/c75c10385343fbf24971f4ebb17eca8064388f9d.jpg">
                                                    <img class="identify-img" src="http://d.hiphotos.baidu.com/zhidao/pic/item/c75c10385343fbf24971f4ebb17eca8064388f9d.jpg"/>
                                                </a>
                                           </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- 用户信用值提升弹窗 -->
                        <div class="modal outmodal" id="credit" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">提升信用值</h4>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal m-t">
                                                <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">提升值：</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" name="" placeholder ="请输入提升值" style="margin-top:-5px;padding:5px;">
                                                    </div>
                                                </div>
                                                <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">理由：</label>
                                                    <div class="col-sm-9">
                                                        <textarea cols="35" rows="5" style="resize:none;"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">保存</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div id="tab-1" class="tab-pane active" style="margin-top:20px;">
                            <div class="row full-height-scroll">
                               
                                <div class="col-sm-3">
                                    <div class="showAvactor">
                                        <img src="http://up.qqjia.com/z/face01/face06/facejunyong/junyong04.jpg">
                                        <br>
                                        <button type="button" class="btn btn-primary btn-sm upAvactor" style="margin:15px 0;">修改头像</button>
                                        <input type="file" accept="image/*" name="file" class="hide imgUp">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label class="col-sm-3 control-label">用户ID</label>
                                            <div class="col-sm-9">
                                                <?php echo $arr['uId']; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-3 control-label">昵称</label>
                                            <div class="col-sm-8">
                                                <?php echo $arr['nickName']; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-3 control-label">注册时间</label>
                                            <div class="col-sm-7">
                                                <?php echo date("Y/m/d H:i:s",$arr['Regtime']); ?>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                       <div class="col-sm-4">
                                            <label class="col-sm-4 control-label">会员等级</label>
                                            <div class="col-sm-8">
                                                <span class="upower" style="display:inline-block;padding-right:10px;"><?php echo $arr['Upower']; ?></span>
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#upGrade">升级</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-4 control-label">用户角色</label>
                                            <div class="col-sm-8">
                                                <span class="role" style="display:inline-block;padding-right:10px;">大众</span>
                                                 <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#setRole">设置</button>
                                            </div>
                                        </div>
                                          
                                    </div>
                                     <div class="form-group">
                                       <div class="col-sm-4">
                                            <label class="col-sm-3 control-label">认证状态</label>
                                            <div class="col-sm-9">
                                                <span class="identify" style="display:inline-block;padding-right:10px;">已认证</span>
                                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#identify">查看</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-4 control-label">账户状态</label>
                                            <div class="col-sm-8">
                                                <span class="account" style="display:inline-block;padding-right:10px;">正常</span>
                                                <button type="button" class="btn btn-danger btn-xs">锁定</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-4 control-label">最后登录时间</label>
                                            <div class="col-sm-7">
                                                2017/10/10 10:00
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label class="col-sm-3 control-label">手机号</label>
                                            <div class="col-sm-9">
                                                <span class="mobile" style="display:inline-block;padding-right:10px;">13544654657</span>
                                                <button type="button" class="btn btn-warning btn-xs">更换</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-4 control-label">信用值</label>
                                            <div class="col-sm-8">
                                                <span class="credit" style="display:inline-block;padding-right:10px;">250</span>
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#credit">提升</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label class="col-sm-3 control-label">店铺状态</label>
                                            <div class="col-sm-9">
                                                <span class="account" style="display:inline-block;padding-right:10px;">已开通</span>
                                                <a href="/" title="" class="btn btn-primary btn-xs">查看</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-4 control-label">所属地区</label>
                                            <div class="col-sm-8">
                                                河北省保定市
                                            </div>
                                        </div>
                                         <div class="col-sm-5">
                                            <label class="col-sm-3 control-label">用户标签</label>
                                            <div class="col-sm-9">
                                                手机控
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label class="col-sm-3 control-label">活跃度</label>
                                            <div class="col-sm-9">
                                                100
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-sm-4 control-label">收藏量</label>
                                            <div class="col-sm-8">
                                                250
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-3 control-label">关注量</label>
                                            <div class="col-sm-9">
                                                250
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <label class="col-sm-3 control-label">推荐人</label>
                                            <div class="col-sm-9">
                                                <span style="display:inline-block;padding-right:10px;">XXX</span>
                                                <button type="button" class="btn btn-warning btn-xs">查看</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-3 control-label">所签订协议</label>
                                            <div class="col-sm-8">
                                                <span style="display:inline-block;padding-right:10px;">5份</span>
                                                <button type="button" class="btn btn-primary btn-xs">查看</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="closeToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="close" data-height="580" data-mobile-responsive="true">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="uid">用户ID</th>
                                                <th data-field="closeid">亲密人ID</th>
                                                <th data-field="closetype">亲密类型</th>
                                                <th data-field="intimacy">亲密度</th>
                                                <th data-field="intime">加入时间</th>
                                                <th data-field="closeStadus">亲密状态</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-warning">未核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr> <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>1235</td>
                                                <td>家人</td>
                                                <td>10</td>
                                                <td>2017/10/10</td>
                                                <td><span class="label label-primary">已核实</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="row full-height-scroll">
                                <div class="col-sm-3">
                                    <div class="resumeAvactor">
                                        <img src="http://img.qqai.net/uploads/i_5_2288419957x1478827798_21.jpg">
                                        <div class="job-intension">
                                            <div class="alert alert-success">
                                                求职意向
                                                <p>Android开发/平面设计/前端开发</p></div>
                                        </div>

                                        <button class="btn btn-success dim btn-large-dim" type="button" title="下载简历"><i class="fa fa-download"></i>
                                          </button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content">
                                            <div class="alert alert-success">
                                                基本资料<small>（BASIC MATERIAL）</small>
                                            </div>
                                            <div class="basic" style="padding:0 15px;">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>姓名：XXXXX</td>
                                                            <td>学历：本科</td>
                                                        </tr>
                                                        <tr>
                                                            <td>性别：男</td>
                                                            <td>专业：计算机</td>
                                                        </tr>
                                                        <tr>
                                                            <td>民族：汉</td>
                                                            <td>毕业院校：河北大学</td>
                                                        </tr>
                                                        <tr>
                                                            <td>出生日期：1995.04.20</td>
                                                            <td>籍贯：四川</td>
                                                        </tr>
                                                        <tr>
                                                            <td>婚姻状态：未婚</td>
                                                            <td>职位状态：离职</td>
                                                        </tr>
                                                        <tr>
                                                            <td>期望薪资：8000</td>
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
                                                            <td>联系电话：13569856234</td>
                                                            <td>QQ：123456</td>
                                                        </tr>
                                                        <tr>
                                                            <td>电子邮箱：123456@qq.com</td>
                                                            <td>微信：asfsd527527</td>
                                                        </tr>
                                                        <tr>
                                                            <td>住址：河北省保定市高新区瀚尊国际B座2406</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="alert alert-warning">
                                                职业技能<small>（VOCATIONAL SKILLS）</small>
                                            </div>
                                            <div class="skills" style="padding:0 15px;">
                                                <ol style="padding:0 15px;line-height:30px;">
                                                    <li>熟悉office等办公软件；</li>
                                                    <li>熟练而全面掌握通信及计算机网络专业知识；</li>
                                                    <li>熟悉SQLServer、MySQL等数据库操作，了解Oracle数据库操作；</li>
                                                    <li>熟悉Linux系统基本操作，熟悉C++、JAVA、汇编、Perl等编程语言。</li>
                                                </ol>
                                            </div>

                                            <div class="alert alert-danger">
                                                工作经历<small>（WORK EXPERIENCE）</small>
                                            </div>
                                            <div class="work" >
                                                <div class="panel-body">
                                                    <div class="panel-group" id="accordion">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h5 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseOne">
                                                                        <ul class="row" style="padding:0;list-style:none;text-align:left;">
                                                                            <li class="col-sm-4">2013.09.01-2017.06.01</li>
                                                                            <li class="col-sm-4">XXX公司</li>
                                                                            <li class="col-sm-4">平面设计</li>
                                                                        </ul>

                                                                    </a>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                                <div class="panel-body">
                                                                   <div>
                                                                        项目名称：12345
                                                                    </div>
                                                                    <div>
                                                                        工作描述：原料成份的不同宣纸的原料结构是青檀皮和燎草(青檀皮属长纤维，稻草属短纤维)，这种原料配比已沿袭了近千年，至今也不曾改变。而书画纸的原料不讲究长短纤维的搭配，取的原料有龙须草、构树皮、竹子等等。
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                     <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseTwo">
                                                                        <ul class="row" style="padding:0;list-style:none;text-align:left;">
                                                                            <li class="col-sm-4">2013.09.01-2017.06.01</li>
                                                                            <li class="col-sm-4">XXX公司</li>
                                                                            <li class="col-sm-4">平面设计</li>
                                                                        </ul>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div>
                                                                        项目名称：12345
                                                                    </div>
                                                                    <div>
                                                                        工作描述：原料成份的不同宣纸的原料结构是青檀皮和燎草(青檀皮属长纤维，稻草属短纤维)，这种原料配比已沿袭了近千年，至今也不曾改变。而书画纸的原料不讲究长短纤维的搭配，取的原料有龙须草、构树皮、竹子等等。
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseThree">
                                                                        <ul class="row" style="padding:0;list-style:none;text-align:left;">
                                                                            <li class="col-sm-4">2013.09.01-2017.06.01</li>
                                                                            <li class="col-sm-4">XXX公司</li>
                                                                            <li class="col-sm-4">平面设计</li>
                                                                        </ul>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseThree" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <div>
                                                                        项目名称：12345
                                                                    </div>
                                                                    <div>
                                                                        工作描述：原料成份的不同宣纸的原料结构是青檀皮和燎草(青檀皮属长纤维，稻草属短纤维)，这种原料配比已沿袭了近千年，至今也不曾改变。而书画纸的原料不讲究长短纤维的搭配，取的原料有龙须草、构树皮、竹子等等。
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>

                                            <div class="alert alert-success">
                                                教育背景<small>（EDUCATIONAL BACKGROUND）</small>
                                            </div>
                                            <div class="education" style="padding:0 15px;">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>2013.09.01-2017.06.01</td>
                                                            <td>河北大学</td>
                                                            <td>计算机</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2013.09.01-2017.06.01</td>
                                                            <td>河北大学</td>
                                                            <td>计算机</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <div class="alert alert-info">
                                                自我评价<small>（SELF EVALUATION）</small>
                                            </div>
                                            <div class="evaluation" style="padding:0 15px;text-indent:24px;line-height:24px;">
                                                活泼开朗、乐观向上、兴趣广泛、适应力强、上手快、勤奋好学、脚踏实地、认真负责、坚毅不拔、吃苦耐劳、勇于迎接新挑战。
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="full-height-scroll">
                                <div class="ibox" style="margin-top:10px;">
                                    <div class="ibox-title navy-bg" style="min-height:35px;padding:10px 0 7px;border:none;border-radius:5px;">
                                        <ul style="list-style:none;">
                                            <li class="col-sm-3">用户ID：123456</li>
                                            <li class="col-sm-3">所患疾病：流行性感冒</li>
                                            <li class="col-sm-3">就诊医院：省医院</li>
                                            <li class="col-sm-3">就诊时间：2017-10-10 14:00</li>
                                        </ul>
                                    </div>
                                    <div class="ibox-content" style="border:2px solid #eee;border-top:none;">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>主诊医师：XXX</td>
                                                        <td>审核ID：123456</td>
                                                        <td>审核时间：2017-10-12 16:00</td>
                                                        <td>证明人ID：456789</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="diagnosis-proof">
                                            <span>医院诊断证明：</span>
                                             <a class="imgBig" href="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg">
                                                <img src="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg" width="150" height="80"/>
                                            </a>
                                            <a class="imgBig" href="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg">
                                                <img src="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg" width="150" height="80"/>
                                            </a>
                                            
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="ibox" style="margin-top:10px;">
                                    <div class="ibox-title navy-bg" style="min-height:35px;padding:10px 0 7px;border:none;border-radius:5px;">
                                        <ul style="list-style:none;">
                                            <li class="col-sm-3">用户ID：123456</li>
                                            <li class="col-sm-3">所患疾病：流行性感冒</li>
                                            <li class="col-sm-3">就诊医院：省医院</li>
                                            <li class="col-sm-3">就诊时间：2017-10-10 14:00</li>
                                        </ul>
                                    </div>
                                    <div class="ibox-content" style="border:2px solid #eee;border-top:none;">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>主诊医师：XXX</td>
                                                        <td>审核ID：123456</td>
                                                        <td>审核时间：2017-10-12 16:00</td>
                                                        <td>证明人ID：456789</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="diagnosis-proof">
                                            <span>医院诊断证明：</span>
                                            <a class="imgBig" href="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg">
                                                <img src="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg" width="150" height="80"/>
                                            </a>
                                            <a class="imgBig" href="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg">
                                                <img src="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg" width="150" height="80"/>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane">
                            <div class="row full-height-scroll" style="padding-top:20px;">
                                <div class="col-sm-3" style="border-right:1px solid #eee;">
                                    <div class="red-bg col-sm-8 col-sm-offset-2" style="padding:8px 0;text-align:center;border-radius:5px;">
                                        邻家女孩
                                    </div>
                                    <div class="shop-head">
                                        <img src="http://bxgogo.oss-cn-beijing.aliyuncs.com/imagesseller/seller_logo/20170811201708111107165104.jpeg?x-oss-process=image/quality,q_25/format,jpg" width="90%"/>
                                    </div>
                                    <div class="table-responsive" style="padding:0 10px;">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>合同编号：</td>
                                                    <td>BXG0518</td>
                                                </tr>
                                                <tr>
                                                    <td>签约日期：</td>
                                                    <td>2017-10-27</td>
                                                </tr>
                                                <tr>
                                                    <td>签约城市：</td>
                                                    <td>河北保定</td>
                                                </tr>
                                                <tr>
                                                    <td>业务员：</td>
                                                    <td>XXX</td>
                                                </tr>
                                                <tr>
                                                    <td>审核ID：</td>
                                                    <td>023564</td>
                                                </tr>
                                                <tr>
                                                    <td>审核时间：</td>
                                                    <td>2017-10-27 16:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>店铺ID：12345678</td>
                                                    <td>店铺名称：邻家女孩</td>                                                
                                                </tr>
                                                <tr>
                                                    <td>商家限额：满100元包邮</td>
                                                    <td>限额运费：10元</td>                                                
                                                </tr>
                                                <tr>
                                                    <td>营业时间：8:00-18:00</td>
                                                    <td>经纬度：10  10</td>                                                
                                                </tr>
                                                <tr>
                                                    <td>浏览量：100</td>
                                                    <td>关注量：20</td>                                                
                                                </tr>
                                                <tr>
                                                    <td colspan="2">店铺地址：河北省保定市莲池区裕华路333号</td>                                         
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="diagnosis-proof">
                                        <span>营业执照：</span>
                                        <a class="imgBig" href="http://img1.jc001.cn/img/665/1587665/1308/13520c51e3118a4.jpg">
                                            <img src="http://img1.jc001.cn/img/665/1587665/1308/13520c51e3118a4.jpg" width="120" height="180"/>
                                        </a>
                                        <a class="imgBig" href="http://img1.jc001.cn/img/665/1587665/1308/13520c51e3118a4.jpg">
                                            <img src="http://img1.jc001.cn/img/665/1587665/1308/13520c51e3118a4.jpg" width="120" height="180"/>
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="insuranceToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="insurance" data-height="580" data-mobile-responsive="true">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="uid">用户ID</th>
                                                <th data-field="in_odd">保险单号</th>
                                                <th data-field="in_total">保单金额</th>
                                                <th data-field="in_payment">可赔付金额</th>
                                                <th data-field="in_time">入险日期</th>
                                                <th data-field="in_status">出险日期</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>bd4674842545</td>
                                                <td>200</td>
                                                <td>10000</td>
                                                <td>2017/10/10 10:00</td>
                                                <td><span class="label label-warning">未出险</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>bd4674842545</td>
                                                <td>200</td>
                                                <td>10000</td>
                                                <td>2017/10/10 10:00</td>
                                                <td><span class="label label-primary">已出险</span>  （2017-10-27 10:00）</td>

                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane">
                             <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="wishToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="wish" data-height="580" data-mobile-responsive="true">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="uid">用户ID</th>
                                                <th data-field="wish_city">城市代码</th>
                                                <th data-field="wish_title">心愿标题</th>
                                                <th data-field="wish_content">心愿内容</th>
                                                <th data-field="wish_time">记录时间</th>
                                                <th data-field="wish_status">心愿状态</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>bd4674842545</td>
                                                <td>oppo R11s</td>
                                                <td>想要一个oppo R11s</td>
                                                <td>2017/10/10 10:00</td>
                                                <td><span class="label label-warning">未达成</span></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>bd4674842545</td>
                                                <td>oppo R11s</td>
                                                <td class="col-sm-4">想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s</td>
                                                <td>2017/10/10 10:00</td>
                                                <td><span class="label label-primary">已达成</span>（2017-10-27 10:00）</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-8" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="orderToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="order" data-height="580" data-mobile-responsive="true">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="uid">订单ID</th>
                                                <th data-field="order_city">订单号</th>
                                                <th data-field="order_title">订单类型</th>
                                                <th data-field="order_content">订单总金额</th>
                                                <th data-field="order_time">下单时间</th>
                                                <th data-field="order_status">交易完成时间</th>
                                                <th data-field="order_fun">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>bd4674842545</td>
                                                <td>普通</td>
                                                <td>2000</td>
                                                <td>2017/10/10 10:00</td>
                                                <td><span class="label label-warning">待付款</span></td>
                                                <td><a href="<?php echo url('admin/index/order_detail'); ?>" class="label label-info">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>bd4674842545</td>
                                                <td>代付人：XXX</td>
                                                <td>12345</td>
                                                <td>2017/10/10 10:00</td>
                                                <td><span class="label label-primary">交易完成</span>（2017-10-27 10:00）</td>
                                                <td><a href="<?php echo url('admin/index/order_detail'); ?>" class="label label-info">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1234</td>
                                                <td>bd4674842545</td>
                                                <td>预约</td>
                                                <td>12345</td>
                                                <td>2017/10/10 10:00</td>
                                                <td><span class="label label-primary">交易完成</span>（2017-10-27 10:00）</td>
                                                <td><a href="<?php echo url('admin/index/order_detail'); ?>" class="label label-info">查看</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-9" class="tab-pane">
                            <div class="row full-height-scroll" style="padding-top:20px;">
                                <div class="col-sm-3">

                                    <div class="card_main">
                                        <div class="card_content" style="border:2px solid #dfb35a;border-radius:5px;">
                                            <div class="row" style="padding:8px;">
                                                <h3 class="col-sm-6" style="color:#dfb35a;">bxg123456</h3>
                                                <h4 class="col-sm-6" style="text-align:center;font-size:15px;"><span style="float:right;padding:3px 13px;border-radius:12px;background:#dfb35a;">贵宾卡</span></h4>
                                            </div>
                                            <div class="row" style="margin:15px 0;text-align:center;">
                                                <h3>总金额： 2000元<small style="margin-left:8px;color:#eee;">折扣：8%</small></h3>
                                            </div>
                                            <div class="row" style="padding:10px 8px 0px;">
                                                <h4 class="col-sm-12" style="color:#dfb35a;">卡号：bxg123456789 <span style="float:right;color:#fff;">(未激活)</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="example-wrap">
                                        <div class="example">
                                            <div class="btn-group hidden-xs" id="cardToolbar" role="group">
                                                <button type="button" class="btn btn-outline btn-default">
                                                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline btn-default">
                                                    <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <table id="card" data-height="580" data-mobile-responsive="true">
                                                <thead>
                                                    <tr>
                                                        <th data-field="state" data-checkbox="true"></th>
                                                        <th data-field="cardid">优惠券ID</th>
                                                        <th data-field="card_name">优惠名称</th>
                                                        <th data-field="card_purpose">用途</th>
                                                        <th data-field="card_status">使用状态</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td>1234</td>
                                                        <td>满99减50</td>
                                                        <td>商城购物</td>
                                                        <td><span class="label label-primary">已使用</span>（2017-10-27 10:00）</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>1234</td>
                                                        <td>满99减50</td>
                                                        <td>商城购物</td>
                                                        <td><span class="label label-warning">未使用</span></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- 全局js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap table -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
     <!-- iCheck -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/iCheck/icheck.min.js"></script>
    <!-- Fancy box 图片放大-->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.js"></script>

     <!-- 以下自定义js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/content.js?v=1.0.0"></script>
    <!-- Peity -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/bootstrap-table-demo.js"></script>
    <!-- 图片上传 -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/compress.js"></script>

   
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
               
            });
            // 图片上传
            $(".upAvactor").on('click',function(){
                $('.imgUp').click();
            });
            $('.imgUp').on('change',function(){
                $(".showAvactor").html('');
                var file = this.files[0];
                photoCompress(file,60,$(".showAvactor")[0]);
            });
            // 图片放大
            $('.imgBig').fancybox({
                openEffect: 'none',
                closeEffect: 'none'
            });
        });
    </script>
</body>

</html>
