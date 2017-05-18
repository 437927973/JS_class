<?php
	@header('Content-type: text/html;charset=UTF-8');
	$conn = mysqli_connect('localhost','root','root','eyunzhu_db')or ('error');//新连接方式	
	
	if(isset($_POST['submit'])&&$_POST['submit'])
	{
		$sql="insert into eyunzhu_message (messageid,username,title,content,time)" .
		"values ('','$_POST[username]','$_POST[title]','$_POST[content]',now())";	
		mysqli_query($conn,$sql);
		
	?>
	<script type="text/javascript">
		alert("留言成功！");
		window.location.href="messageboard.php"; 
	</script>
<?php		
}
?>
	
