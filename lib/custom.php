<?php
/**
 * Custom functions
 */

function selectTemplate($template_name) {
    return get_template_part('templates/' . $template_name);
}
add_action('get_header', 'selectTemplate', 10, 1);
add_action('get_footer', 'selectTemplate', 10, 1);

function fik_product_template( $template ){
  if ( get_post_type() === 'fik_product' ) :
    $new_template = locate_template( array( "templates/content-fik_product.php" ) );
    if ( "" !== $new_template ) {
      return $new_template ;
    }
    endif;
    var_dump(get_post_type());
    return $template;
}
//add_filter( 'template_include', 'fik_product_template');

function add_appearance_custom_css() {
    $custom_css = get_theme_mod( 'fik_theme_css', '' );
    if ($custom_css!=='') {
        echo '<style type="text/css" id="fik_custom_css">'.$custom_css.'</style>';
    }
}
add_action('wp_head', 'add_appearance_custom_css');

// Create and populate fik stores menus
function add_nav_menu() {
    $menu_name = 'Primary Navigation';
    $menu_location = 'primary_navigation';
    if (!menu_exists($menu_name)) {
        $menu_id = wp_create_nav_menu($menu_name);
        insert_primary_navigation_menu_items($menu_id);
        assign_menu_to_theme_location($menu_id, $menu_location);
    }
}
add_action('after_switch_theme', 'add_nav_menu');

function menu_exists($menu_name) {
    return wp_get_nav_menu_object($menu_name);
}

function assign_menu_to_theme_location($menu_id, $menu_location) {
    if( !has_nav_menu( $menu_location ) ){
        $locations = get_theme_mod('nav_menu_locations');
        $locations[$menu_location] = $menu_id;
        set_theme_mod( 'nav_menu_locations', $locations );
    }
}

function insert_primary_navigation_menu_items($menu_id) {
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Home'),
            'menu-item-classes' => 'home',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Blog'),
            'menu-item-classes' => 'blog',
            'menu-item-url' => home_url( '/' ),
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' =>  __('Store'),
            'menu-item-classes' => 'store',
            'menu-item-url' => home_url('/products/'),
            'menu-item-status' => 'publish'));
}
