<?php 

// ADD SECTION PAGE TITLE

$wp_customize->add_section('section_page_title',array(

    'title'         => 'Page Title',

    'priority'      => 1,

    'panel'         => 'page_title_panel',

));

require THEMESFLAT_DIR . "inc/customizer/page-title/page-title.php";



// ADD SECTION BREADCRUMB

$wp_customize->add_section('section_breadcrumb',array(

    'title'         => 'Breadcrumb',

    'priority'      => 2,

    'panel'         => 'page_title_panel',

));

require THEMESFLAT_DIR . "inc/customizer/page-title/breadcrumb.php";

// ADD SECTION BREADCRUMB Title Slider

$wp_customize->add_section('section_breadcrumb_text_slider',array(

    'title'         => 'Breadcrumb Text Slider',

    'priority'      => 3,

    'panel'         => 'page_title_panel',

));

require THEMESFLAT_DIR . "inc/customizer/page-title/text-slider-breadcrumb.php";