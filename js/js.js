	
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
      window.location.href="register.html"; 
    } 

    function login(){	//跳转到登陆页面
    	window.location.href="login.html";
    }