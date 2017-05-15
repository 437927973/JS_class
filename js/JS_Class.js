function calculater(){
			var a=parseInt(document.getElementById("a").value);
			var b=parseInt(document.getElementById("b").value);
			var c=parseInt(document.getElementById("c").value);			
			var x1=document.getElementById("x1"); 
			var x2=document.getElementById("x2");
			if(a+b+c!=a+b+c){
				alert("提示:a,b,c只能是数字!");
			} 
			var dt0=b*b-4*a*c;
			if(dt0<0)
				alert("无解！");
			else{
				var dt=Math.sqrt(dt0);//Math.pow(b*b-4*a*c,0.5)
				var xx1=(-b+dt)/(2*a);
				var xx2=(-b-dt)/(2*a);			
				x1.value="x1="+xx1;
				x2.value="x2="+xx2;
		}
		
	}	