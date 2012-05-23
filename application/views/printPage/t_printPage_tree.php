<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mobile Test</title>
<?php include "sections/s_printPage_head.php" ?>
</head>

<body>
<div data-role="page" id="page">
    <div data-role="header">
        <h1>Mobile Test</h1>
    </div>
    <div data-role="content">
        <ul data-role="listview" data-filter="true">
        	<?php
        	$id=$this->input->get("id");
        	if($id==""){
				$id=0;        		
        	}
        	$sql="select * from news_category where parentid=".$id." order by sortnum asc";
        	$query=$this->db->query($sql);
        	foreach($query->result() as $row):?>
        	<?php 
        		if($row->parentId==0){
					$link="tree$row->ID.html?id=$row->ID&title=$row->category";        			
        		}else{
					$link="test.html?id=$row->ID";
					$this->db->where("categoryId",$row->ID)->from("news");
					$ECount=$this->db->count_all_results();
        		}
        	?>
            <li>
            	<a href="<?php echo $link; ?>" data-ajax="false">
            		<?=$row->category;?>
            		<?php if($row->parentId!=0):?>
            		<span class="ui-li-count">
            			<?php echo $ECount;?>		
            		</span>
            		<?php endif;?>
            	</a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
</body>
</html>
