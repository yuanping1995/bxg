<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\index\login.html";i:1509516661;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>H+ 后台主题UI框架 - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/login.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if (window.top !== window.self) {
            window.top.location = window.location;
        }
    </script>

</head>

<body class="signin">
    <div class="bxglog">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2" style="height:80px;">
                <img src="<?php echo __APPROOT__; ?>/static/admin/img/logo_1.png" style="height:100%;">
            </div>
            <div class="col-sm-8" style="padding-top:30px;">
                后台管理系统
            </div>   
        </div>

    </div>
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-10">
                <form method="post" name="login">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control uname" name="uname" value="" placeholder="用户名" onfocus="empty();" />
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control pword m-b" name="pword" value="" placeholder="密码" />
                                
                        </div> 
                    </div>
                </form>
                <div class="row">
                    <div class="col-sm-6 error-tip" style="padding:10px;display:block;text-align:left;color:red;"></div>
                    <div class="col-sm-6"><a href="" style="padding:10px;display:block;text-align:right;">忘记密码了？</a></div>
                </div>
            </div>
            <div class="col-sm-2"><button class="btn btn-success btn-block" onclick="loginBtn();">登录</button></div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2015 All Rights Reserved. H+
            </div>
        </div>
    </div>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript">
        function empty(){
            $(".error-tip").html('');
        }
        function loginBtn(){
            var uname = $("input[name='uname']").val();
            var pword = $("input[name='pword']").val();
            if(uname === ''){
                $(".error-tip").html("请输入用户名！");
            }else if(pword === ''){
                $(".error-tip").html("请输入密码！");
            }else{
                window.location.href = 'index.html';
                // $.ajax({
                //     type:'post',
                //     data:[uname:uname,pword:pword],
                //     url:'',
                //     success:function(data){
                //         var dataJson = eval(data);
                //         if(dataJson.flag){
                //             window.location.href = '';
                //         }else{
                //             $(".error-tip").html(dataJson.msg);
                //         }
                //     }
                // });
            }
        } 
    </script>
</body>

</html>
