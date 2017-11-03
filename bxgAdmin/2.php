<?php
use word\word;
$html = ' 
<table width=600 cellpadding="6" cellspacing="1" bgcolor="#336699"> 
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
</table> 
';

//批量生成
for($i=1;$i<=3;$i++){
    $word = new word();
    $word->start();
    //$html = "aaa".$i;
    $wordname = 'PHP教程网站--jb51.net'.$i.".doc";
    echo $html;
    $word->save($wordname);
    ob_flush();//每次执行前刷新缓存
    flush();
}