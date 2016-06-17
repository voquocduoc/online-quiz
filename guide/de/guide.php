<?php

$f_page = isset($_GET['page']) ? $_GET['page'] : 'contents';
$i_page_url = 'html/'.$f_page.'.php';
if(!file_exists($i_page_url))
 $i_page_url = 'html/contents.php';

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><META http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>v2.x.x Dokumentation</title>
</head>
<frameset rows="45,*" frameborder="yes" framespacing="0" border="1" bordercolor="#3068AC">
<frame name="header" src="html/index_header.php" scrolling="no">
<frameset cols="250,*"  border="0" frameborder="1" FRAMESPACING="3" TOPMARGIN="0" LEFTMARGIN="0" MARGINHEIGHT="0" MARGINWIDTH="0">
<frame name="toc" src="html/index_contents.php" TOPMARGIN="5" LEFTMARGIN="5" MARGINHEIGHT="5" MARGINWIDTH="5" FRAMEBORDER="1" BORDER="1">
<frame name="content" src="<?php echo $i_page_url; ?>" FRAMEBORDER="no" BORDER="0" BORDERCOLOR="#3068AC" style="border-left:1px solid #3068AC; border-top:0px;">
</frameset>
</html>