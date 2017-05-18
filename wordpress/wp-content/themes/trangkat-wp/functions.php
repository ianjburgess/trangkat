<?php
/* enqueue styles and scripts */

function my_assets() {
    wp_enqueue_style( 'font' , '//fonts.googleapis.com/css?family=Dancing+Script:700' );

    
    wp_register_style( 'bootstrap-min' , get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style' , get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array( 'jquery' ) , false , true );

    /* theme's primary style.css file */
    

    wp_enqueue_script( 'flickity-js' , get_template_directory_uri() . '/js/flickity.pkgd.min.js' , array( 'jquery' ) , false , true );

    /* add theme menu area */
    register_nav_menus (array(
    'primary' => 'Primary Menu',
    ));
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

?>