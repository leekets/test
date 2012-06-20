	<?php $a="1"; if($a=="123"){?> <script> <?php }?>
	
$(function() {
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
	
