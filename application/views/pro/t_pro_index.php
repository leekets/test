<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin</title>
<?php include "sections/s_pro_head.php"?>
<?php include "sections/s_pro_cate_head.php"?>
</head>
<body page="category_list">
<div id="body-wrapper"> <!-- Wrapper for the radial gradient background --> 
    <?php include "sections/s_pro_sidebar.php"?>
    <!-- End #sidebar -->
    
    <div id="main-content"> <!-- Main Content Section with everything -->
        <?php
        	aButton("/pro/autoCate?id=$ID&category=$category","Auto Tree",1,0);
        ?>
        <div class="content-box"><!-- Start Content Box -->
            <div class="content-box-header">
                <h3>Content box</h3>
                <div class="clear"></div>
            </div>
            <div class="content-box-content">
                <div class="tab-content default-tab" id="tab1"> 
                    <table>
                        <thead>
                            <tr>
                                <th><input class="check-all" type="checkbox" /></th>
                                <th>Category</th>
                                <th width="200" nowrap="nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include ("sections/s_pro_index_tbody.php")?>
                            <form action="<?php echo site_url()?>/pro/cate_sql?mode=news&act=insert&page=sql&pid=<?php echo $ID?>" method="post">
							    <tr>
							        <td></td>
							        <td>
							        	<input name="category" type="text" class="text-input small-input" id="category" value="" />
							        </td>
							        <td>
							        	<?php 
							        	if($ID==0){
											$type="分类";									        		
							        	}else{
							        		$type="列表页";
							        	}
							        	
							        	$hidden=array (
							        		"parentid"=>$ID,
							        		"type"=>$type,
							        		"template"=>""
							        	);
							        	echo form_hidden($hidden);
							        	?>
							            <input class="button" type="submit" value="Submit" /></td>
							    </tr>
							</form>
						</tbody>
                        
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                	<div class="bulk-actions align-left"> 
                                		<a class="button" href="<?php echo site_url()."/pro/sort/?id=$ID"?>">Sort</a>
                                		<?php include("sections/s_pro_button_index.php")?>
                                	</div>
                                    <div class="clear"></div></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- End #tab1 --> 
            </div>
            <!-- End .content-box-content --> 
            
        </div>
        <!-- End .content-box -->
        
        <div class="clear"></div>
        <?php include ("sections/s_pro_footer.php")?>
        <!-- End #footer --> 
        
    </div>
    <!-- End #main-content --> 
    
</div>
</body>

<!-- Download From www.exet.tk-->
</html>
