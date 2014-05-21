<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer'); ?></div>
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-two'); ?></div>
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-three'); ?></div>
    <div class="col-sm-3"><?php dynamic_sidebar('sidebar-footer-four'); ?></div>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
