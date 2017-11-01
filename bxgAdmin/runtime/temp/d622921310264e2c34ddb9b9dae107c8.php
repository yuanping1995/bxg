<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\index\count_user.html";i:1509499254;}*/ ?>
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
            <div class="col-sm-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-success pull-right">总计</span>
                        <h5>用户</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">800,200</h1>
                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">总计</span>
                        <h5>本月新增</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">10</h1>
                        <div class="stat-percent font-bold text-danger">98% <i class="fa fa-bolt"></i></div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">总计</span>
                        <h5>普通用户</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">275,800</h1>
                        <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i>
                        </div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right">总计</span>
                        <h5>vip</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">106,120</h1>
                        <div class="stat-percent font-bold text-navy">44% <i class="fa fa-level-up"></i>
                        </div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-danger pull-right">总计</span>
                        <h5>svip</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">80,600</h1>
                        <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i>
                        </div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">总计</span>
                        <h5>ovip</h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins">80,600</h1>
                        <div class="stat-percent font-bold text-info">38% <i class="fa fa-level-down"></i>
                        </div>
                        <small>总人数</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户增长趋势分析</h5>
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
                                        <small>昨日增长人数</small>
                                        <div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i>
                                        </div>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins ">4,422</h2>
                                        <small>今日增长人数</small>
                                        <div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i>
                                        </div>
                                        <div class="progress progress-mini">
                                            <div style="width: 60%;" class="progress-bar"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins ">9,180</h2>
                                        <small>本月增长人数</small>
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
          <div class="row" >
            <div class="col-sm-6">
                <div class="tabs-container"  style="background:#fff;">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">用户活跃度排名</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">用户出单排名</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">用户信用值排名</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="client-avatar">1</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-area-chart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td class="client-avatar">2</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-area-chart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">3</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-area-chart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">4</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-area-chart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">5</td>
                                                <td class="client-avatar"><img alt="image" src="img/a3.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-2" class="client-link">王利锋</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-area-chart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                           <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="client-avatar">1</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cart-plus"> </i></td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td class="client-avatar">2</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cart-plus"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">3</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cart-plus"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">4</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cart-plus"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">5</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-2" class="client-link">王利锋</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cart-plus"> </i></td>
                                                <td>123</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="client-avatar">1</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-heart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td class="client-avatar">2</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-heart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">3</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-heart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">4</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-heart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">5</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-2" class="client-link">王利锋</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-heart"> </i></td>
                                                <td>123</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-sm-6">
                <div class="tabs-container"  style="background:#fff;">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-4" aria-expanded="true">用户充值排名</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false">用户转账排名</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="false">用户提现排名</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-4" class="tab-pane active">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="client-avatar">1</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-database"> </i></td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td class="client-avatar">2</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-database"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">3</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-database"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">4</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-database"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">5</td>
                                                <td class="client-avatar"><img alt="image" src="http://img.dongqiudi.com/uploads/avatar/2015/07/25/QM387nh7As_thumb_1437790672318.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-2" class="client-link">王利锋</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-database"> </i></td>
                                                <td>123</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane">
                           <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="client-avatar">1</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-credit-card"> </i></td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td class="client-avatar">2</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-credit-card"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">3</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-credit-card"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">4</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-credit-card"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">5</td>
                                                <td class="client-avatar"><img alt="image" src="http://u4.tdimg.com/5/186/248/_12259778343260702802517609713054780185.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-2" class="client-link">王利锋</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-credit-card"> </i></td>
                                                <td>123</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <td class="client-avatar">1</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cny"> </i></td>
                                                <td>123</td>
                                            </tr>
                                            <tr>
                                                <td class="client-avatar">2</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cny"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">3</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cny"> </i></td>
                                                <td>123</td>
                                            </tr>
                                              <tr>
                                                <td class="client-avatar">4</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-1" class="client-link">袁岳</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cny"> </i></td>
                                                <td>123</td>
                                            </tr>
                                             <tr>
                                                <td class="client-avatar">5</td>
                                                <td class="client-avatar"><img alt="image" src="http://www.feizl.com/upload2007/2011_05/1105241409555916.jpg"> </td>
                                                <td><a data-toggle="tab" href="#contact-2" class="client-link">王利锋</a></td>
                                                <td> 13301235864</td>
                                                <td class="contact-type"><i class="fa fa-cny"> </i></td>
                                                <td>123</td>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="white-bg float-e-margins">
                    <div class="ibox-title" style="border-bottom:1px solid #eee;">
                        <h5>用户综合分析</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="echarts" id="user-age" style="margin-top:30px;"></div>
                        </div>
                        <!-- end 用户年龄分布-->
                        <div class="col-sm-6">
                            <div class="echarts" id="user-source" style="margin-top:30px;"></div>
                        </div>
                        <!-- end 用户来源分布-->
                        <div class="col-sm-6">
                            <div class="echarts" id="user-hobby" style="margin-top:30px;"></div>
                        </div>
                        <!-- end 用户偏好分布-->
                        <div class="col-sm-6">
                            <div class="echarts" id="user-consume" style="margin-top:30px;"></div>
                        </div>
                        <!-- end 用户消费习惯分布-->
                        <div class="col-sm-6">
                            <div class="echarts" id="user-view" style="margin-top:30px;"></div>
                        </div>
                        <!-- end 用户浏览器分布-->
                        <div class="col-sm-6">
                            
                        </div>
                        
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
    <script src="http://www.echartsjs.com/gallery/vendors/echarts/echarts-all-3.js?_v_=1506498317457"></script>
    

    <!-- 自定义js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/content.js?v=1.0.0"></script>

    <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-line.js"></script>

    <!-- jQuery UI -->
    <!-- <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script> -->

    <!-- Jvectormap -->
    <!-- <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
    <!-- <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->

    <!-- EayPIE -->
    <!-- <script src="js/plugins/easypiechart/jquery.easypiechart.js"></script> -->

    <!-- Sparkline -->
    <!-- <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script> -->

    <!-- Sparkline demo data  -->
    <!-- <script src="js/demo/sparkline-demo.js"></script> -->



</body>

</html>
