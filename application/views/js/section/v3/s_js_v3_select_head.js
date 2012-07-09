
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
	var commentsAll= newsJSON;	

	pid=getValue("id");	//git id
	if(pid==undefined){	//if id="" then jump to index
		window.location="index.html";
	}
	$("title").html(cateJSON[usual_search(cateJSON,x)].category);	//change title
	var bothPage="asp";		//Leeke-Todo:Ready delete
	var jumpUrl="jump.html?id="+pid;	//Leeke-Todo:Ready delete
	var audioUrl="";
	var comments=[];
	for(var i=0, len=commentsAll.length; i<len; i++){
		if(commentsAll[i].categoryId==pid){
			comments.push(commentsAll[i]);
		}	
	}

	$(".f_jumpTest").attr("href","testArr.html?id="+pid); //page jump