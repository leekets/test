
$(function() {
	
	var t1= new Date().getTime(); //��ʼ��ʱ��
	var dNum= 0;	//���󷵻ذ�ť��ʱʱ�䣻
	
	//����ָ���ʼ����
    var index = 0;
	var index_ = "";
		
	var errors = [];	//���󷵻ذ�ť��ʱʱ�䣻
	var eNum = 0;	//���������ʼ����
	
	//��ʾȫ��
	$("#ul").show();
	
	//���Կ��أ�
	var debug="0";
	if(debug=="1"){
		dNum=0;	
	}
	
	act(); //���뺯��act

	function act() {
		//�ֶ��ظ�����
		
//	alert(index+":"+eNum);
//	if(rNum==0){
		if((index<=5 && eNum==3)){
			<!--include file="js_repeat2.asp" -->
		}
		if((index>5 && index<=10 && eNum==5)){
			<!--include file="js_repeat2.asp" -->
		}
		if((index>10 && index<=15 && eNum==7)){
			<!--include file="js_repeat2.asp" -->
		}
		if((index>15 && index<=20 && eNum==9)){
			<!--include file="js_repeat2.asp" -->
		}
		if((index>20 && index<=25 && eNum==11)){
			<!--include file="js_repeat2.asp" -->
		}
		if((index>25 && index<=30 && eNum==13)){
			<!--include file="js_repeat2.asp" -->
		}
//	}

if (index<comments.length) {					//���ָ���ڷ�Χ�ڣ�
			$(".e_element").hide();				//��������Ԫ�أ�
			$("b.en").html("");					//��ʼ��Ӣ�Ĳ��֣�
			$("b.cn").html("");					//��ʼ�����Ĳ��֣�
//			sen1(comments[index]['a']);			//���þ�⺯����
			$("span.sp1").html(index+1);		//������ǰ��ֵ��
			$("span.sp2").html(comments.length);//��ʾ������

			$("lib.b").show();					//�������ʾ		
			$("textarea.b").val("");			//��������			
			
			q=comments[index]['q'];
			q_en=comments[index]['q_en'];
			if(q_en==""){
				q_en=q;
			}
			btnQ="Submit";
			
			$("audio").attr({"src": audioUrl+"audio/"+comments[index]['a']+".mp3"});
			audio=document.getElementById('player') //��ʼ����Ƶ·��
			$("b.q_en").html(q_en);//��������ֵ
			$("b.q").html(comments[index]['subject']);//��������ֵ
			$("b.a").html(comments[index]['subTitle']);//������ֵ
			$(".sen .en").html(comments[index]['en']);//��������ֵ
			$(".sen .cn").html(comments[index]['cn']);//������ֵ
			$(".btnQ").html(btnQ);
			$(".e_act1").show();				//��ʾ��act1Ԫ�أ�
			play3(1);
			$("textarea.b")[0].focus();			//����򽹵�
			
            index++;							//ָ��ݽ�
        }
		else{
			if(errors.length > 0){				//���顾�����б���Ϊ��
				comments = errors;				//��⸳ֵ�����б�
				errors = [];					//��գ������б�
				index = 0;						//��ʼ����ָ��
				eNum = 0;						//��ʼ�����������
				$("span.sp3").html('');			//��գ�ҳ��������
				act();							//���к�����
			}else{
				t2=new Date().getTime()-t1;
				alert(MillisecondToDate(t2));	
				window.location=jumpUrl+"&title="+MillisecondToDate(t2);
				//window.location="index."+bothPage+"#pid"+pid;
			}
		}

    }
	
	function act2(){
		
//		$(".sharewith.a").hide();
//		$(".sharewith.e").hide();
//		$(".sharewith.en").hide();
//		$(".sharewith.cn").hide();
//		$("div.lib").show();
//		$("a.btnP").hide();
//		$("a.btn2").hide();
//		$("a.btn3").show();	
//		$("btnP").hide();	
		$(".e_element").hide();				//��������Ԫ�أ�
		$("textarea.b").val("");
		$(".e_act2").show();				//��ʾ��act2Ԫ�أ�
		$("textarea.b")[0].focus();	


	}
	
	//Error
	function act3(){
		
		$(".e_element").hide();				//��������Ԫ�أ�
		$(".sharewith.a").show();
		$(".sharewith.e .e").html($("textarea.b").val());
//		$(".sharewith.e").show();
//		$(".sharewith.en").show();
//		$(".sharewith.cn").show();
		$("textarea.b").val("");
//		$("div.lib").hide();
//		$("a.btn1").hide();
		$("a.btnP").show();
		audio=document.getElementById('player')
		play3(1);
		$(".e_act3").show();				//��ʾ��act3Ԫ�أ�
		$("a.btn2").hide().delay(dNum).fadeIn();
		$("a.btn3").hide();	


	}

	$("a.btnCn").click(function(){
		$(".sharewith .q").parent().show();
		
	});
    $("a.btn1").click(function() {

        if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $("b.a").html().toLowerCase()) {
			act();
        } else {
				act3();
				eNum+=1
				errors.push(comments[index-1]);
	//			console.log(errors);
	//			if(index_==""){index_=comments[index-1]['id']}else{index_+=","+comments[index-1]['id']};
				$("span.sp3").html(eNum);
			
        };
    });
	
	$("a.btn2").click(function() {
		act2()		
	});
	
    $("a.btn3").click(function() {
		
        if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $("b.a").html().toLowerCase()) {
			act()
        } else {
			act3()
        };
    });
})

//		function sen1(a){
//			
//
//	for (x in sen){
//		if(sen[x].en.toLowerCase().indexOf(a.toLowerCase())>=0){
//			$("b.en").html(sen[x].en);
//			$("b.cn").html(sen[x].cn);
//			break;
//		}
//	}
//
//
//		}

		function play3(i){
			
			if(i==1){
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
				setTimeout("play3(2)",2000);
//				play3(i);
//			}else{
//				return false;
			}else if(i==2){
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
				setTimeout("play3(3)",2000);				
			}else if(i==3){
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
				setTimeout("play3(4)",2000);				
			}else if(i==4){
				audio.currectTime=0;
				audio.play();
				i=i+1;
//				alert("123");
//				playVar="play3("+i+");";
//				setTimeout("play3(4)",2000);				
			}

		}
		
//todo:ת���絥ҳjs
		function MillisecondToDate(msd)
		{
			var time = parseFloat(msd) / 1000;
			if (null != time && "" != time)
			{
				if (time > 60 && time < 60 * 60)
				{
					time = parseInt(time / 60.0) + "����" + parseInt((parseFloat(time / 60.0) -
							parseInt(time / 60.0)) * 60) + "��";
				}
				else if (time >= 60 * 60 && time < 60 * 60 * 24)
				{
					time = parseInt(time / 3600.0) + "Сʱ" + parseInt((parseFloat(time / 3600.0) -
							parseInt(time / 3600.0)) * 60) + "����" +
							parseInt((parseFloat((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60) -
									parseInt((parseFloat(time / 3600.0) - parseInt(time / 3600.0)) * 60)) * 60) + "��";
				}
				else
				{
					time = parseInt(time) + "��";
				}
			}
			return time;
		}

