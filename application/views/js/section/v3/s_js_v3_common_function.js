function Arrsplit(s) {
    //s1=0+(s-1)*10;
    //alert(s);
    var x = 5;
    var comments2 = [];
    for (var i = (s - 1) * x, len = s * x; i < len; i++) {
        comments2.push(comments[i]);
    }
    comments = comments2; //题库赋值错误列表
    errors = []; //清空：错误列表；
    index = 0; //初始化：指针
    eNum = 0; //初始化：错误计数
    $("span.sp3").html(''); //清空：页面错误计数	
    act(); //运行函数；	
    $(".f_slipt").hide();
}

function sen1(a) {
    for (x in senJSON) {
        if (senJSON[x].en != null) {
            if (a.toLowerCase().indexOf(senJSON[x].en.toLowerCase()) >= 0) {
            	$(".f_en").html(a.replace(senJSON[x].en,'<span class="font_red">'+senJSON[x].en+'</span>'));
                $(".f_cn").html(senJSON[x].cn);
                break;
            }
        }
    }
}



//计算总时间
function MillisecondToDate(msd) {
    var time = parseFloat(msd) / 1000;
    if (null != time && "" != time) {
        if (time > 60 && time < 60 * 60) {
            time = parseInt(time / 60.0) + "分钟" + parseInt((parseFloat(time / 60.0) - parseInt(time / 60.0)) * 60) + "秒";
        } else if (time >= 60 * 60 && time < 60 * 60 * 24) {
            time = parseInt(time / 3600.0) + "小时" + parseInt((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60) + "分钟" + parseInt((parseFloat((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60) - parseInt((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60)) * 60) + "秒";
        } else {
            time = parseInt(time) + "秒";
        }
    }
    return time;
}

//随机改变数组的排序
function randomOrder(targetArray) {
    var arrayLength = targetArray.length
    var tempArray1 = new Array(); //先创建一个正常顺序的数组
    for (var i = 0; i < arrayLength; i++) {
        tempArray1[i] = i
    }
    var tempArray2 = new Array();	//再根据上一个数组创建一个随机乱序的数组
    for (var i = 0; i < arrayLength; i++) {
        tempArray2[i] = tempArray1.splice(Math.floor(Math.random() * tempArray1.length), 1)	//从正常顺序数组中随机抽出元素
    }
    var tempArray3 = new Array();	//最后创建一个临时数组存储 根据上一个乱序的数组从targetArray中取得数据
    for (var i = 0; i < arrayLength; i++) {
        tempArray3[i] = targetArray[tempArray2[i]]
    }
    return tempArray3	//返回最后得出的数组
    //使用实例
    // var tmp = ["1", "2", "3", "4"];
    // alert(randomOrder(tmp));
}

//打印数组
function print_array(arr) {
    var t = 'array(\n';
    for (var key in arr) {
        if (typeof(arr[key]) == 'array' || typeof(arr[key]) == 'object') {
            var t_tmp = key + ' = ' + print_array(arr[key]);
            t += '\t' + t_tmp + '\n';
        } else {
            var t_tmp = key + ' = ' + arr[key];
            t += '\t' + t_tmp + '\n';
        }
    }
    t = t + ')';
    return t;;
}

function f_control_num(num,comments){
	if(num>0){
		var comments2 = [];
		for(i=0;i<=testSize-1;i++){
			comments2.push(comments[i]);
		}
		comments = comments2;
	}
	return comments;
}

function f_control_repeat(num_base,num_max,index){
	if(index<=num_max){
		var r_n = num_base;
		var r_2 = eval((parseInt((index-1)/5)+1)*r_n)
		if(index <= r_2*1 && eNum==eval(r_2*0.4+1)){
			index = -1;
		}		
	}
	return index;
}

function f_select(org_comments,s_num,f_chrome){
	var arrSelect=[];	//定义select数组；
	for(var i=0, len=org_comments.length; i<len; i++){	//取出当前指针的值。（同时取出与当前指正重复的值。）
		if(org_comments[i]['subTitle']!=comments[index]['subTitle']){
			arrSelect.push(org_comments[i]);
		}	
	}
	arrSelect=randomOrder(arrSelect);	//乱序数组
	

	var arrSelect2 = [];	//定时数组2

	//select num
	var s_num=s_num-2;
	for(i=0;i<=s_num;i++){	//获得目标数组-1的新数组
		arrSelect2.push(arrSelect[i]);
	}
	arrSelect2.push(comments[index]);	//新数组添加当前指针的值。
	arrSelect = randomOrder(arrSelect2);	//乱序数组。

	$(".f_btnSelect").hide();
	for(i=0;i<=s_num+1;i++){
		$(".f_btnNo"+(i+1)).html(arrSelect[i].subject); //赋值
		$(".f_btnNo"+(i+1)).attr("f_a",arrSelect[i].subTitle);
		$(".f_btnNo"+(i+1)).attr("f_id",arrSelect[i].id);
		$(".f_btnNo" + (i + 1)).prepend("<span class=\"label label-warning none\">"+arrSelect[i].subTitle+"</span>&nbsp;");
		if(f_chrome==1){
			$(".f_btnNo" + (i + 1)).prepend("<span class='label' style='width:130px !important;'>[" + $(".f_btnNo" + (i + 1)).attr("id") + "]</span>&nbsp;");
		}
		$(".f_btnNo"+(i+1)).show();
	}	
}

