
function act() {
		//index=f_control_repeat(5,15,index);
		if(index==-1){
			alert("Repeat");
			errors = [];
			eNum = 0;
			index=0;
			$("span.sp3").html(eNum);
			act();
			return;
		}

		if (index<comments.length) {			//如果指针在范围内；
			$(".e_element").hide();				//隐藏所有元素；
			$(".en").html("");					//初始化英文部分；
			$(".cn").html("");					//初始化中文部分；
			$(".f_en").html("");				//例句初始化
			$(".f_cn").html("");				//例句初始化
			sen1(comments[index]['subTitle']);	//调用句库函数；
			$("span.sp1").html(index+1);		//调整当前数值；
			$("span.sp2").html(comments.length);//显示总数；
			$("lib.b").show();					//输入框显示		
			$("textarea.b").val("");			//输入框清空			
			q=comments[index]['q'];
			q_en=comments[index]['q_en'];
			if(q_en==""){
				q_en=q;
			}
			btnQ="Submit";
			$(".q_en").html(q_en);//问题区赋值
			$(".f_subject").html(comments[index]['subject']);//问题区赋值
			$(".f_subTitle").html(comments[index]['subTitle']);//答案区赋值
			$(".sen .en").html(comments[index]['en']);//问题区赋值
			$(".sen .cn").html(comments[index]['cn']);//答案区赋值
			$(".btnQ").html(btnQ);
			//$(".e_act1").show();				//显示：act1元素；
			$(".f_li_subject").show();
			f_select(org_comments,c_select,f_chrome);
			if(c_audio==1){
				s_audio="";
				s_audio=comments[index]['subTitle']+".mp3";
				$("audio").attr({"src": ""});
				$("audio").attr({"src": "../audio/"+s_audio});
				audio=document.getElementById('player') ;//初始化音频路径
				audio1=document.getElementById('player1') ;//初始化音频路径
				audio2=document.getElementById('player2') ;//初始化音频路径
				audio3=document.getElementById('player3') ;//初始化音频路径
				audio4=document.getElementById('player4') ;//初始化音频路径
//				audio.play();
				audio.load();
				audio.play();
				audio1.load();
				audio2.load();
				audio3.load();
				audio4.load();
				audio.defaultPlaybackRate=2;
				audio1.defaultPlaybackRate=2;
				audio2.defaultPlaybackRate=2;
				audio3.defaultPlaybackRate=2;
				audio4.defaultPlaybackRate=2;
//				var times;
//				audio.addEventListener("canplaythrough", function () {
//
//					times=audio.duration;
//
//					}, false);
//				alert(times);
				
				playPure(0);
			}			
//			$("textarea.b")[0].focus();			//输入框焦点
			
            index++;							//指针递进
        }
		else{
			if(errors.length > 0){				//数组【错误列表】不为空
				comments = errors;				//题库赋值错误列表
				if(c_jump==1){
					var arrErrors="";
					for(var iErrors=0, lenErrors=errors.length; iErrors<lenErrors; iErrors++){
						strID=errors[iErrors]['id'];
						if(arrErrors==""){
							arrErrors=strID;
						}else{
							arrErrors=arrErrors+","+strID;
						}
						
					}
	//				alert(arrErrors);
					window.location="testArr.html?id="+pid+"&arr="+arrErrors;
				}else{
					comments=randomOrder(comments);
					errors = [];					//清空：错误列表；
					index = 0;						//初始化：指针
					eNum = 0;						//初始化：错误计数
					$("span.sp3").html('');			//清空：页面错误计数
					act();							//运行函数；
				}
			}else{
				t2=new Date().getTime()-t1;
				alert(MillisecondToDate(t2));	
				window.location=jumpUrl+"&title="+MillisecondToDate(t2)+"&error="+getError;
			}
		}

    }

