<?php if ( is_page_template( 'tpl/front-page.php' ) || is_404() || get_page_template_slug( get_queried_object_id() ) == 'elementor_header_footer' ) { return; } ?>

<?php 

    $show_action_box = themesflat_get_opt('show_action_box');
    if (themesflat_get_opt_elementor('show_action_box') != '') {
        $show_action_box = themesflat_get_opt_elementor('show_action_box');
    }
    if ($show_action_box == 1) :  

?>

    <div class="container form-ac-footer">
        <div class="row al-center">
            <div class="col-lg-5 col-md-4">
                <div class="content-left">
                    <h3 class="heading"><?php echo themesflat_get_opt('heading_action_box'); ?></h3>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="form-action-box">
                    <?php echo do_shortcode(themesflat_get_opt('form_action_box')); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
