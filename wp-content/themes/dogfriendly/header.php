<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <?php wp_head(); ?>
</head>
<?php 
    // This just shows the class name of the page properly when you inspect the elements
    if( is_front_page()):
        $dogfr_classes = array( 'dogfr-class', 'my-class' );
    else:
        $dogfr_classes = array( 'no-dogfr-class' );
    endif;
?>
<body <?php body_class( $dogfr_classes ); ?>>
    <!-- This creates the navigation menu on the page -->
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>