<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Test Function</title>
<?php include "sections/s_pro2_head.php";?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_pro2_topnav.php";?>
<div class="container">
    <div class="btn-group mbl">
        <?php include ("sections/s_pro2_buttongroup.php")?>
    </div>
    <table class="table table-bordered table-striped">
    	<thead>
            <tr>
                <th></th>
                <th>Category</th>
                <th>Action</th>
                <th>TTS</th>
                <th>List</th>
                <th>Sort</th>
            </tr>
        </thead>
        <tbody data-bind="template: 'cateList'">
            <?php echo '<script type="text/x-jquery-tmpl" id="cateList">' ?>
            {{each cateList}}
            <tr>
                <td><input type="checkbox"></td>
                <td><a class="f_index_url" href="javascript:viod(0);" data-type="${type}" data-id="${ID}" data-site="<?php echo site_url();?>">${category}</a></td>
                <td>
                    <a href="<?php echo site_url() ?>/pro2/cateEdit?id=${ID}" title="Edit"><i class="icon-edit"></i></a> 
                    <a href="javascript:void(0)" url="<?php echo site_url() ?>/pro2/cate_sql?id=${ID}&act=del&pid=<?php echo $ID;?>" class="f_del"><i class="icon-remove"></i></a>
                    <a href="<?php echo site_url("/pro2/testCn?id=")?>${ID}" title="Edit"><i class="icon-pencil"></i></a>
                </td>
                <td>
                	<a href="<?php echo site_url()?>/pro2/out?id=${ID}&act=lrc" target="_blank">Lrc</a>
                	<a href="<?php echo site_url()?>/pro2/out?id=${ID}&act=txt" target="_blank">Txt</a>
                </td>
                <td><a data-bind="attr: {href: '<?php echo site_url("/phptts/?id=")?>'+ID+'&arr='}">TTS</a> | List</td>
                <td>Sort</td>
            </tr>
            {{/each}} <?php echo '</script>' ?>
        </tbody>        
    </table>
    <form action="<?php echo site_url()?>/pro2/cate_sql?mode=news&act=insert&page=sql&pid=<?php echo $ID?>" method="post" class="form-inline fl_l">
    	<?= form_hidden(array ("parentid"=>$ID,"type"=>$type,"template"=>""));?>
        <input name="category"  type="text" class="input" placeholder="Add New" id="category" >
        <button type="submit" class="btn">Add</button>
    </form>
    <div class="btn-group fl_r">
        <?php include ("sections/s_pro2_buttongroup.php")?>
    </div>
</div>
<?php include ("sections/s_pro2_footer.php")?>
<script type='text/javascript'>
	<?php include ("js/js_pro2_index_js.js")?>
</script>

</body>
</html>
