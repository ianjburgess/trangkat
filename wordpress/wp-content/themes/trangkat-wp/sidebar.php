<?php
/**
 * The sidebar for our theme.
 *
 * 
 *
 * @package Trang Kat Photography
 */
?>

<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
<?php endif; ?>