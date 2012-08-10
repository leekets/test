<?php echo meta("content-type", "text/html; charset=utf-8;",'equiv')?>
<title>Import Page</title>
<style>
	.echoList{ float:left; margin-left:10px; }
</style>
<?php include ("sections/s_php2html.php")?>
<?php $tree="/wwwroot/output/test/"?>
<?php 
	$page=$this->input->get("page");	
	$ID=$this->input->get("id");
	if($page=="jsCommon" || $page=="index" || $page=="jump" || $page=="testjs" || $page=="testSelect" || $page=="testArr"  || $page=="testAudio"){
		printPage($tree,$page,"");
	}
	if($page=="category"){
		printPage($tree,"news","");
		printPage($tree,"cate","");
	}
	
	function printPage($tree,$page,$ID){
		if($page=="news"){
			php2html(site_url()."/printpage/json?act=news", $tree."js/newsJSON.js", "/www/log/log.txt");
			echoList("newsJSON.js");	
		}
		if($page=="cate"){
			php2html(site_url()."/printpage/json?act=cate", $tree."js/cateJSON.js", "/www/log/log.txt");
			echoList("cateJSON.js");	
		}
		if($page=="jump"){
			php2html(site_url()."/printPage/jump", $tree."jump.html", "/www/log/log.txt");
			echoList("jump.html");	
		}
		if($page=="testjs"){
			php2html(site_url()."/printPage/testjs", $tree."js/test.js","/www/log/log.txt");
			echoList("testjs.html");
		}
		if($page=="jsCommon"){
			php2html(site_url()."/js/common",$tree."js/common.js","/www/log/log.txt");
			echoList("Common.js");
		}
		if($page=="testSelect"){
			php2html(site_url()."/js/testSelect",$tree."js/test_select.txt","/www/log/log.txt");
			echoList("test_select.txt");
		}
		if($page=="testArr"){
			php2html(site_url()."/js/testArr",$tree."js/test_arr.txt","/www/log/log.txt");
			echoList("test_arr.txt");
		}
		if($page=="testAudio"){
			php2html(site_url()."/js/testAudio",$tree."js/test_audio.txt","/www/log/log.txt");
			echoList("test_audio.txt");			
		}
	}
	function echoList($var){
		echo "<div class='echoList'>$var</div>";
	}

	
?>

