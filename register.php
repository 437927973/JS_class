<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<script src="js/js.js"></script>
		<title>注册</title>		
	</head>
	<body>
		<header>
		  <h1><a href="index.php">e云竹</a></h1>
		  <p>趁我们都还年轻,多欣赏下沿途的风景，不要错过了流年里温暖的人和物....</p>
		  <p class="header_p1">趁我们都还年轻,多欣赏下沿途的风景，不要错过了流年里温暖的人和物....</p>
		  <p class="header_p2">趁我们都还年轻,多欣赏下沿途的风景，不要错过了流年里温暖的人和物....</p>		  
		</header>
		
		<div id="nav">
		  <ul>
		    <li><a href="index.php">首页</a></li>
		    <li><a href="share.html">分享</a></li>
		    <li><a href="life.html">慢生活</a></li>
		    <li><a href="http://blog.csdn.net/eyunzhu">我的博客</a></li>
		    <li><a href="http://www.github.com/eyunzhu">我的github</a></li>
		    <li><a href="messageboard.php">留言板</a></li>
			<li><a href="JS_Class.html">JS课程</a></li>
		  </ul>
		</div>
		<br />
	<article>
		
		
		<h2 style="text-align: left;margin: 40px;">用户注册</h2>
<style type="text/css">
			table{margin: auto;}
			table tr{text-align: right;font-size: 20px;}
		</style>
		<form name="form_register" action="sub_reg.php" method="post" onsubmit="return isRegisterSubmit(form_register)" >
		
			<table  cellspacing="15px" cellpadding="10">
				<tr>
					<td colspan="2" style="text-align: center;">新用户注册</td>
				</tr>
				<tr>
					<td >注册账号：</td>
					<td><input type="text"name="username" id="username" placeholder="请输入账号"> </td>					
					
				</tr>
				<tr>
					<td>登录密码：</td>
					<td><input type="password" name="password" id="password"placeholder="请输入登陆密码"></td>					
				</tr>
				<tr>
					<td>确认登录密码：</td>
					<td><input type="password" name="password1" id="password1"placeholder="请再次输入密码"> </td>					
				</tr>
				<tr>
					<td>邮箱：</td>
					<td><input type="text"name="email" id="email"placeholder="请输入用户邮箱"> </td>					
				</tr>
				
				
				<tr> <!--单选-->
					<td>性别： </td>
					<td style="text-align: left;">   
						<label><input type = "radio" name = "sex" value="男" checked="checked" />男</label>
						<label><input type = "radio" name = "sex" value="女" />女</label>
					</td>
				</tr>
				
				<tr><!--多选-->
					<td>爱好：</td>
					<td colspan="2" style="text-align: left;">
						<label><input name="hobby" type="checkbox" value="运动" />运动 </label> 
						<label><input name="hobby" type="checkbox" value="看书" />看书 </label> <br />
						<label><input name="hobby" type="checkbox" value="旅游" />旅游 </label> 
						<label><input name="hobby" type="checkbox" value="宅" />宅</label> 
						
					</td>
				</tr>
				
				<tr><!--下拉选择-->
					<td>年龄：</td>
					<td style="text-align: left;">
						<select name="age" id="age"> 
							<option value="0">18以下</option> 
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="1">27以上</option>							
						</select>						
					</td>
				<tr>
					<td colspan="2" style="text-align: center;"> 
						<input type="submit" name="submit" value="注册"/>
						<input type="reset" value="重置"   />
						<input type="button" value="返回" onclick="javascript :history.back(-1);" />
						<input type="button" id="" value="登陆页面" onclick="window.location.href='login.html'" />
					</td>					
				</tr>
			</table>
		</form>	
		
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	</article>
			
		
		
<footer>
	Design by 李庆华
	
</footer>	
	
		
		
		
		
	</body>
</html>
