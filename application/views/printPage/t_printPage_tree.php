<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="3rd/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css">
<link href="3rd/bootstrap/css/bootstrap-responsive.min.css"  rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="3rd/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.tmpl.min.js"></script>
<script src="js/function.js"></script>
<title>Test Page</title>
</head>
<!-- 数据js -->
<script src="js/cateJSON.js"></script>

<script src="js/senJSON.js" type="text/javascript"></script>
<body class="secret">
<div class="navbar navbar-top-leeke">
    <div class="navbar-inner">
        <div class="container" id="hdr">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a><a href="javascript:void(0);" class="brand">Test Function </a>
            <div class="nav-collapse">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div>
        <ul class="nav nav-tabs nav-stacked" id="tmpl_body">
            <script id="indexLi" type="text/x-jquery-tmpl">	
            <li>
                <a href="index.html?id=${ID}">${category}</a>
            </li>
			</script>
			<script id="indexCate" type="text/x-jquery-tmpl">	
            <li>
                <a href="test.html?id=${ID}">${category}</a>
            </li>
			</script>
        </ul>
    </div>
</div>
</body>
</html>
<script>
	var id=getValue("id");
	if(id==undefined){
		id=0;
	}
	var arrCate=[];
	for(var i=0, len=cateJSON.length; i<len; i++){
		if(cateJSON[i].parentId==id){
			arrCate.push(cateJSON[i]);
		}	
	}
	if(id==0){
		$( "#indexLi" ).tmpl( arrCate ).appendTo( "#tmpl_body" );
	}else{
		$("#indexCate").tmpl(arrCate).appendTo("#tmpl_body");
	}
</script>
