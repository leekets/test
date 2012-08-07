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
	});