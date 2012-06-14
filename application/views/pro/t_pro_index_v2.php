<!DOCTYPE html>
<html lang="en">
<head>
<title>Test Function Pro</title>
<?php include "sections/s_pro_head_v2.php"?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_pro_common_topnavbar.php"?>
<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><input class="check-all" type="checkbox" /></th>
                <th>Category</th>
                <th width="200" nowrap="nowrap">Action</th>
                <th width="" nowrap="nowrap">TTS</th>
                <th width="" nowrap="nowrap">List</th>
                <th width="" nowrap="nowrap">Sort</th>
            </tr>
        </thead>
        <tbody>
            <?php include ("sections/s_pro_index_tbody.php")?>
        <form action="<?php echo site_url()?>/pro/cate_sql?mode=news&act=insert&page=sql&pid=<?php echo $ID?>" method="post">
            <tr>
                <td></td>
                <td><input name="category" type="text" class="text-input small-input" id="category" value="" />                </td>
                <td><?php 
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
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </form>
        </tbody>
        
        <tfoot>
            <tr>
                <td colspan="6"><div class="bulk-actions align-left">
                        <a class="button" href="<?php echo site_url()."/pro/sort/?id=$ID"?>">Sort</a>
                    </div>
                    <div class="clear">
                    </div></td>
            </tr>
        </tfoot>
    </table>
</div>
<?php include "sections/s_pro_footerjs.php"?>
</body>
</html>
