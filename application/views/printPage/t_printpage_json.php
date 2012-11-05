<?php 
	$act=$this->input->get("act");
	if($act=="cate"){
		$sql="select ID,category,parentId from news_category order by parentid asc, sortnum asc";
		$query=$this->db->query($sql);
	}
	if($act=="news"){
		$sql="select id,categoryId,subject,subTitle from news order by categoryId asc, sortnum asc, ID asc";
		$query=$this->db->query($sql);	
	}
	if($act=="sen"){
		$sql="select * from sen";
		$query=$this->db->query($sql);	
	}
	echo "var ".$act."JSON=".JSON_encode($query->result())
?>