<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\user\tab_1.html";i:1509960601;}*/ ?>
<div class="row full-height-scroll">                           
    <div class="col-sm-3">
        <div class="showAvactor">
            <img src="<?php echo __APPROOT__; ?><?php echo $arr['Icon']; ?>">
            <br>
            <button type="button" class="btn btn-primary btn-sm upAvactor" style="margin:15px 0;">修改头像</button>
            <input type="file" accept="image/*" name="file" class="hide imgUp" data-uid="<?php echo $arr['uId']; ?>">
        </div>
    </div>
    <div class="col-sm-9">
        <div class="form-group">
            <div class="col-sm-4">
                <label class="col-sm-3 control-label">用户ID</label>
                <div class="col-sm-9">
                    <?php echo $arr['uId']; ?>
                </div>
            </div>
            <div class="col-sm-3">
                <label class="col-sm-3 control-label">昵称</label>
                <div class="col-sm-8">
                    <?php echo $arr['nickName']; ?>
                </div>
            </div>
            <div class="col-sm-5">
                <label class="col-sm-3 control-label">注册时间</label>
                <div class="col-sm-7">
                    <?php echo date("Y/m/d H:i:s",$arr['Regtime']); ?>
                </div>
            </div>    
        </div>
        <div class="form-group">
           <div class="col-sm-4">
                <label class="col-sm-4 control-label">会员等级</label>
                <div class="col-sm-8">
                    <span class="upower" style="display:inline-block;padding-right:10px;"><?php echo $arr['Upower']; ?></span>
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#upGrade">升级</button>
                </div>
            </div>
            <div class="col-sm-3">
                <label class="col-sm-4 control-label">用户角色</label>
                <div class="col-sm-8">
                    <span class="role" style="display:inline-block;padding-right:10px;"><?php echo $arr['Role']; ?></span>
                     <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#setRole">设置</button>
                </div>
            </div>
              
        </div>
         <div class="form-group">
           <div class="col-sm-4">
                <label class="col-sm-3 control-label">认证状态</label>
                <div class="col-sm-9">
                    <span class="identify" style="display:inline-block;padding-right:10px;"><?php echo $arr['AuthStatus']; ?></span>
                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#identify">查看</button>
                </div>
            </div>
            <div class="col-sm-3">
                <label class="col-sm-4 control-label">账户状态</label>
                <div class="col-sm-8">
                    <span class="account" style="display:inline-block;padding-right:10px;"><?php echo $arr['Enable']; ?></span>
                    <?php if($arr['Enable'] == '正常'): ?>
                    <button type="button" class="btn btn-danger btn-xs account_state" data-account="1">锁定</button>
                    <?php else: ?>
                    <button type="button" class="btn btn-primary btn-xs account_state" data-account="2">正常</button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-5">
                <label class="col-sm-4 control-label">最后登录时间</label>
                <div class="col-sm-7">
                    2017/10/10 10:00
                </div>
            </div>  
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label class="col-sm-3 control-label">手机号</label>
                <div class="col-sm-9">
                    <span class="mobile" style="display:inline-block;padding-right:10px;"><?php echo $arr['Mobilenumber']; ?></span>
                    <button type="button" class="btn btn-warning btn-xs">更换</button>
                </div>
            </div>
            <div class="col-sm-3">
                <label class="col-sm-4 control-label">信用值</label>
                <div class="col-sm-8">
                    <span class="credit" style="display:inline-block;padding-right:10px;"><?php echo $arr['honor']['Honorval']; ?></span>
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#credit">提升</button>
                </div>
            </div>
            
        </div>
       
        <div class="form-group">
            <div class="col-sm-4">
                <label class="col-sm-3 control-label">店铺状态</label>
                <div class="col-sm-9">
                    <span class="store_status" style="display:inline-block;padding-right:10px;"><?php echo $arr['shopStatus']; ?></span>
                    <?php if($arr['shopStatus'] == '未开通'): else: ?>
                        <a href="/" title="" class="btn btn-primary btn-xs">查看</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-3">
                <label class="col-sm-4 control-label">所属地区</label>
                <div class="col-sm-8">
                    河北省保定市
                </div>
            </div>
             <div class="col-sm-5">
                <label class="col-sm-3 control-label">用户标签</label>
                <div class="col-sm-9">
                    <?php echo $arr['resume']['UserTag']; ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label class="col-sm-3 control-label">活跃度</label>
                <div class="col-sm-9">
                    <?php echo $arr['honor']['SignNum']; ?>
                </div>
            </div>
            <div class="col-sm-3">
                <label class="col-sm-4 control-label">收藏量</label>
                <div class="col-sm-8">
                    <?php echo count($arr['collection']); ?>
                </div>
            </div>
            <div class="col-sm-5">
                <label class="col-sm-3 control-label">关注量</label>
                <div class="col-sm-9">
                    <?php echo count($arr['follow']); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label class="col-sm-3 control-label">推荐人</label>
                <div class="col-sm-9">
                    <span style="display:inline-block;padding-right:10px;"><?php echo $arr['recommend']['CoverId']['nickName']; ?></span>
                    <a href="<?php echo url('admin/index/user_info',array('id'=>$arr['recommend']['CoverId']['uId'])); ?>" class="btn btn-warning btn-xs">查看</a>
                </div>
            </div>
            <div class="col-sm-5">
                <label class="col-sm-3 control-label">所签订协议</label>
                <div class="col-sm-8">
                    <span style="display:inline-block;padding-right:10px;"><?php echo count($arr['agreement']); ?>份</span>
                    <button type="button" class="btn btn-primary btn-xs">查看</button>
                </div>
            </div>
        </div>
    </div>
</div>