	pid=getValue("id");	//git id
	if(pid==undefined){	//if id="" then jump to index
		window.location="index.html";
	}	
	
	var jumpUrl="jump.html?id="+pid;
	var audioUrl="";
	var comments=[];

	var arr=getValue("arr");
	if (typeof(arr)!="undefined" && arr!=""){
		arr=arr.split(",");
		for(var iArr=0, lenArr=arr.length; iArr<lenArr; iArr++){
			for(var i=0, len=newsJSON.length; i<len; i++){
				if(newsJSON[i].id==arr[iArr]){
					comments.push(newsJSON[i]);
				}	
			}
		}
	}else{
		for(var i=0, len=newsJSON.length; i<len; i++){
			if(newsJSON[i].categoryId==pid){
				comments.push(newsJSON[i]);
			}	
		}
	}
	$("title").html(cateJSON[usual_search(cateJSON,pid)].category);	//change title


	
	var get_c_random=getValue("c_random");
	if((typeof(get_c_random)!="undefined" && get_c_random!="")){
		c_random=get_c_random;	
	}
	var get_testSize=getValue("testSize");
	if((typeof(get_testSize)!="undefined" && get_testSize!="")){
		testSize=get_testSize;	
	}
	
	if (c_random==1){comments=randomOrder(comments)};
	comments=f_control_num2(testSize,comments,testSize);
    var t1 = new Date().getTime(); // 初始化时间
    // 数组指针初始化；
    var index = 0;
    var index_ = "";
    

    var errors = []; // 错误返回按钮延时时间；
    var eNum = 0; // 错误计数初始化；
    // 显示全局
    $("#ul").show();

    // 调试开关；
    var debug = "0";
    if (debug == "1") {
        dNum = 0;
    }

    act(); // 进入函数act