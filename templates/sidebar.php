<div class="row">
<?php if(is_single()){ ?>
<?php dynamic_sidebar('sidebar-blog-post'); ?>
<?php }else{ ?>
<?php dynamic_sidebar('sidebar-blog-main'); ?>
<?php } ?>
</div>

