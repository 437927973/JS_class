<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<script src="js/js.js"></script>
		<title>留言板</title>	
		
	</head>
	<body>
		<header>
		  <h1><a href="index.html">e云竹</a></h1>
		  <p>趁我们都还年轻,多欣赏下沿途的风景，不要错过了流年里温暖的人和物....</p>
		  <p class="header_p1">趁我们都还年轻,多欣赏下沿途的风景，不要错过了流年里温暖的人和物....</p>
		  <p class="header_p2">趁我们都还年轻,多欣赏下沿途的风景，不要错过了流年里温暖的人和物....</p>		  
		</header>
		
		<div id="nav">
		  <ul>
		    <li><a href="index.html">首页</a></li>
		    <li><a href="error.html">分享</a></li>
		    <li><a href="#">慢生活</a></li>
		    <li><a href="http://blog.csdn.net/eyunzhu">我的博客</a></li>
		    <li><a href="http://www.github.com/eyunzhu">我的github</a></li>
			<li><a href="MessageBoard.php">留言板</a></li>
			<li><a href="JS_Class.html">JS课程</a></li>
		  </ul>
		</div>
		<br />
		<div class="login">				
			<a href="login.html" >登陆</a>
			<a href="register.html" >注册</a>
			<span id="loginState" style="float:right ;font-size: 14px;color: white;"></span> <!--页面右侧显示登陆信息-->
		</div>		
		<script>
			//var len=form.user.value.length;  //从form表单中获取登陆信息
			var len = 0;    
			if(len==0){
				document.getElementById("loginState").innerHTML="用户名：未登录"
				
			}
			else{
				document.getElementById("loginState").innerHTML="用户名："+form.user.value;
			}
		</script>	
		<br /><br />

<?php
	$conn = mysqli_connect('localhost','root','root','eyunzhu_db')or ('error');//新连接方式	
	
	if(isset($_POST['submit'])&&$_POST['submit'])
	{
		$sql="insert into eyunzhu_message (messageid,username,title,content,time)" .
		"values ('','$_POST[username]','$_POST[title]','$_POST[content]',now())";	
		mysqli_query($conn,$sql);
		
	?>
	<script type="text/javascript">
		alert("留言成功！");
	</script>
<?php		
}
?>
	

<article>
	<h2 style="text-align: left;margin: 40px;">留言板</h2>
	<form action="messageboard.php" method="post" style="margin-left: 20px;">
			<div class="int">
				<label for="username">用户名：</label>
				<input type="text" name="username" id="username" placeholder="请输入用户名"><br /><br /><br />			
				<label for="title">标题：</label>
				<input type="text" name="title" id="title" placeholder="请输入标题"><br /><br /><br />
				<label for="content">内容：</label><br /><br /><br />
				<textarea float="left" name="content" id="content" rows="10" cols="120" placeholder="请输入留言内容"></textarea>				
			</div>			
			<input type="submit" name="submit" id="button" value="提交"/>
	</form>	


<?php
	//连接数据库

	function htmtocode($content){
		$content = str_replace("\n","<br>",str_replace(" ","&nbsp;",$content));
		return $content;
	}
	
	$conn = mysqli_connect('localhost','root','root','eyunzhu_db')or ('error');//新连接方式	
	$sql="select * from eyunzhu_message order by messageid desc";//从eyunzhu_message表中查询数据		
	$query = mysqli_query($conn,$sql);	
	while($row = mysqli_fetch_array($query)){
	

?>
	
	<table border="2" cellspacing="" cellpadding=""  style="font-size: 24px;margin: 30px 0 0 30px;"width="600px">
		<tr>
			<td>用户名: <?php echo $row["username"] ?><div style="float: right;"><?php echo $row["time"] ?>	</div>               </td>
			<td></td>
			
		</tr>		
		<tr>
			<td>标题:<?php echo $row["title"] ?></td>			
		</tr>		
		<tr>
			<td >内容:　<?php echo htmtocode($row["content"]) ?></td>			
		</tr>
	</table>


<?php
}

?>
	
	
	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />		
	
	
	
</article>
		
<footer>
		Design by 李庆华		
</footer>
</body>
</html>
