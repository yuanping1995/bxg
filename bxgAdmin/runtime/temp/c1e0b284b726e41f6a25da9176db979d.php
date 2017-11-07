<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\user\tab_7.html";i:1510017525;}*/ ?>
<div class="example-wrap">
    <div class="example">
        <div class="btn-group hidden-xs" id="wishToolbar" role="group">
            <button type="button" class="btn btn-outline btn-default">
                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
            </button>
            <button type="button" class="btn btn-outline btn-default">
                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
            </button>
        </div>
        <table id="wish" data-height="580" data-mobile-responsive="true">
            <thead>
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="uid">用户ID</th>
                    <th data-field="wish_city">城市代码</th>
                    <th data-field="wish_title">心愿标题</th>
                    <th data-field="wish_content">心愿内容</th>
                    <th data-field="wish_time">记录时间</th>
                    <th data-field="wish_status">心愿状态</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>1234</td>
                    <td>bd4674842545</td>
                    <td>oppo R11s</td>
                    <td class="col-sm-4" style="padding-left:0px;">想要一个oppo R11s</td>
                    <td>2017/10/10 10:00</td>
                    <td><span class="label label-warning">未达成</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>1234</td>
                    <td>bd4674842545</td>
                    <td>oppo R11s</td>
                    <td class="col-sm-4" style="padding-left:0px;">想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s想要一个oppo R11s</td>
                    <td>2017/10/10 10:00</td>
                    <td><span class="label label-primary">已达成</span>（2017-10-27 10:00）</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>