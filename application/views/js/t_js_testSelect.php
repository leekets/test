	<?php $a="1"; if($a=="123"){?> <script> <?php }?>
	//判断浏览器
	
$(function() {

	if (window.navigator.userAgent.indexOf('Chrome') > -1) {
		var f_chrome=1;
	    //alert('Chrome!');
	} else {
		var f_chrome=0;
		//alert('Not Chrome');
	}
	if(f_chrome==1){	
		window.onload = function() {		
			document.body.onkeydown = function(e) {
				e = e || window.event;
				// 把键值转换成字母
				var key = String.fromCharCode(e.keyCode); 
				var dom = document.getElementById(key);
				if(document.getElementById(key).style.display=="block" || document.getElementById(key).style.display=="inline-block"){
					if(dom) {
						dom.click();
					}
				}else{
					//alert("error");	
				}
			}
		}
	}	
	//合并通用js	
	var commentsAll= newsJSON	
	pid=getValue("id");
	if(pid==undefined){
		window.location="index.html";
	}
	$("title").html(cateJSON[usual_search(cateJSON,x)].category);
	var bothPage="asp";
	var jumpUrl="jump.html?id="+pid;
	var audioUrl="";
	var comments=[];
	for(var i=0, len=commentsAll.length; i<len; i++){
		if(commentsAll[i].categoryId==pid){
			comments.push(commentsAll[i]);
		}	
	}
	
	$(".f_jumpTest").attr("href","testArr.html?id="+pid);
	<?php include("section/select/s_select_basic.js"); ?>
	<?php include("section/select/s_select_act.js"); ?>
	<?php include("section/v2/s_v2_act2.js"); ?>
	<?php include("section/v2/s_v2_act3.js"); ?>
	<?php include("section/v2/s_v2_btnCn.js"); ?>
	<?php include("section/v2/s_v2_btnSelect.js");?>

	$("a.btn2").click(function() {
		act()		
	});
	
	<?php include("section/v2/s_v2_btn3.js"); ?>
	<?php include("section/v2/s_v2_f_slipt.js"); ?>
	<?php include("section/v2/s_v2_functions.js"); ?>
})

	<?php 
	if($a=="123"){?>
	</script>
	<?php }?>
	
