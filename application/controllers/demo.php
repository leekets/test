<?php
class Demo extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
        $this->load->helper("form");
    }
    
	function cate(){
        //必要参数
        $id=$this->input->get("id");
        $act=$this->input->get("act");
        $pid=$this->input->get("pid");

        //初始化参数
        if($id==""){$id=0;}
        if($act==""){$act="list";}

        //数组

        if($act=="list"){
            $ID=$id;
            if($ID==0){ $type="分类";}else{$type="列表页";}
            $sql="select * from news_category where parentid=$ID order by sortnum";
            $this->load->view("demo/t_demo_cate_list.php",array('row'=>$this->db->query($sql),'ID'=>$ID));
        }
        if($act=="edit"){
            $sql="select * from news_category where id=".$id;
            $this->load->view("demo/t_demo_cate_edit.php",array('row'=>$this->db->query($sql)->row()));    
        }
        if($act=="insert"){
	      	$data=array(
	            'category'=>$this->input->post('category'),
	            'parentid'=>$this->input->post('parentid'),
	        );
            $this->db->insert('news_category',$data);    
            redirect(site_url()."/demo/cate?id=".$pid);
        }
        if($act=="update"){
        	$data=array(
				'category'=>$this->input->post('category'),
				'parentid'=>$this->input->post('parentid'),
				'template'=>$this->input->post('template'),
				'type'=>$this->input->post('type')
			);
            $this->db->where("ID",$id);
            $this->db->update('news_category',$data);
            redirect(site_url()."/demo/cate?id=".$pid);
        }
        if($act=="del"){
            $this->db->where("ID",$id);
            $this->db->delete("news_category");
            redirect(site_url()."/demo/cate?id=".$pid);
        }

    }
}
?>