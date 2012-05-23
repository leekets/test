<?php
/**
------------------------
Function: php2html($in_Url, $out_htmlFile, $out_logFile)
------------------------
@ Description: 生成静态函数
@ Copyright: Copyright (c) 2006 - 2011
@ Create: 2006-08-01
@ Modify: 2006-10-27
@ 提示:这里要用到的路径为服务器绝对路径; 若给定的路径目录不存在则自动创建
=======================================================================================
@ Example：php2html("http://www.jb51.net", "/www/html/index.html", "/www/log/log.txt");
*/
// {{{ contents
function php2html($in_Url, $out_htmlFile, $out_logFile)
{
$htmlContent = file_get_contents($in_Url); //将文件读入 $htmlContent 变量
/**
* @检查要生成的文件是否存在
*/
if (is_file($out_htmlFile))
{
	echo $out_htmlFile;
@unlink($out_htmlFile);//若文件已存在，则删除
}
/**
* @ 创建目录 网页部分
*/
$dir_array = explode("/", dirname($out_htmlFile));
chdir("/"); //改变目录到根
for($i=1;$i<count($dir_array);$i++)
{
if(is_dir($dir_array[$i]))
{
chdir($dir_array[$i]);
}
else
{
mkdir($dir_array[$i]);
chdir($dir_array[$i]);
}
}
/**
* @ 创建目录 日志部分
*/
$dir_array = explode("/", dirname($out_logFile));
chdir("/"); //改变目录到根
for($i=1;$i<count($dir_array);$i++)
{
if(is_dir($dir_array[$i]))
{
chdir($dir_array[$i]);
}
else
{
mkdir($dir_array[$i], 0777);
chdir($dir_array[$i]);
}
}
$handle = fopen($out_htmlFile, "w"); //打开文件指针，创建文件
$logHandle = fopen ($out_logFile, "a+"); //打开日志文件
/**
* @检查目录是否可写
*/
if (!is_writable($out_htmlFile))
{
echo "文件：".$out_htmlFile."不可写，请检查目录属性后重试";
exit();
}
if (!is_writable($out_logFile))
{
echo "文件：".$out_logFile."不可写，请检查目录属性后重试";
exit();
}
/**
* @写入文件
*/
if (!fwrite ($handle, $htmlContent))
{
$logMsg = "写入文件" . $out_htmlFile . "失败";
}
else
{
$logMsg = "创建文件" . $out_htmlFile . "成功";
}
/**
* @记录日志
*/
$logMsg .= "(".date("Y-m-d H:i:s") .")\r\n";
fwrite ($logHandle, $logMsg);
fclose($logHandle); //关闭日志指针
fclose ($handle); //关闭指针
}
// }}}

	php2html("http://localhost/ci_test073/index.php/printPage/tree", "/output/test/index.html", "/www/log/log.txt");
	echo "index.html成功<br>";


?>
<script>
	alert("over");
</script>