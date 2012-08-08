
	$("a.btnCn").click(function(){
		$(".sharewith .q").parent().show();
	});
	
	$(".f_btnSelect").click(function() {
			$(".f_1st").hide();
			$(".f_slipt").hide();
			if($(this).attr("f_a")==$(".f_subTitle").html()){
				act();
	        } else {
				//act3();
	        	$(this).children(".label").show();
	        	errors.push(commentsAll[usual_search2(commentsAll,$(this).attr("f_id"))]);
				s_audio=commentsAll[usual_search2(commentsAll,$(this).attr("f_id"))]['subTitle']+".mp3";
				$("audio").attr({"src": "../audio/"+s_audio});
				play(0,1);
				eNum+=1
				errors.push(comments[index-1]);
	//			console.log(errors);
	//			if(index_==""){index_=comments[index-1]['id']}else{index_+=","+comments[index-1]['id']};
				$("span.sp3").html(eNum);
	        };
	});
	
	$("a.btn2").click(function() {
		audio.pause();
		audio1.pause();
		audio2.pause();
		audio3.pause();
		$("a.audio1").attr("times","0");
		$("a.audio2").attr("times","0");
		$("a.audio3").attr("times","0");
		$("a.audio4").attr("times","0");
		$("a.audio1").html("0");
		$("a.audio2").html("0");
		$("a.audio3").html("0");
		$("a.audio4").html("0");
		act()		
	});
	$("a.audio1").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			//alert("1-1");
			setTimeout("playPure(1);", 100);
			
		}
	});
	$("a.audio2").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			//alert("2");
			setTimeout("playPure(2);", 100);
		}
	});
	$("a.audio3").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			//alert("3");
			setTimeout("playPure(3);", 100);
		}
	});
	$("a.audio4").click(function(){
		times=$(this).attr("times");
		if(times=="01"){
			//alert("4");
			setTimeout("$('.btn2').click();", 100);
		}
	});
    $("a.btn3").click(function() {
		
        if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $(".a .a").html().toLowerCase()) {
			act()
        } else {
			act3()
        };
    });