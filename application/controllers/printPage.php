<?php
class PrintPage extends CI_controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->database();
		$this->load->helper("html");
	}
	function index(){
		$this->load->view("printPage/t_printPage_index.php");
	}
	
	function sort(){
		$b=766;
		$size=8;
		$totle=30;
		for($i=0;$i<$totle;$i++){
			for($i2=0;$i2<$size;$i2++){
				echo $b."<br>";
			}
			$b++;
			//echo $i+1.";".($b++)."<br/>";
		}
	}
	
	function sort2(){
		$this->load->view("printPage/t_printPage_sort2.php");
	}
		
	function word(){
		$this->load->view("printPage/t_printPage_word.php");
	}
	
	function data(){
		$this->load->view("printPage/t_printPage_data.php");
	}
	
	function test2(){
		$this->load->view("printPage/t_printPage_test2.php");
	}
	
	function testJs(){
		$this->load->view("printPage/t_printPage_testjs.php");
	}
	

	function tree(){
		$id=$this->input->get("id");
		if($id==""){
			$id=0;
		}
		$this->load->view("printPage/t_printPage_tree.php");
	}
	
	function test(){
		$this->load->view("printPage/t_printPage_test.php");
	}
	
	function jump(){
		$this->load->view("printPage/t_printPage_jump.php");
	}
	function view(){
		$this->load->view("printPage/t_printpage_view.php");
	}
	function output(){
		$this->load->view("printPage/t_printpage_output.php");	
	}
	function JSON(){
		$this->load->view("printPage/t_printpage_json.php");
	}
}