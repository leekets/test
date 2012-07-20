<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Test Function</title>
<?php include "sections/s_demo_head.php";?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_demo_nav.php";?>
<div class="container">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Category</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody data-bind="template: 'cateList'">
            <?php foreach($row->result() as $rsRow): ?>
            <tr>
                <td><?=$rsRow->category;?></td>
                <td><a href="<?= site_url("/demo/cate?id=$rsRow->ID")?>">Jump To Category List</a> | <a href="<?=site_url("/demo/news?id=$rsRow->ID")?>">Jump To News List</a></td>
                <td><a href="<?= site_url("/demo/cate?id=$rsRow->ID&act=edit")?>" title="Edit">Edit</a>&nbsp;|&nbsp;<a url="<?=site_url("/demo/cate?id=$rsRow->ID&act=del")?>" href="javascript:void(0);" class="f_del">Del</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="<?php echo site_url("/demo/cate?id=$ID&act=insert")?>" method="post" class="form-inline fl_l">
        <input name="parentid" type="hidden" id="parentid" value="<?=$ID?>" />
        <input name="category"  type="text" class="input" placeholder="Add New" id="category" />
        <button type="submit" class="btn">Add</button>
    </form>
</div>
<?php include ("sections/s_demo_foot.php")?>
<script>
$(function(){
	$(".f_del").click(function(){
		$url=$(this).attr("url");	
//		alert($url);
		if(confirm('Are you sure delete?')){
			location.href=$url;	
		}
	});
});
</script>
</body>
</html>
