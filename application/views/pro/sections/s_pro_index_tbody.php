<?php 
	// TODO:制作pid函数

	$ID=$this->input->get("id");
	if($ID==""){
		$ID=0;	
	}
//	$sql="select * from news_category where id=".$ID;
//	$query=$this->db->query($sql);
//	$row=$query->row();
//	$Pid=$row->parentId;
//	echo $Pid;
	
	$sql="select * from news_category where parentid=$ID order by sortnum asc";
	$query=$this->db->query($sql);
	foreach($query->result() as $row):
	$type=$row->type;
	if($type=="分类"){
		$CategoryLink="?id=$row->ID&category=$row->category";	
	}
	if($type=="列表页"){
		$CategoryLink=site_url()."/pro/newsList/?id=$row->ID";	
	}
?>

<tr>
    <td><input type="checkbox" /></td>
    <td><a href="<?php echo $CategoryLink?>"><?php echo $row->category;?></a></td>
    <td><!-- Icons --> 
        <!-- Edit --> 
        <a href="<?php echo site_url() ?>/pro/cateEdit?id=<?php echo $row->ID; ?>" title="Edit"><img src="<?php echo base_url() ?>js/resources/images/icons/pencil.png" alt="Edit" /></a> 
        <!-- Del --> 
        <a href="javascript:void(0)" class="f_del"url="<?php echo site_url() ?>/pro/cate_sql?id=<?php echo $row->ID;?>&act=del&pid=<?php echo $row->parentId;?>" title="Delete"><img src="<?php echo base_url() ?>js/resources/images/icons/cross.png" alt="Delete" /></a>
        <?php 
        	$sql2="select * from news where categoryid=$row->ID order by id asc";
        	$query2=$this->db->query($sql2);
        	$tts="";
        	foreach($query2->result() as $row2):
        		$en=$row2->subTitle;
        		if($tts==""){
					$tts=$en;        			
        		}else{
        			$tts="$tts,$en";
        		}
        	endforeach;
        ?>
        <a href="http://localhost/test073/php-TTS/index_arr.php?arr=<?php echo $tts?>">tts</a> 
        <a href="<?php echo site_url()?>/pro/elist?id=<?php echo $row->ID; ?>">list</a>
        <a href="<?php echo site_url()?>/pro/autoSort?id=<?php echo $row->ID; ?>" target="_blank">sort</a>
        </td>
</tr>
<?php 
	endforeach;
?>
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
