<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/admin\view\index\user_info.html";i:1510040299;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/animate.css" rel="stylesheet">
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
        .float-e-margins .btn{
            margin:0;
        }
        .showAvactor,.resumeAvactor{margin:15px 0;text-align: center;}
        .showAvactor img{
            margin:0 auto;
            width:160px;
            height:160px;
            border:1px solid #eee;
        }
        .resumeAvactor img{
            margin:0 auto;
            width:167px;
            height:220px;
            border:1px solid #eee;
        }
        .clients-list .tab-pane{height:auto !important;}
        tr:nth-child(2n){
            background: #f7f7f7;
        }
        .fixed-table-container{
            height:500px !important;
        }
        .control-label{
            padding:0 !important;
        }
        .col-sm-9 .form-group{
            padding:5px 0 30px;
            border-bottom: 1px solid #eee;
        }
        .modal-title{
            padding:0 0 15px;
            text-align:center;
            border-bottom: 1px solid #eee;
        }
        .alert{
            padding:5px 10px;
            font-size:15px;
        }
        .job-intension{
            padding:30px;
            font-size:16px;
        }
        .job-intension p{
            margin-top: 5px;
            font-weight: bold;
        }
        .panel-heading{
            padding:5px 15px;
        }

        .diagnosis-proof{
            padding:0 8px;
        }
        .shop-head img{
            display: block;
            padding:10px 0;
            margin:0 auto;
        }
        .card_main{
            width:100%;
            padding:5px;
            color: #fff;
            border-radius:5px;    
            background:-webkit-linear-gradient(315deg,#3b383a, #1d1419);
            background:-o-linear-gradient(315deg,#3b383a, #1d1419);
            background:linear-gradient(315deg,#3b383a, #1d1419); 
        }
        .identify-img{
            width: 100%;
            height:100%;
            border-radius: 7px;
        }
        .radio{
            padding-top:0 !important;
        }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated"> 
        <div class="ibox float-e-margins">
            <div class="ibox-content"> 
                <a href="<?php echo url('admin/index/user_list'); ?>" class="btn btn-primary">返回上一级</a>
                <div class="clients-list">
                    <ul class="nav nav-tabs">

                        <!--<li class="active"><a data-toggle="tab" href="#tab-1">基本信息</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-2">亲密信息</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-3">简历信息</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-4" onclick="asd()">健康信息</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-5">商家扩展信息</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-6">保险信息</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-7">用户心愿</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-8">订单信息</a></li>-->
                        <!--<li class=""><a data-toggle="tab" href="#tab-9">卡片信息</a></li>-->
<!--=======-->
                        <li class="active"><a data-toggle="tab" href="#tab_1" data-id="<?php echo $arr['uId']; ?>">基本信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_2" data-id="<?php echo $arr['uId']; ?>">亲密信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_3" data-id="<?php echo $arr['uId']; ?>">简历信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_4" data-id="<?php echo $arr['uId']; ?>">健康信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_5" data-id="<?php echo $arr['sellerid']; ?>">商家扩展信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_6" data-id="<?php echo $arr['uId']; ?>">保险信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_7" data-id="<?php echo $arr['uId']; ?>">用户心愿</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_8" data-id="<?php echo $arr['uId']; ?>">订单信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_9" data-id="<?php echo $arr['uId']; ?>">卡片信息</a></li>

                    </ul>
                  <div class="tab-content" >



                        <div id="tab_1" class="tab-pane active" style="margin-top:20px;"></div>
                        <div id="tab_2" class="tab-pane" style="margin-top:20px;"></div>
                        <div id="tab_3" class="tab-pane" style="margin-top:20px;"></div>
                        <div id="tab_4" class="tab-pane" style="margin-top:20px;"></div>
                        <div id="tab_5" class="tab-pane" style="margin-top:20px;"></div>
                        <div id="tab_6" class="tab-pane" style="margin-top:20px;"></div>
                        <div id="tab_7" class="tab-pane" style="margin-top:20px;"></div>
                        <div id="tab_8" class="tab-pane" style="margin-top:20px;"></div>
                        <div id="tab_9" class="tab-pane" style="margin-top:20px;"></div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- 全局js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap table -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
     <!-- iCheck -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/iCheck/icheck.min.js"></script>
    <!-- Fancy box 图片放大-->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/fancybox/jquery.fancybox.js"></script>
    <!-- Sweet alert -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/plugins/sweetalert/sweetalert.min.js"></script>

     <!-- 以下自定义js -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/content.js?v=1.0.0"></script>
    <!-- Peity -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/user-info.js"></script>
    <!-- 图片上传 -->
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/demo/compress.js"></script>

   
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
               
            });
//............. 升级充值
            $('.grade input').on('ifChecked', function(event){
                var money = $(this).attr("data-gmoney");
                $("input[name='upgrade']").val(money);
            });
            
            $(".saveGrade").on('click',function(){
                var obj = $(".grade input[name='grade']:checked");
                var uid = $('.imgUp').attr("data-uid");
                var member = obj.val();
                var money = obj.attr("data-gmoney");
                var vip = obj.attr("data-grade"); 
                // console.log(uid +'----'+member+'---'+money);
                $.ajax({
                    type:'post',
                    data:{uId:uid,Member:member,money:money},
                    url:'../../../../api/Ajaxadmin/Memberupgrade',
                    success:function(data){
                        if(data === '1111'){
                            swal({
                                title: "升级成功！",
                                type: "success"
                            });
                            $(".upower").text(vip);
                        }else if(data === '0001'){
                            swal({
                                title: "您已是"+vip+"!",
                                type: "warning"
                            });
                        }else if(data === '0000'){
                            swal({
                                title: "升级失败！",
                                type: "error"
                            });
                        }  
                    },
                    error:function(data){
                        swal({
                            title: "网络出现问题！",
                            type: "error"
                        });
                    }
                });

            });
//............. end 升级充值
//............. 设置角色
            $(".saveRole").on('click',function(){
                var obj = $(".setRole input[name='role']:checked");
                var uid = $('.imgUp').attr("data-uid");
                var type = obj.val();
                var role = obj.attr('data-role');
                console.log(uid+'------'+type);
                $.ajax({
                    type:'post',
                    data:{uId:uid,role:type},
                    url:'../../../../api/Ajaxadmin/Setrole',
                    success:function(data){
                        console.log(data);
                        if(data === '1111'){
                            swal({
                                title: "角色设置成功！",
                                type: "success"
                            });
                            $(".role").text(role);
                        }else if(data === '0001'){
                            swal({
                                title: "您已是‘"+role+"’角色!",
                                type: "warning"
                            });
                        }else if(data === '0000'){
                            swal({
                                title: "设置失败！",
                                type: "error"
                            });
                        }  
                    },
                    error:function(data){
                        swal({
                            title: "网络出现问题！",
                            type: "error"
                        });
                    }
                });

            });
//............. end 设置角色
//............. 账户状态
            $(".account_state").on('click',function(){
                var num = Number($(this).attr("data-account"));
                var uid = $('.imgUp').attr("data-uid");
                var _this = $(this);
                console.log(num +'-----'+uid);
                $.ajax({
                    type:'post',
                    data:{uId:uid,enable:num},
                    url:'../../../../api/Ajaxadmin/Setenable',
                    success:function(data){
                        if(num === 1){
                            _this.removeClass('btn-danger').addClass('btn-primary').attr('data-account',2).html("正常");
                            $(".account").html("锁定");
                        }else{
                            _this.removeClass('btn-primary').addClass('btn-danger').attr('data-account',1).html("锁定");
                            $(".account").html("正常");
                        }
                    },
                    error:function(data){

                        swal({
                            title: "网络出现问题！",
                            type: "error"
                        });
                    }
                });
            });
//............. end 账户状态
//............. 信用值
            $(".saveCredit").on('click',function(){
                var uid = $('.imgUp').attr("data-uid");
                var credit = $(this).parent().parent().find("input[name='credit']").val();
                var content = $(this).parent().parent().find("textarea").val();
                console.log(uid+'---'+credit+'---'+content);
                if(credit == ''){
                    swal({
                        title: "请输入要提升的信用值",
                        type: "error"
                    });
                }else if(content == ''){
                    swal({
                        title: "请输入提升的原因",
                        type: "error"
                    });
                }else{
                    $.ajax({
                        type:'post',
                        data:{uId:uid,Credit:credit,content:content},
                        url:'../../../../api/Ajaxadmin/Creditupgrade',
                        success:function(data){
                            var data = eval(data);
                            if(data.state === '1111'){
                                swal({
                                    title: data.msg,
                                    type: "success"
                                });
                                $(".credit").text(Number($(".credit").text())+Number(credit));
                            }else if(data.state === '0000'){
                                swal({
                                    title: data.msg,
                                    type: "error"
                                });
                            }
                        },
                        error:function(data){
                            swal({
                                title: "网络出现问题！",
                                type: "error"
                            });
                        }
                    })
                }

                
            });
//............. end 信用值
//............. 亲密人删除
            
//............. end 亲密人删除
            // 图片上传
            $(".upAvactor").on('click',function(){
                $('.imgUp').click();
            });
            $('.imgUp').on('change',function(){
                var uid = $(this).attr("data-uid");
                var file = this.files[0];
                photoCompress(file,60,$(".showAvactor img")[0],uid);
            });
            // 图片放大
            $('.imgBig').fancybox({
                openEffect: 'none',
                closeEffect: 'none'
            });

//............. 选项卡

            $('.nav-tabs a[data-toggle="tab"]').on('click', function (e) {
                thref = (e.target.hash).substring(1);
                id = e.currentTarget.dataset.id;
                var obj = "#"+thref;
                if($(obj).html() == ''){
                    tabAjax(thref,id);
                }
            });
            
            var thref = $('.nav-tabs li:first a[data-toggle="tab"]').attr('href').substring(1);
            var id = $('.nav-tabs li:first a[data-toggle="tab"]').attr('data-id');
            tabAjax(thref,id);
            function tabAjax(thref,id){
                $.ajax({
                    type:'get',
                    data:{id:id},
                    url:'<?php echo __APPROOT__; ?>/index.php/admin/user/'+thref,
                    success:function(data){ 
                        if(data){
                            var objId = "#"+thref;
                            $(objId).html(data);
                        }
                    }
                })
            }
           
        });
            
    </script>
</body>

</html>
