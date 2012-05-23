<?php
class ProNews extends CI_controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$id=$this->input->get("id");
		$pid=$this->input->get("pid");
		$act=$this->input->get("act");
		
		$this->load->view("proNews/t_proNews_index.php");
	}
}