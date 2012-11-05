<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Test Function</title>
<?php include "sections/s_pro2_head.php";?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<?php include "sections/s_pro2_topnav.php";?>
<style>
.a_visited:visited { color:#f00;}
</style>
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
                <th>List</th>
                <th>Sort</th>
            </tr>
        </thead>
        <tbody data-bind="foreach:cateList" >
            <tr>
                <td><input type="checkbox"></td>
                <td><a
                		data-bind="
                		attr: {
                			'data-type': type,
                			'data-id': ID,
                			'data-site': '<?php echo site_url();?>'
                		},
                		text: category"
                	 class="f_index_url" href="javascript:viod(0);"></a></td>
                <td><a data-bind="attr:{ href: '<?php echo site_url() ?>/pro2/cateEdit?id='+ID}" title="Edit"><i class="icon-edit"></i></a> <a data-bind="attr:{
                    	url: '<?php echo site_url() ?>/pro2/cate_sql?id='+ID+'&act=del&pid='+parentId
                    }"
                    href="javascript:void(0)" class="f_del"><i class="icon-remove"></i></a> <a data-bind="attr:{ href: '<?php echo site_url("/pro2/testCn?id=")?>'+ID}" title="Edit"><i class="icon-pencil"></i></a></td>
                <td><a data-bind="attr: {href: '<?php echo site_url("/phptts/?id=")?>'+ID+'&arr='}" class="a_visited">TTS</a> | List</td>
                <td><a data-bind="attr: {href: '<?php echo site_url("/pro/autoSort?id=")?>'+ID}">Sort</a></td>
            </tr>
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
<?php include ("sections/s_pro2_modal_tree.php")?>
<?php include ("sections/s_pro2_modal_print.php")?>
<?php include ("sections/s_pro2_footer.php")?>
<script type='text/javascript'>
	var viewModel = {
        cateList: ko.observableArray(<?php echo JSON_encode($row->result());?>)
    }
    ko.applyBindings(viewModel);

	$(function(){
		$(".f_index_url").click(function(){
			n_type=$(this).attr("data-type");
			n_id=$(this).attr("data-id");
			n_site=$(this).attr("data-site");
			if(n_type=="分类"){
				window.location=n_site+"/pro2/cate_sql/?id="+n_id+"&act=list";
			}
			if(n_type=="列表页"){
			   window.location=n_site+"/pro2/newsList/?id="+n_id;
			}
		});	

		$(".f_autoTree").click(function(){
			//alert($(this).attr("f_category"));
			$("#modals_autoTree .f_text_category").attr({
				value: $(this).attr("f_category")
			});
			$("#modals_autoTree .f_text_id").attr({
				value: $(this).attr("f_id")
			});
		    $('#modals_autoTree').modal({
		    	show: true
		   	})
		});	
	});
	$(function(){
		$(".f_ajaxPrint").click(function(){
			//alert("ajax");
			url=$(this).attr("_href");
			$.get(url,function(result){
				$(".f_ajaxEndPrint Strong").after(result);
				$(".f_ajaxEndPrint").show();
			});
		});	
		$(".f_b_printCate").click(function(){
			$("#modals_printPage").modal({
		    	show: true				 
			});
			document.getElementById("f_printCate").click();
			//$("#modals_printPage #f_printCate").click;
		});
	});
</script>
</body>
</html>
