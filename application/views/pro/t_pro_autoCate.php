<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Base · Twitter Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<div class="control-group">
	<?php
		$id=$this->input->get("id");
		$category=$this->input->get("category");
	 ?>
    <form class="well form-inline" action="" method="get">
        <input type="text" class="input-small" name="num" value="20">
        <input type="text" class="input-small" name="category" value="<?php echo $category ?>">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="hidden" name="act" value="autoCate">
        
        <button type="submit" class="btn">Submit</button>
    </form>
    <?php
		$act=$this->input->get("act");
		$num=$this->input->get("num");
		
		if($act=="autoCate"){
			for($i=1;$i<$num+1;$i++){
				$data=array(
					'category'=>$category."-".$i,
					'parentId'=>$id,
					'sortNum'=>$i,
					'type'=>"列表页"
				);
				$this->db->insert('news_category',$data);
			}
			echo "end";	
		}
	?>
</div>
</body>
</html>