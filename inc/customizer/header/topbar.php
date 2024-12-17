<?php 

// Top bar show

$wp_customize->add_setting( 

  'topbar_show',

    array(

        'sanitize_callback' => 'themesflat_sanitize_checkbox',

        'default' => themesflat_customize_default('topbar_show'),     

    )   

);

$wp_customize->add_control( new themesflat_Checkbox( $wp_customize,

    'topbar_show',

    array(

        'type' => 'checkbox',

        'label' => esc_html__('Topbar ( OFF | ON )', 'saylo'),

        'section' => 'section_topbar',

        'priority' => 1,

    ))

);     



//Topbar Style

$wp_customize->add_setting(

    'style_topbar',

    array(

        'default'           => themesflat_customize_default('style_topbar'),

        'sanitize_callback' => 'esc_attr',

    )

);



$wp_customize->add_control( new themesflat_RadioImages($wp_customize,

    'style_topbar',

    array (

        'type'      => 'radio-images',           

        'section' => 'section_topbar',

        'priority'  => 2,

        'label'         => esc_html__('Topbar Style', 'saylo'),

        'choices'   => array (

            'topbar-default' => array (

                'tooltip'   => esc_html__( 'Topbar Default','saylo' ),

                'src'       => THEMESFLAT_LINK . 'images/controls/topbar-default.jpg'

            ),

        ),

        'active_callback' => function () use ( $wp_customize ) {

            return 1 === $wp_customize->get_setting( 'topbar_show' )->value();

        }, 

    ))

); 



// address
$wp_customize->add_setting(

    'topbar_address1',

    array(

        'default' => themesflat_customize_default('topbar_address1'),

        'sanitize_callback' => 'themesflat_sanitize_text'

    )

);

$wp_customize->add_control(

    'topbar_address1',

    array(

        'label' => esc_html__( 'Topbar Awards', 'saylo' ),

        'section' => 'section_topbar',

        'type' => 'text',

        'priority' => 3,

        'active_callback' => function () use ( $wp_customize ) {

            $condition3    = $wp_customize->get_setting( 'topbar_show' )->value();

            $condition4 = $wp_customize->get_setting( 'style_topbar' )->value();

        

            if ( 1 === $condition3 && 'topbar-default' === $condition4 ) {

                return true;

            }

            return false;

        },

    )

);
$wp_customize->add_setting(

    'topbar_address2',

    array(

        'default' => themesflat_customize_default('topbar_address2'),

        'sanitize_callback' => 'themesflat_sanitize_text'

    )

);

$wp_customize->add_control(

    'topbar_address2',

    array(

        'label' => esc_html__( 'Topbar Mail', 'saylo' ),

        'section' => 'section_topbar',

        'type' => 'text',

        'priority' => 3,

        'active_callback' => function () use ( $wp_customize ) {

            $condition3    = $wp_customize->get_setting( 'topbar_show' )->value();

            $condition4 = $wp_customize->get_setting( 'style_topbar' )->value();

        

            if ( 1 === $condition3 && 'topbar-default' === $condition4 ) {

                return true;

            }

            return false;

        },

    )

);

$wp_customize->add_setting(

    'topbar_address3',

    array(

        'default' => themesflat_customize_default('topbar_address3'),

        'sanitize_callback' => 'themesflat_sanitize_text'

    )

);

$wp_customize->add_control(

    'topbar_address3',

    array(

        'label' => esc_html__( 'Topbar Hours', 'saylo' ),

        'section' => 'section_topbar',

        'type' => 'text',

        'priority' => 3,

        'active_callback' => function () use ( $wp_customize ) {

            $condition3    = $wp_customize->get_setting( 'topbar_show' )->value();

            $condition4 = $wp_customize->get_setting( 'style_topbar' )->value();

        

            if ( 1 === $condition3 && 'topbar-default' === $condition4 ) {

                return true;

            }

            return false;

        },

    )

);

$wp_customize->add_setting(

    'topbar_address4',

    array(

        'default' => themesflat_customize_default('topbar_address4'),

        'sanitize_callback' => 'themesflat_sanitize_text'

    )

);

$wp_customize->add_control(

    'topbar_address4',

    array(

        'label' => esc_html__( 'Topbar Phone', 'saylo' ),

        'section' => 'section_topbar',

        'type' => 'text',

        'priority' => 3,

        'active_callback' => function () use ( $wp_customize ) {

            $condition3    = $wp_customize->get_setting( 'topbar_show' )->value();

            $condition4 = $wp_customize->get_setting( 'style_topbar' )->value();

        

            if ( 1 === $condition3 && 'topbar-default' === $condition4 ) {

                return true;

            }

            return false;

        },

    )

);

$wp_customize->add_setting(

    'topbar_address5',

    array(

        'default' => themesflat_customize_default('topbar_address4'),

        'sanitize_callback' => 'themesflat_sanitize_text'

    )

);

$wp_customize->add_control(

    'topbar_address5',

    array(

        'label' => esc_html__( 'Topbar Map', 'saylo' ),

        'section' => 'section_topbar',

        'type' => 'text',

        'priority' => 3,

        'active_callback' => function () use ( $wp_customize ) {

            $condition3    = $wp_customize->get_setting( 'topbar_show' )->value();

            $condition4 = $wp_customize->get_setting( 'style_topbar' )->value();

        

            if ( 1 === $condition3 && 'topbar-default' === $condition4 ) {

                return true;

            }

            return false;

        },

    )

);




// Topbar Box control

$wp_customize->add_setting(

    'topbar_controls',

    array(

        'default' => themesflat_customize_default('topbar_controls'),

        'sanitize_callback' => 'themesflat_sanitize_text',

    )

);

$wp_customize->add_control( new themesflat_BoxControls($wp_customize,

    'topbar_controls',

    array(

        'label' => esc_html__( 'Box Controls (px)', 'saylo' ),

        'section' => 'section_topbar',

        'type' => 'box-controls',

        'priority' => 9

    ))

);