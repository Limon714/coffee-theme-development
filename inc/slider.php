<?php 

register_post_type( 'sl', array(

     'public' => true,
     'labels' => array(
        'name' => 'Slider',
        'all_items' => 'All Sliders',
        'add_new_item' => 'Add New Slider',
        'featured_image' => 'Slider Image',
        'set_featured_image' => 'Set Slider Image'
     ),
     'supports' => array(
        'title','thumbnail',''
     )

) );