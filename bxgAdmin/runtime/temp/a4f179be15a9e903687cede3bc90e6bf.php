<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\WWW\admin\bxg\bxgAdmin/./application/admin\view\index\order_detail.html";i:1509499242;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>订单列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="<?php echo __APPROOT__; ?>/favicon.ico">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
	 <div class="wrapper wrapper-content animated fadeInRight">
		
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox-content p-xl">
                	<a href="user_info.html" class="btn btn-primary" style="margin-bottom:20px;">返回上一级</a>
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                <p><strong>收件人：XXX</strong></p>
                                <p><strong>地址：河北省保定市高新区</strong></p>
                                <strong>手机号：18832862165</strong> 
                            </address>
                        </div>

                        <div class="col-sm-6 text-right">
                            <h4>订单编号：</h4>
                            <h4 class="text-navy">bxg123456789</h4>
                            <p>
								<span><strong>配送人：</strong> XXX</span>
                            </p>
                            <p>
                                <span><strong>下单时间：</strong> 2014-11-11</span>
                            </p>
                        </div>
                    </div>

                    <div class="table-responsive m-t">
                    	<h3 class="alert alert-success">商家：邻家女孩</h3>
                        <table class="table invoice-table">
                            <thead>
                                <tr>
                                    <th>清单</th>
                                    <th>数量</th>
                                    <th>单价</th>
                                    <th>收益</th>
                                    <th>总价</th>
                                    <th>订单状态</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div><strong>尚都比拉2013冬装新款女装 韩版修身呢子大衣 秋冬气质羊毛呢外套</strong>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>&yen;26.00</td>
                                    <td>&yen;1.20</td>
                                    <td>&yen;31,98</td>
                                    <td>待发货</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div><strong>11*11夏娜 新款斗篷毛呢外套 女秋冬呢子大衣 韩版大码宽松呢大衣</strong>
                                        </div>
                                        <small>双十一特价
                                            </small>
                                    </td>
                                    <td>2</td>
                                    <td>&yen;80.00</td>
                                    <td>&yen;1.20</td>
                                    <td>&yen;196.80</td>
                                    <td>待发货</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive m-t">
                    	<h3 class="alert alert-success">商家：依然美女装</h3>
                        <table class="table invoice-table">
                            <thead>
                                <tr>
                                    <th>清单</th>
                                    <th>数量</th>
                                    <th>单价</th>
                                    <th>收益</th>
                                    <th>总价</th>
                                    <th>订单状态</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div><strong>尚都比拉2013冬装新款女装 韩版修身呢子大衣 秋冬气质羊毛呢外套</strong>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>&yen;26.00</td>
                                    <td>&yen;1.20</td>
                                    <td>&yen;31,98</td>
                                    <td>待发货</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div><strong>11*11夏娜 新款斗篷毛呢外套 女秋冬呢子大衣 韩版大码宽松呢大衣</strong>
                                        </div>
                                        <small>双十一特价
                                            </small>
                                    </td>
                                    <td>2</td>
                                    <td>&yen;80.00</td>
                                    <td>&yen;1.20</td>
                                    <td>&yen;196.80</td>
                                    <td>待发货</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /table-responsive -->

                    <table class="table invoice-total">
                        <tbody>
                            <tr>
                                <td><strong>总价：</strong>
                                </td>
                                <td>&yen;1026.00</td>
                            </tr>
                            <tr>
                                <td><strong>运费：</strong>
                                </td>
                                <td>(&yen;10 + &yen;10)共计&yen;20</td>
                            </tr>
                            <tr>
                                <td><strong>总计：</strong>
                                </td>
                                <td>&yen;1261.98</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="well m-t"><strong>买家备注：</strong> 请尽快发货！</div>
                </div>
            </div>
        </div>
    </div>

     <!-- 全局js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/bootstrap.min.js?v=3.3.6"></script>


</body>
</html>