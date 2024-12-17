<?php 

// Menu Background

$wp_customize->add_setting(

    'header_backgroundcolor',

    array(

        'default'           => themesflat_customize_default('header_backgroundcolor'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control( new themesflat_ColorOverlay(

        $wp_customize,

        'header_backgroundcolor',

        array(

            'label'         => esc_html__('Header Background', 'saylo'),

            'description'   => esc_html__(' Opacity =1 for Background Color', 'saylo'),

            'section'       => 'color_header',

            'priority'      => 1

        )

    )

);



// Background Bottom

$wp_customize->add_setting(

    'header_background_bottom_color',

    array(

        'default'           => themesflat_customize_default('header_background_bottom_color'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control( new themesflat_ColorOverlay(

        $wp_customize,

        'header_background_bottom_color',

        array(

            'label'         => esc_html__('Header Background Bottom', 'saylo'),

            'description'   => esc_html__('Only Style Header 02', 'saylo'),

            'section'       => 'color_header',

            'priority'      => 1

        )

    )

);



// Header Background sticky

$wp_customize->add_setting(

    'header_backgroundcolor_sticky',

    array(

        'default'           => themesflat_customize_default('header_backgroundcolor_sticky'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control( new themesflat_ColorOverlay(

        $wp_customize,

        'header_backgroundcolor_sticky',

        array(

            'label'         => esc_html__('Sticky Header Background', 'saylo'),

            'section'       => 'color_header',

            'priority'      => 2

        )

    )

);

// Header color sticky

$wp_customize->add_setting(

    'header_color_sticky',

    array(

        'default'           => themesflat_customize_default('header_color_sticky'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control( new themesflat_ColorOverlay(

        $wp_customize,

        'header_color_sticky',

        array(

            'label'         => esc_html__('Sticky Header Color Menu', 'saylo'),

            'section'       => 'color_header',

            'priority'      => 3

        )

    )

); 



// Menu a color

$wp_customize->add_setting(

    'mainnav_color',

    array(

        'default'           => themesflat_customize_default('mainnav_color'),

        'sanitize_callback' => 'esc_attr'

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'mainnav_color',

        array(

            'label' => esc_html__('Menu color', 'saylo'),

            'section' => 'color_header',

            'priority' => 4

        )

    )

);



// Menu hover color

$wp_customize->add_setting(

    'mainnav_hover_color',

    array(

        'default'           => themesflat_customize_default('mainnav_hover_color'),

        'sanitize_callback' => 'esc_attr'

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'mainnav_hover_color',

        array(

            'label' => esc_html__('Menu Hover', 'saylo'),

            'section' => 'color_header',

            'priority' => 5

        )

    )

);



// Menu active color

$wp_customize->add_setting(

    'mainnav_active_color',

    array(

        'default'           => themesflat_customize_default('mainnav_active_color'),

        'sanitize_callback' => 'esc_attr'

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'mainnav_active_color',

        array(

            'label' => esc_html__('Menu Active', 'saylo'),

            'section' => 'color_header',

            'priority' => 6

        )

    )

);



// Sub menu a color

$wp_customize->add_setting(

    'sub_nav_color',

    array(

        'default'           => themesflat_customize_default('sub_nav_color'),

        'sanitize_callback' => 'esc_attr'

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_nav_color',

        array(

            'label' => esc_html__('SubMenu color', 'saylo'),

            'section' => 'color_header',

            'priority' => 23

        )

    )

);    



// Sub nav background hover

$wp_customize->add_setting(

    'sub_nav_color_hover',

    array(

        'default'   => themesflat_customize_default('sub_nav_color_hover'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_nav_color_hover',

        array(

            'label' => esc_html__('SubMenu Hover & Active', 'saylo'),

            'section' => 'color_header',

            'priority' => 24

        )

    )

);



// Sub nav background

$wp_customize->add_setting(

    'sub_nav_background',

    array(

        'default'           => themesflat_customize_default('sub_nav_background'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_nav_background',

        array(

            'label' => esc_html__('SubMenu Background', 'saylo'),

            'section' => 'color_header',

            'priority' => 25

        )

    )

);



// Sub nav background hover

$wp_customize->add_setting(

    'sub_nav_background_hover',

    array(

        'default'   => themesflat_customize_default('sub_nav_background_hover'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_nav_background_hover',

        array(

            'label' => esc_html__('SubMenu Background Hover & Active', 'saylo'),

            'section' => 'color_header',

            'priority' => 26

        )

    )

);



// Sub nav line color between link

$wp_customize->add_setting(

    'sub_nav_border_color',

    array(

        'default'           => themesflat_customize_default('sub_nav_border_color'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_nav_border_color',

        array(

            'label' => esc_html__('SubMenu Border Line', 'saylo'),

            'section' => 'color_header',

            'priority' => 27

        )

    )

);



// Sub menu a color

$wp_customize->add_setting(

    'sub_sub_nav_color',

    array(

        'default'           => themesflat_customize_default('sub_sub_nav_color'),

        'sanitize_callback' => 'esc_attr'

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_sub_nav_color',

        array(

            'label' => esc_html__('SubMenu Child color', 'saylo'),

            'section' => 'color_header',

            'priority' => 28

        )

    )

);    



// Sub nav background hover

$wp_customize->add_setting(

    'sub_sub_nav_color_hover',

    array(

        'default'   => themesflat_customize_default('sub_sub_nav_color_hover'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_sub_nav_color_hover',

        array(

            'label' => esc_html__('SubMenu Child Hover & Active', 'saylo'),

            'section' => 'color_header',

            'priority' => 29

        )

    )

);



// Sub nav background

$wp_customize->add_setting(

    'sub_sub_nav_background',

    array(

        'default'           => themesflat_customize_default('sub_sub_nav_background'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_sub_nav_background',

        array(

            'label' => esc_html__('SubMenu Child Background', 'saylo'),

            'section' => 'color_header',

            'priority' => 30

        )

    )

);



// Sub nav background hover

$wp_customize->add_setting(

    'sub_sub_nav_background_hover',

    array(

        'default'   => themesflat_customize_default('sub_sub_nav_background_hover'),

        'sanitize_callback' => 'esc_attr',

    )

);

$wp_customize->add_control(

    new themesflat_ColorOverlay(

        $wp_customize,

        'sub_sub_nav_background_hover',

        array(

            'label' => esc_html__('SubMenu Child Background Hover & Active', 'saylo'),

            'section' => 'color_header',

            'priority' => 31

        )

    )

);