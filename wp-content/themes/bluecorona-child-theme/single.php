<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
	<div class="container-fluid p-0">
        <img class="w-100" src="<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg">
    </div>

	<div class="container-fluid">
		<div class="container">
		  <div class="row">
		    <div class="col-lg-8 col-md-12 col-xs-12 p-3">
		     	<?php 
		     	while ( have_posts() ) : the_post();
		     	get_template_part( 'loop-templates/content', 'single' ); 
		     	endwhile; // end of the loop.
		     	?>
		    </div>
		    <!-- rIGHT sidebar starts -->
		    <?php get_template_part( 'sidebar-templates/sidebar', 'singleblogrightside' ); ?>
		    <!-- right sidebar ends -->
		  </div>
		</div>
	</div>
</main>
<?php get_footer()?>
