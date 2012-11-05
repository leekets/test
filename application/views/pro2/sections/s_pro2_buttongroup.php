 <a class="btn" href="<?php echo site_url("/pro2/sort?id=$ID");?>">Sort</a>
<!-- <a class="btn" href="<?php echo site_url("/printpage/")?>">Print Page</a>-->
 <a class="btn" data-toggle="modal" href="#modals_printPage" >Print Page</a>
 <?php if($ID!=0){?>
 	<a class="btn f_autoTree" f_id="<?php echo $rowCate->ID;?>" f_category="<?php echo $rowCate->category;?>">Launch Modal</a>
	<a class="btn f_back" href="<?php echo site_url("/pro2/cate_sql/?id=$rowCate->parentId&act=list")?>">Back</a>
 <?php }?> 