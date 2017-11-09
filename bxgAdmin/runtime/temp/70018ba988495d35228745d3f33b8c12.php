<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_2.html";i:1510025883;}*/ ?>
 <div class="example-wrap">
    <div class="example">
        <div class="btn-group hidden-xs" id="closeToolbar" role="group">
            <button id="closeBtn" type="button" class="btn btn-outline btn-default">
                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
            </button>
        </div>
        <table id="close" data-height="580" data-mobile-responsive="true">
            <thead>
                <tr>
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="id">ID</th>
                    <th data-field="closeid">亲密人ID</th>
                    <th data-field="closetype">亲密类型</th>
                    <th data-field="intimacy">亲密度</th>
                    <th data-field="intime">加入时间</th>
                    <th data-field="closeStadus">亲密状态</th>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($arr['close']) || $arr['close'] instanceof \think\Collection || $arr['close'] instanceof \think\Paginator): if( count($arr['close'])==0 ) : echo "" ;else: foreach($arr['close'] as $key=>$vo): ?>
                <tr data-uid="<?php echo $vo['uId']; ?>">
                    <td></td>
                    <td><?php echo $vo['Id']; ?></td>
                    <td><?php echo $vo['Closeid']; ?></td>
                    <td><?php if(($vo['Closetype'] == 1)): ?> 家人
                        <?php else: ?>好友
                        <?php endif; ?></td>
                    <td><?php echo $vo['Intimacy']; ?></td>
                    <td>  <?php echo date("Y/m/d",$vo['Intime']); ?></td>
                    <td><span class="label label-primary">
                        <?php if(($vo['Status'] == 1)): ?>已核实<?php else: ?>未核实
                        <?php endif; ?></span></td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>