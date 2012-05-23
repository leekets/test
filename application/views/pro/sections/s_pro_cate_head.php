<?php 
	$ID=$this->input->get("id");
	$category=$this->input->get("category");
	$PID=0;
	if($ID!=0){
		$sql="select * from news_category where ID=".$ID;
		$query=$this->db->query($sql);
		$row=$query->row();
		$PID=$row->parentId;
	}
?>
<?php 
	//function
	function aButton($url,$value,$target,$site){
		//$target:1=_blank
		if($target==1){
			$codeTarget="target='_blank'";
		}else{
			$codeTarget="";
		}
		if($site==1){
			$codeSite="";
		}else{
			$codeSite=site_url();
		}
		echo "<a class='button' $codeTarget href='".$codeSite.$url."'>$value</a>&nbsp;";
	}
?>