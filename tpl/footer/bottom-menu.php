<?php

if (themesflat_get_opt('show_bottom') == 1):   

$social_topbar = themesflat_get_opt('social_topbar');

if (themesflat_get_opt_elementor('social_topbar') == 1) {

    $social_topbar = themesflat_get_opt_elementor('social_topbar');

}  

?>


<div id="bottom-menu" class="bottom-menu">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="container-inside">

                    <div class="content-left">
                        <?php

                             wp_nav_menu( array( 'theme_location' => 'bottom', 'fallback_cb' => 'themesflat_menu_fallback', 'container' => false ) );

                        ?>
                    </div>
                    <?php if ( themesflat_get_opt( 'go_top') == 1 ) : ?>

                    <!-- Go Top -->

                    <div class="go-top">

                        <i class="icon-saylo-up"></i>

                    </div>

                    <?php endif; ?>

                    <div class="content-right">

                        <p>Follow Us</p>

                        <i class="icon-saylo-arrow-3 icon-social"></i>

                        <?php  

                            if ( $social_topbar == 1 ):

                                themesflat_render_social();    

                            endif;

                            ?>

                    </div>

                </div>

            </div>

        </div><!-- /.row -->

    </div><!-- /.container -->

</div>

<?php endif; ?>