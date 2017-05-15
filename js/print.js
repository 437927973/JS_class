function MArray() { 
		this.length = MArray.arguments.length 
		for (var i = 0; i < this.length; i++) 
			this[i+1] = MArray.arguments[i]
	} 
		var fArray = new MArray; 
		fArray[0]="欢迎大家学习javascript这门语言！"; 
		fArray[1]="欢迎大家学习html这门语言！" 
		fArray[2]="欢迎大家学习asp这门语言！" 
		fArray[3]="欢迎大家学习vbscript这门语言！" 
		var x = 1; 
		var y = 0; 
		var msg1 = fArray[y]; 

	function newsSee() { 
		if (x==msg1.length+1) { 
			y+=1; 
			if (y > 3) y=0; 
			//document.form1.news2.value=' '; 
			//document.getElementById("p").innerHTML=' '; 
			msg1 = fArray[y]; 
			x=0;
		} 
			//document.form1.news2.value=msg1.substring(0,x); 
			document.getElementById("p").innerHTML=msg1.substring(0,x); 
			x+=1; 
			setTimeout("newsSee() ",200); 
	} 

var m1 = "当我内心足够强大，你指责我，我感受到你的受伤。你讨好我，我看到你需要认可。你超理智，我体会你的脆弱和害怕。你打岔，我懂得你如此渴望被看到。 当我内心足够强大，我不再防卫， 所有力量， 在我们之间自由流动。";
var m2 ="委屈，沮丧，内疚，悲伤，愤怒，痛苦，当他们自由流淌， 我在悲伤里感到温暖， 在愤怒里发现力量，在痛苦里看到希望。 当我内心足够强大，我不再攻击，我知道，当我不再伤害自己， 便没有人， 可以伤害我。我放下武器，";
var m3= "敞开心。当我的心，柔软起来，便在爱和慈悲里，与你明亮而温暖地相遇。原来，让内心强大， 我只需要，看到自己，接纳我还不能做的， 欣赏我已经做到的， 并且相信， 走过这个历程， 终究可以活出自己，绽放自己。";
	
var m=m1+m2+m3;	
	
	var i=0;
	function newsSees() {
		if (i==m.length+1) { 
			
			i=0;
		} 
			//document.form1.news2.value=msg1.substring(0,x); 
			document.getElementById("pp").innerHTML=m.substring(0,i); 
			i+=1; 
			setTimeout("newsSees() ",300); 
	} 