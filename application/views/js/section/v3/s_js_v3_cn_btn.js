
	$("a.btnCn").click(function(){
		$(".sharewith .q").parent().show();
	});
	
	$(".f_btnSelect").click(function() {
			$(".f_1st").hide();
			$(".f_slipt").hide();
			if($(this).attr("f_a")==$(".f_subject").html()){
				act();
	        } else {
				//act3();
	        	$(this).children(".label").show();
	        	errors.push(commentsAll[usual_search2(commentsAll,$(this).attr("f_id"))]);
//				s_audio=commentsAll[usual_search2(commentsAll,$(this).attr("f_id"))]['subTitle']+".mp3";
//				//alert (s_audio);
//				$("audio").attr({"src": "../audio/"+s_audio});
//				play(0,1);
				errors.push(comments[index-1]);
				eNum=errors.length;
	//			console.log(errors);
	//			if(index_==""){index_=comments[index-1]['id']}else{index_+=","+comments[index-1]['id']};
				$("span.sp3").html(eNum);
	        };
	});
	
	$("a.btn2").click(function() {
		act()		
	});

    $("a.btn3").click(function() {
		
        if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $(".a .a").html().toLowerCase()) {
			act()
        } else {
			act3()
        };
    });