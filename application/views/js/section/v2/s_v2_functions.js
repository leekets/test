
	function Arrsplit(s){
		//s1=0+(s-1)*10;
		//alert(s);
		var x=5;
		var comments2=[];
		for(var i=(s-1)*x, len=s*x; i<len; i++){
			comments2.push(comments[i]);	
		}
		comments = comments2;				//题库赋值错误列表
		errors = [];					//清空：错误列表；
		index = 0;						//初始化：指针
		eNum = 0;						//初始化：错误计数
		$("span.sp3").html('');			//清空：页面错误计数	
		act();							//运行函数；	
		$(".f_slipt").hide();
	}


//		function sen1(a){
//			
//
//	for (x in sen){
//		if(sen[x].en.toLowerCase().indexOf(a.toLowerCase())>=0){
//			$("b.en").html(sen[x].en);
//			$("b.cn").html(sen[x].cn);
//			break;
//		}
//	}
//
//
//		}

		function play3(i){
			
			if(i==1){
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
				setTimeout("play3(2)",2000);
//				play3(i);
//			}else{
//				return false;
			}else if(i==2){
//				alert("123123");
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
				setTimeout("play3(3)",2000);				
			}else if(i==3){
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
				setTimeout("play3(4)",2000);				
			}else if(i==4){
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
//				setTimeout("play3(4)",2000);				
			}

		}
		
//todo:转存如单页js
		function MillisecondToDate(msd)
		{
			var time = parseFloat(msd) / 1000;
			if (null != time && "" != time)
			{
				if (time > 60 && time < 60 * 60)
				{
					time = parseInt(time / 60.0) + "分钟" + parseInt((parseFloat(time / 60.0) -
							parseInt(time / 60.0)) * 60) + "秒";
				}
				else if (time >= 60 * 60 && time < 60 * 60 * 24)
				{
					time = parseInt(time / 3600.0) + "小时" + parseInt((parseFloat(time / 3600.0) -
							parseInt(time / 3600.0)) * 60) + "分钟" +
							parseInt((parseFloat((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60) -
									parseInt((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60)) * 60) + "秒";
				}
				else
				{
					time = parseInt(time) + "秒";
				}
			}
			return time;
		}

