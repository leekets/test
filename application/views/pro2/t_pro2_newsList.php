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
    <table class="table table-bordered table-striped f_table">
        <thead>
            <tr>
                <th><input class="check-all" type="checkbox" /></th>
                <th>Answer(Subtitle)</th>
                <th>Question(Subject)</th>
                <th>Hot</th>
                <th width="200" nowrap="nowrap">Action</th>
            </tr>
        </thead>
        <tbody data-bind="template: 'newsList'">
            <?php echo '<script type="text/x-jquery-tmpl" id="newsList">' ?>
        {{each newsList}}
        <tr class="f_tr_hot${hot}">
            <td><input class="check-all" type="checkbox" /></td>
            <td>${subTitle}</td>
            <td>${subject}</td>
            <td>${hot}</td>
            <td><!---->
                <a href="<?php echo site_url()?>/pro2/NewsEdit?id=${ID}" title="Edit"><i class="icon-edit"></i></a>
                <!---->
                <a href="javascript:void(0)" url="<?php echo site_url() ?>/pro2/news_sql?id=${ID}&act=del&pid=${categoryId}" class="f_del"><i class="icon-remove"></i></a>
                <!----></td>
        </tr>
        {{/each}}
        <!---->
        <?php echo '</script>' ?>
        </tbody>
        
        <tfoot>
            <tr>
                <form class="well form-inline" action="<?php echo site_url()?>/pro2/news_sql?act=insert&pid=<?=$ID?>" method="post">
                    <td></td>
                    <td><?php echo form_input(array('name'=>"subTitle","class"=>"mtn"))?></td>
                    <td><?php echo form_input(array('name'=>"subject","class"=>"mtn"))?></td>
                    <td>&nbsp;</td>
                    <td>
                    	<input type="hidden" name="categoryId" value="<?php echo $ID?>"/>
                        <input type="submit" value="Submit" class="mtn btn" />
                    </td>
                </form>
            </tr>
        </tfoot>
    </table>
	<!--  -->
    <a class="btn" href="<?php echo site_url("/pro2/hotReset?id=$ID")?>">Reset Hot</a>
	<!--     -->
    <a class="btn" href="<?php echo site_url("/pro2/testCn?id=$ID")?>">Cn Test</a>
    <!--  -->
    <a class="btn f_hot">Show Hot only</a>
</div>
<?php include ("sections/s_pro2_footer.php")?>
</body>
</html>
<script type='text/javascript'>//<![CDATA[ 				  
    var viewModel = {
        newsList: ko.observableArray(<?php echo JSON_encode($row->result());?>)
    }
    ko.applyBindings(viewModel);

    $(function(){
    	
		$(".f_hot").click(function(){
			//alert("work");
			$(".f_table tbody tr").hide();
			$(".f_table tbody tr.f_tr_hot1").show();
		});
	});
</script>