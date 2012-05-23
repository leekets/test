<script>	
	var pid=<?php echo $id;?>;
	var bothPage="asp";
	var jumpUrl="jump.html?id="+pid
	var audioUrl="";
	<?php 
		$sql="select * from news where categoryid=".$id;
		$query=$this->db->query($sql);
		echo "var comments = ".JSON_encode($query->result());
	?>
	
</script>
