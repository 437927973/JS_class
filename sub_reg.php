		
 <?php
 	@header('Content-type: text/html;charset=UTF-8');
	$conn = mysqli_connect('localhost','root','root','eyunzhu_db')or ('error');
	
	if(isset($_POST['submit'])&&$_POST['submit'])
	{
		$sql="insert into eyunzhu_user (username,password,email,sex,hobby,age)" .
		"values ('$_POST[username]','$_POST[password]','$_POST[email]','','','')";	
		mysqli_query($conn,$sql);
		
	?>
	<script type="text/javascript">
		
		alert("注册成功f！");
		window.location.href="index.php"; 
	</script>
<?php		
}
?>
	