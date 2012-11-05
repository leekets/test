<?php 
class phptts extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper("url");
		$this->load->helper("form");
	}
	
	function index(){
		$id=$this->input->get("id");
		$act=$this->input->get("act");
		$pid=$this->input->get("pid");
		
		$sql="select * from news where categoryid=$id";
		$this->load->view("phptts/t_phptts_index",array("row"=>$this->db->query($sql),"id"=>$id));
	}
}
?>
