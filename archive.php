<?php

/**

 * The template for displaying archive pages.

 *

 * Learn more: http://codex.wordpress.org/Template_Hierarchy

 *

 * @package saylo

 */



get_header(); ?>

<?php 

    $blog_layout = isset($_GET['blog_archive_layout']) ? $_GET['blog_archive_layout'] : themesflat_get_opt('blog_archive_layout');

    $blog_layout_sidebar = isset($_GET['sidebar_layout']) ? $_GET['sidebar_layout'] : themesflat_get_opt('sidebar_layout');

	$columns =  themesflat_get_opt('blog_grid_columns') ;

	

	$imgs = array(

		'blog-grid' => 'themesflat-blog-grid',

		'blog-list' => 'themesflat-blog',

		);

	$class_names = array(

		1 => 'blog-one-column',

		2 => 'blog-two-columns',

		3 => 'blog-three-columns',

		4 => 'blog-four-columns',

		);		

	global $themesflat_thumbnail;

	$themesflat_thumbnail = $imgs[$blog_layout];

	$themesflat_thumbnail = apply_filters('themesflat/template/themesflat_thumbnail',$themesflat_thumbnail);

	$class = array('blog-archive');

	$class[] = 'archive-'.get_post_type();

	$class[] = $blog_layout;

	$class[] =  $class_names[$columns];



	$class = apply_filters('themesflat/template/blog_class',$class);

	

	$post_per_page = isset($_GET['post_per_page']) ? $_GET['post_per_page'] : themesflat_get_opt('blog_grid_number_post');



	$paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;



	$query_args = array(

		'post_type' => 'post',

		'paged' => $paged,  

		'posts_per_page' => $post_per_page,

		

	);	

	$query = new WP_Query( $query_args );

?>

<div class="container">

	<div class="row">

		<div class="col-md-12">

			<div class="wrap-content-area clearfix">

				<div id="primary" class="content-area" >

					<main id="main" class="post-wrap" role="main">

					<?php if ( $query->have_posts() ) : ?>

					<div class="wrap-blog-article <?php echo esc_attr(implode(" ",$class));?> has-post-content">

						<?php /* Start the Loop */ ?>

						<?php while ( $query->have_posts() ) : $query->the_post(); ?>



							<?php

								/* Include the Post-Format-specific template for the content.

								 * If you want to override this in a child theme, then include a file

								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

								 */

								get_template_part( 'content', get_post_type() );

							?>



						<?php endwhile; ?>		

					</div>	

					<?php else : ?>



						<?php get_template_part( 'content', 'none' ); ?>



					<?php endif; ?>

					</main><!-- #main -->

					<div class="clearfix">

					<?php	        

						get_template_part( 'tpl/pagination' );				

					?>

					</div>

				</div><!-- #primary -->

				<?php 

				if ( $blog_layout_sidebar == 'sidebar-left' || $blog_layout_sidebar == 'sidebar-right' ) :

					get_sidebar();

				endif;

				?>

			</div><!-- /.wrap-content-area -->

		</div><!-- /.col-md-12 -->

	</div><!-- /.row -->

</div>

<?php get_footer(); ?>