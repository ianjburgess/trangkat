<?php
/* enqueue styles and scripts */
function my_assets() {

    /* theme's primary style.css file */
    wp_enqueue_style( 'style' , get_stylesheet_uri() );

    /* boostrap resources from theme files */
    wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array( 'jquery' ) , false , true );


    wp_enqueue_script( 'flickity-js' , get_template_directory_uri() . '/js/flickity.pkgd.min.js' , array( 'jquery' ) , false , true );

    /* add theme menu area */
    register_nav_menus (array(
    'primary' => 'Primary Menu',
    ));
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

?>