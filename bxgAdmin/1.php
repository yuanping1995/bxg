<?php
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<xml><w:WordDocument><w:View>Print</w:View></xml>
<script src="includes/js/ztree/js/jquery-1.4.4.min.js" type="text/javascript"></script>
</head>';
echo '<table class="table_dayin">';

echo'   <table width=600 cellpadding="6" cellspacing="1" bgcolor="#336699"> 
<tr bgcolor="White"> 
  <td>PHP10086</td> 
  <td><a href="http://www.jb51.net" target="_blank" >http://www.jb51.net</a></td> 
</tr> 
<tr bgcolor="red"> 
  <td>PHP10086</td> 
  <td><a href="http://www.jb51.net" target="_blank" >http://www.jb51.net</a></td> 
</tr> 
<tr bgcolor="White"> 
  <td colspan=2 > 
  PHP10086<br> 
  最靠谱的PHP技术分享网站 
  <img src="http://www.jb51.net/wp-content/themes/WPortal-Blue/images/logo.gif"> 
  </td> 
</tr> 
</table>                                           ';
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