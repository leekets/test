    function act3() {

        $(".e_element").hide(); // 隐藏所有元素；
        $(".sharewith.a").show();
        $(".sharewith.e .e").html($("textarea.b").val());
        // $(".sharewith.e").show();
        // $(".sharewith.en").show();
        // $(".sharewith.cn").show();
        $("textarea.b").val("");
        // $("div.lib").hide();
        // $("a.btn1").hide();
        $("a.btnP").show();
        audio = document.getElementById('player');
        play3(1);
        $(".e_act3").show(); // 显示：act3元素；
        $("a.btn2").hide().delay(dNum).fadeIn();
        $("a.btn3").hide();

    }