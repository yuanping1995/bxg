<?php
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<xml><w:WordDocument><w:View>Print</w:View></xml>
<script src="includes/js/ztree/js/jquery-1.4.4.min.js" type="text/javascript"></script>
</head>';
echo '<table class="table_dayin">
<caption class="table_caption">';
echo "数字化教学系统电子备课稿<br>
<span>学科 <em style='border-bottom:1px solid #545454;'>语文</em>学校 <em style='border-bottom: 1px solid #545454;'>实验中学</em></span>
</caption>";
echo '</table>';
ob_start(); //打开缓冲区
header("Cache-Control: public");
Header("Content-type: application/octet-stream");
Header("Accept-Ranges: bytes");
if (strpos($_SERVER["HTTP_USER_AGENT"],'MSIE')) {
header('Content-Disposition: attachment; filename=test.doc');
}else if (strpos($_SERVER["HTTP_USER_AGENT"],'Firefox')) {
Header('Content-Disposition: attachment; filename=test.doc');
} else {
header('Content-Disposition: attachment; filename=test.doc');
}
header("Pragma:no-cache");
header("Expires:0");
ob_end_flush();//输出全部内容到浏览器