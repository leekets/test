
	//错误返回按钮延时时间；
	var dNum= 0;	
	var testSize=15;
	var c_audio=1;
	var c_jump=1;

	var t1= new Date().getTime(); //初始化时间
    var index = 0;	//数组指针初始化；
	var getError="";
	var errors = [];	//错误返回按钮延时时间；
	var eNum = 0;	//错误计数初始化；
	$("#ul").show();	//显示全局
	//调试开关；
	var debug="0";
	if(debug=="1"){
		dNum=0;	
	}
	
	var org_comments=[];
	org_comments=comments;
	comments=randomOrder(comments);
	comments=f_control_num(testSize,comments);

	act(); //进入函数act
	