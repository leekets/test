<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php foreach($row->result() as $rsRow):?>
<div>
<?php echo $rsRow->subTitle;?>
</div>
<div>
<?php echo $rsRow->subject;?>
</div>
<?php endforeach;?>