<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="keywords" content="Cn" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="<?php echo base_url()?>../output/test/3rd/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>../output/test/3rd/bootstrap/css/bootstrap-responsive.min.css"  rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>../output/test/css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url()?>../output/test/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>../output/test/3rd/bootstrap/js/bootstrap.min.js"></script>
<title>Test Page</title>
<style>
.ul_line li a { line-height: 24px; }
.s_selectList li a { line-height: 25px; height: 20px; overflow: hidden; }
.textarea_skin { border: 1px solid #dddddd; padding: 8px 12px; margin-bottom: 18px; }
.font_red { color: #f60; }
</style>
</head>
<!-- 数据js -->
<script src="<?php echo base_url()?>../output/test/js/senJSON.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>../output/test/js/newsJSON.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>../output/test/js/cateJSON.js" type="text/javascript"></script>
<!-- 静态js -->
<!--<script src="http://192.168.1.104/git_test073/index.php/js/testSelect" type="text/javascript"></script>-->
<script src="<?php echo base_url()?>../git_test073/index.php/js/testCnPhp" type="text/javascript"></script>
<!--<script src="<?php echo base_url()?>../output/test/js/test_cn.txt" type="text/javascript"></script>-->
<!--<script src="js/test_select.txt" type="text/javascript"></script>-->
<script src="<?php echo base_url()?>../output/test/js/common.js" type="text/javascript"></script>
<body class="secret" id="ul">
<div class="navbar navbar-top-leeke">
    <div class="navbar-inner">
        <div class="container" id="hdr">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a><a href="javascript:void(0);" class="brand"> N:<span class="sp1"></span>;T:<span class="sp2"></span>;E:<span class="sp3"></span>; </a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li>
                        <a href="index.html">Index</a>
                    </li>
                    <li>
                        <a href="#">Back Category</a>
                    </li>
                    <li>
                        <a class="btnCn updatebtn f_slipt" onClick="document.getElementById('player').currentTime = 0;document.getElementById('player').play()" href="javascript:void(0);">Play</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="full none">
        <div>
            <a class="btn btn-primary btn-large f_getId f_jumpArr2 f_1st" _href="testArr.html?c_random=0&testSize=0">Jump</a>
        </div>
    </div>
    <div>
        <ul class="nav nav-tabs nav-stacked ul_line">
            <!-- 问题_句子 -->
            <li class="sharewith e_element">
                <a class="q_en"> </a>
            </li>
            <!-- 英文例句 -->
            <li class="sharewith e_element">
                <a class="f_en"></a>
            </li>
            <!-- 中文例句 -->
            <li class="sharewith e_element">
                <a class="f_cn"></a>
            </li>
            <!-- 问题 -->
            <li class="sharewith e_element e_act3">
                <a class="f_subTitle"> </a>
            </li>
            <!-- 答案 -->
            <li class="sharewith a e_element e_act1 e_act2 e_act3">
                <a class="f_subject"> </a>
            </li>
            <!-- 错误 -->
            <li class="sharewith e e_element">
                <a class="e font_red"> </a>
            </li>
        </ul>
        <!-- 输入框 -->
        <div class="lib txtr e_element textarea_skin">
            <textarea name="message" class="b textarea_full" ></textarea>
        </div>
        <ul class="nav nav-tabs nav-stacked e_act1 e_element s_selectList">
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo1" id="A" f_a="" f_id="">[A]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo2" id="B" f_a="" f_id="">[B]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo3" id="C" f_a="" f_id="">[C]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo4" id="D" f_a="" f_id="">[D]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo5" id="E" f_a="" f_id="">[E]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo6" id="F" f_a="" f_id="">[F]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo7" id="G" f_a="" f_id="">[G]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo8" id="1" f_a="" f_id="">[1]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo9" id="2" f_a="" f_id="">[2]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo10" id="3" f_a="" f_id="">[3]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo11" id="4" f_a="" f_id="">[4]&nbsp;</a>
            </li>
            <li>
                <a href="javascript:void(0);" class="f_btnSelect f_btnNo12" id="5" f_a="" f_id="">[5]&nbsp;</a>
            </li>
        </ul>
    </div>
    <div class="full">
        <div>
            <a class="btn1 updatebtn e_element full btn btnQ btn-primary btn-large" href="javascript:void(0);" 1>Submit</a>
        </div>
        <div>
            <a class="btn2 updatebtn e_element btn btn-primary btn-large" id="S" href="javascript:void(0);">Submit</a>
        </div>
        <div>
            <a class="btn3 updatebtn e_element e_act2 btn btn-primary btn-large">Submit</a>
        </div>
        <!-- 显示问题 -->
        <div>
            <a class="btnCn updatebtn e_element btn btn-primary btn-large" href="javascript:void(0);">Show Question</a>
        </div>
    </div>
    <!-- 音频 -->
    <audio class="e_element" id="player" ></audio>
</div>
</body>
</html>
