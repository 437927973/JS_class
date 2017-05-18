	
	function judge(form) {
		if(form.user.value=="123"){
			if(form.psw.value=="123"){
				alert("成功！");
				window.open("register.html");
				
				//	window.location.href="register.html"; 

			}
			else alert("密码错误！");
		}
		else alert("不存在此账号！");
}

	function isLoginSubmit(form) { //login.html登陆表单是否提交
		
		var user=form.user.value;//获取form中的用户名 
	    var psw=form.psw.value; 
	    var regex=/^[/s]+$/;//声明一个判断用户名前后是否有空格的正则表达式 
    	  if(regex.test(user)||user.length==0)//判定用户名的是否前后有空格或者用户名是否为空 
	        { 
	          alert("用户名格式不对"); 
	          return false; 
	        } 
	      if(regex.test(psw)||psw.length==0)//同上述内容 
	      { 
	       		alert("密码格式不对"); 
	        	return false; 
	      } 
     		 return true; 
	}

	function isRegisterSubmit(form){ //register.html注册表单是否提交
    
		var username=form.username.value;//获取form中的用户名 
	    var password=form.password.value; 
	    var password1=form.password1.value;
	    var email=form.email.value;
	    var sex=getSex();
	    var hobby=getHobby();
	   	var age=getAge();
	    alert(username+"\n"+sex+"\n"+hobby+"\n"+age);

	    var regex=/^[/s]+$/;//声明一个判断用户名前后是否有空格的正则表达式 
    	  if(regex.test(username)||username.length==0)//判定用户名的是否前后有空格或者用户名是否为空 
	        { 
		        alert("用户名格式不对"); 
		        return false; 
	        } 
	      if(regex.test(password)||password.length==0)//同上述内容 
	      { 
	       		alert("密码格式不对"); 
	        	return false; 
	      }
	      if(regex.test(password1)||password1.length==0)//同上述内容 
	      { 
	       		alert("密码格式不对"); 
	        	return false; 
	      }
	      if(password.localeCompare(password1)){  //两次输入的密码是否一致
	      		alert("两次输入的密码不一致！");
	      		return false; 
	      }
	      if(email.length==0){    //邮箱是否为空
		      	alert("请输入邮箱！");
		      	return false; 
	      }	    

      return true; 
	}

	function getSex(){ //获取性别单选按钮值
		var value="";
		var radio=document.getElementsByName("sex");
		for(var i=0;i<radio.length;i++){
			if(radio[i].checked==true){
				value=radio[i].value;
				break;
			}
		}
		return value;
	}
	function getHobby(){
		var hobby="";		
		var checkbox=document.getElementsByName("hobby");
		for (var i = 0; i < checkbox.length; i++) {
			if (checkbox[i].checked==true) {
				hobby += checkbox[i].value+",";
			}	
		}		
		return hobby;	
	}
	function getAge(){
		var t = document.getElementById("age");		
		var age = t.options[t.selectedIndex].value;
		return age;  			
	}

	function register() 	//跳转到注册页面
    { 
      window.location.href="register.php"; 
    } 

    function login(){	//跳转到登陆页面
    	window.location.href="login.html";
    }
    






//标题跳动

var tx = new Array ( 
"您好呀，欢迎来到e云竹^_^", 
"知道吗？爱笑的人运气很好哦", 
"哈哈，现在我也～会闪啦", 
"看啊，我闪～我闪……", 
"快快把你的眉眼抛过来呀！嘻嘻……"); 
//设置好你的页面标题栏中要闪烁的5句文本(具体内容自己据需而定吧你) 
var txcount=5; 
//数字"5"对应于上边设定的文本数 
var i=1; 
var wo=0; 
var ud=1; 
//定义i、wo、ud三者的初值 
function animatetitle() 
{ 
window.document.title=tx[wo].substr(0, i)+"_"; 
if (ud==0) i--; 
if (ud==1) i++; 
if (i==-1) {ud=1;i=0;wo++;wo=wo%txcount;} 
if (i==tx[wo].length+10) {ud=0;i=tx[wo].length;} 
// if (window.document.title.length < 20 ) window.document.title=window.document.title+"-"; 
// if (window.document.title.length == 20 ) window.document.title=window.document.title+"]"; 
// if (window.document.title.length == 21 ) setTimeout("window.document.title='Animierte Seitentitel '; ",1000); 

parent.window.document.title=tx[wo].substr(0, i)+"_"; 
setTimeout("animatetitle()",100); //数字"100"指每一字符闪烁速度为100毫秒，其改大(小)就闪的慢(快)，可自行设置数值 
} 
//以上几行是对标题栏(title)的function为animatetitle的控制过程 
animatetitle(); 
//标题栏(title)中运行animatetitle 
