    $("a.btn1").click(function() {

        if ($("textarea.b").val().replace(/>/g, "&gt;").toLowerCase() == $("b.a").html().toLowerCase()) {
            act();
        } else {
            act3();
            eNum += 1;
            errors.push(comments[index - 1]);
            // console.log(errors);
            // if(index_==""){index_=comments[index-1]['id']}else{index_+=","+comments[index-1]['id']};
            $("span.sp3").html(eNum);

        };
    });