<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_7.html";i:1510044966;}*/ ?>
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

                    <th data-field="wish_city">城市代码</th>
                    <th data-field="wish_title">心愿标题</th>
                    <th data-field="wish_content">心愿内容</th>
                    <th data-field="wish_time">记录时间</th>
                    <th data-field="wish_status">心愿状态</th>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($arr['wish']) || $arr['wish'] instanceof \think\Collection || $arr['wish'] instanceof \think\Paginator): if( count($arr['wish'])==0 ) : echo "" ;else: foreach($arr['wish'] as $key=>$vo): ?>
                <tr>
                    <td></td>
                    <td><?php echo $vo['City']; ?></td>
                    <td><?php echo $vo['title']; ?></td>
                    <td class="col-sm-4" style="padding-left:0px;"><?php echo $vo['Content']; ?></td>
                    <td><?php echo date("Y/m/d H:i:s",$vo['Wishtime']); ?></td>
                    <td><span class="label label-warning"><?php if($vo['Is_ok'] == '2'): ?>
                   已达成
                        <?php else: ?>
                      未达成
                        <?php endif; ?></span></td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>