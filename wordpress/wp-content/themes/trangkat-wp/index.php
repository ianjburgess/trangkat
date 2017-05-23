<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package Trang Kat Photography Theme
 */

 get_header(); ?>
      
<!-- all page or post content should be between the header and sidebar -->

<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
<?php endif; ?>

<?php the_content();?>
<?php get_footer(); ?>
