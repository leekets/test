$(function(){
	$(".f_del").click(function(){
		$url=$(this).attr("url");	
		if(confirm('Are you sure delete?')){
			location.href=$url;	
		}
	});
});
