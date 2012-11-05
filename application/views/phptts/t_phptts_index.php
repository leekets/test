<!DOCTYPE html>
<html>
<head>
<title><?php echo $id?>TTS - Google Text To Speech and PHP solution</title>
</head>


<body>
<?php 
	$sqlarr="";
	//echo $row->result();
	foreach($row->result() as $rsRow){
		//echo $rsRow->ID;
		$varRow=$rsRow->subTitle;
		if($sqlarr==""){ $sqlarr=$varRow; }else{ $sqlarr=$sqlarr.",".$varRow; }
	} 
	echo $sqlarr;
?>



<?php
require "functions/f_phptts_tts.php";

$your_domain = "http://192.168.1.104/git_test073/files/";
$tts = new TextToSpeech();
$file_name = time();

$heckle = "This is a PHP + Google TTS solution";
if ( isset($_GET['heckle']) ) $heckle = $_GET['heckle'];
if ( isset($_GET['heckle']) ) $file_name = $_GET['heckle'];
//$arr="";
$arr =$sqlarr;

if ($arr==""){
	echo "error";
	exit();
}else{
	echo $arr;
	$arr=explode(',', $arr);	
}

foreach ($arr as $key=>$val)
{
    echo $val.'<br>';
	$tts->setText($val,$val);
}

$mp3 = $your_domain.$file_name.".mp3";


?>





</body>
</html>
