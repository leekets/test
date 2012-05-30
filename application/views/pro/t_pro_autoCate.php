<!DOCTYPE html>
<html lang="en">
<head>
<title>Auto Tree</title>
<?php include "sections/s_pro_head_v2.php"?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_pro_topnavbar.php"?>
<style>
.none { display:none; }
</style>
<div class="container">
    <div class="control-group">
        <form class="well form-inline" action="" method="get">
            <input type="text" class="input-small" name="num" value="20">
            <input type="text" class="input-small" name="category" value="<?php echo $category ?>">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="hidden" name="act" value="autoCate">
            <button type="submit" class="btn">Submit</button>
        </form>
        <div class="alert alert-success <?=$display?>">
            <a class="close" data-dismiss="alert">×</a> <span class="alert-heading">Will done!</span>&nbsp;&nbsp; <a href="#" onclick="window.opener=null;window.open('','_self');window.close();" class="btn btn-primary">关闭</a >
        </div>
    </div>
</div>
<?php include "sections/s_pro_footerjs.php"?>
</body>
</html>