<article <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'blog-medium', array('class' => "img-responsive",) ) ?>
  </a>
  <header>
  	<div class="top">
    	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    	<span class="coment-count"><?php comments_number('(No Comments)', '(One Comment)', '(% Comments)' );?></span>
	</div>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
