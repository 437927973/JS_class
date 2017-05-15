
<?php
	//用户数据库连接
	$conn =  mysql_connect("localhost", "root", "root") or die("数据库链接错误");
	mysql_select_db("eyunzhu_user", $conn);
	mysql_query("set names 'GBK'"); //使用GBK中文编码;
	
	function htmtocode($content){
	$content = str_replace("\n","<br>",str_replace(" ","&nbsp;",$content));
	return $content;
	}
?>