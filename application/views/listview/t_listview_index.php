<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile Test</title>
<?php include "section/g_global.php" ?>
<?php include "section/g_mobileHead.php" ?>

	
</head>

<body>
<div data-role="page" id="page">
    <div data-role="header">
        <a href="<?php echo site_url()."/pro"?>" data-icon="gear" data-ajax="false">Pro</a>
        <h1>Mobile Test</h1>
        <a href="<?php echo site_url()."/printpage"?>" data-icon="gear" data-ajax="false" class="ui-btn-right">Export</a> 
	</div>
    <div data-role="content">
        <ul data-role="listview" data-filter="true">
        	<?php 
        	foreach($query->result() as $row):?>
            <li><a href="<?php echo site_url()."/listview/cate?id=".$row->ID;?>" data-ajax="false"><?=$row->category;?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
</body>
</html>
