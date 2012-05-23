<a class="button" href="<?php echo site_url()?>/pro/index">index</a>
<?php /*
<a class="button" href="<?php echo site_url()?>/printPage/index">export</a>
*/?>
<a class="button" href="<?php echo site_url()."/pro/index/?id=$PID"?>">Back</a>
<?php
	if($ID==0){
		$urlPrint="/printPage/index";
		aButton("http://localhost/output/test/index.html","Test Page",1,1);
	}else{
		$urlPrint="/printPage/output?page=category&id=".$ID;
		$url2="/listview/cate?id=$ID";	
		aButton($urlPrint,"Print",1,0);
		aButton($url2,"Pro Page",1,0);
		aButton("http://localhost/output/test/tree$ID.html","Test Page",1,1);
	}
?>

