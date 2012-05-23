<?php 
	class Arr extends ci_controller{
		function __construct(){
			parent::__construct();	
			$this->load->database();		
		}
		function index(){
			$this->load->view("arr/t_arr_index");
		}
		
	}
?>