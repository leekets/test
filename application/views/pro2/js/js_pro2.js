$(function(){
	$(".f_index_url").click(function(){
		n_type=$(this).attr("data-type");
		n_id=$(this).attr("data-id");
		n_site=$(this).attr("data-site");
		if(n_type=="����"){
			window.location="?id="+n_id+"&category="+n_type;
		}
		if(n_type=="�б�ҳ"){
		   window.location=n_site+"/pro2/newsList/?id="+n_id;
		}
	});
});