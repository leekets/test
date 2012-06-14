<?php
class pro extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper("url");
		$this->load->helper("form");
	}
	
	function index(){
		$this->load->view("pro/t_pro_index.php");
	}
	
	function index_v2(){
		$this->load->view("pro/t_pro_index_v2");
	}
	
	function autoSort(){
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		
		if($act=="autoSort"){
			$b=$this->input->get("b");
			$size=$this->input->get("size");
			$total=$this->input->get("total");
			for($i=0; $i<$total; $i++){
				for($i2=0;$i2<$size;$i2++){
					echo $b."<br>";
				}
				$b++;
			}
		}else{
			$data=array(
				'id'=>$id
			);
			$this->load->view("pro/t_pro_autoSort",$data);
		}
	}
	
	function autoCate(){
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$category=$this->input->get("category");
		if($act=="autoCate"){
			$num=$this->input->get("num");
			for($i=1;$i<$num+1;$i++){
				$display="";
				if($act=="autoCate"){
					$data=array(
						'category'=>$category."-".$i,
						'parentId'=>$id,
						'sortNum'=>$i,
						'type'=>"列表页"
					);
					$this->db->insert("news_category",$data);
				}
			}
		}else{
			$display="none";
		}
		$data=array(
			'id'=>$id,
			'category'=>$category,
			'display'=>$display
		);
		$this->load->view("pro/t_pro_autoCate",$data);
	}
	
	function elist(){
		$this->load->view("pro/t_pro_elist");
	}
	
	function tts(){
		
		$id=$this->input->get("id");
		$sql="select * from news where categoryid=$id order by id asc";
		//echo "$sql";
		$query=$this->db->query($sql);
		$tts="";
		foreach($query->result() as $row):
		
			$en=$row->subTitle;
			//echo $en;
			if($tts==""){
				$tts=$en;
			}else{
				$tts="$tts,$en";
			}
		endforeach;
		echo $tts;
	}
	
	function cate_sql(){
		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		
		$data=array(
			'category'=>$this->input->post('category'),
			'parentid'=>$this->input->post('parentid'),
			'template'=>$this->input->post('template'),
			'type'=>$this->input->post('type')
		);
		

		if($act=="insert"){
			$this->db->insert('news_category',$data);	
		}
		if($act=="update"){
			$this->db->where("ID",$id);
			$this->db->update('news_category',$data);
		}
		if($act=="del"){
			$this->db->where("ID",$id);
			$this->db->delete("news_category");
		}
		redirect(site_url()."/pro?id=".$pid);
	}
	function news_sql(){
//
//		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");

		$data=array(
			'subTitle'=>$this->input->post('subTitle'),
			'subject'=>$this->input->post('subject'),
			'categoryId'=>$this->input->post('categoryId')
		);
		
		
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
		//print_r($data);
		redirect(site_url()."/pro/newsList?id=".$pid);
		
	}
	
	function cateEdit(){
		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		$sql="select * from news_category where id=".$id;
		$this->load->view("pro/t_pro_cateEdit.php",array('row'=>$this->db->query($sql)->row()));
	}
	
	function newsEdit(){
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		$sql="select * from news where id=".$id;
		$this->load->view("pro/t_pro_newsEdit.php",array('row'=>$this->db->query($sql)->row()));
		
	}
	
	function newsList(){
		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		$this->load->view("pro/t_pro_newsList.php");		
	}
	
	function sort(){
		$act=$this->input->get("act");
		if($act==""){
			$this->load->view("pro/t_pro_sort.php");
		}else{
			$id=$this->input->get("id");
			$arr=$this->input->get("arr");
			$arr=explode(",",$arr);
			for($i=0; $i<count($arr); ++$i){
				$this->db->where("id",$arr[$i]);
				$this->db->update("news_category",array("sortnum"=>$i));
				//echo $arr[$i].";".$i."<br>";
			}
			//Q:跳转
			//A:redirect
			redirect(site_url()."/pro?id=".$id);
		}
	}
}
