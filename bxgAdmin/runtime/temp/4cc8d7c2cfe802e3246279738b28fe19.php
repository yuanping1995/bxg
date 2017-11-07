<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\user\tab_9.html";i:1510017075;}*/ ?>
<div class="row full-height-scroll" style="padding-top:20px;">
    <div class="col-sm-3">
        <div class="card_main">
            <div class="card_content" style="border:2px solid #dfb35a;border-radius:5px;">
                <div class="row" style="padding:8px;">
                    <h3 class="col-sm-6" style="color:#dfb35a;">bxg123456</h3>
                    <h4 class="col-sm-6" style="text-align:center;font-size:15px;"><span style="float:right;padding:3px 13px;border-radius:12px;background:#dfb35a;">贵宾卡</span></h4>
                </div>
                <div class="row" style="margin:15px 0;text-align:center;">
                    <h3>总金额： 2000元<small style="margin-left:8px;color:#eee;">折扣：8%</small></h3>
                </div>
                <div class="row" style="padding:10px 8px 0px;">
                    <h4 class="col-sm-12" style="color:#dfb35a;">卡号：bxg123456789 <span style="float:right;color:#fff;">(未激活)</span></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="example-wrap">
            <div class="example">
                <div class="btn-group hidden-xs" id="cardToolbar" role="group">
                    <button type="button" class="btn btn-outline btn-default">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn btn-outline btn-default">
                        <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                    </button>
                </div>
                <table id="card" data-height="580" data-mobile-responsive="true">
                    <thead>
                        <tr>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="cardid">优惠券ID</th>
                            <th data-field="card_name">优惠名称</th>
                            <th data-field="card_purpose">用途</th>
                            <th data-field="card_status">使用状态</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>1234</td>
                            <td>满99减50</td>
                            <td>商城购物</td>
                            <td><span class="label label-primary">已使用</span>（2017-10-27 10:00）</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1234</td>
                            <td>满99减50</td>
                            <td>商城购物</td>
                            <td><span class="label label-warning">未使用</span></td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>