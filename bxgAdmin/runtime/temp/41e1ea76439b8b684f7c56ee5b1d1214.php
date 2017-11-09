<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\user\tab_4.html";i:1510034410;}*/ ?>
<div class="full-height-scroll">
    <?php if(is_array($arr['health']) || $arr['health'] instanceof \think\Collection || $arr['health'] instanceof \think\Paginator): if( count($arr['health'])==0 ) : echo "" ;else: foreach($arr['health'] as $key=>$vo): ?>
    <div class="ibox" style="margin-top:10px;">
        <div class="ibox-title navy-bg" style="min-height:35px;padding:10px 0 7px;border:none;border-radius:5px;">
            <ul style="list-style:none;">
                <li class="col-sm-3">用户ID：<?php echo $vo['uId']; ?></li>
                <li class="col-sm-3">所患疾病：<?php echo $vo['Disease']; ?></li>
            </ul>
        </div>
        <div class="ibox-content" style="border:2px solid #eee;border-top:none;">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>主诊医师：<?php echo $vo['Attend']; ?></td>
                        <td>审核ID：<?php echo $vo['AuditId']; ?></td>
                        <td>审核时间： <?php echo date("Y/m/d H:i:s",$vo['AuditTime']); ?></td>
                        <td>证明人ID：<?php echo $vo['WitnessID']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="diagnosis-proof">
                <span>医院诊断证明：</span>

                <?php if(is_array($vo['Prove']) || $vo['Prove'] instanceof \think\Collection || $vo['Prove'] instanceof \think\Paginator): if( count($vo['Prove'])==0 ) : echo "" ;else: foreach($vo['Prove'] as $key=>$vo_1): ?>
                <a class="imgBig" href="http://images.china.cn/news/attachement/jpg/site3/20110924/45713173535868909.jpg">
                    <img src="<?php echo $vo_1['imgpath']; ?>" width="150" height="80"/>
                </a>

                <?php endforeach; endif; else: echo "" ;endif; ?>
                </a>
            </div>

        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>