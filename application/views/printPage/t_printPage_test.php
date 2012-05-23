<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include ("sections/s_printPage_tree_head.php")?>
<?php 
	$id=$this->input->get("id");
?>
<title>nw2-1</title>
</head>

<!--   寮曞叆jQuery -->


<!-- 鍔ㄦ�js -->
<?php include ("sections/s_printPage_data.php")?>

<!-- 闈欐�js -->
<script src="js/test.js" type="text/javascript"></script>

<body class="secret">
<!-- 鐢ㄤ簬鏃犻煶棰戞枃浠�-->
<style>
.lib .b { height:84px;}	
</style>
<div id="ul" style=" display:none;">
    <div id="hdr">
        <h1>
        	N:<span class="sp1"></span>;T:<span class="sp2"></span>;E:<span class="sp3"></span>;
       	</h1>
    </div>
    <div class="postpage"> 
        <!-- 闂_鍙ュ瓙 -->
        
        <div class="sharewith e_element"> <b class="q_en"> </b> </div>
        <!-- 闂 -->
        <div class="sharewith e_element e_act1 e_act2 e_act3"> <b class="q"> </b> </div>
        <!-- 绛旀 -->
        <div class="sharewith a e_element e_act3"> <b class="a"> </b> </div>
        
        <!-- 閿欒 -->
        <div class="sharewith e e_element e_act3"> <b class="e" style="color:#f60;"> </b> </div>
        <!-- 涓枃渚嬪彞 -->
        <div class="sharewith sen e_element"> <b class="en"> </b> </div>
        <!-- 涓枃渚嬪彞 -->
        <div class="sharewith sen e_element"> <b class="cn"> </b> </div>
        
        <!-- 涓枃渚嬪彞 -->
        <div class="sharewith cn e_element"> <b class="cn"> </b> </div>
        <!-- 鑻辨枃渚嬪彞 -->
        <div class="sharewith en e_element"> <b class="en"> </b> </div>
        
        <!-- 杈撳叆妗�-->
        <div class="lib txtr e_element e_act1 e_act2" >
            <textarea name="message" style="-webkit-border-radius: 3px;" class="b" ></textarea>
        </div>
        
        <!-- -->
        <div><a class="btn1 updatebtn e_element e_act1" href="javascript:void(0);" 1><strong><b class="btnQ">Submit</b></strong></a></div>
        <!-- 鎸夐敭锛氭挱鏀�-->
        <div><a class="none updatebtn e_element" onClick="document.getElementById('player').currentTime = 0;document.getElementById('player').play()" href="javascript:void(0);"><strong><b>Play</b></strong></a></div>
        
        <!-- -->
        
        <div><a class="btn2 updatebtn e_element" href="javascript:void(0);" 2><strong><b>Submit</b></strong></a></div>
        <!-- -->
        <div><a class="btn3 updatebtn e_element e_act2" href="javascript:void(0);" 3><strong><b class="btnQ">Submit</b></strong></a> </div>
        <!-- 鏄剧ず闂 -->
        <div><a class="btnCn updatebtn e_element" href="javascript:void(0);" 2><strong><b>Show Question</b></strong></a></div>
        <!-- 闊抽 -->
        <audio class="e_element" id="player" ></audio>
    </div>
</div>
</body>
</html>
