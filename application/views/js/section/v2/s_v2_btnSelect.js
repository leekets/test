 
$(".f_btnSelect").click(function() {
		$(".f_1st").hide();
		$(".f_slipt").hide();
		//alert($(this).attr("f_a"));
		if($(this).attr("f_a")==$(".f_subTitle").html()){
        //if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $(".a .a").html().toLowerCase()) {
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