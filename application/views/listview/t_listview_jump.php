<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url()?>3rd/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>3rd/bootstrap/css/bootstrap-responsive.min.css"  rel="stylesheet" type="text/css">
<script src="<?php echo base_url()?>js/jquery.js"></script>
<script src="<?php echo base_url()?>3rd/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>3rd/test/function.js"></script>
<script src="<?php echo site_url()?>/printpage/json?act=news"></script>
<script src="<?php echo site_url()?>/printpage/json?act=cate"></script>
<title>TEST Complete</title>
</head>
<body>
<?php 
	$ID=$this->input->get("id");
	$Error=$this->input->get("error");
	$data=array(
		'temp'=>$Error
	);
	$this->db->where("ID",$ID);
	$this->db->update('news_category',$data);
	
?>
<div class="navbar" >
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a><a href="./index.html" class="brand">Test Complete</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class=""> <a href="" class="f_cate">Back Category</a> </li>
                    <li class=""> <a href="index.html">Back Index</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
        <ul class="nav nav-tabs nav-stacked">
            <li><a class="f_up"><span class="badge pull-right"></span></a></li>
            <li><a class="f_now"><span class="badge pull-right"></span></a></li>
            <li><a class="f_down"><span class="badge pull-right"></span></a></li>
            <li><a class="f_cate">返回分类</a></li>
            <li class="f_index"><a href="index.html">返回首页</a></li>
        </ul>
</div>
</body>
<script src="<?php echo base_url()?>3rd/test/jump.js"></script>
</html>
