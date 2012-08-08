	<?php $a="1"; if($a=="123"){?> <script><!-- <?php }?>
	<?php include("section/v3/s_js_v3_select_controllers.js"); ?>

$(function() {
	<?php include("section/v3/s_js_v3_select_head.js"); ?>
	<?php include("section/v3/s_js_v3_select_basic.js"); ?>
	<?php include("section/v3/s_js_v3_audio_act.js"); ?>
	<?php include("section/v3/s_js_v3_select_act2.js"); ?>
	<?php include("section/v3/s_js_v3_select_btn.js"); ?>
	<?php include("section/v3/s_js_v3_common_function.js"); ?>


})

	function playPure(numS) {    
	    //audio.currectTime = 0;
	    if(numS==0){
			audio4.play();
			audio4.addEventListener('ended', function () { 
				times=$("a.audio1").attr("times");
				$("a.audio1").attr("times",times+1);
				$("a.audio1").html(times+1);
				//timer.stop();	
				$('a.audio1').click();
	         audio4.pause();
	         audio4.currectTime = 0;
			}, false);  
			return;
		}
	    if(numS==1){
		   
	    	audio1.play();
			//$(".f_li_subject").fadeIn();
			audio1.addEventListener('ended', function () {  
				times=$("a.audio2").attr("times");
				$("a.audio2").attr("times",times+1);
				$("a.audio2").html(times+1);
				//timer.stop();	
	         	$('a.audio2').click();
	         	audio1.pause(); 
	         	audio1.currectTime = 0;
			}, false);  
			
			return;
		}
	    if(numS==2){
		    
	    	audio2.play();
			$(".f_li_subject").fadeIn();
			audio2.addEventListener('ended', function () {  

				times=$("a.audio3").attr("times");
				$("a.audio3").attr("times",times+1);
				$("a.audio3").html(times+1);
				//timer.stop();	
	         	$('a.audio3').click();
	         	audio2.pause(); 
	         	audio2.currectTime = 0;
	         	
			}, false); 
			return;
		}
	    if(numS==3){
		   // audio3.pause();
		    audio3.play();
			//$(".f_li_subject").fadeIn();
			audio3.addEventListener('ended', function () {  
				times=$("a.audio4").attr("times");
				$("a.audio4").attr("times",times+1);
				$("a.audio4").html(times+1);
				//timer.stop();	
	         	$('a.audio4').click();
	         	audio3.pause(); 
	         	audio3.currectTime = 0;        
			}, false);  
			return;
		}
	    if(numS==4){
	    	
	    	$(".btn2").click();
			return ;
		}
	}


<?php if($a=="123"){?>--></script><?php }?>
	