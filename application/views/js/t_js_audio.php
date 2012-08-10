	<?php $a="1"; if($a=="123"){?> <script><!-- <?php }?>
	<?php include("section/v3/s_js_v3_select_controllers.js"); ?>

$(function() {
	<?php include("section/v3/s_js_v3_select_head.js"); ?>
	<?php include("section/v3/s_js_v3_select_basic.js"); ?>
	
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

	
	
	$("a.btnCn").click(function(){
		$(".sharewith .q").parent().show();
	});
	
	$(".f_btnSelect").click(function() {
			$(".f_1st").hide();
			$(".f_slipt").hide();
			if($(this).attr("f_a")==$(".f_subTitle").html()){
				act();
	        } else {
				//act3();
	        	$(this).children(".label").show();
	        	errors.push(commentsAll[usual_search2(commentsAll,$(this).attr("f_id"))]);
				s_audio=commentsAll[usual_search2(commentsAll,$(this).attr("f_id"))]['subTitle']+".mp3";
				$("audio").attr({"src": "../audio/"+s_audio});
				play(0,1);
				eNum+=1
				errors.push(comments[index-1]);
	//			console.log(errors);
	//			if(index_==""){index_=comments[index-1]['id']}else{index_+=","+comments[index-1]['id']};
				$("span.sp3").html(eNum);
	        };
	});
	
	$("a.btn2").click(function() {
		audio.pause();
		audio1.pause();
		audio2.pause();
		audio3.pause();
		$("a.audio1").attr("times","0");
		$("a.audio2").attr("times","0");
		$("a.audio3").attr("times","0");
		
		$("a.audio1").html("0");
		$("a.audio2").html("0");
		$("a.audio3").html("0");
		
		act()		
	});
	$("a.audio1").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			//alert("1-1");
			playPure(1);
		}
	});
	$("a.audio2").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			$("a.audio4").attr("times","0");
			$("a.audio4").html("0");
			//alert("2");
//			setTimeout("playPure(2);", 0);
			playPure(2);
		}
	});
	$("a.audio3").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			//alert("3");
//			setTimeout("playPure(3);", 0);
			playPure(3);
		}
	});
	$("a.audio4").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			//alert("4");
//			setTimeout("$('.btn2').click();", 0);
			$('.btn2').click();
			
		}
	});
	$("a.f_btn_click").click(function(){
		$(this).hide();
	});
    $("a.btn3").click(function() {
		
        if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $(".a .a").html().toLowerCase()) {
			act()
        } else {
			act3()
        };
    });
	<?php include("section/v3/s_js_v3_common_function.js"); ?>


})

	function playPure(numS) {  
		//var audio = document.createElement("audio");  
		var index = 0;
		alert(index);
		audio.play();
	  	//audio.src = "piano/3C.mp3";  
	  	audio.addEventListener('ended', function () {  
	  	// Wait 500 milliseconds before next loop 
	  	if(index<2){ 
	  		setTimeout(function () {
		  		if(index<2){ 
			  		audio.play(); 
			  		index++;
			  	}
			  
		  	}, 500); 
	  	} 
		if(index==2){
	  		audio.pause();
	  		audio.currectTime = 0;
	  		index=0;
	  		$('.btn2').click();
	  		return;
		}
	  	}, false);
	  	audio.removeEventListener('ended', function () {  
		  	// Wait 500 milliseconds before next loop 
		  	if(index<2){ 
		  		setTimeout(function () {
			  		if(index<2){ 
				  		audio.play(); 
				  		index++;
				  	}
				  
			  	}, 500); 
		  	} 
			if(index==2){
		  		audio.pause();
		  		audio.currectTime = 0;
		  		index=0;
		  		$('.btn2').click();
		  		return;
			}
		  	}, false);
	  	return;  
	  	   
	}


<?php if($a=="123"){?>--></script><?php }?>
	