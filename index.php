<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		
		<title>e云竹</title>
		
		
	</head>
	<body>
		
		<?php
			session_start (); 
			if (isset ( $_SESSION ["code"] )) {//判断code存不存在，如果不存在，说明异常登录 
			  ?> 
			欢迎登录<?php
			  echo "${_SESSION["username"]}";//显示登录用户名 
			  ?><br> 
			您的ip：<?php
			  echo "${_SERVER['REMOTE_ADDR']}";//显示ip 
			  ?> 
			<br> 
			您的语言： 
			<?php
			  echo "${_SERVER['HTTP_ACCEPT_LANGUAGE']}";//使用的语言 
			  ?> 
			<br> 
			浏览器版本： 
			<?php
			  echo "${_SERVER['HTTP_USER_AGENT']}";//浏览器版本信息 
			  ?> 
			<a href="exit.php">退出登录</a> 
			<?php
			} else {//code不存在，调用exit.php 退出登录 
			  ?> 
			<script type="text/javascript"> 
			  alert("退出登录"); 
			  window.location.href="exit.php"; 
			</script> 
			<?php
			} 
			?> 

		
		
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
			<li><a href="messageboard.php">留言板</a></li>
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
		
<article>
	
	<div class="l_box">
		<div class="about_me">
			<h2>个人资料</h2>
			<ul>
				<img src="img/girl.jpg"/>
				<p>网名：<a href="http://www.eyunzhu.com">e云竹</a></p>
				<p>邮箱：eyunzhu@foxmail.com</p>
		        <p>博客：<a href="http://blog.csdn.net/eyunzhu">blog.csdn.net/eyunzhu</a> </p>
		        <p>职业：学生</p>
			</ul>
		</div>		
		<br />
		<div class="about_me">
			<h2>个人爱好</h2>
			<ul>
				<p>DIY</p>
				<p>运动、旅行</p>
				<p>大吃大喝</p>		       
		        <p>有事没事发发呆</p>
			</ul>
		</div>	
		<br />
		<div class="about_me">
			<h2>音乐</h2>
			 <div class="viny">
			      <ul>
			        <dl>
			          <dt class="art"><img src="img/mylove.jpg" alt="专辑"></dt>
			          <dd class="icon-song"><span></span>我的爱人</dd>
			          <dd class="icon-artist"><span></span>歌手：苹果</dd>
			          <dd class="icon-album"><span></span>专辑：《mylove》</dd>
			          <dd class="music">
			            <!--
							<audio src="images/nf.mp3" controls ></audio> </dd>
							<embed src="images/nf.mp3" width = "100%" height ="20" hidden="false" loop="true" autostart="true">
						-->
						<audio src="img/mylove.mp3" autostart="true" controls></audio> </dd>
						
						
			          <!--也可以添加loop属性 音频加载到末尾时，会重新播放-->
					  
			        </dl>
			      </ul>
   			 </div>
		</div>	
		
		
		
		
		
		
	</div>
	
	<div class="r_box">
		
			<h2><a href="http://blog.csdn.net/eyunzhu/article/details/71246631">那个夏天</a></h2>
			<div>
				
				<p>是否有那么一个夏天</p>
				<p>时常在你的脑海出现，不论忧伤愉快、不论晴天雨天</p>
		        <p>回忆，想象，沉默，亦或轻轻一笑，对于那些，你还记得吗？</p>		       
			</div>
			
	</div>
	
	<div class="r_box">
		
			<h2><a href="http://blog.csdn.net/eyunzhu/article/details/71190738">当我内心足够强大</a></h2>
			<div>
				
				<p>当我的内心足够强大，强大到可以面对我自己，真实的不完美的自己。</p>
				<p>	当我的内心足够强大，强大到面对不完美的自己可以与自我交谈，看到自己的错误。</p>					
				<p>	当我的内心足够强大，强大到看到自己的错误，可以毫无偏见的接受并改正。</p>					
				<p>	当我的内心足够强大，强大到挫折与困难不再动摇我，可以让我勇敢面对。</p>					
				<p>	当我的内心足够强大，强大到可以相信自己，并有足够的自信。</p>					
				<p>	当我的内心足够强大，强大到懂得信任，可以好好的完整的相信一个人。</p>					
				<p>	当我的内心足够强大，强大到能做到包容与理解，能转换角度替对方想想。</p>					
				<p>	当我的内心足够强大，不再轻易被打倒。</p>
				
			</div>
			
	</div>
	
	<div class="r_box">
		
			<h2><a href=""></a>那个夏天</h2>
			<div>
				
				<p>网名：<a href="http://www.eyunzhu.com">e云竹</a></p>
				<p>邮箱：eyunzhu@foxmail.com</p>
		        <p>博客：<a href="http://blog.csdn.net/eyunzhu">blog.csdn.net/eyunzhu</a> </p>
		        <p>职业：学生</p>
			</div>
			
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	<br /><br /><br /><br /><br /><br /><br />	
	
</article>	
		
		
	<footer>
		Design by 李庆华
		
	</footer>	
		
		
		
		
		
+</html>
