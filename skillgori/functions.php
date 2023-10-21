<?php

add_theme_support( 'menus');
add_theme_support( 'widgets');
add_theme_support( 'custom-background');
add_theme_support( 'custom-header');
add_theme_support( 'post-thumbnails');

register_nav_menus( [

      'header menu'=> 'MyiHeader Menu',
      'footer menu'=> 'MyiFooter Menu',
      'sidebar menu'=> 'Myisidebar Menu'
]);



?>
