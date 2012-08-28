<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>图书分页显示</title>
    </head>
    <body>
        
        <?php foreach($results->result() as $rsRow): ?>
        <div><?php echo $rsRow->subTitle ?> | <?php echo $rsRow->subject ?></div>
        <?php endforeach;?>
        <?php // echo $this->table->generate($results);?>
        <?php // echo $this->pagination->create_links();?>
    </body>
</html
