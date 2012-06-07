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
	if($page=="index"){
		printPage($tree,"index","");
	}
	if($page=="testjs"){
		printPage($tree,"testjs","");
	}
	if($page=="jump"){
		printPage($tree,"jump","");
	}
	
	if($page=="category"){
//		printPage($tree,"index","");
		//printPage($tree,"jump","");
		printPage($tree,"data","");
		//printPage($tree,"test","");
//		printPage($tree,"tree",$ID);
		printPage($tree,"news",$ID);
		printPage($tree,"cate",$ID);
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
		if($page=="index"){
			php2html(site_url()."/printPage/tree", $tree."index.html", "/www/log/log.txt");
			echoList("index.html");	
		}
		if($page=="jump"){
			php2html(site_url()."/printPage/jump", $tree."jump.html", "/www/log/log.txt");
			echoList("jump.html");	
		}
		if($page=="testjs"){
			php2html(site_url()."/printPage/testjs", $tree."js/test.js","/www/log/log.txt");
			echoList("testjs.html");
		}
		if($page=="tree"){
			php2html(site_url()."/printPage/tree?id=$ID", $tree."tree$ID.html", "/www/log/log.txt");
			echoList("tree$ID.html");				
		}
		if($page=="data"){
			php2html(site_url()."/printPage/data",$tree."js/data.js","/www/log/log.txt");
			echoList("data.js");
		}
		if($page=="test"){
			php2html(site_url()."/printPage/test2",$tree."test.html","/www/log/log.txt");
			echoList("simpleTest.html");
		}

	}
	if($page=="testSelect"){
		php2html(site_url()."/js/testSelect",$tree."js/test_select.txt","/www/log/log.txt");
		echoList("test_select.txt");
	}
	if($page=="abc"){
		ob_flush();
		flush();
		$sql="select * from news_category";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
			php2html(site_url()."/printPage/test?id=$row->ID", $tree."test$row->ID.html", "/www/log/log.txt");
			echo "test$row->ID.html<br>";
			ob_flush();
			flush();		
		}
	}
	function echoList($var){
		echo "<div class='echoList'>$var</div>";
	}

	
?>
