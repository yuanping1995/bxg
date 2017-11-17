<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\newbxg\bxgAdmin/./application/index\view\index\index.html";i:1510650482;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="<?php echo __APPROOT__; ?>/static/admin/css/plugins/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo __APPROOT__; ?>/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
</head>
<body>
<div class="form-group">
    <label for="exampleInputName2">url</label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Jane Doe">
</div>
<div class="form-group">
    <label for="exampleInputName2">Method</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
</div>
<button onclick="asd()"></button>
<script>
    function asd() {
        url = $("#exampleInputName1").val();
        Method = $("#exampleInputName2").val();

    $.ajax({
        type:Method,
        data:{uId:uid,money:money},
        url:url,
        success:function(data){
            var data = eval(data);
            if(data.state === '1111'){
                swal({
                    title: "充值成功！",
                    type: "success"
                });
                $(tr).find("td.balance").text(Number($(tr).find("td.balance").text())+money);
            }else if(data.state === '0000'){
                swal({
                    title: "充值失败！",
                    type: "error"
                });
            }
        },
        error:function(){
            swal({
                title: "网络出现问题！",
                type: "error"
            });
        }
    });
    }
</script>
</body>
</html>