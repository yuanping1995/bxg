<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\count\count_seller.html";i:1509526406;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>用户统计</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="<?php echo __APPROOT__; ?>/favicon.ico">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Morris -->
    <!-- <link href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet"> -->

    <!-- Gritter -->
    <!-- <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet"> -->

    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">总计</span>
                        <h5>商家</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">800,200</h1>
                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                        <small>总数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">总计</span>
                        <h5>本周新增</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">10</h1>
                        <div class="stat-percent font-bold text-danger">98% <i class="fa fa-bolt"></i></div>
                        <small>总数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">总计</span>
                        <h5>本周交易额</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">275,800</h1>
                        <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i>
                        </div>
                        <small>总数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">总计</span>
                        <h5>本周订单</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">106,120</h1>
                        <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i>
                        </div>
                        <small>总数</small>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>订单分析</h5>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-xs btn-white active">天</button>
                                <button type="button" class="btn btn-xs btn-white">月</button>
                                <button type="button" class="btn btn-xs btn-white">年</button>
                            </div>
                        </div>
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-9">
                               <div class="echarts" id="echarts-line-chart" style="margin-top:-20px;"></div>
                            </div>
                            <div class="col-sm-3">
                                <ul class="stat-list">
                                    <li>
                                        <h2 class="no-margins">2,346</h2>
                                        <small>总订单数</small>
                                        <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i>
                                        </div>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins ">4,422</h2>
                                        <small>今日订单</small>
                                        <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i>
                                        </div>
                                        <div class="progress progress-mini">
                                            <div style="width: 60%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins ">9,180</h2>
                                        <small>本月订单</small>
                                        <div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i>
                                        </div>
                                        <div class="progress progress-mini">
                                            <div style="width: 22%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="white-bg float-e-margins">
                    <div class="ibox-title" style="border-bottom:1px solid #eee;">
                        <h5>商家订单排名</h5>
                        <!-- <h5>商家交易额排名</h5> -->
                    </div>
                    <div class="row">
                        <!-- <div class="col-sm-6">
                            <div class="echarts" id="user-age" style="margin-top:30px;"></div>
                        </div> -->
                        <!-- end 用户年龄分布-->
                       <!--  <div class="col-sm-6">
                            <div class="echarts" id="user-source" style="margin-top:30px;"></div>
                        </div> -->
                        <!-- end 用户来源分布-->
                        <!-- <div class="col-sm-6">
                            <div class="echarts" id="user-hobby" style="margin-top:30px;"></div>
                        </div> -->
                        <!-- end 用户偏好分布-->
                       <!--  <div class="col-sm-6">
                            <div class="echarts" id="user-consume" style="margin-top:30px;"></div>
                        </div> -->
                        <!-- end 用户消费习惯分布-->
                        <!-- <div class="col-sm-6">
                            <div class="echarts" id="user-view" style="margin-top:30px;"></div>
                        </div> -->
                        <!-- end 用户浏览器分布-->
                        <!-- <div class="col-sm-6">
                            
                        </div> -->
                        
                    </div>
                    <div class="row">
                        
                        <!-- <div class="col-sm-7"> -->
                            <div class="echarts" id="user-area" style="height:700px;"></div>
                        <!-- </div> -->

                        <!-- end 用户地区分布-->
                    </div>
                   
                </div>
                <!-- end ibox/white-bg-->
                
                
            </div>
            <!-- end col-sm-12 -->
        </div>
        <!-- end row -->

    </div>

    <!-- 全局js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- ECharts -->
    <!-- <script src="js/plugins/echarts/echarts-all.js"></script> -->
    <script src="http://www.echartsjs.com/gallery/vendors/echarts/echarts-all-3.js?_v_=1506498317457"></script>
    

    <!-- 自定义js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/content.js?v=1.0.0"></script>

    <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-line.js"></script>



</body>

</html>
