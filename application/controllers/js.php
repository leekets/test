<?php 
class Js extends CI_Controller{
		
	function __construct(){
		parent::__construct();
	}
	
	function test(){
		$this->load->view("js/t_js_test");
	}
	
	function test2(){
		$this->load->view("js/t_js_test_v2");
	}

	function testPHP(){
		$this->load->view("js/t_js_test_php");
	}
}