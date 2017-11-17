<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\order\order_detail.html";i:1510218146;}*/ ?>
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
                	<a href="javascript:history.go(-1)" class="btn btn-primary" style="margin-bottom:20px;">返回上一级</a>
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                <p><strong>收件人：<?php echo $oder['Address'][0]['name']; ?></strong></p>
                                <p><strong>地址：<?php echo $oder['Address'][0]['address']; ?></strong></p>
                                <strong>手机号：<?php echo $oder['Address'][0]['Mobile']; ?></strong>
                            </address>
                        </div>

                        <div class="col-sm-6 text-right">
                            <h4>订单编号：</h4>
                            <h4 class="text-navy"><?php echo $oder['Mergeid']; ?></h4>
                            <p>
                                <span><strong>下单时间：</strong> <?php echo date("Y/m/d H:i:s",$oder['Placetime']); ?></span>
                            </p>
                        </div>
                    </div>
                    <?php if(is_array($arr['data']) || $arr['data'] instanceof \think\Collection || $arr['data'] instanceof \think\Paginator): if( count($arr['data'])==0 ) : echo "" ;else: foreach($arr['data'] as $k=>$vo): ?>
                    <div class="table-responsive m-t">
                    	<h3 class="alert alert-success">商家:<?php echo $vo['sellerId']; ?></h3>
                        <table class="table invoice-table">
                            <thead>
                                <tr>
                                    <th>清单</th>
                                    <th>数量</th>
                                    <th>单价</th>
                                    <th>收益</th>
                                    <th>总价</th>
                                    <th>订单状态</th>
                                    <th>配送状态</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($vo['Goods']) || $vo['Goods'] instanceof \think\Collection || $vo['Goods'] instanceof \think\Paginator): if( count($vo['Goods'])==0 ) : echo "" ;else: foreach($vo['Goods'] as $k1=>$vo_1): ?>
                                <tr>
                                    <td>
                                        <div><strong><?php echo $vo_1['goodsname']; ?></strong>
                                        </div>
                                    </td>
                                    <td><?php echo $vo_1['bugnum']; ?></td>
                                    <td>&yen;<?php echo $vo_1['goodsmoney']; ?></td>
                                    <td>&yen;<?php echo $vo_1['bugnum']*$vo_1['goodsmoney']*0.04; ?></td>
                                    <td>&yen;<?php echo $vo_1['bugnum']*$vo_1['goodsmoney']; ?></td>
                                    <td><?php echo $vo_1['goodsstate']; ?></td>
                                    <td><?php echo $Delivery[$vo_1['goodsid']][$k1]['Distribution']; ?>:<?php echo $Delivery[$vo_1['goodsid']][$k1]['Distributionnumber']; ?></td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                            </tbody>
                        </table>
                    </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- /table-responsive -->

                    <table class="table invoice-total">
                        <tbody>
                            <tr>
                                <td><strong>总价：</strong>
                                </td>
                                <td>&yen;<?php echo $Total; ?></td>
                            </tr>
                            <tr>
                                <td><strong>运费：</strong>
                                </td>
                                <td> 共计&yen;<?php echo $freight; ?></td>
                            </tr>
                            <tr>
                                <td><strong>总计：</strong>
                                </td>
                                <td>&yen;<?php echo $Total+$freight; ?></td>
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