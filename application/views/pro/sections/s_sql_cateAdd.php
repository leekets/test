<form action="<?php echo site_url()?>/pro/cate_sql?mode=news&act=insert&page=sql&pid=<?php echo $ID?>" method="post">
    <tr>
        <td></td>
        <td><input name="category" type="text" class="text-input small-input" id="category" value="" /></td>
        
        <td><input type="hidden" name="parentid" value="<?php echo $ID?>" />
            <input class="button" type="submit" value="Submit" /></td>
    </tr>
</form>
