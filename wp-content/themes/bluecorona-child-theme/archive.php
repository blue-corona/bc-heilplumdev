<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
	<div class="container-fluid p-0 banner_min_height" style="background-image: url('<?php echo get_template_directory_uri()?>/img/subpage_banner.jpg'); background-size: cover; background-repeat: no-repeat;">
	<div class="p-5 ad-overlay banner_min_height">
	    <div class="container pt-5 pb-3 mt-5">
	        <div class="row mt-5">
	            <h1 class="bc_text_48 bc_title_overlay bc_color_quaternary bc_font_alt_1 px-4 py-3 bc_text_bold">
	                Posts in <?php the_archive_title();?>
	            </h1>
	        </div>
	    </div>
    </div>
  	</div>
  	<!-- top search starts -->
	<div class="container-fluid">
		<div class="container">
			<div class="container-fluid m-0 p-0 mt-5">
	  			<?php get_template_part( 'sidebar-templates/search', 'blogtopbar' ); ?>
	  		</div>
		</div>
	</div>
	<!-- top search ends -->
	<div class="container-fluid">
		<div class="container">
			<div class="row my-4 row-eq-height thisisblog">
				<?php 
			     	if ( have_posts() ) :
			     		while ( have_posts() ) : the_post();
			     			get_template_part( 'loop-templates/content', get_post_format() );
						endwhile; else :
						get_template_part( 'loop-templates/content', 'none' );
					endif;
				?>
			</div>
			<div class="row">
				<div class="col"></div>
				<div class="col offset-1"><?php understrap_pagination(); ?></div>
				<div class="col"></div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>