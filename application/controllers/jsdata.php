<?php
class Jsdata extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function index(){
		$this->load->view('jsdata/t_test1_index');
	}
}