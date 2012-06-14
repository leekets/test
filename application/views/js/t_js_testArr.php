<?php $a="1"; if($a=="123"){?> <script> <?php }?>
var url = location.href;
var theRequest = new Object();
var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
if (url.indexOf("?") != -1) {
	for (var i = 0; i < paraString.length; i++) {
		theRequest[paraString[i].split("=")[0]] = unescape(paraString[i].split("=")[1]);
	}
}


pid=theRequest["id"];
arr=theRequest["arr"];
arr=arr.split(",");
//alert(arr.length);
//pid=299;
var bothPage="asp";
var jumpUrl="jump.html?id="+pid;
var audioUrl="";
var comments=[];
for(var iArr=0, lenArr=arr.length; iArr<lenArr; iArr++){
	for(var i=0, len=newsJSON.length; i<len; i++){
		if(newsJSON[i].id==arr[iArr]){
			comments.push(newsJSON[i]);
		}	
	}
}

$(function() {

	var dNum= 0;	
	var testSize=15;
	var c_audio=1;
	var c_jump=1;
	
    var t1 = new Date().getTime(); // 初始化时间
    // 数组指针初始化；
    var index = 0;
    var index_ = "";
    

    var errors = []; // 错误返回按钮延时时间；
    var eNum = 0; // 错误计数初始化；
    // 显示全局
    $("#ul").show();

    // 调试开关；
    var debug = "0";
    if (debug == "1") {
        dNum = 0;
    }

    act(); // 进入函数act
    <?php include("section/v2/s_v2_act.php"); ?>
	<?php include("section/v2/s_v2_act.php"); ?>
	<?php include("section/v2/s_v2_act2.js"); ?>
	<?php include("section/v2/s_v2_act3.js"); ?>
	<?php include("section/v2/s_v2_btnCn.js"); ?>
	<?php include("section/v2/s_v2_btn1.js"); ?>
	<?php include("section/v2/s_v2_btn2.js"); ?>
	<?php include("section/v2/s_v2_btn3.js"); ?>
	<?php include("section/v2/s_v2_f_slipt.js"); ?>
    
    <?php include("section/s_MillisecondToDate.js"); ?>
})
<?php include("section/s_play.js"); ?>
<?php if($a=="123"){?></script><?php }?>