<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News List</title>
<?php include "sections/s_pro_head.php"?>
<?php include "sections/s_pro_cate_head.php"?>
</head>
<body page="category_list">
<div id="body-wrapper"> 
    <?php include "sections/s_pro_sidebar.php"?>
    <div id="main-content">
        <div class="content-box">
            <div class="content-box-header">
                <h3>News List</h3>
                <div class="clear"></div>
            </div>
            <div class="content-box-content">
                <div class="tab-content default-tab" id="tab1">
                    <table>
                        <thead>
                            <tr>
                                <th><input class="check-all" type="checkbox" /></th>
                                <th>Answer(Subtitle)</th>
                                <th>Question(Subject)</th>
                                <th width="200" nowrap="nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php 
                        		$id=$this->input->get("id");
                        		$sql="select * from news where categoryid=".$id;
                        		$query=$this->db->query($sql);
                        		foreach($query->result() as $row ):	
                        		$NewsLink=site_url()."/pro/NewsEdit?id=".$row->ID;
                        	?>
                            <tr>
                                <td><input type="checkbox" /></td>
                                <td><a href="<?php echo $NewsLink?>"><?php echo $row->subTitle?></a></td>
                                <td><a href="<?php echo $NewsLink?>"><?php echo $row->subject?></a></td>
                                <td><!-- Icons --> 
                                    <a href="<?php echo site_url()?>/pro/newsEdit?id=<?php echo $row->ID?>" title="Edit"><img src="<?php echo base_url()?>js/resources/images/icons/pencil.png" alt="Edit" /></a> 
                                    <a href="javascript:void(0)" url="<?php echo site_url();?>/pro/news_sql?id=<?php echo $row->ID;?>&act=del&pid=<?php echo $row->categoryId;?>" class="f_del" title="Delete"><img src="<?php echo base_url()?>js/resources/images/icons/cross.png" alt="Delete" /></a> 
                            </tr>
                            <?php 
                            	endforeach;
                            ?>
                            <?php echo form_open("pro/news_sql?act=insert&pid=$id");?>
							    <tr>
							        <td></td>
							        <td>
							        	<?php echo form_input(array('name'=>"subTitle","class"=>"text-input small-input"))?>
							        </td>
							        <td>
								        <?php echo form_input(array('name'=>"subject","class"=>"text-input small-input"))?>
							        </td>
							        <td>
							        	<?php 
							        		$hidden=array(
							        			"categoryId"=>$id
							        		);
							        		echo form_hidden($hidden);
							        	?>
							            <input class="button" type="submit" value="Submit" /></td>
							    </tr>
							</form>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                	<div class="bulk-actions align-left"> 
                                		<a class="button" href="Index.asp?mode=news&act=addnew&page=sql&pid={NewsCategoryid}">
                                			Add
                                		</a>
                                		<?php include("sections/s_pro_button_index.php")?>
                                	</div>
                                    <div class="clear"></div></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <?php include ("sections/s_pro_footer.php")?>
    </div>
</div>
</body>
</html>
