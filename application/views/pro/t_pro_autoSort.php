<!DOCTYPE html>
<html lang="en">
<head>
<title>Auto Sort</title>
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
    	<input type="text" class="input-small" name="b" value="<?php echo $id?>">
        <input type="text" class="input-small" name="size" value="7">
        <input type="text" class="input-small" name="total" value="20">
        <input type="hidden" name="act" value="autoSort">
        
        <button type="submit" class="btn">Submit</button>
    </form>
        
    </div>
</div>
<?php include "sections/s_pro_footerjs.php"?>
</body>
</html>