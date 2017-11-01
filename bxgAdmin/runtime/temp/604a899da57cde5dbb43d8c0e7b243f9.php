<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\index\user_list.html";i:1509502517;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="<?php echo __APPROOT__; ?>/favicon.ico">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
        .float-e-margins .btn{margin:1px 2px;}
        td a.btn{padding:3px 5px;border:none;color: #fff;}
        .avatar{display: block;width:30px;height:30px;}
        .avatar img{display: block;width:100%;height:100%;}
        .modal-title{padding-bottom:10px;text-align: center;border-bottom: 1px solid #ccc;}
        #showAvactor{margin:0 0 10px;text-align: center;}
        #showAvactor img{margin:0 auto;}
    </style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated"> 
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>用户列表</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">选项1</a>
                        </li>
                        <li><a href="#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>

            <!-- 用户充值弹窗 -->
            <div class="modal outmodal" id="recharge" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                            </button>
                            <h4 class="modal-title">充值金额</h4>
                            <div class="modal-body">
                                <form role="form" class="form-horizontal m-t">
                                    
                                     <div class="form-group draggable">
                                        <label class="col-sm-3 control-label">充值：</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="" class="form-control" id="recharge_money" placeholder="请输入充值金额">
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
            <div class="modal outmodal" id="set" tabindex="-1" role="dialog" aria-hidden="true">
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

           <!-- 用户列表搜索 -->
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- example -->
                        <div class="example-wrap">
                            <div class="example">
                                <div class="btn-group hidden-xs" id="exampleTableEventsToolbar" role="group">
                                    <button type="button" class="btn btn-outline btn-default">
                                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline btn-default">
                                        <i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline btn-default">
                                        <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <table id="exampleTableEvents" data-height="725" data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="uid">用户ID</th>
                                            <th data-field="nickname">昵称</th>
                                            <th data-field="avatar">用户头像</th>
                                            <th data-field="mobile">手机号</th>
                                            <th data-field="balance">账户余额</th>
                                            <th data-field="orderSum">订单总数</th>
                                            <th data-field="expendamount">消费总额</th>
                                            <th data-field="userType">用户类型</th>
                                            <th data-field="lastTime">最后登录时间</th>
                                            <th data-field="operate">操作</th>
                                            <th data-field="role">角色</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): if( count($arr)==0 ) : echo "" ;else: foreach($arr as $key=>$vo): ?>


                                        <tr>
                                            <td></td>
                                            <td><?php echo $vo['id']; ?></td>
                                            <td><?php echo $vo['nickName']; ?></td>
                                            <td>
                                                <span class="avatar"><img src="<?php echo $vo['Icon']; ?>"/></span></td>
                                            <td>手机号</td>
                                            <td><?php echo $vo['wallt']['Total_fee']; ?></td>
                                            <td><?php echo count($vo['basic_oder']); ?></td>
                                            <td><?php echo $vo['0']; ?></td>
                                            <td><?php echo $vo['Upower']; ?></td>
                                            <td>2017/10/09</td>
                                            <td>
                                                <a href="<?php echo url('admin/index/user_info',array('id'=>$vo['uId'])); ?>" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
                                                <a class="btn btn-success" aria-hidden="true" title="充值" data-toggle="modal" data-target="#recharge"><i class="glyphicon glyphicon-usd"></i></a>
                                                <a class="btn btn-danger" aria-hidden="true"  title="设置角色" data-toggle="modal" data-target="#set"><i class="glyphicon glyphicon-star"></i></a>
                                            </td>
                                            <td>兼职</td>
                                        </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Panel Other -->
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

    <!-- 以下是自定义js -->
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
            
        });
    </script>
</body>

</html>