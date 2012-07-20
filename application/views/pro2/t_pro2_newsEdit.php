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
    <form class="form-horizontal" action="<?php echo site_url("/pro2/news_sql?id=$row->ID&pid=$row->categoryId&act=update")?>" method="post">
        <fieldset>
            <legend>Category Edit</legend>
            <div class="control-group">
                <label class="control-label" for="subTitle">subTitle:</label>
                <div class="controls">
                    <input name="subTitle" type="text" class="input-xlarge" id="subTitle" value="<?=$row->subTitle?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="subject">subject:</label>
                <div class="controls">
                    <?php echo form_input(array("class"=>"text-input large-input","name"=>"subject","value"=>$row->subject))?>
                </div>
            </div>

            <div class="form-actions">
                <input name="id" type="hidden" value="<?php echo $row->ID;?>" />
                <input name="categoryId" type="hidden" value="<?php echo $row->categoryId;?>" />
                <button class="btn btn-primary" type="submit">Save changes</button>
                <button class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>
</div>
<?php include ("sections/s_pro2_footer.php")?>
</body>
</html>
