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
		$sql="select * from news_category where parentid=$ID order by sortnum";
		$this->load->view("pro2/t_pro2_index.php",array('row'=>$this->db->query($sql),'ID'=>$ID));
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
	
	function cateEdit(){
		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		$sql="select * from news_category where id=".$id;
		$this->load->view("pro2/t_pro2_cateEdit.php",array('row'=>$this->db->query($sql)->row()));
	}

	function cateEdit2(){
		//必要参数
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		$sql="select * from news_category where id=".$id;
		$this->load->view("pro2/t_pro2_cateEdit2.php",array('row'=>$this->db->query($sql)->row()));
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
		redirect(site_url()."/pro2?id=".$pid);
	}
}
?>