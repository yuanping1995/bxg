<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\seller\index.html";i:1510040299;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>百信购后台管理</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo __APPROOT__; ?>/favicon.ico"> 
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
		.logo{display: block;width:35px;height:35px;}
        .logo img{display: block;width:100%;height:100%;}
        .modal-title{padding-bottom:10px;text-align: center;border-bottom: 1px solid #ccc;}
    </style>
</head>
<body class="gray-bg">
	 <div class="wrapper wrapper-content animated"> 
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>用户收益明细</h5>
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
            
           <!-- 用户列表搜索 -->
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- example -->
                        <div class="example-wrap">
                            <div class="example">
                                <div class="btn-group hidden-xs" id="listToolbar" role="group">
                                    <button type="button" class="btn  btn-primary">
                                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline btn-default">
                                        <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <table id="list" data-height="725" data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="pactid">合同编号</th>
                                            <th data-field="shopId">店铺ID</th>
                                            <th data-field="shopname">店铺名称</th>
                                            <th data-field="logo">商家logo</th>
                                            <th data-field="quotatotal">商家限额</th>
                                            <th data-field="faretotal">限额运费</th>
                                            <th data-field="area">店铺地址</th>
                                            <th data-field="bustime">营业时间</th>
                                            <th data-field="signtime">签约日期</th>
                                            <th data-field="fun">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>bxg0001</td>
                                            <td>123</td>
                                            <td>邻家女孩</td>
                                            <td><span class="logo"><img src="http://img1.3lian.com/gif/more/11/2012/03/392e4d0fec8050b0b7fc47d665721718.gif"/></span></td>
                                            <td>100</td>
                                            <td>10</td>
                                            <td>河北省保定市北市区</td>
                                            <td>08:00-18:00</td>
                                            <td>2017-11-07</td>
                                            <td><a href="<?php echo url('admin/seller/seller_info'); ?>" class="label label-primary">查看</a></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End example-wrap -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End ibox -->
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

    <!-- 表格 -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-list.js"></script>

</body>
</html>