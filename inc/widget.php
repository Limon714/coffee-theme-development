<?php

function coffee_widget(){
    register_sidebar( array(
        'name' => 'mysidebar',
        'id' => 'mys',
        'description' => 'This is my Coffee Sidebar',
        'before widget' => '<div class="abt-2">',
        'after widget' => '</div>',
        'before title' => '<h3>',
        'after title' => '</h3>',
    ) );
}

add_action('widgets_init', 'coffee_widget' );
