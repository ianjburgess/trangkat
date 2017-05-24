<?php
// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');



/* enqueue styles and scripts */
function my_assets() {

    if ( is_page( 'home' ) ) {
        wp_enqueue_style( 'font' , '//fonts.googleapis.com/css?family=Dancing+Script:700' );
    }
    
    wp_register_style( 'bootstrap-min' , get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style' , get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array( 'jquery' ) , false , true );

    /* add theme menu area */
    register_nav_menus (array(
    'primary' => __( 'Primary Menu' ),
    'gallery' => __( 'Gallery Menu' )
    ));
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'trangkat' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'trangkat' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

?>