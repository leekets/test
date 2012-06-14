<!DOCTYPE html>
<html lang="en">
<head>
<title>Test Function Pro</title>
<?php include "sections/s_pro_head_v2.php"?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_pro_common_topnavbar.php"?>
<div class="container">
    <form action="<?php echo site_url()?>/pro/cate_sql?id=<?php echo $row->ID;?>&pid=<?php echo $row->parentId;?>&act=update" method="post">
        <fieldset>
        <legend>Category Edit</legend>
        <div class="control-group">
            <label class="control-label" for="category">
                Category
            </label>
            <input name="category" type="text" class="text-input large-input" value="<?php echo $row->category;?>" />
        </div>
        <div class="control-group">
            <label class="control-label" for="type">
                Type
            </label>
            <input name="type" type="text" class="text-input large-input" id="type" value="<?php echo $row->type;?>" />
        </div>
        <div class="control-group">
            <label class="control-label" for="template">
                Template
            </label>
            <input name="template" type="text" class="text-input large-input" id="template" value="<?php echo $row->template;?>" />
        </div>
        <div class="form-actions">
            <input name="id" type="hidden" value="<?php echo $row->ID;?>" />
            <input name="parentid" type="hidden" value="<?php echo $row->parentId;?>" />
            <input class="btn btn-primary" type="submit" value="Submit" />
        </div>
        </fieldset>
        <!-- End .clear -->
    </form>
</div>
</body>
<!-- Download From www.exet.tk-->
</html>
