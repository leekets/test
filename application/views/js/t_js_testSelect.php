	<?php $a="1"; if($a=="123"){?> <script> <?php }?>
	
$(function() {
	
	//错误返回按钮延时时间；
	var dNum= 4000;	
	var testSize=20;

	var t1= new Date().getTime(); //初始化时间
    var index = 0;	//数组指针初始化；
	//del:120528
//	var index_ = "";
//	var errors_1st = [];
//	var round=1;
	var getError="";
	var errors = [];	//错误返回按钮延时时间；
	var eNum = 0;	//错误计数初始化；
	$("#ul").show();	//显示全局
	//调试开关；
	var debug="0";
	if(debug=="1"){
		dNum=0;	
	}
	
	var org_comments=[];
	org_comments=comments;
	comments=randomOrder(comments);
	if(testSize>0){
		var comments2 = [];
		for(i=0;i<=testSize-1;i++){
			comments2.push(comments[i]);
		}
		comments = comments2;
	}
	act(); //进入函数act
	function act() {
		//分段重复函数
		
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

		if (index<comments.length) {			//如果指针在范围内；
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
			$(".f_subject").html(comments[index]['subject']);//问题区赋值
			$(".f_subTitle").html(comments[index]['subTitle']);//答案区赋值
			$(".sen .en").html(comments[index]['en']);//问题区赋值
			$(".sen .cn").html(comments[index]['cn']);//答案区赋值
			$(".btnQ").html(btnQ);
			$(".e_act1").show();				//显示：act1元素；
			

			var arrSelect=[];	//定义select数组；
			for(var i=0, len=org_comments.length; i<len; i++){	//取出当前指针的值。（同时取出与当前指正重复的值。）
				if(org_comments[i]['subTitle']!=comments[index]['subTitle']){
					arrSelect.push(org_comments[i]);
				}	
			}
			arrSelect=randomOrder(arrSelect);	//乱序数组
			

			var arrSelect2 = [];	//定时数组2

			var s_num=4;
			for(i=0;i<=s_num;i++){	//获得目标数组-1的新数组
				arrSelect2.push(arrSelect[i]);
			}
			arrSelect2.push(comments[index]);	//新数组添加当前指针的值。
			arrSelect = randomOrder(arrSelect2);	//乱序数组。

			$(".f_btnSelect").hide();
			for(i=0;i<=s_num+1;i++){
				$(".f_btnNo"+(i+1)).html(arrSelect[i].subject); //赋值
				$(".f_btnNo"+(i+1)).attr("f_a",arrSelect[i].subTitle);
				$(".f_btnNo"+(i+1)).show();
			}
			
			play3(1);
//			$("textarea.b")[0].focus();			//输入框焦点
			
            index++;							//指针递进
        }
		else{
			if(errors.length > 0){				//数组【错误列表】不为空
				comments = errors;				//题库赋值错误列表
				comments=randomOrder(comments);
				errors = [];					//清空：错误列表；
				index = 0;						//初始化：指针
				eNum = 0;						//初始化：错误计数
				$("span.sp3").html('');			//清空：页面错误计数
				act();							//运行函数；
			}else{
				t2=new Date().getTime()-t1;
				alert(MillisecondToDate(t2));	
				window.location=jumpUrl+"&title="+MillisecondToDate(t2)+"&error="+getError;
			}
		}

    }
	<?php include("section/v2/s_v2_act2.js"); ?>
	<?php include("section/v2/s_v2_act3.js"); ?>
	<?php include("section/v2/s_v2_btnCn.js"); ?>
	    $(".f_btnSelect").click(function() {
		$(".f_slipt").hide();
		//alert($(this).attr("f_a"));
		if($(this).attr("f_a")==$(".f_subTitle").html()){
        //if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $(".a .a").html().toLowerCase()) {
			act();
        } else {
				act3();
				eNum+=1
				errors.push(comments[index-1]);
	//			console.log(errors);
	//			if(index_==""){index_=comments[index-1]['id']}else{index_+=","+comments[index-1]['id']};
				$("span.sp3").html(eNum);
			
        };
    });
	<?php include("section/v2/s_v2_btn2.js"); ?>
	<?php include("section/v2/s_v2_btn3.js"); ?>
	<?php include("section/v2/s_v2_f_slipt.js"); ?>
	<?php include("section/v2/s_v2_functions.js"); ?>
})



	
	


	<?php 
	if($a=="123"){?>
	</script>
	<?php }?>
	
