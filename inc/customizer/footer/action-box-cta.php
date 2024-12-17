<?php 
$wp_customize->add_setting(
    'show_action_box_cta',
    array(
        'default'   => themesflat_customize_default('show_action_box'),
        'sanitize_callback'  => 'themesflat_sanitize_checkbox',
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'show_action_box_cta',
        array(
            'type'      => 'checkbox',
            'label'     => esc_html__('Action Box ( OFF | ON )', 'saylo'),
            'section'   => 'section_action_box_cta',
            'priority'  => 2
        )
    )
);


$wp_customize->add_setting(
    'heading_action_box_cta',
    array(
        'default'   =>  themesflat_customize_default('heading_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'heading_action_box_cta',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Heading Action Box CTA', 'saylo'),
        'section'   =>  'section_action_box_cta',
        'priority'  =>  3
    )
);

$wp_customize->add_setting(
    'text_action_box_cta',
    array(
        'default'   =>  themesflat_customize_default('text_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'text_action_box_cta',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Description Action Box CTA', 'saylo'),
        'section'   =>  'section_action_box_cta',
        'priority'  =>  3
    )
);


$wp_customize->add_setting(
    'text_button_action_box',
    array(
        'default'   =>  themesflat_customize_default('text_button_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'text_button_action_box',
    array(
        'type'      =>  'text',
        'section'   =>  'section_action_box_cta',
        'label'     =>  esc_html__('Text Button Action Box', 'saylo'),
        'priority'  => 5
    )
);

// Button Url
$wp_customize->add_setting(
    'action_box_button_url',
    array(
        'default' => themesflat_customize_default('action_box_button_url'),
        'sanitize_callback' => 'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'action_box_button_url',
    array(
        'label' => esc_html__( 'Url', 'saylo' ),
        'section' => 'section_action_box_cta',
        'type' => 'text',
        'priority' => 6
    )
);

// Logo
$wp_customize->add_setting(
    'action_box_features_image',
    array(
        'default' => themesflat_customize_default('action_box_features_image'),
        'sanitize_callback' => 'esc_url_raw',
    )
);    
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'action_box_features_image',
        array(
           'label'          => esc_html__( 'Upload Your Image One ', 'saylo' ),
           'type'           => 'image',
           'section'   =>  'section_action_box_cta',
           'priority'       => 7,
        )
    )
);
$wp_customize->add_setting(
    'action_box_features_image1',
    array(
        'default' => themesflat_customize_default('action_box_features_image1'),
        'sanitize_callback' => 'esc_url_raw',
    )
);    
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'action_box_features_image1',
        array(
           'label'          => esc_html__( 'Upload Your Image Two', 'saylo' ),
           'type'           => 'image',
           'section'   =>  'section_action_box_cta',
           'priority'       => 8,
        )
    )
);