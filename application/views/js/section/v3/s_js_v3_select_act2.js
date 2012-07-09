	
	function act2(){
		$(".e_element").hide();				//隐藏所有元素；
		$("textarea.b").val("");
		$(".e_act2").show();				//显示：act2元素；
		$("textarea.b")[0].focus();	
	}
	

	function act3(){
		$(".e_element").hide();				//隐藏所有元素；
		$(".sharewith.a").show();
		$(".sharewith.e .e").html($("textarea.b").val());
		$("textarea.b").val("");
		$("a.btnP").show();
		if(c_audio==1){
			audio=document.getElementById('player');			
			play(0,3);	//错误后重复3次
		}
		$(".e_act3").show();				//显示：act3元素；
		$("a.btn2").hide().delay(dNum).fadeIn();
		$("a.btn3").hide();	
	}