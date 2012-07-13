<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Test Function</title>
<?php include "sections/s_pro2_head.php";?>
	<?php 
	$ID=$this->input->get("id");
	?>
<style>
#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; height: 18px; cursor:pointer; }
#sortable li span { position: absolute; margin-left: -1.3em; }
</style>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_pro2_topnav.php";?>
<div class="container">
    <ul id="sortable" data-bind="template: 'cateList'">
        <?php echo '<script type="text/x-jquery-tmpl" id="cateList">' ?> {{each cateList}}
        <li id="${ID}" class="ui-state-default">
            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>${category}
        </li>
        {{/each}} <?php echo '</script>' ?>
    </ul>
    <div class="button-group mtl fl_r">
        <a class="btn btn-primary f_sort">Submit</a> <a class="btn">Back</a>
    </div>
</div>
<?php include ("sections/s_pro2_footer.php")?>

<script src="<?php echo base_url("pro2/js/js_pro2.js");?>"></script>
<script>
	var viewModel = {
        cateList: ko.observableArray(<?php echo JSON_encode($row->result());?>)
    }
    ko.applyBindings(viewModel);
	
	$(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});

	$(".f_sort").click(function(){
		var arr=new Array();
		$("#sortable li").each(function(index){
			arr.push($("#sortable li").eq(index).attr("id"));	
		});
		url="<?php echo site_url()."/pro2/sort"?>?id=<?php echo $ID?>&act=sort&arr="+arr;
		//alert(url);
		window.location.href=url;
	});
</script>
</body>
</html>
