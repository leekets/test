
	var t1= new Date().getTime(); //初始化时间
	var dNum= 0;	//错误返回按钮延时时间；
	
	//数组指针初始化；
    var index = 0;
	var index_ = "";
	var errors_1st = [];
	var round=1;
	var getError="";
		
	var errors = [];	//错误返回按钮延时时间；
	var eNum = 0;	//错误计数初始化；
	
	//显示全局
	$("#ul").show();
	
	//调试开关；
	var debug="0";
	if(debug=="1"){
		dNum=0;	
	}
	
	act(); //进入函数act
	