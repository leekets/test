<?php 
	$sql="select id,categoryId,subject,subTitle from news order by categoryid asc, sortnum asc, id asc";
	$query=$this->db->query($sql);
	echo "var commentsAll=".JSON_encode($query->result());
?>


//合并通用js	
	var url = location.href;
	var theRequest = new Object();
	var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
	if (url.indexOf("?") != -1) {
		for (var i = 0; i < paraString.length; i++) {
			theRequest[paraString[i].split("=")[0]] = unescape(paraString[i].split("=")[1]);
		}
	}

	
	pid=theRequest["id"];
//	pid=299;
	var bothPage="asp";
	var jumpUrl="jump.html?id="+pid;
	var audioUrl="";
	var comments=[];
	for(var i=0, len=commentsAll.length; i<len; i++){
		if(commentsAll[i].categoryId==pid){
			comments.push(commentsAll[i]);
		}	
	}