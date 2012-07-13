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
    <form class="form-horizontal" action="<?php echo site_url()?>/pro2/cate_sql?id=<?php echo $row->ID;?>&pid=<?php echo $row->parentId;?>&act=update" method="post">
        <fieldset>
            <legend>Category Edit</legend>
            <div class="control-group">
                <label class="control-label" for="category">Category:</label>
                <div class="controls">
                    <input name="category" type="text" class="input-xlarge" id="category" value="<?=$row->category?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="type">Type:</label>
                <div class="controls">
                    <input name="type" type="text" class="input-xlarge" id="type" value="<?=$row->type?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="category">Template:</label>
                <div class="controls">
                    <input name="template" type="text" class="input-xlarge" id="template" value="<?=$row->template?>">
                </div>
            </div>
            <div class="form-actions">
                <input name="id" type="hidden" value="<?php echo $row->ID;?>" />
                <input name="parentid" type="hidden" value="<?php echo $row->parentId;?>" />
                <button class="btn btn-primary" type="submit">Save changes</button>
                <button class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>
</div>
<?php include ("sections/s_pro2_footer.php")?>
</body>
</html>
