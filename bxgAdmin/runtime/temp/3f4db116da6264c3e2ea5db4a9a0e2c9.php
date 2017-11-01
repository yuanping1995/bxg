<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\index\order_list.html";i:1509517788;}*/ ?>
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
    <!-- <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet"> -->
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
        
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated"> 
        <div class="ibox float-e-margins">
            <div class="ibox-content"> 
                <a href="<?php echo url('admin/index/user_list'); ?>" class="btn btn-primary">返回上一级</a>
                <div class="clients-list">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#order-1">所有订单</a></li>
                        <li class=""><a data-toggle="tab" href="#order-2">待发货订单</a></li>
                        <li class=""><a data-toggle="tab" href="#order-3">待付款订单</a></li>
                        <li class=""><a data-toggle="tab" href="#order-4">待收货订单</a></li>
                        <li class=""><a data-toggle="tab" href="#order-5">待评价订单</a></li>
                        <li class=""><a data-toggle="tab" href="#order-6">退货/返修订单</a></li>
                        <li class=""><a data-toggle="tab" href="#order-7">交易完成订单</a></li>
                        <li class=""><a data-toggle="tab" href="#order-8">交易取消订单</a></li>
                    </ul>
                    <div class="tab-content" >
                        <!-- 所有订单 -->
                        <div id="order-1" class="tab-pane active" style="margin-top:20px;">
                            <div class="row full-height-scroll">
                               
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

    <!-- 全局js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap table -->
   <!--  <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script> -->
     <!-- iCheck -->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/iCheck/icheck.min.js"></script> -->
    <!-- Fancy box 图片放大-->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.js"></script> -->

     <!-- 以下自定义js -->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/content.js?v=1.0.0"></script> -->
    <!-- Peity -->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/bootstrap-table-demo.js"></script> -->
    <!-- 图片上传 -->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/compress.js"></script> -->

   
    <script>
        // $(document).ready(function () {
        //     $('.i-checks').iCheck({
        //         checkboxClass: 'icheckbox_square-green',
        //         radioClass: 'iradio_square-green',
               
        //     });
        //     // 图片上传
        //     $(".upAvactor").on('click',function(){
        //         $('.imgUp').click();
        //     });
        //     $('.imgUp').on('change',function(){
        //         $(".showAvactor").html('');
        //         var file = this.files[0];
        //         photoCompress(file,60,$(".showAvactor")[0]);
        //     });
        //     // 图片放大
        //     $('.imgBig').fancybox({
        //         openEffect: 'none',
        //         closeEffect: 'none'
        //     });
        // });
    </script>
</body>

</html>
