
    $("a.btn3").click(function() {
        if ($("textarea.b").val().replace(/>/g,"&gt;").toLowerCase() == $(".a .a").html().toLowerCase()) {
			act()
        } else {
			act3();
			eNum+=1
			errors.push(comments[index-1]);
			$("span.sp3").html(eNum);
        };
    });