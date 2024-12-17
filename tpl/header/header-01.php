<?php 

$header_search_box = themesflat_get_opt('header_search_box');

if (themesflat_get_opt_elementor('header_search_box') != '') {

    $header_search_box = themesflat_get_opt_elementor('header_search_box');

}



$header_sidebar_toggler = themesflat_get_opt('header_sidebar_toggler');

if (themesflat_get_opt_elementor('header_sidebar_toggler') != '') {

    $header_sidebar_toggler = themesflat_get_opt_elementor('header_sidebar_toggler');

}



$header_button = themesflat_get_opt('header_button');

if (themesflat_get_opt_elementor('header_button') != '') {

    $header_button = themesflat_get_opt_elementor('header_button');

}

$header_button_text = themesflat_get_opt('header_button_text');

$header_button_url = themesflat_get_opt('header_button_url');





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

$header_sidebar_toggler = themesflat_get_opt('header_sidebar_toggler');

if (themesflat_get_opt_elementor('header_sidebar_toggler') != '') {

    $header_sidebar_toggler = themesflat_get_opt_elementor('header_sidebar_toggler');

}

$style_header = themesflat_get_opt('style_header');

if (themesflat_get_opt_elementor('style_header') != '') {

    $style_header = themesflat_get_opt_elementor('style_header');

}

$topbar = themesflat_get_opt('topbar_show');

if (themesflat_get_opt_elementor('topbar_show') != '') {

    $topbar = themesflat_get_opt_elementor('topbar_show');

}

$header_message = themesflat_get_opt('header_message');

if (themesflat_get_opt_elementor('header_message') != '') {

    $header_message = themesflat_get_opt_elementor('header_message');

}

$topbar_address1 = themesflat_get_opt('topbar_address1');

if (themesflat_get_opt_elementor('topbar_address1') != '') {

    $topbar_address2 = themesflat_get_opt_elementor('topbar_address1');

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

$topbar_address5 = themesflat_get_opt('topbar_address5');

if (themesflat_get_opt_elementor('topbar_address5') != '') {

    $topbar_address5 = themesflat_get_opt_elementor('topbar_address5');

}


$style_topbar = themesflat_get_opt('style_topbar');

if (themesflat_get_opt_elementor('style_topbar') != '') {

    $style_topbar = themesflat_get_opt_elementor('style_topbar');

}



$social_topbar = themesflat_get_opt('social_topbar');

if (themesflat_get_opt_elementor('social_topbar') != '') {

    $social_topbar = themesflat_get_opt_elementor('social_topbar');

}

?>

<?php if ( $topbar == 1 ) :?>

<div class="themesflat-top style-03">

    <div class="container1">

        <div class="row">

            <div class="col-md-12">

                <div class="container-inside">

                    <div class="content-left">

                        <?php if( $topbar_address1 != '' ): ?>

                        <div class="infor-topbar">

                            <span class="list"><?php echo wp_kses_post( $topbar_address2); ?></span> 

                            <span class="list"><?php echo wp_kses_post( $topbar_address4); ?></span>

                        </div>

                        <?php endif; ?>

                    </div><!-- content-left -->

                    <div class="content-right">

                        <span class="list"><?php echo wp_kses_post( $topbar_address5); ?></span>                   

                        <span class="list"><?php echo wp_kses_post( $topbar_address3); ?></span> 

                    </div>

                </div>

            </div>

        </div>

    </div><!-- /.container -->

</div><!-- /.topbar -->

<?php endif; ?>

<header id="header" class="header header-01 <?php echo themesflat_get_opt_elementor('extra_classes_header'); ?>">

    <div class="inner-header">

        <div class="container-full">

            <div class="row">

                <div class="col-md-12">

                    <div class="header-wrap clearfix">

                        <div class="header-ct-left">

                            <?php get_template_part( 'tpl/header/brand'); ?>

                        </div>

                        <div class="header-ct-center">

                            <div class="inner-center">

                                <?php get_template_part( 'tpl/header/navigator'); ?>

                            </div>

                        </div>

                        <?php if(  $header_button == 1 || $header_search_box == 1 || $header_sidebar_toggler == 1): ?>

                        <div class="header-ct-right">

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

                        <?php endif; ?>

                        <div class="btn-menu">

                            <span class="line-1"></span>

                        </div><!-- //mobile menu button -->

                    </div>

                </div><!-- /.col-md-12 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

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