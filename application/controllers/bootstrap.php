<?php 
class Bootstrap extends CI_Controller{
		
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	function index(){
		$this->load->view("bootstrap/t_bootstrap_index");
	}
	
	function test2(){
		$this->load->view("js/t_js_test_v2");
	}
}