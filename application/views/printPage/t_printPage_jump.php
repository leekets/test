<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include "sections/s_printPage_head.php" ?>
<title>测试完成</title>
</head>

<body>
<div data-role="page" id="page">
    <div data-role="header">
        <h1>测试完成</h1>
    </div>
    <div data-role="content">
        <ul data-role="listview"  data-inset="true">
            <li><a class="updatebtn f_up" data-ajax="false"></a></li>
            <li><a class="updatebtn f_now" data-ajax="false"></a></li>
            <li><a class="updatebtn f_down" data-ajax="false"></a></li>
            <li><a class="updatebtn f_cate" data-ajax="false">返回分类</a></li>
            <li><a class="updatebtn" href="index.html" data-ajax="false">返回首页</a></li>
        </ul>
    </div>
</div>
<script>
var comments = 
<?php 
	$sql="select ID,category,parentId,sortNum from news_category order by parentid asc, sortnum asc";
	$query=$this->db->query($sql);
	echo JSON_encode($query->result());
?>

function usual_search(data,key)
{
var m=data.length;
//alert(key);
for(i=0;i<m;i++)
	{
		if(data[i].ID==key){
//			alert(i);
			return i
		}
	}
}
function getId(){
	var url = location.href;
	var theRequest = new Object();
	var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
	if (url.indexOf("?") != -1) {
		for (var i = 0; i < paraString.length; i++) {
			theRequest[paraString[i].split("=")[0]] = unescape(paraString[i].split("=")[1]);
		}
	}
	
//	$(".f_now").html(theRequest["id"]);
	x=theRequest["id"];
//	pid=theRequest["pid"];
//	alert(Number(x)+Number(1));
	a=usual_search(comments,x);
	pid=comments[a].parentId;
	b=a-1;
	c=Number(a)+Number(1);
	$(".f_cate").attr("href","tree"+pid+".html?id="+pid);
//	alert(pid);
	
	$(".f_up").html(comments[b].category);
	$(".f_up").attr("href","test.html?id="+comments[b].ID);
//	$(".f_up").attr("href","test"+comments[b].ID+".html");
	$(".f_now").html(comments[a].category);
	$(".f_now").attr("href","test.html?id="+comments[a].ID);
//	$(".f_now").attr("href","test"+comments[a].ID+".html");
	$(".f_down").html(comments[c].category);
	$(".f_down").attr("href","test.html?id="+comments[c].ID);
//	$(".f_down").attr("href","test"+comments[c].ID+".html");
	
	
//	$("b.cn").html(sen[x].cn);
//	alert(theRequest["id"]);
}
getId();
</script>
</body>
</html>
