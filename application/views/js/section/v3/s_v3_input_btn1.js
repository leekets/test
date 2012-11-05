
    $("a.btn1").click(function() {
		$(".f_slipt").hide();
        if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $(".a .a").html().toLowerCase()) {
				act();
        } else {
				act3();
				eNum+=1
				errors.push(comments[index-1]);
				eNum+=1
				errors.push(comments[index-1]);
//				eNum+=1
//				errors.push(comments[index-1]);
				$("span.sp3").html(eNum);
	//			console.log(errors);
	//			if(index_==""){index_=comments[index-1]['id']}else{index_+=","+comments[index-1]['id']};
				$("span.sp3").html(eNum);
			
        };
    });