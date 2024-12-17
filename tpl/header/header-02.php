<?php 

$header_search_box = themesflat_get_opt('header_search_box');

if (themesflat_get_opt_elementor('header_search_box') != '') {

    $header_search_box = themesflat_get_opt_elementor('header_search_box');

}



$header_sidebar_toggler = themesflat_get_opt('header_sidebar_toggler');

if (themesflat_get_opt_elementor('header_sidebar_toggler') != '') {

    $header_sidebar_toggler = themesflat_get_opt_elementor('header_sidebar_toggler');

}



$header_infor_phone = themesflat_get_opt('header_infor_phone');

if (themesflat_get_opt_elementor('header_infor_phone') != '') {

    $header_infor_phone = themesflat_get_opt_elementor('header_infor_phone');

}



$topbar_email = themesflat_get_opt('topbar_email');

if (themesflat_get_opt_elementor('topbar_email') != '') {

    $topbar_email = themesflat_get_opt_elementor('topbar_email');

}

$topbar_email_title = themesflat_get_opt('topbar_email_title');

if (themesflat_get_opt_elementor('topbar_email_title') != '') {

    $topbar_email_title = themesflat_get_opt_elementor('topbar_email_title');

}



$header_info_phone_number = themesflat_get_opt('header_info_phone_number');

if (themesflat_get_opt_elementor('header_info_phone_number') != '') {

    $header_info_phone_number = themesflat_get_opt_elementor('header_info_phone_number');

}

$header_info_phone_number_title = themesflat_get_opt('header_info_phone_number_title');

if (themesflat_get_opt_elementor('header_info_phone_number_title') != '') {

    $header_info_phone_number_title = themesflat_get_opt_elementor('header_info_phone_number_title');

}



$header_button = themesflat_get_opt('header_button');

if (themesflat_get_opt_elementor('header_button') != '') {

    $header_button = themesflat_get_opt_elementor('header_button');

}

$header_button_text = themesflat_get_opt('header_button_text');

$header_button_url = themesflat_get_opt('header_button_url');



$social_header = themesflat_get_opt('social_header');

if (themesflat_get_opt_elementor('social_header') != '') {

    $social_header = themesflat_get_opt_elementor('social_header');

}



$topbar_address2 = themesflat_get_opt('topbar_address2');

if (themesflat_get_opt_elementor('topbar_address2') != '') {

    $topbar_address2 = themesflat_get_opt_elementor('topbar_address2');

}

$topbar_address3 = themesflat_get_opt('topbar_address3');

if (themesflat_get_opt_elementor('topbar_address3') != '') {

    $topbar_address3 = themesflat_get_opt_elementor('topbar_address3');

}

$topbar_address4 = themesflat_get_opt('topbar_address4');

if (themesflat_get_opt_elementor('topbar_address4') != '') {

    $topbar_address4 = themesflat_get_opt_elementor('topbar_address4');

}



$social_topbar = themesflat_get_opt('social_topbar');

if (themesflat_get_opt_elementor('social_topbar') != '') {

    $social_topbar = themesflat_get_opt_elementor('social_topbar');

}





?>



<?php get_template_part( 'tpl/topbar'); ?>

<header id="header" class="header header-02 <?php echo themesflat_get_opt_elementor('extra_classes_header'); ?>">

    <div class="bottom-header">

        <div class="container1">

            <div class="row">

                <div class="col-md-12">

                    <div class="header-wrap clearfix">

                        <div class="header-ct-left">

                            <div class="inner-left">

                                <?php get_template_part( 'tpl/header/brand'); ?>

                            </div>

                        </div>

                        <div class="header-ct-center">

                            <?php get_template_part( 'tpl/header/navigator'); ?>

                        </div>

                        <?php if( $header_button == 1 || $header_search_box == 1 || $header_sidebar_toggler == 1): ?>

                        <div class="header-ct-right">

                            <div class="info-content"><span
                                    class="title"><?php echo wp_kses_post($header_info_phone_number_title); ?></span><?php echo wp_kses_post($header_info_phone_number); ?>
                            </div>

                            <?php if ( $header_search_box == 1 ) :?>

                            <div class="show-search">

                                <a href="#"><i class="icon-saylo-search"></i></a>

                            </div>

                            <?php endif;?>

                            <?php if ( $header_button == 1 ) :?>

                            <a class="tf-btn"
                                href="<?php echo esc_url(themesflat_get_opt('header_button_url')) ?>"><span><?php echo wp_kses($header_button_text, themesflat_kses_allowed_html()); ?></span></a>

                            <?php endif;?>

                            <?php if ( $header_sidebar_toggler == 1 ) :?>

                            <div class="header-modal-menu-left-btn">

                                <div class="modal-menu-left-btn">

                                    <i class="icon-saylo-unicon"></i>

                                </div>

                            </div><!-- /.header-modal-menu-left-btn -->

                            <?php endif;?>

                        </div>
                        
                        <div class="btn-menu">

                            <span class="line-1"></span>

                        </div><!-- //mobile menu button -->

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <div class="canvas-nav-wrap">

        <div class="overlay-canvas-nav">

            <div class="canvas-menu-close"><span></span></div>

        </div>

        <div class="inner-canvas-nav">

            <?php get_template_part( 'tpl/header/brand-mobile'); ?>

            <nav id="mainnav_canvas" class="mainnav_canvas" role="navigation">

                <?php

                    wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );

                ?>

            </nav><!-- #mainnav_canvas -->

            <?php if( $topbar_address2 != '' ): ?>

            <div class="infor-topbar">

                <span class="list"><?php echo wp_kses_post( $topbar_address2); ?></span>

                <span class="list"><?php echo wp_kses_post( $topbar_address3); ?></span>

                <span class="list"><?php echo wp_kses_post( $topbar_address4); ?></span>

            </div>

            <?php endif; ?>

            <?php if ( $social_topbar == 1 ):

                themesflat_render_social();    

                endif;

            ?>

        </div>

    </div><!-- /.canvas-nav-wrap -->

</header><!-- /.header -->

<div class="submenu top-search widget_search">

    <div class="search-overlay"></div>

    <div class="search-content">

        <div class="top-inner-search">

            <?php get_template_part( 'tpl/header/brand-mobile'); ?>

            <div class="button-close-search">

                <i class="icon-saylo-plus"></i>

            </div>

        </div>

        <?php get_search_form(); ?>

    </div>



</div>