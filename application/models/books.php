<?php
    class Books extends CI_Model {
        public function __construct() {
            parent::__construct();
        }
        function get_books($num,$offset) {
        	if($offset==""){$offset=0;
        	//$num=0;
        	}else{
        		//$num=$offset-100;
        	
        		//$offset=$offset+1;
        		
        	}
        	$sql="select n.subTitle, n.subject from news as n, news_category as c  where c.parentid=1251 and n.categoryid=c.id order by n.id asc LIMIT $offset, $num";
        	// echo $sql;
            $query = $this->db->query($sql);//从数据库中去数据，$num表示取得的数目，$offset表示从什么地方开始取
            //echo $query;
            return $query;
        }
    };
?>
