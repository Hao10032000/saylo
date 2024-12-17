<?php 

// Breadcrumb

$wp_customize->add_setting(

  'breadcrumb_text_slider_enabled',

    array(

        'sanitize_callback' => 'themesflat_sanitize_checkbox',

        'default' => themesflat_customize_default('breadcrumb_text_slider_enabled'),     

    )   

);

$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,

    'breadcrumb_text_slider_enabled',

    array(

        'type' => 'checkbox',

        'label' => esc_html__('Breadcrumb Text Slider ( OFF | ON )', 'saylo'),

        'section' => 'section_breadcrumb_text_slider',

        'priority' => 1,

    ))

);    



$wp_customize->add_setting (

    'breadcrumb_text_slider',

    array(

        'default' => themesflat_customize_default('breadcrumb_text_slider') ,

        'sanitize_callback' => 'themesflat_sanitize_text'

    )

);

$wp_customize->add_control(

    'breadcrumb_text_slider',

    array(

        'type'      => 'text',

        'label'     => esc_html__('Breadcrumb Text Slider', 'saylo'),

        'section'   => 'section_breadcrumb_text_slider',

        'priority'  => 2

    )

);  

