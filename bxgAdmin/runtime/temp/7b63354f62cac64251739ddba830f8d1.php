<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\order\common_order.html";i:1509695294;}*/ ?>
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
    <!-- <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet"> -->
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
        .tab-pane{margin-top:20px;}
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated"> 
        <div class="ibox float-e-margins">
            <div class="ibox-content"> 
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
<!-- .................所有订单 -->
                        <div id="order-1" class="tab-pane active">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="allOrderToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="allOrder" data-height="580" data-mobile-responsive="true">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="mergeid">订单号</th>
                                                <th data-field="uid">用户ID</th>
                                                <th data-field="sellerid">商家ID</th>
                                                <th data-field="ordertype">订单类型</th>
                                                <th data-field="closeid">付款ID</th>
                                                <th data-field="placetime">下单时间</th>
                                                <th data-field="noticeStatus">通知状态</th>
                                                <th data-field="orderStadus">订单状态</th>
                                                <th data-field="fun">操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>bxg123456789</td>
                                                <td>123456</td>
                                                <td>13598745869</td>
                                                <td>普通订单</td>
                                                <td>13598745869</td>
                                                <td>2017-10-11 14:59:00</td>
                                                <td>已推送</td>
                                                <td><span class="label label-danger">待发货</span></td>
                                                <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-primary">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>bxg123456789</td>
                                                <td>123456</td>
                                                <td>13598745869</td>
                                                <td>亲密付订单</td>
                                                <td>13598745869</td>
                                                <td>2017-10-11 14:59:00</td>
                                                <td>已推送</td>
                                                <td><span class="label label-warning">待评价</span></td>
                                                <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-primary">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>bxg123456789</td>
                                                <td>123456</td>
                                                <td>13598745869</td>
                                                <td>亲密付订单</td>
                                                <td>13598745869</td>
                                                <td>2017-10-11 14:59:00</td>
                                                <td>已推送</td>
                                                <td><span class="label label-warning">待收货</span></td>
                                                <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-primary">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>bxg123456789</td>
                                                <td>123456</td>
                                                <td>13598745869</td>
                                                <td>亲密付订单</td>
                                                <td>13598745869</td>
                                                <td>2017-10-11 14:59:00</td>
                                                <td>已推送</td>
                                                <td><span class="label label-info">待付款</span></td>
                                                <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-primary">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>bxg123456789</td>
                                                <td>123456</td>
                                                <td>13598745869</td>
                                                <td>亲密付订单</td>
                                                <td>13598745869</td>
                                                <td>2017-10-11 14:59:00</td>
                                                <td>已推送</td>
                                                <td><span class="label label-primary">交易完成</span></td>
                                                <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-primary">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>bxg123456789</td>
                                                <td>123456</td>
                                                <td>13598745869</td>
                                                <td>亲密付订单</td>
                                                <td>13598745869</td>
                                                <td>2017-10-11 14:59:00</td>
                                                <td>已推送</td>
                                                <td><span class="label label-default">交易取消</span></td>
                                                <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-primary">查看</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>bxg123456789</td>
                                                <td>123456</td>
                                                <td>13598745869</td>
                                                <td>亲密付订单</td>
                                                <td>13598745869</td>
                                                <td>2017-10-11 14:59:00</td>
                                                <td>已推送</td>
                                                <td><span class="label label-danger">退货/返修</span></td>
                                                <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-primary">查看</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
<!-- .................end 所有订单 -->
<!-- .................待发货订单 -->
                        <div id="order-2" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="waitSendToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="waitSend" data-height="580" data-mobile-responsive="true">
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
<!-- .................end 待发货订单 --> 
<!-- .................待付款订单 --> 
                        <div id="order-3" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="waitPayToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="waitPay" data-height="580" data-mobile-responsive="true">
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
<!-- .................end 待付款订单 --> 

<!-- .................待收货订单 --> 
                        <div id="order-4" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="waitGetToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="waitGet" data-height="580" data-mobile-responsive="true">
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
<!-- .................end 待收货订单 --> 

<!-- .................待评价订单 --> 
                        <div id="order-5" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="waitEvaToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="waitEva" data-height="580" data-mobile-responsive="true">
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
<!-- .................end 待评价订单 --> 

<!-- .................退货/返修订单 --> 
                        <div id="order-6" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="returnToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="return" data-height="580" data-mobile-responsive="true">
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
<!-- .................end 退货/返修订单 --> 

<!-- .................交易完成订单 --> 
                        <div id="order-7" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="successToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="success" data-height="580" data-mobile-responsive="true">
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
<!-- .................end 交易完成订单 --> 

<!-- .................交易取消订单 --> 
                        <div id="order-8" class="tab-pane">
                            <div class="example-wrap">
                                <div class="example">
                                    <div class="btn-group hidden-xs" id="cancelToolbar" role="group">
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline btn-default">
                                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <table id="cancel" data-height="580" data-mobile-responsive="true">
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
<!-- .................end 交易取消订单 --> 

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
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/iCheck/icheck.min.js"></script> -->
    <!-- Fancy box 图片放大-->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.js"></script> -->

     <!-- 以下自定义js -->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/content.js?v=1.0.0"></script> -->
    <!-- Peity -->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/bootstrap-table-demo.js"></script> -->
    <!-- 图片上传 -->
    <!-- <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/compress.js"></script> -->

    <script type="text/javascript" src="<?php echo __APPROOT__; ?>/static/admin/js/demo/order-list.js"></script>
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
