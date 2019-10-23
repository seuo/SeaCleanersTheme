<?php

function register_resources() {

    // register main menu
    register_nav_menu('main-menu','Main Menu' );

    //register custom post types
    $args = array(
      'public' => true,
      'label'  => 'Slides'
    );
    register_post_type( 'slide', $args );

    $args = array(
        'public' => true,
        'label' => 'Boats'
    );
    register_post_type( 'boats', $args );

    $args = array(
        'public' => true,
        'label' => 'Team Members'
    );
    register_post_type( 'members', $args );

    $args = array(
        'public' => true,
        'label' => 'Hero'
    );
    register_post_type( 'hero', $args );

    $args = array(
        'public' => true,
        'label' => 'Results'
    );
    register_post_type( 'results', $args );

    $args = array(
        'public' => true,
        'label' => 'Section Images'
    );
    register_post_type( 'section-image', $args );

    $args = array(
        'public' => true,
        'label' => 'Helpful Info'
    );
    register_post_type( 'help-info', $args );

    $args = array(
        'public' => true,
        'label' => 'About Us'
    );
    register_post_type( 'about', $args );
}

    add_action( 'init', 'register_resources' );

    //menu filter (used to modify html output to wp)
    function add_class_to_li ( $classes, $item, $args, $depth ) { 
        $classes[] = 'nav-item';
        return $classes;
     }
 
    add_filter( 'nav_menu_css_class', 'add_class_to_li', 10, 4 ); 


    function add_class_to_anchors( $atts ) {
        $atts['class'] = 'nav-link';
     
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );

?>

