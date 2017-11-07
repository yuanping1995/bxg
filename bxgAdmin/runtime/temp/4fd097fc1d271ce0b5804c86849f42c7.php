<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\user\tab_6.html";i:1510017118;}*/ ?>
<div class="example-wrap">
    <div class="example">
        <div class="btn-group hidden-xs" id="insuranceToolbar" role="group">
            <button type="button" class="btn btn-outline btn-default">
                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-outline btn-default">
                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
            </button>
        </div>
        <table id="insurance" data-height="580" data-mobile-responsive="true">
            <thead>
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="uid">用户ID</th>
                    <th data-field="in_odd">保险单号</th>
                    <th data-field="in_total">保单金额</th>
                    <th data-field="in_payment">可赔付金额</th>
                    <th data-field="in_time">入险日期</th>
                    <th data-field="in_status">出险日期</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>1234</td>
                    <td>bd4674842545</td>
                    <td>200</td>
                    <td>10000</td>
                    <td>2017/10/10 10:00</td>
                    <td><span class="label label-warning">未出险</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1234</td>
                    <td>bd4674842545</td>
                    <td>200</td>
                    <td>10000</td>
                    <td>2017/10/10 10:00</td>
                    <td><span class="label label-primary">已出险</span>  （2017-10-27 10:00）</td>

                </tr>
                
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>