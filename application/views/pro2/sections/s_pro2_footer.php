<script src="<?php echo base_url();?>/js/jquery.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-transition.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-alert.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-modal.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-dropdown.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-tab.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-tooltip.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-popover.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-button.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-collapse.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-carousel.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/bootstrap-typeahead.js"></script>
<script src="<?php echo base_url("3rd/bootstrap");?>/js/application.js"></script>
<script src="<?php echo base_url()."js/"?>ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url()."js/"?>ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url()."js/"?>ui/jquery.ui.mouse.js"></script>
<script src="<?php echo base_url()."js/"?>ui/jquery.ui.sortable.js"></script>
<script src="<?php echo base_url();?>js/jquery.tmpl.js"></script>
<script src="<?php echo base_url();?>js/knockout-2.1.0.js"></script>
<script>
$(function(){
	$(".f_del").click(function(){
		$url=$(this).attr("url");	
//		alert($url);
		if(confirm('Are you sure delete?')){
			location.href=$url;	
		}
	});
});
</script>