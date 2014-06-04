<?php dynamic_sidebar('sidebar-store-main'); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<div class="row">
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content-fik_product', get_post_format()); ?>
<?php endwhile; ?>
</div>

<?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
        <ul class="pager">
            <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
            <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
        </ul>
    </nav>
<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-store-bottom' ) ) : ?>
    <?php dynamic_sidebar('sidebar-store-bottom'); ?>
<?php endif; ?>
