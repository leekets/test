<?php
	$sql="select n.* from news as n, news_category as c  where c.parentid=146 and n.categoryid=c.id order by id asc";
	$query=$this->db->query($sql);
	foreach($query->result() as $row):
?>
+<?php echo $row->subTitle;?></br>
#<?php echo $row->subject;?></br>
&</br>
@</br>
$</br>
<?php 
	endforeach;
?>