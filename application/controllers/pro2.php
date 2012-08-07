<?php
class pro2 extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper("url");
		$this->load->helper("form");
	}
	
	function index(){
		$ID=$this->input->get("id");
		if($ID==""){
			$ID=0;	
		}
		redirect(site_url()."/pro2/cate_sql?id=$ID&act=list");

	}
	function cateEdit(){
		//必要参数
		$id=$this->input->get("id");
		redirect(site_url()."/pro2/cate_sql?id=$id&act=edit");
	}
	
	function cate_sql(){
		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		
		//初始化参数
		if($id==""){$id=0;}
		if($act==""){$act="list";}
		
		//数组
		$data=array(
			'category'=>$this->input->post('category'),
			'parentid'=>$this->input->post('parentid'),
			'template'=>$this->input->post('template'),
			'type'=>$this->input->post('type')
		);
		if($act=="list"){
			$ID=$id;
			if($ID==0){ $type="分类";}else{$type="列表页";}
			$sql="select * from news_category where parentid=$ID order by sortnum";
			if($ID!=0){
				$sqlCate="select * from news_category where id=$ID";
				$this->load->view("pro2/t_pro2_index.php",array('row'=>$this->db->query($sql),'rowCate'=>$this->db->query($sqlCate)->row(),'ID'=>$ID,'type'=>$type));
			}else{
				$this->load->view("pro2/t_pro2_index.php",array('row'=>$this->db->query($sql),'ID'=>$ID,'type'=>$type));
			}
			
		}
		if($act=="edit"){
			$sql="select * from news_category where id=".$id;
			$this->load->view("pro2/t_pro2_cateEdit.php",array('row'=>$this->db->query($sql)->row()));	
		}
		if($act=="insert"){
			$this->db->insert('news_category',$data);	
			redirect(site_url()."/pro2?id=".$pid);
		}
		if($act=="update"){
			$this->db->where("ID",$id);
			$this->db->update('news_category',$data);
			redirect(site_url()."/pro2?id=".$pid);
		}
		if($act=="del"){
			$this->db->where("ID",$id);
			$this->db->delete("news_category");
			redirect(site_url()."/pro2?id=".$pid);
		}
		
	}
	
	function newsList(){
		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		$sql="select * from news where categoryid=".$id;
        
		$this->load->view("pro2/t_pro2_newsList.php",array("row"=>$this->db->query($sql),'ID'=>$id));		
	}
	
	function newsEdit(){
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		$sql="select * from news where id=".$id;
		$this->load->view("pro2/t_pro2_newsEdit.php",array('row'=>$this->db->query($sql)->row()));
		
	}
	
	function news_sql(){
//		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");

		$data=array(
			'subTitle'=>$this->input->post('subTitle'),
			'subject'=>$this->input->post('subject'),
			'categoryId'=>$this->input->post('categoryId')
		);
		if($act=="list"){
			
		}
		if($act=="edit"){
			
		}
		if($act=="insert"){
			$this->db->insert('news',$data);
		}
		if($act=="update"){
			$this->db->where("ID",$id);
			$this->db->update("news",$data);
		}
		if($act=="del"){
			$this->db->where("ID",$id);
			$this->db->update("news",$data);
		}

		redirect(site_url()."/pro2/newsList?id=".$pid);
	}
	
	function sort(){
		$ID=$this->input->get("id");
		if($ID==""){
			$ID=0;	
		}
		$act=$this->input->get("act");
		if($act==""){
			$sql="select * from news_category where parentid=$ID order by sortnum";
			$this->load->view("pro2/t_pro2_sort.php",array('row'=>$this->db->query($sql)));
		}else{
			$arr=$this->input->get("arr");
			$arr=explode(",",$arr);
			for($i=0; $i<count($arr); ++$i){
				$this->db->where("id",$arr[$i]);
				$this->db->update("news_category",array("sortnum"=>$i));
				//echo $arr[$i].";".$i."<br>";
			}
			//Q:跳转
			//A:redirect
			redirect(site_url()."/pro2?id=".$ID);
		}
	}
	function hotSet(){
		$ID=$this->input->get("id");
		$arr=$this->input->get("error");
		if($arr!=""){
			$arr=explode(",",$arr);
			for($i=0; $i<count($arr); ++$i){
				$this->db->where("id",$arr[$i]);
				$this->db->update("news",array("hot"=>"1"));
			}
		}
		redirect(site_url("/pro2/newsList/?id=$ID"));
		
	}
	
	function hotReset(){
		$ID=$this->input->get("id");
		$sql="select * from news where categoryid=$ID";
		$query=$this->db->query($sql);
		$arr="";
		foreach($query->result() as $row){
			if($arr==""){
				$arr=$row->ID;
			}else{
				$arr=$arr.",".$row->ID;
			}
		}
		$arr=explode(",",$arr);
		if(count($arr)>0){
			for($i=0; $i<count($arr); ++$i){
				$this->db->where("id",$arr[$i]);
				//echo $i;
				$this->db->update("news",array("hot"=>""));
			}
		}
		redirect(site_url("/pro2/newsList/?id=$ID"));
	}
	
	function out(){
		$ID=$this->input->get("id");
		$act=$this->input->get("act");
		$sql="select * from news where categoryid=$ID and hot=1";
		$query=$this->db->query($sql);
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		foreach($query->result() as $row){
			if($act=="lrc"){
				echo ($row->subTitle." | ".$row->subject."<br>");
			}
			if($act=="txt"){
				echo ($row->subTitle."<br>");
			}
		}
		
	}
	
	function testCn(){
		$this->load->view("pro2/t_pro2_testCn.php");
	}
}
?>