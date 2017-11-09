<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_6.html";i:1510103504;}*/ ?>
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

                    <th data-field="in_odd">保险单号</th>
                    <th data-field="in_total">保单金额</th>
                    <th data-field="in_payment">可赔付金额</th>
                    <th data-field="in_time">入险日期</th>
                    <th data-field="in_status">出险日期</th>
                </tr>
            </thead>
            <tbody>

            <?php if(is_array($arr1) || $arr1 instanceof \think\Collection || $arr1 instanceof \think\Paginator): if( count($arr1)==0 ) : echo "" ;else: foreach($arr1 as $key=>$vo): ?>
                <tr>
                    <td></td>
                    <td><?php echo $vo['odd']; ?></td>
                    <td><?php echo $vo['price']; ?></td>
                    <td><?php echo $vo['kprice']; ?></td>
                    <td> <?php echo date("Y/m/d H:i:s",$vo['inTime']); ?></td>
                    <td><span class="label label-primary" > <?php if($vo['isDanger'] == '1'): ?>
                      <?php echo date("Y/m/d H:i:s",$vo['outTime']); else: ?>
                      未出险
                        <?php endif; ?></span>  </td>

                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>