<?php 
	$ID=$this->input->get("id");
	$sql="select * from news_category where parentid=$ID";
	$query=$this->db->query($sql);
	$eArr="";
	foreach($query->result() as $row){
		if($row->temp!=""){
			if($eArr==""){
				$eArr=$row->temp;
			}else{
				$eArr=$eArr.",".$row->temp;
			}
		}
	}
	$eArr=explode(",",$eArr);
	
?>
<table>
	<tbody>
	<?php 
	for ($i=0;$i<count($eArr); ++$i){
		$sql="select * from news where id=$eArr[$i]";
		$query=$this->db->query($sql);
		foreach($query->result() as $row){
	?>
		<tr>
			<td><?php echo $row->subTitle;?></td>
			<td><?php echo $row->subject;?></td>
		</tr>
		<?php 
	}}
		?>
	</tbody>
</table>