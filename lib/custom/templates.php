<?php

function selectTemplate($template_name) {
    return get_template_part('templates/' . $template_name);
}
add_action('get_header', 'selectTemplate', 10, 1);
add_action('get_footer', 'selectTemplate', 10, 1);

function fik_product_template( $template ){
    if ( get_post_type() === 'fik_product' ) {
        $new_template = locate_template( array( "templates/content-fik_product.php" ) );
        if ( "" !== $new_template ) {
            return $new_template ;
        }
    }

    return $template;
}
add_filter( 'template_include', 'fik_product_template');

function add_appearance_custom_css() {
    $custom_css = get_theme_mod( 'fik_theme_css', '' );
    if ($custom_css!=='') {
        echo '<style type="text/css" id="fik_custom_css">'.$custom_css.'</style>';
    }
}
add_action('wp_head', 'add_appearance_custom_css');

