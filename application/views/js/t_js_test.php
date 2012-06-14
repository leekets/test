

$(function() {

    var t1 = new Date().getTime(); // 初始化时间
    var dNum = 0; // 错误返回按钮延时时间；
    // 数组指针初始化；
    var index = 0;
    var index_ = "";

    var errors = []; // 错误返回按钮延时时间；
    var eNum = 0; // 错误计数初始化；
    // 显示全局
    $("#ul").show();

    // 调试开关；
    var debug = "0";
    if (debug == "1") {
        dNum = 0;
    }

    act(); // 进入函数act
    <?php include("section/s_act.js"); ?>
    <?php include("section/s_act2.js"); ?>
    <?php include("section/s_act3.js"); ?>
    <?php include("section/s_btnCn.js"); ?>
    <?php include("section/s_btn1.js"); ?>
    <?php include("section/s_btn2.js"); ?>
    <?php include("section/s_btn3.js"); ?>
    <?php include("section/s_sen1.js"); ?>
    <?php include("section/s_play.js"); ?>
    <?php include("section/s_MillisecondToDate.js"); ?>
})
