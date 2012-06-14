<!-- Begin cate_block -->
<!-- 需要判断act -->

<form action="<?php echo site_url()?>/pro/cate_sql?id=<?php echo $row->ID;?>&pid=<?php echo $row->parentId;?>&act=update" method="post">
    <fieldset>
    <p>
        <label>
            Category
        </label>
        <input name="category" type="text" class="text-input large-input" value="<?php echo $row->category;?>" />
    </p>
    <p>
        <label>
            Type
        </label>
        <input name="type" type="text" class="text-input large-input" id="type" value="<?php echo $row->type;?>" />
    </p>
    <p>
        <label>
            Template
        </label>
        <input name="template" type="text" class="text-input large-input" id="template" value="<?php echo $row->template;?>" />
    </p>
    <p>
        <input name="id" type="hidden" value="<?php echo $row->ID;?>" />
        <input name="parentid" type="hidden" value="<?php echo $row->parentId;?>" />
        <input class="button" type="submit" value="Submit" />
    </p>
    </fieldset>
    <div class="clear">
    </div>
    <!-- End .clear -->
</form>
<!-- End cate_block -->
