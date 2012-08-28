<?php
    class Book_controller extends CI_Controller {
        public function __construct() {
            parent::__construct();
			//载入url库函数和数据库配置
            $this->load->helper('url');
            $this->load->database();
        }
        public function index() {
            $this->load->library('pagination');//加载分页类
            $this->load->model('books');//加载books模型
            $sql="select n.subTitle, n.subject from news as n, news_category as c  where c.parentid=1251 and n.categoryid=c.id order by n.id asc";
            $res = $this->db->query($sql);//进行一次查询
            $config['base_url'] = base_url().'index.php/book_controller/index';//设置分页的url路径
            $config['total_rows'] = $res->num_rows();//得到数据库中的记录的总条数
            $config['per_page'] = '100';//每页记录数
            $config['first_link'] = '首页';
            $config['last_link'] = '尾页';
            $config['full_tag_open'] = '<p>';
            $config['full_tag_close'] = '</p>'; 
            $this->pagination->initialize($config);//分页的初始化
            $data['results']= $this->books->get_books($config['per_page'],$this->uri->segment(3));//得到数据库记录
            //echo $data['results'];
            $this->load->library('table');//加载table函数
            //$this->table->set_heading('编号','书名','价格','出版社','描述');
            $this->load->view('book_view',$data);//调用视图
        }
        
        function index2(){
        	$sql="select n.subTitle, n.subject from news as n, news_category as c  where c.parentid=1251 and n.categoryid=c.id order by n.id asc";
        	$this->load->view('book_all',array('row'=>$this->db->query($sql)));
        }
    };
?>
