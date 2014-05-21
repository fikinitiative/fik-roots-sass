<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <?php dynamic_sidebar('sidebar-footer-two'); ?>
    <?php dynamic_sidebar('sidebar-footer-three'); ?>
    <?php dynamic_sidebar('sidebar-footer-four'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
