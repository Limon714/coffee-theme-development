<?php


function coffeetheme(){

load_theme_textdomain('coffee');
add_theme_support( "title-tag" );
add_theme_support( "menus" );
add_theme_support( "widgets" );
add_theme_support( "custom-header" );
add_theme_support( "custom-background" );
add_theme_support( "post-thumbnails" );
add_theme_support( "post-formats", array('link','audio','video','gallery') );
add_theme_support( "html5", array('comment-form','comment-list','search-form','gallery') );
add_theme_support( "custom-logo", array(

     'height' => '100',
     'width' => '100',
     'flex-height' => true,
     'flex-width' => true
) );

register_nav_menu('header menu', __('Header Menu','coffee'));

}

add_action('after_setup_theme', 'coffeetheme');


// Link for file

function coffee_style(){
        
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', 'null', true, 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', 'null', true, 'all');
    wp_enqueue_style( 'chocolat', get_template_directory_uri() . '/css/chocolat.css', 'null', true, 'all');
    wp_enqueue_style( 'main', get_stylesheet_uri());
   
}

add_action('wp_head', 'coffee_style');


    function coffee_file_link(){
    wp_enqueue_script( 'move-top', get_template_directory_uri(). '/js/move-top.js', array('jquery'), true );
    wp_enqueue_script( 'easing', get_template_directory_uri(). '/js/easing.js', array('jquery'), true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri(). '/js/modernizr.custom.97074.js', array('jquery'), true );
    wp_enqueue_script( 'chocolat', get_template_directory_uri(). '/js/jquery.chocolat.js', array('jquery'), true );
    wp_enqueue_script( 'hoverdir', get_template_directory_uri(). '/js/jquery.hoverdir.js', array('jquery'), true );
    wp_enqueue_script( 'flexisel', get_template_directory_uri(). '/js/jquery.flexisel.js', array('jquery'), true );
    wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js', array('jquery'), true );

}



add_action('wp_enqueque_scripts', 'coffee_file_link');


require get_template_directory(). "./inc/customizer.php";