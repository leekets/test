<?php 
class Js extends CI_Controller{
		
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	function test(){
		$this->load->view("js/t_js_test");
	}
	
	function testArr(){
		$this->load->view("js/t_js_testArr");
	}
	
	function testVoice(){
		$this->load->view("js/t_js_testVoice");
	}
	
	function test2(){
		$this->load->view("js/t_js_test_v2");
	}

	function testPHP(){
		$this->load->view("js/t_js_test_php");
	}
	function jsData(){
		$this->load->view('js/t_js_jsData');
	}
	function testSelect(){
		$this->load->view('js/t_js_testSelect');
	}
	function common(){
		$this->load->view('js/t_js_common');
	}
}