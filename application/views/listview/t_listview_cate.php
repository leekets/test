<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile Test</title>
<?php include "section/g_global.php" ?>
<?php include "section/g_mobileHead.php" ?>

	
</head>

<body>
<?php 
	$ID=$this->input->get("id");
	$Sql="select * from news_category where id=".$ID;
	$Cate=$this->db->query($Sql);
	$row2=$Cate->row();
?>
<div data-role="page" id="page">
    <div data-role="header">
        <h1><?php echo $row2->category?></h1>
        <?php 
        	//todo:section r
        ?>
        <?php include("sections/s_listview_header_r.php");?>
    </div>
    <div data-role="content">
        <ul data-role="listview" data-filter="true">
        	<?php
        		$query=$this->db->query("select * from news_category where parentid=".$ID);
        	?>
        	<?php foreach($query->result() as $row):?>
            <li>
            	<a data-ajax="false" href="<?php echo site_url()."/teststep/?id=".$row->ID;?>">
            		<?=$row->category;?>
            		<?php 
            		//Q:li计数
            		//A:ui-li-count
            		?>
            		<span class="ui-li-count">
            			<?php 
            				$this->db->from("news")->where("categoryId",$row->ID);
            				echo $this->db->count_all_results();
            			?>		
            		</span>
            	</a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
</body>
</html>
