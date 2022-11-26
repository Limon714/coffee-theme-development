<?php 

Kirki::add_config( 'coffee_theme_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_section( 'header_text', array(
    'title'          => esc_html__( 'My Header Text', 'coffee' ),
    'description'    => esc_html__( 'My section description.', 'coffee' ),
    'priority'       => 16,
) );

Kirki::add_field( 'coffee_theme_id', [
	'type'     => 'text',
	'settings' => 'coffee_text_setting',
	'label'    => esc_html__( 'Add Header Text', 'coffee' ),
	'section'  => 'header_text',
	'default'  => esc_html__( 'This is a default value', 'coffee' ),
	'priority' => 10,
    'active_callback' => [
        [
            'setting'  => 'coffee_switch_setting',
            'operator' => '==',
            'value'    => true,
        ]
    ],
] );

// switch

Kirki::add_field( 'coffee_theme_id', [
	'type'        => 'switch',
	'settings'    => 'coffee_switch_setting',
	'label'       => esc_html__( 'Header Text Enable or Disable', 'coffee' ),
	'section'     => 'header_text',
	'default'     => 'on',
	'priority'    => 7,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'coffee' ),
		'off' => esc_html__( 'Disable', 'coffee' ),
	],
] );

Kirki::add_field( 'coffee_theme_id', [
	'type'        => 'image',
	'settings'    => 'image_setting_url',
	'label'       => esc_html__( 'Add Image', 'coffee' ),
	'section'     => 'header_text',
	
] );


// Team Section

Kirki::add_config( 'coffee_team_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_section( 'header_team', array(
    'title'          => esc_html__( 'My Team', 'coffee' ),
    'description'    => esc_html__( 'My Team description.', 'coffee' ),
    'priority'       => 26,
) );

Kirki::add_field( 'coffee_team_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Team Member Info', 'coffee' ),
	'section'     => 'header_team',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Member Info', 'coffee' ),
	],
	'button_label' => esc_html__('Add new Member', 'coffee' ),
	'settings'     => 'my_repeater_setting',
    'default'      => [
		[
			'member-name' => esc_html__( '', 'coffee' ),
			'member-description'  => '',
			'member-image'  => '',
		],
    ],
	'fields' => [
		'member-name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Add Text', 'coffee' ),
			'description' => esc_html__( 'Enter Your Name here', 'coffee' ),
			'default'     => '',
		],
		'member-description'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Description', 'coffee' ),
			'default'     => '',
		],
        
		'member-image'  => [
			'type'        => 'image',
			'label'       => esc_html__( 'Add Member Picture ', 'coffee' ),
			
		],

	]
] );
