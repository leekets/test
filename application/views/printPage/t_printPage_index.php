<!DOCTYPE html>
<html lang="en">
<head>
<title>Auto Tree</title>
<?php include "sections/s_pro_head_v2.php"?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_pro_topnavbar.php"?>
<style>
.none { display:none; }
</style>
<div class="container">
    <div class="control-group">
        <ul class="nav nav-tabs nav-stacked">
            <li>
                <a href="<?=site_url()?>/printpage/output?page=testSelect">testSelect</a>
            </li>
             <li>
                <a href="<?=site_url()?>/printpage/output?page=testArr">testArr</a>
            </li>
            <li>
            	<a href="<?php echo site_url("/printpage/output?page=testAudio")?>">testAudio</a>
            </li>
            <li>
            	<a href="<?php echo site_url("/printpage/output?page=jsCommon")?>" target="_blank">common.js</a>
            </li>
        </ul>
    </div>
</div>
<?php include "sections/s_pro_footerjs.php"?>
</body>
</html>