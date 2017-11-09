<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_9.html";i:1510107441;}*/ ?>
<div class="row full-height-scroll" style="padding-top:20px;">
    <?php if(!empty($arr_1)): ?>  <div class="col-sm-3">

        <div class="card_main">

            <div class="card_content" style="border:2px solid #dfb35a;border-radius:5px;">
                <div class="row" style="padding:8px;">
                    <h3 class="col-sm-6" style="color:#dfb35a;"><?php echo $arr_1['Cardid']; ?></h3>
                    <h4 class="col-sm-6" style="text-align:center;font-size:15px;"><span style="float:right;padding:3px 13px;border-radius:12px;background:#dfb35a;">
                    <?php if($arr_1['Cardtype'] == '1'): ?>
                      贵宾卡
                        <?php else: ?>
                   代理卡
                        <?php endif; ?>
                    </span></h4>
                </div>
                <div class="row" style="margin:15px 0;text-align:center;">
                    <h3>总金额： <?php echo $arr_1['Total_fee']; ?>元<small style="margin-left:8px;color:#eee;">折扣：<?php echo $arr_1['Discount']; ?></small></h3>
                </div>
                <div class="row" style="padding:10px 8px 0px;">
                    <h4 class="col-sm-12" style="color:#dfb35a;">卡号：<?php echo $arr_1['Cardid']; ?> <span style="float:right;color:#fff;">( <?php if($arr_1['Is_ok'] == '1'): ?>
                    激活
                        <?php else: ?>
              未激活
                        <?php endif; ?>)</span></h4>
                </div>
            </div>
        </div>


    </div>
    <div class="col-sm-9">
    <?php else: ?>
        <div class="col-sm-12">
    <?php endif; ?>

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
                    <?php if(is_array($arr_1['coupon']) || $arr_1['coupon'] instanceof \think\Collection || $arr_1['coupon'] instanceof \think\Paginator): if( count($arr_1['coupon'])==0 ) : echo "" ;else: foreach($arr_1['coupon'] as $key=>$vo): ?>
                        <tr>
                            <td></td>
                            <td><?php echo $vo['Couponid']; ?></td>
                            <td>满99减50</td>
                            <td><?php echo $vo['Purpose']; ?></td>
                            <td><span class="label label-primary"> <?php if($vo['Is_ok'] == '1'): ?>
                      未使用
                        <?php else: ?>
              使用
                        <?php endif; ?></span>（<?php echo date("Y/m/d H:i:s",$vo['Usetime']); ?>）</td>
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>