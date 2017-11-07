<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\user\tab_8.html";i:1510016946;}*/ ?>
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
                    <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-info">查看</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1234</td>
                    <td>bd4674842545</td>
                    <td>代付人：XXX</td>
                    <td>12345</td>
                    <td>2017/10/10 10:00</td>
                    <td><span class="label label-primary">交易完成</span>（2017-10-27 10:00）</td>
                    <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-info">查看</a></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1234</td>
                    <td>bd4674842545</td>
                    <td>预约</td>
                    <td>12345</td>
                    <td>2017/10/10 10:00</td>
                    <td><span class="label label-primary">交易完成</span>（2017-10-27 10:00）</td>
                    <td><a href="<?php echo url('admin/order/order_detail'); ?>" class="label label-info">查看</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>
