<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\WWW\bxg\bxgAdmin/./application/admin\view\index\user_info.html";i:1509958924;}*/ ?>
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
                        <li class="active"><a data-toggle="tab" href="#tab_1">基本信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_2">亲密信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_3">简历信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_4">健康信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_5">商家扩展信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_6">保险信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_7">用户心愿</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_8">订单信息</a></li>
                        <li class=""><a data-toggle="tab" href="#tab_9">卡片信息</a></li>
                    </ul>
                    <div class="tab-content" >
                        <!-- 用户充值弹窗 -->
                        <div class="modal outmodal" id="upGrade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">会员升级</h4>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal m-t">
                                                 <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">等级：</label>
                                                    <div class="col-sm-9 grade">
                                                        <div class="col-sm-3 radio i-checks" >
                                                            <label><input type="radio" checked="" value="2" name="grade" data-gmoney="20" data-grade="vip"><i></i>vip</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="3" name="grade" data-gmoney="30" data-grade="svip"> <i></i>svip</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="4" name="grade" data-gmoney="50" data-grade="ovip"> <i></i> ovip</label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">升级金额：</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" value="20" name="upgrade" disabled="disabled" style="padding-left:10px;border:1px solid #ccc;background:#fff;">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary saveGrade" data-dismiss="modal">保存</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                         <!-- 用户角色设置弹窗 -->
                        <div class="modal outmodal" id="setRole" tabindex="-1" role="dialog" aria-hidden="false">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">设置用户角色</h4>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal m-t">
                                                <div class="form-group draggable">
                                                    <label class="col-sm-2 control-label">角色：</label>
                                                    <div class="col-sm-10 setRole">
                                                        <div class="col-sm-3 radio i-checks" >
                                                            <label><input type="radio" checked="" value="1" data-role="用户" name="role"> <i></i>用户</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="2" data-role="商家" name="role"> <i></i> 商家</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="3" data-role="站点" name="role"> <i></i> 站点</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="4" data-role="员工" name="role"> <i></i> 员工</label>
                                                        </div>
                                                        <div class="col-sm-3 radio i-checks">
                                                            <label><input type="radio"  value="5" data-role="兼职" name="role"> <i></i> 兼职</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary saveRole" data-dismiss="modal">保存</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- 用户认证状态弹窗 -->
                         <div class="modal outmodal" id="identify" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">预览身份认证信息</h4>
                                        <div class="row modal-body">
                                            <div class="col-sm-12">
                                                <p>姓名：XXX</p>
                                                <p>身份证号：1111111111111111111111111</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4>正面照</h4>
                                                <a class="imgBig" href="http://sz.focus.cn/upload/photos/1786/K5cdnU75.jpg">
                                                    <img class="identify-img" src="http://sz.focus.cn/upload/photos/1786/K5cdnU75.jpg"/>
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4>背面照</h4>
                                                <a class="imgBig" href="http://d.hiphotos.baidu.com/zhidao/pic/item/c75c10385343fbf24971f4ebb17eca8064388f9d.jpg">
                                                    <img class="identify-img" src="http://d.hiphotos.baidu.com/zhidao/pic/item/c75c10385343fbf24971f4ebb17eca8064388f9d.jpg"/>
                                                </a>
                                           </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- 用户信用值提升弹窗 -->
                        <div class="modal outmodal" id="credit" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated bounceInRight">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                                        </button>
                                        <h4 class="modal-title">提升信用值</h4>
                                        <div class="modal-body">
                                            <form role="form" class="form-horizontal m-t">
                                                <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">提升值：</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" name="credit" placeholder ="请输入提升值" style="margin-top:-5px;padding:5px;">
                                                    </div>
                                                </div>
                                                <div class="form-group draggable">
                                                    <label class="col-sm-3 control-label">理由：</label>
                                                    <div class="col-sm-9">
                                                        <textarea cols="35" name="credit_content" rows="5" style="resize:none;"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary saveCredit" data-dismiss="modal">保存</button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>

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
                // if($("#"+thref).html() == ''){
                    tabAjax(thref);
                // }
            });
            
            var thref = 'tab_1';
            tabAjax(thref);
            function tabAjax(thref){
                $.ajax({
                    type:'post',
                    data:{id:<?php echo $arr['uId']; ?>},
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
