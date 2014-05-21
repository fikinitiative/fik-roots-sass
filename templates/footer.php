<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <?php
        if (has_nav_menu('footer_menu')) :
            wp_nav_menu(array('theme_location' => 'footer_menu', 'menu_class' => 'nav nav-pills'));
        endif;
    ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
