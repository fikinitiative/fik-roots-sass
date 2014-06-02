<?php setup_postdata($post); ?>
<?php if ( is_tax('store-section') || is_post_type_archive( 'fik_product' ) || is_home() || is_page_template( 'page-templates/store-front-page.php' ) || is_search() ) : // Only display product excerpt for home, archive page, store section and search ?>

    <article class="product-preview col-sm-3">
    <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="product-image">
    <?php the_post_thumbnail( 'product-thumbnail', array('class' => 'img-responsive') ); ?>    
    </a>
    <?php } ?>
    <div class="details-area">
    <div class="product-price pull-right">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_fik_price(); ?></a>
    </div>
    <h2 class="product-name">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <div class="product-sections">
        <?php echo get_the_term_list($post->ID, 'store-section', '', ', ', '' ) ?>
    </div>
    </div>
    </article>

<?php else: ?>
    <?php dynamic_sidebar('sidebar-product-top'); ?>

    <article itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="container">
            <?php if(has_post_thumbnail()) : ?>
            <div class="product-images col-sm-6">
                <div class="product-image-frame">
                    <?php
                        // We print the product thumbnail
                        the_post_thumbnail('product-main',array('class' => 'img-thumbnail'));
                    ?>
                </div>
                <?php
                    // this function outputs a <ul> with class="product-image-thumbnails" where each <li> is a thumbnil that links to a biger image (sizes specified in function).
                    // We also pass the size of the zoom image which url and size are returned as data attributes of the img. The last 2 sizes are the max width of the video thumbnail and the max width of a video embed
                    the_product_gallery_thumbnails(array(64,64) , array(620,9999), array(1240,930),64,620,FALSE);
                    ?>
            </div>
            <?php endif; ?>

            <div class="product-info col-sm-6">
                <header class="col-sm-10">
                    <h1 itemprop="name" class="product-title"><?php the_title(); ?></h1>
                </header>
                <div class="price col-sm-2">
                <?php the_fik_price(); ?>
                </div>
                <div class="product-options col-sm-12">
                <?php the_fik_add_to_cart_button(); ?>
                </div>
                <div class="product-description col-sm-12">
                <?php the_content(); ?>
                </div>
                <?php if ( is_active_sidebar( 'sidebar-product-main' ) ) : ?>
                    <footer class="col-sm-12">
                    <?php dynamic_sidebar('sidebar-product-main'); ?>
                    <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
                    </footer>
                <?php endif; ?>
            </div>

        <?php comments_template('/templates/comments.php'); ?>
    </article>

    <?php if ( is_active_sidebar( 'sidebar-product-bottom' ) ) : ?>
        <div class="col-sm-12">
        <?php dynamic_sidebar('sidebar-product-bottom'); ?>
        </div>
    <?php endif ?>

<?php endif; ?>
