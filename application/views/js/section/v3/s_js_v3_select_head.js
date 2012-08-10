
	if (window.navigator.userAgent.indexOf('Chrome') > -1) {		//判断是否为chrome浏览器；
		var f_chrome=1;
	    //alert('Chrome!');
	} else {
		var f_chrome=0;
		//alert('Not Chrome');
	}

	
	if(f_chrome==1){		//Chrome下添加按键特效；
		window.onload = function() {		
			document.body.onkeydown = function(e) {
				e = e || window.event;
				// 把键值转换成字母
				var key = String.fromCharCode(e.keyCode); 
				var dom = document.getElementById(key);
				if(document.getElementById(key).style.display=="block" || document.getElementById(key).style.display=="inline-block"){
					if(dom) {
						dom.click();
					}
				}else{
					//alert("error");	
				}
			}
		}
	}
	
	pid=getValue("id");	//git id
	idKey=usual_search(cateJSON,pid);
	var arrInput=[1198];
	for(var i=0; i<arrInput.length; i++){
		if(arrInput[i]==cateJSON[idKey].parentId){
			window.location="testArr.html?c_random=0&testSize=0&id="+pid;
		}
	}
	var arrInputR=[1094];
	for(var i=0; i<arrInput.length; i++){
		if(arrInputR[i]==cateJSON[idKey].parentId){
			window.location="testArr.html?testSize=0&id="+pid;
		}
	}
	
	
	var commentsAll= newsJSON;	

	
	if(pid==undefined){	//if id="" then jump to index
		window.location="index.html";
	}
	
	
	$(".f_getId").attr("id",pid);
	$(".f_jumpArr2").click(function(){
		window.location=$(this).attr("_href")+"&id="+$(this).attr("id");
	});
	
	$("title").html(cateJSON[usual_search(cateJSON,pid)].category);	//change title
	
	var arrPhrase=[1101,1102,1103,1104,1105,1106,1107,1108,1109,1110,1122,1123,1124,1125,1126,1127,1128,1129,1130,1131];
	for(var i=0; i<arrPhrase.length;i++){
		if(arrPhrase[i]==pid){
			var pagePhrase=true;
			$("title").append(" [Phrase Mode]");
		}
	}

	
	var bothPage="asp";		//Leeke-Todo:Ready delete
	var jumpUrl="jump.html?id="+pid;	//Leeke-Todo:Ready delete
	var audioUrl="";
	var comments=[];
	for(var i=0, len=commentsAll.length; i<len; i++){
		if(commentsAll[i].categoryId==pid){
			comments.push(commentsAll[i]);
		}	
	}
	
	//Todo: Be Function
	if(pagePhrase==true){
		var commentsTemp=[];
		for(var i=0; i<25; i++){
			commentsTemp.push(comments[i]);
		}
		comments=commentsTemp;
	};
	//alert(print_array(comments));
	$(".f_jumpTest").attr("href","testArr.html?id="+pid); //page jump