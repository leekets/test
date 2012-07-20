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
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th><input class="check-all" type="checkbox" /></th>
                <th>Answer(Subtitle)</th>
                <th>Question(Subject)</th>
                <th width="200" nowrap="nowrap">Action</th>
            </tr>
        </thead>
        <tbody data-bind="template: 'newsList'">
            <?php echo '<script type="text/x-jquery-tmpl" id="newsList">' ?>
        {{each newsList}}
        <tr>
            <td><input class="check-all" type="checkbox" /></td>
            <td>${subTitle}</td>
            <td>${subject}</td>
            <td><!---->
                <a href="<?php echo site_url()?>/pro2/NewsEdit?id=${ID}" title="Edit"><i class="icon-edit"></i></a>
                <!---->
                <a href="javascript:void(0)" url="<?php echo site_url() ?>/pro2/news_sql?id=${ID}&act=del&pid=${categoryId}" class="f_del"><i class="icon-remove"></i></a>
                <!----></td>
        </tr>
        {{/each}} <?php echo '</script>' ?>
        </tbody>
        <tfoot>
        	<form class="well form-inline" action="<?php echo site_url()?>/pro2/news_sql?act=insert&pid=<?=$ID?>" method="post">
        	<tr>
        		<td></td>
        		<td><?php echo form_input(array('name'=>"subTitle","class"=>"mtn"))?></td>
        		<td><?php echo form_input(array('name'=>"subject","class"=>"mtn"))?></td>
        		<td>
        			<input type="hidden" name="categoryId" value="<?php echo $ID?>"/>
    				<input type="submit" value="Submit" class="mtn btn" />
        		</td>
        	</tr>
        	</form>
        </tfoot>
    </table>
</div>
<?php include ("sections/s_pro2_footer.php")?>
</body>
</html>
<script type='text/javascript'>//<![CDATA[ 				  
    var viewModel = {
        newsList: ko.observableArray(<?php echo JSON_encode($row->result());?>)
    }
    ko.applyBindings(viewModel);
</script>