<?php

/**

 * Return the default options of the theme

 * 

 * @return  void

 */



function themesflat_customize_default($key) {

	$default = array(

		'social_links'	=> array ("facebook" => '#', "twitter" => '#', "instagram" => '#', "linkedin"  => '#'),

		'show_social_share' => 0,		

		'social_footer' => 0,

		'go_top' => 1,

		'topbar_background_color'	=> '',

		'message_background_color'	=> '',

		'topbar_textcolor'	=> '',

		'topbar_link_color' => '',

		'topbar_link_color_hover' => '',

		'message_textcolor'	=> '',

		'message_link_color' => '',

		'message_link_color_hover' => '',

		'topbar_show' => 1 ,

		'header_message' => 0 ,

		'topbar_address_title' => 'Address',


        'topbar_address1' => '<i class="icon-saylo-map"></i> 101 E 129th St, East Chicago, IN 46312, US',

		'topbar_address2' => '<i class="icon-saylo-map"></i> 101 E 129th St, East Chicago, IN 46312, US',

		'topbar_address3' => '<i class="icon-saylo-mail"></i> hi.avitex@gmail.com',

		'topbar_address4' => '<i class="icon-saylo-phone"></i> 1-555-678-8888',

		'topbar_address5' => '<i class="icon-saylo-map"></i> Hopkins, Minnesota(MN), 55305',



		'topbar_email_label' => '<i class="icon-saylo-ona-50"></i>',

		'topbar_email' => 'hello@support.com',

		'topbar_email_title' => 'Support',

		'social_topbar' => 1,

		'social_header' => 1,

		'typography_topbar' => array(

			'family' => 'Manrope',

			'style'  => '400',

			'size'   => '13',

			'line_height'=>'1.5384615384615385',

			'letter_spacing' => '',

		),

		'topbar_controls' => array('padding-top' => 0,'padding-bottom' => 0),

		'logo_controls' => array('padding-top' => '','padding-bottom' => ''),

		'style_header'	=> 'header-default',	

		'style_topbar'	=> 'topbar-default',	

		'header_backgroundcolor'=>'#1B1E23',

		'header_background_bottom_color'=>'',

		'header_sticky' => 0,

		'header_search_box' => 0,

		'header_content_right' => '',

		'header_absolute'	=> 0,		

		'header_sidebar_toggler' => 1,

		'header_infor_phone' => 0,

		'header_button'=>1,

		'header_button_text' => 'Get In Touch <i class="icon-saylo-chevron-right"></i>',

		'header_button_url' => '',

		'header_info_phone_icon' => '<i class="icon-saylo-ona-49"></i>',

		'header_info_phone_number' => 'Phone Number',

		'header_info_phone_number_title' => 'Call us',

		'show_post_navigator' => 0,

		'show_entry_footer_content'	=> 0,

		'logo_width' => 139,

		'menu_location_primary' => 'primary',

		'site_logo'	=> THEMESFLAT_LINK . 'images/logo.png',

		'site_logo_sticky'	=> THEMESFLAT_LINK . 'images/logo.png',

		'site_logo_fixed'	=> THEMESFLAT_LINK . 'images/logo.png',

		'site_logo_mobile'	=> THEMESFLAT_LINK . 'images/logo.png',	

		'header_color_sticky' => '',

		'show_bottom' => 1,		

		'header_backgroundcolor_sticky'=>'#1B1E23',	



		'primary_color'=>'#1B1E23',

		'secondary_color'=>'#FFCD4C',

		'accent_color'=>'#555555',

		

		'typography_body' => array(

			'family' => 'Public Sans',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'30px',

			'letter_spacing' => '0px',

		),

		'body_text_color'=>'#555555',

		'body_background_color' => '',

		'page_sidebar_layout' => 'sidebar-right',

		'content_controls' => array('padding-top' => 130,'padding-bottom' => 130),



		'typography_menu' => array(

			'family' => 'Manrope',

			'style'  => '600',

			'size'   => '16',

			'line_height'=>'75px',

			'letter_spacing' => '0px',

		), 

		'mainnav_color'		=> '#9C9C9C',

		'mainnav_hover_color'=>'#FFFFFF',

		'mainnav_active_color'=>'#FFFFFF',

		'sub_sub_nav_color'=>'',

		'sub_sub_nav_background'=>'',

		'sub_sub_nav_color_hover'=>'',

		'sub_sub_nav_background_hover'=>'',

		'menu_distance_between' => 16,

		'typography_sub_menu' => array(

			'family' => 'Manrope',

			'style'  => '600',

			'size'   => '16',

			'line_height'=>'24px',

			'letter_spacing' => '0px',

		),

		'sub_nav_color'		=>'',		

		'sub_nav_color_hover'	=>	'',

		'sub_nav_background'=>'#ffffff',

		'sub_nav_background_hover'=>'',

		'sub_nav_border_color' => '',

		'typography_headings'	=> array(

			'family' => 'Manrope',

			'style'  => '700',

			'line_height'=>'1.333',

			'letter_spacing' => '0px'		

		),

		'h1_size' => 120,

		'h2_size' => 52,

		'h3_size' => 24,

		'h4_size' => 22,

		'h5_size' => 20,

		'h6_size' => 18,

		'typography_blockquote' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '27',

			'line_height'=>'45px',

			'letter_spacing' => '-0.7px',

		),	

		'typography_blog_post_title' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '35',

			'line_height'=>'47.81px',

			'letter_spacing' => '-0.7px',

		),

		'typography_blog_post_meta' => array(

			'family' => 'Public Sans',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'18.8px',

			'letter_spacing' => '',

		),

		'typography_blog_post_buttons' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '14',

			'line_height'=>'19.12px',

			'letter_spacing' => '0px',

		),

		'typography_blog_single_title' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '30',

			'line_height'=>'45px',

			'letter_spacing' => '',

		),

		'typography_blog_single_comment_title' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '24',

			'line_height'=>'35px',

			'letter_spacing' => '0px',

		),

		'typography_sidebar_widget_title' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '20',

			'line_height'=>'27.32px',

			'letter_spacing' => '0px',

		),	

		'typography_footer_widget_title' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '20',

			'line_height'=>'27.32px',

			'letter_spacing' => '0px',

		),	

		'typography_page_title'	=> array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '70',

			'line_height'=>'95.62px',

			'letter_spacing' => '-0.7px',

		),

		'page_title_background_color' => '#1B1E23',

		'page_title_background_color_opacity' => '100',

		'page_title_text_color' => '',		

		'page_title_controls' => array('padding-top' => 351, 'padding-bottom' => 100),

		'page_title_background_image' => THEMESFLAT_LINK . 'images/page-title.jpg',

		'page_title_image_size' => 'cover',

		'page_title_heading_enabled' => 1,

		'typography_breadcrumb'	=> array(

			'family' => 'Manrope',

			'style'  => '500',

			'size'   => '24',

			'line_height'=>'32.78px',

			'letter_spacing' => '0px',

		),

		'bread_crumb_prefix' =>'',

		'breadcrumb_separator' =>  '<i class="icon-saylo-chevron-right"></i>',

		'breadcrumb_color' => '#FFFFFF',



		'typography_buttons' => array(

			'family' => 'Manrope',

			'style'  => '700',

			'size'   => '14',

			'line_height'=>'19.12px',

			'letter_spacing' => '0px',

		),

		'typography_pagination'	=> array(

			'family' => 'Manrope',

			'style'  => '600',

			'size'   => '16',

			'line_height'=>'1',

			'letter_spacing' => '0px',

		),		

		'typography_bottom_menu' => array(

			'family' => 'Manrope',

			'style'  => '400',

			'size'   => '14',

			'line_height'=>'1.7142857142857142',

			'letter_spacing' => '0px',

		),

		'breadcrumb_enabled' => 1,

		'show_post_paginator' => 1,

		'blog_grid_columns' => 2,

		'blog_grid_number_post' => 4,

		'post_content_elements' => 'meta,title,excerpt_content,readmore',

		'meta_elements' => 'category,date,author,comment',

		'blog_archive_exclude' => '',

		'blog_featured_title' => '',

		'style_blog_single' => 'content-single',

		'sidebar_layout' => 'sidebar-right',

		'blog_archive_layout' => 'blog-list',

		'related_post_style'	=> 'blog-grid',

		'grid_columns_post_related' => 2,

		'number_related_post' => 2,

		'blog_sidebar_list'		  => 'blog-sidebar',	

		'blog_archive_readmore' => 1,

		'blog_archive_post_excepts_length' => 25,

		'blog_archive_readmore_text' => 'Read More <i class="icon-saylo-chevron-right"></i>',

		'blog_archive_pagination_style' => 'pager-numeric',

		'blog_posts_per_page'	=> 3,

		'blog_order_by'	=> 'date',

		'blog_order_direction' => 'DESC',

		'page_sidebar_list'	=> 'blog-sidebar',	



		'team_slug' => '',

		'team_name' => '',

		'team_show_filter' => 0,

		'team_grid_columns' => 3,

		'team_number_post'=> 9,

		'team_filter_category_order' => '',

		'team_order_by' => 'author,date,comment',

		'team_order_direction' => 'DESC',

		'team_exclude' => '',

		'team_layout' => 'fullwidth',

		'team_show_post_navigator' => 0,

		'team_show_entry_footer_content'	=> 0,

		'team_show_related' => 0,

		'team_related_grid_columns' => 3,

		'team_sidebar_list' => 'blog-sidebar',

		'team_post_image'	=> THEMESFLAT_LINK . 'images/logo.png',

		'number_related_post_team' => 3,

		'team_featured_title' => 'team Details',


		'case_study_slug' => '',

		'case_study_name' => '',

		'case_study_show_filter' => 0,

		'case_study_grid_columns' => 3,

		'case_study_number_post'=> 6,

		'case_study_archive_pagination_style' => 'pager-numeric',

		'case_study_filter_category_order' => '',

		'case_study_order_by' => 'date',

		'case_study_order_direction' => 'DESC',

		'case_study_exclude' => '',

		'case_study_layout' => 'fullwidth',

		'case_study_sidebar_list' => 'themesflat-custom-sidebar-case_studysidebar',

		'case_study_show_post_navigator' => 0,

		'case_study_show_related' => 0,

		'case_study_related_grid_columns' => 3,

		'number_related_post_case_study' => 3,

		'case_study_featured_title' => '',

		'case_study_title_single' => 1,


		'services_slug' => '',

		'services_name' => '',

		'services_show_filter' => 0,

		'services_grid_columns' => 3,

		'services_number_post'=> 6,

		'services_archive_pagination_style' => 'pager-numeric',

		'services_filter_category_order' => '',

		'services_order_by' => 'date',

		'services_order_direction' => 'DESC',

		'services_exclude' => '',

		'services_layout' => 'fullwidth',

		'services_sidebar_list' => 'themesflat-custom-sidebar-servicessidebar',

		'services_show_post_navigator' => 0,

		'services_show_related' => 0,

		'services_related_grid_columns' => 3,

		'number_related_post_services' => 3,

		'services_featured_title' => '',

		'services_title_single' => 1,

		

		'typography_footer' => array(

			'family' => 'Public Sans',

			'style'  => '400',

			'size'   => '16',

			'line_height'=>'40px',

			'letter_spacing' => '',

		),

		'footer_background_color'	=> '#121212',

		'footer_title_widget_color' => '#fff',

		'footer_text_color'			=> '#ABB0B4',

		'footer_text_color_hover'   => '',

		'footer_widget_areas' => 5,

		'footer_controls' => array('padding-top' => '70px', 'padding-bottom' =>'20px' ),

		'footer1' => 'footer-1',

		'footer2' => 'footer-2',

		'footer3' => 'footer-3',

		'footer4' => 'footer-4',

		'footer_background_image' => '',

		'footer_image_size' => 'cover',

		'typography_bottom_copyright' => array(

			'family' => 'Manrope',

			'style'  => '400',

			'size'   => '14',

			'line_height'=>'22px',

			'letter_spacing' => '',

		),

		'bottom_background_color'	=> '#121212',

		'bottom_text_color'			=> '#CECECE',

		'bottom_link_color'         => '#ffffff',

		'bottom_text_color_hover'   => '',		

		'social_bottom'   => 1,		

		'layout_version'			=> 'wide',		

		'footer_copyright'			=> 'Copyright © 2024 <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat </a>, All Rights Reserved.',

		'enable_smooth_scroll'	=> 0,

		'enable_preload' => 1,

		'preload' => 'preload-6',

		'page_title_styles' => 'default',

		'page_title_alignment' => 'left',

		'page_title_video_url' => '',

		'breadcrumb_text_slider_enabled'=> 1,

		'breadcrumb_text_slider'=> 'Saylo Consulting',

		'action_box_text_color'=> '',
		'action_box_heading_color'=> '',
		'action_box_button_text_color'=> '',
		'action_box_button_text_color'=> '',
		'show_action_box'=> '1',

		'heading_action_box'=> 'Newsletter <span>Subscribe</span>',		
		'form_action_box'=> '[mc4wp_form id=1630]',
		
		'action_box_background_image'=> '',
		'action_box_background_color'=> '',
		'action_box_button_background_color'=> '',

		'text_action_box'=> '',
		'text_button_action_box'=> 'Get Consultation <i class="icon-saylo-chevron-right"></i>',
		'action_box_button_url'=> '',

		'action_box_features_image'=> THEMESFLAT_LINK . 'images/shape1.png',
		'action_box_features_image1'=> THEMESFLAT_LINK . 'images/shape2.png',

		'show_action_box_cta'=> 1,
		'text_action_box_cta'=> 'A well-crafted marketing strategy is the foundation of any successful business. It serves as a 
         guiding how a company reaches its target audience, communicates',
		'heading_action_box_cta'=> 'Let’s Grow your <span>Marketing Strategy</span>',
		
		
		



        'show_partner'	=> 1,

		'img_partner' => '',

		'show_number_img_partner_desktop' => 6,

		'show_number_img_partner_tablet' => 4,

		'show_number_img_partner_mobile' => 2,

		'gap_img_partner' => 30,

		'partner_box_controls' => array('padding-top' => 67,'padding-bottom' => 64),

		'partner_box_background_color' => '#f2f7f5',

        'show_footer_info'	=> 0,

        'footer_info_text' => 'Solve Your IT Needs Today!',

		'footer_info_button_url' => '/contact-us',

        'footer_info_button' => 'GET SOLUTIONS',

	);

	return $default[$key];

}