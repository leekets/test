<?php /*
<?php echo meta("content-type", "text/html; charset=utf-8;",'equiv')?>
<?php include ("sections/s_php2html.php")?>
<?php $tree="/output/test/"?>
<?php 
//	php2html("http://www.baidu.com", "/output/test/index.html", "/www/log/log.txt");
	php2html(site_url()."/printPage/tree", $tree."index.html", "/www/log/log.txt");
	echo "index.html成功<br>";
	php2html(site_url()."/printPage/jump", $tree."jump.html", "/www/log/log.txt");
	echo "jump.html<br>";
	ob_flush();
	flush();
	$sql="select * from news_category";
	$query=$this->db->query($sql);
	foreach($query->result() as $row){
		php2html(site_url()."/printPage/tree?id=$row->ID", $tree."tree$row->ID.html", "/www/log/log.txt");
		echo "tree$row->ID.html<br>";
		ob_flush();
		flush();
		php2html(site_url()."/printPage/test?id=$row->ID", $tree."test$row->ID.html", "/www/log/log.txt");
		echo "test$row->ID.html<br>";
		ob_flush();
		flush();		
	}

?>
<script>
	alert("over");
</script>
*/?>