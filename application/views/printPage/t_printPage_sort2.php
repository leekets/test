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
    	<input type="text" class="input-small" name="b" value="<?php echo $this->input->get("b")?>">
        <input type="text" class="input-small" name="size" value="7">
        <input type="text" class="input-small" name="total" value="20">
        <input type="hidden" name="act" value="autoSort">
        
        <button type="submit" class="btn">Submit</button>
    </form>
    <?php
		$act=$this->input->get("act");
		$num=$this->input->get("num");
		
		if($act=="autoSort"){
			$b=$this->input->get("b");
			$size=$this->input->get("size");
			$totle=$this->input->get("total");
			for($i=0;$i<$totle;$i++){
				for($i2=0;$i2<$size;$i2++){
					echo $b."<br>";
				}
				$b++;
				//echo $i+1.";".($b++)."<br/>";
			}	
		}
	?>
</div>
</body>
</html>