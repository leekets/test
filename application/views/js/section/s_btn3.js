    $("a.btn3").click(function() {

        if ($("textarea.b").val().replace(/>/g, "&gt;").toLowerCase() == $("b.a").html().toLowerCase()) {
            act()
        } else {
            act3()
        };
    });