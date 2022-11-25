<?php 

function social_link_coffee($wp_costomize){

    $wp_costomize -> add_section('social_icons', array(
        'title' => 'Social Media Icon',
        'priority' => 30,
    ));
    $wp_costomize -> add_setting('fb_icon', array(
        'default' => 'https://www.facebook.com',
        'transport' => 'refresh',
    ));
    $wp_costomize -> add_control('fb_icon', array(
        'label' => "Add your fb link",
        'section'=> 'social_icons',
        'type' => 'text'
    ));
    $wp_costomize -> add_setting('tw_icon', array(
        'default' => 'https://www.twitter.com',
        'transport' => 'refresh',
    ));
    $wp_costomize -> add_control('tw_icon', array(
        'label' => "Add your Twitter link",
        'section'=> 'social_icons',
        'type' => 'text'
    ));
    $wp_costomize -> add_setting('pin_icon', array(
        'default' => 'https://www.pinterest.com',
        'transport' => 'refresh',
    ));
    $wp_costomize -> add_control('pin_icon', array(
        'label' => "Add your Pinterest link",
        'section'=> 'social_icons',
        'type' => 'text'
    ));
// header image

    $wp_costomize -> add_setting('header_text', array(
        'default' => 'Your Title Here',
        'transport' => 'refresh',
    ));
    $wp_costomize -> add_control('header_text', array(
        'label' => "Add Header Text Here",
        'section'=> 'header_image',
        'type' => 'text'
    ));

    // text background 

    $wp_costomize -> add_setting('header_text_bg', array(
        'default' => '#555',
        'transport' => 'refresh',
    ));
    $wp_costomize -> add_control(
        new WP_Customize_Color_Control($wp_costomize,'header_text_bg', array(
        'label' => "Text Background Color",
        'section'=> 'header_image',
    ))
);
// Text Color Dynamic

    $wp_costomize -> add_setting('header_text_color', array(
        'default' => '#555',
        'transport' => 'refresh',
    ));
    $wp_costomize -> add_control(
        new WP_Customize_Color_Control($wp_costomize,'header_text_color', array(
        'label' => "Add Text Color",
        'section'=> 'header_image',
    ))
   );


}

add_action( 'customize_register','social_link_coffee' );

?>