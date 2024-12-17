<?php 
$wp_customize->add_setting(
    'show_action_box',
    array(
        'default'   => themesflat_customize_default('show_action_box'),
        'sanitize_callback'  => 'themesflat_sanitize_checkbox',
    )
);
$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,
        'show_action_box',
        array(
            'type'      => 'checkbox',
            'label'     => esc_html__('Action Box ( OFF | ON )', 'saylo'),
            'section'   => 'section_action_box',
            'priority'  => 2
        )
    )
);


$wp_customize->add_setting(
    'heading_action_box',
    array(
        'default'   =>  themesflat_customize_default('heading_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'heading_action_box',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Heading Action Box', 'saylo'),
        'section'   =>  'section_action_box',
        'priority'  =>  3
    )
);


$wp_customize->add_setting(
    'form_action_box',
    array(
        'default'   =>  themesflat_customize_default('form_action_box'),
        'sanitize_callback'  =>  'themesflat_sanitize_text'
    )
);
$wp_customize->add_control(
    'form_action_box',
    array(
        'type'      =>  'textarea',
        'label'     =>  esc_html__('Form Action Box', 'saylo'),
        'section'   =>  'section_action_box',
        'priority'  =>  4
    )
);
