<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Sortable - Default functionality</title>
	<?php include "sections/s_pro_sort_head.php"?>

	<style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
	#sortable li span { position: absolute; margin-left: -1.3em; }
	</style>
	<script>
	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});
	</script>
	<?php 
	$ID=$this->input->get("id");
	?>
</head>
<body class="bg_none">
<div class="demo">

<ul id="sortable">
	<?php 
		$id=$this->input->get("id");
		$sql="select * from news_category where parentid=$id order by sortnum asc";
		$query=$this->db->query($sql);
		foreach($query->result() as $row):
	?>
	<li id="<?php echo $row->ID?>" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo $row->category?></li>
	<?php 
		endforeach;
	?>
</ul>
<a class="f_sort button">sort</a>
</div><!-- End demo -->
<script>
$(".f_sort").click(function(){
	var arr=new Array();
	$("#sortable li").each(function(index){
		arr.push($("#sortable li").eq(index).attr("id"));	
	});
	window.location.href="<?php echo site_url()."/pro/sort"?>?id=<?php echo $ID?>&act=sort&arr="+arr;
});
</script>

</body>
</html>
