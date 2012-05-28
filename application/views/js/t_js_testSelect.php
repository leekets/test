	<?php 
	$a="1";
	if($a=="123"){?>
	<script>
	<?php }?>
	
$(function() {
	
	var t1= new Date().getTime(); //初始化时间
	var dNum= 2000;	//错误返回按钮延时时间；
	var testSize=0;
	if(testSize>0){
		var comments2 = [];
		for(i=0;i<=testSize-1;i++){
			comments2.push(comments[i]);
		}
		comments = comments2;
	}
	
	//数组指针初始化；
    var index = 0;
	var index_ = "";
	var errors_1st = [];
	var round=1;
	var getError="";
		
	var errors = [];	//错误返回按钮延时时间；
	var eNum = 0;	//错误计数初始化；
	
	//显示全局
	$("#ul").show();
	
	//调试开关；
	var debug="0";
	if(debug=="1"){
		dNum=0;	
	}
	
	
	var org_comments=[];
	org_comments=comments;
	comments=randomOrder(comments);
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
			$(".f_subject").html(comments[index]['subject']);//问题区赋值
			$(".f_subTitle").html(comments[index]['subTitle']);//答案区赋值
			$(".sen .en").html(comments[index]['en']);//问题区赋值
			$(".sen .cn").html(comments[index]['cn']);//答案区赋值
			$(".btnQ").html(btnQ);
			$(".e_act1").show();				//显示：act1元素；
			
			var arrSelect=[];
			for(var i=0, len=org_comments.length; i<len; i++){
				if(org_comments[i]['subTitle']!=comments[index]['subTitle']){
					arrSelect.push(org_comments[i]);
				}	
			}
			arrSelect=randomOrder(arrSelect);
			

			var arrSelect2 = [];
			for(i=0;i<=2;i++){
				arrSelect2.push(arrSelect[i]);
			}
			arrSelect2.push(comments[index]);
			arrSelect = randomOrder(arrSelect2);

			$(".f_btnNo1").html(arrSelect[0].subject);
			$(".f_btnNo1").attr("f_a",arrSelect[0].subTitle);
			$(".f_btnNo2").html(arrSelect[1].subject);
			$(".f_btnNo2").attr("f_a",arrSelect[1].subTitle);
			$(".f_btnNo3").html(arrSelect[2].subject);
			$(".f_btnNo3").attr("f_a",arrSelect[2].subTitle);
			$(".f_btnNo4").html(arrSelect[3].subject);
			$(".f_btnNo4").attr("f_a",arrSelect[3].subTitle);
			
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
//随机改变数组的排序
function randomOrder (targetArray){
    var arrayLength = targetArray.length
    //
    //先创建一个正常顺序的数组
    var tempArray1 = new Array();

    for (var i = 0; i < arrayLength; i ++)
    {
        tempArray1 [i] = i
    }
    //
    //再根据上一个数组创建一个随机乱序的数组
    var tempArray2 = new Array();

    for (var i = 0; i < arrayLength; i ++)
    {
        //从正常顺序数组中随机抽出元素
        tempArray2 [i] = tempArray1.splice (Math.floor (Math.random () * tempArray1.length) , 1)
    }
    //
    //最后创建一个临时数组存储 根据上一个乱序的数组从targetArray中取得数据
    var tempArray3 = new Array();

    for (var i = 0; i < arrayLength; i ++) {
        tempArray3 [i] = targetArray [tempArray2 [i]]
    }
    
//
    //返回最后得出的数组
    return tempArray3
}

//使用实例

// var tmp = ["1", "2", "3", "4"];
// alert(randomOrder(tmp));

	function print_array(arr) {
var t = 'array(\n';
for(var key in arr) {
if(typeof(arr[key]) == 'array' || typeof(arr[key]) == 'object') {
var t_tmp = key + ' = ' + print_array(arr[key]);
t += '\t' + t_tmp + '\n';
} else {
var t_tmp = key + ' = ' + arr[key];
t += '\t' + t_tmp + '\n';
}
}
t = t + ')';
return t;;
}
	


	<?php 
	if($a=="123"){?>
	</script>
	<?php }?>
	
