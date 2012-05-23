function play3(i) {

    if (i == 1) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
        // alert("123");
        // playVar="play3("+i+");";
        setTimeout("play3(2)", 2000);
        // play3(i);
        // }else{
        // return false;
    } else if (i == 2) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
        // alert("123");
        // playVar="play3("+i+");";
        setTimeout("play3(3)", 2000);
    } else if (i == 3) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
        // alert("123");
        // playVar="play3("+i+");";
        setTimeout("play3(4)", 2000);
    } else if (i == 4) {
        audio.currectTime = 0;
        audio.play();
        i = i + 1;
        // alert("123");
        // playVar="play3("+i+");";
        // setTimeout("play3(4)",2000);
    }

}