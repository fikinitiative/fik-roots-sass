<?php
/**
 * Custom functions
 */

function selectTemplate($template_name) {
    return get_template_part('templates/' . $template_name);
}
add_action('get_header', 'selectTemplate', 10, 1);
add_action('get_footer', 'selectTemplate', 10, 1);

class custom_post_type_page_template {

    function custom_post_type_page_template() {
        add_filter( 'template_include', array(&$this, 'custom_post_type_page_template_template_include') );
    }

    function custom_post_type_page_template_template_include($template) {
        global $wp_query, $post;

        if ( is_singular() && !is_page() ) {
            $id = get_queried_object_id();
            $new_template = 'template-' . get_post_type() . $product_template_name . '.php';
            var_dump($new_template);
            if ( $new_template && file_exists(get_query_template( 'page', $new_template )) ) {
                $wp_query->is_page = 1;
                $templates[] = $new_template;

                return get_query_template( 'page', $templates );
            }
        }

        return $template;
    }
}
global $custom_post_type_page_template;
$custom_post_type_page_template = new custom_post_type_page_template();

