<?php 
	$ID=$this->input->get("id");
	$Sql="select * from news where categoryid=".$ID;
	$query=$this->db->query($Sql);
	$JSON=json_encode($query->result());
?>
	var pid="50";
	var id="<?php echo $ID?>"
	var title="word1";
	var bothPage="html?title="+title+"&";
	var jumpUrl="jump?id="+id;
	var audioUrl="../"
    var comments = <?php echo "$JSON";?>;

