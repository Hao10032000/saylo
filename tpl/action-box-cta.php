<?php if ( is_page_template( 'tpl/front-page.php' ) || is_404() || get_page_template_slug( get_queried_object_id() ) == 'elementor_header_footer' ) { return; } ?>

<?php 

    $show_action_box_cta = themesflat_get_opt('show_action_box_cta');
    if (themesflat_get_opt_elementor('show_action_box_cta') != '') {
        $show_action_box_cta = themesflat_get_opt_elementor('show_action_box_cta');
    }
    if ($show_action_box_cta == 1) : 
    $action_box_button_url = themesflat_get_opt('action_box_button_url'); 
    $text_button_action_box = themesflat_get_opt('text_button_action_box');
    $action_box_features_image = themesflat_get_opt('action_box_features_image'); 
    $action_box_features_image1 = themesflat_get_opt('action_box_features_image1');


?>
<div class="action-box-cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-cta">
                    <h2 class="heading-cta"><?php echo themesflat_get_opt('heading_action_box_cta'); ?></h2>
                    <p class="description-cta"><?php echo themesflat_get_opt('text_action_box_cta'); ?></p>
                    <a class="tf-btn" href="<?php echo esc_url(themesflat_get_opt('action_box_button_url')) ?>"><span><?php echo wp_kses( $text_button_action_box, themesflat_kses_allowed_html()); ?></span></a>
                    <img class="shape"  src="<?php echo esc_url($action_box_features_image); ?>" alt="<?php bloginfo('name'); ?>" />
                    <img class="shape1"  src="<?php echo esc_url($action_box_features_image1); ?>" alt="<?php bloginfo('name'); ?>" />
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
