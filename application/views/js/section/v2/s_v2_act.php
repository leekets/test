
function act() {
		//分段重复函数
		
//	alert(index+":"+eNum);
//	if(rNum==0){
		if ((index <= 5 && eNum == 3)) {

            alert("Repeat");
            index = 0;
            //			var index_ = "";
            errors = [];
            eNum = 0;
            $("span.sp3").html(eNum);

        }
        if ((index > 5 && index <= 10 && eNum == 5)) {

            alert("Repeat");
            index = 0;
            //			var index_ = "";
            errors = [];
            eNum = 0;
            $("span.sp3").html(eNum);

        }
        if ((index > 10 && index <= 15 && eNum == 7)) {

            alert("Repeat");
            index = 0;
            //			var index_ = "";
            errors = [];
            eNum = 0;
            $("span.sp3").html(eNum);

        }
//        if ((index > 15 && index <= 20 && eNum == 9)) {
//
//            alert("Repeat");
//            index = 0;
//            //			var index_ = "";
//            errors = [];
//            eNum = 0;
//            $("span.sp3").html(eNum);
//
//        }
//        if ((index > 20 && index <= 25 && eNum == 11)) {
//
//            alert("Repeat");
//            index = 0;
//            //			var index_ = "";
//            errors = [];
//            eNum = 0;
//            $("span.sp3").html(eNum);
//
//        }
//        if ((index > 25 && index <= 30 && eNum == 13)) {
//
//            alert("Repeat");
//            index = 0;
//            //			var index_ = "";
//            errors = [];
//            eNum = 0;
//            $("span.sp3").html(eNum);
//
//        }//	}

if (index<comments.length) {					//如果指针在范围内；
			$(".e_element").hide();				//隐藏所有元素；
			$(".en").html("");					//初始化英文部分；
			$(".cn").html("");					//初始化中文部分；
//			sen1(comments[index]['a']);			//调用句库函数；
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
			s_audio="";
			s_audio=comments[index]['subTitle']+".mp3";
			$("audio").attr({"src": ""});
			$("audio").attr({"src": "../audio/"+s_audio});
			audio=document.getElementById('player') //初始化音频路径
			$(".q_en").html(q_en);//问题区赋值
			$(".q").html(comments[index]['subject']);//问题区赋值
			$(".a .a").html(comments[index]['subTitle']);//答案区赋值
			$(".sen .en").html(comments[index]['en']);//问题区赋值
			$(".sen .cn").html(comments[index]['cn']);//答案区赋值
			$(".btnQ").html(btnQ);
			$(".e_act1").show();				//显示：act1元素；

			play3(1);
			$("textarea.b")[0].focus();			//输入框焦点
			
            index++;							//指针递进
        }
		else{
			if(errors.length > 0){				//数组【错误列表】不为空
				comments = errors;				//题库赋值错误列表
				errors = [];					//清空：错误列表；
				index = 0;						//初始化：指针
				eNum = 0;						//初始化：错误计数
				$("span.sp3").html('');			//清空：页面错误计数
				act();							//运行函数；
			}else{
				t2=new Date().getTime()-t1;
				alert(MillisecondToDate(t2));	
				window.location=jumpUrl+"&title="+MillisecondToDate(t2)+"&error="+getError;
				//window.location="index."+bothPage+"#pid"+pid;
			}
		}

    }