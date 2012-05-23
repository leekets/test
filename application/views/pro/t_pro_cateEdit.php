<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin</title>
<?php include "sections/s_pro_head.php"?>

</head>

<body page="category_list">
<div id="body-wrapper"> <!-- Wrapper for the radial gradient background --> 
    <?php include "sections/s_pro_sidebar.php"?>
    <!-- End #sidebar -->
    
    <div id="main-content"> <!-- Main Content Section with everything -->
        
        <div class="content-box"><!-- Start Content Box -->
            
            <div class="content-box-header">
                <h3>Content box</h3>
                <div class="clear"></div>
            </div>
            <!-- End .content-box-header -->
            
            <div class="content-box-content">
                <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab --> 
                    <?php include "sections/s_pro_cateform.php"?>
                </div>
                <!-- End #tab2 --> 
                
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
