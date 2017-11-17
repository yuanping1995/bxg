<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_8.html";i:1510276047;}*/ ?>
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
                    <!--<th data-field="uid">订单ID</th>-->
                    <th data-field="order_city">合并订单号</th>
                    <th data-field="order_title">订单类型</th>
                    <th data-field="order_content">订单总金额</th>
                    <th data-field="order_time">下单时间</th>
                    <th data-field="order_status">交易完成时间</th>
                    <th data-field="order_fun">操作</th>
                </tr>
            </thead>
            <tbody>

            <?php if(is_array($BasicOder) || $BasicOder instanceof \think\Collection || $BasicOder instanceof \think\Paginator): if( count($BasicOder)==0 ) : echo "" ;else: foreach($BasicOder as $key=>$vo): ?>
                <tr>
                    <td></td>

                    <td><?php echo $vo['1']['Mergeid']; ?></td>
                    <td><?php echo $vo['1']['OrderType']; ?></td>
                    <td><?php echo $vo['0']; ?></td>
                    <td><?php echo date("Y/m/d H:i:s",$vo['1']['Tradetime']); ?></td>
                    <td><a href="<?php echo url('admin/order/order_detail',array('id'=>$vo['1']['Mergeid'])); ?>" class="label label-info">查看</a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>
