<footer class="content-info" role="contentinfo">
  <div class="container">
<<<<<<< HEAD
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <?php
        if (has_nav_menu('footer_menu')) :
            wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class' => 'nav nav-pills'));
        endif;
    ?>
=======
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer'); ?></div>
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-two'); ?></div>
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-three'); ?></div>
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-four'); ?></div>
>>>>>>> 923550a692b073d6059ee2dfc94616043124b932
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
