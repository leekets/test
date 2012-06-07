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
            if (senJSON[x].en.toLowerCase().indexOf(a.toLowerCase()) >= 0) {
            	$(".f_en").html(senJSON[x].en.replace(a,'<span class="font_red">'+a+'</span>'));
                $(".f_cn").html(senJSON[x].cn);
                break;
            }
        }
    }
}

function play3(i) {

    if (i == 1) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
        setTimeout("play3(2)", 2000);
    } else if (i == 2) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
        setTimeout("play3(3)", 2000);
    } else if (i == 3) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
        setTimeout("play3(4)", 2000);
    } else if (i == 4) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
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