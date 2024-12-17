<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package saylo

 */

?>

</div><!-- #content -->

</div><!-- #main-content -->



<?php get_template_part( 'tpl/partner'); ?>



<!-- Start Footer -->
<?php get_template_part( 'tpl/action-box-cta'); ?>

<div class="footer_background <?php echo themesflat_get_opt_elementor('extra_classes_footer'); ?>">

    <div class="overlay-footer"></div>

    <!-- Info Footer -->

    <!-- Footer action -->
    <div class="footer-wrap">

        <?php get_template_part( 'tpl/action-box'); ?>

        <!-- Footer Widget -->

        <?php get_template_part( 'tpl/footer/footer-widgets'); ?>

        <!-- Bottom -->

        <?php get_template_part( 'tpl/footer/bottom-menu'); ?>

    </div>



    <?php get_template_part( 'tpl/footer/bottom'); ?>


</div> <!-- Footer Background Image -->

<!-- End Footer -->


</div><!-- /#boxed -->

<?php wp_footer(); ?>

</body>

</html>