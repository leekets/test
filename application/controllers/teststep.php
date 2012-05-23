<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teststep extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->database();
	}

	public function index()
	{
		$query=$this->db->query("select * from news_category where parentid=0 order by sortnum");
		$this->load->view('teststep/t_teststep_index',array('query'=>$query));
	}
	public function cate()
	{
//		$query=$this->db->query("select * from news_category where parentid=0");
		$this->load->view('listview/t_listview_cate');
	}
}