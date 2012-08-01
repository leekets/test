 <a class="btn" href="<?php echo site_url("/pro2/sort?id=$ID");?>">Sort</a> 
 <?php if($ID!=0){?>
	 <a class="btn f_back" href="<?php echo site_url("/pro2/cate_sql/?id=$rowCate->parentId&act=list")?>">Back</a> 
	 <a class="btn" href="<?php echo site_url("/pro/autoCate?id=$ID&category=$rowCate->category");?>" target="_blank">Auto Tree</a>
 <?php }?> 