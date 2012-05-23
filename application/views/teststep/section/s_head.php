<?php 
	//Q:取得的get中的数据
	//A:$this->input->get('some_data', TRUE);
	$ID=$this->input->get("id");
?>
<link href="<?php echo base_url()?>css/mobile_iphone.css" media="handheld" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/mobile_iphone.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/sass.css" media="handheld" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>css/sass.css" media="screen" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>js/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="<?php echo site_url()?>/jsdata?id=<?php echo $ID;?>" type="text/javascript"></script>
<script src="<?php echo site_url()?>/js/testPHP" type="text/javascript"></script>
