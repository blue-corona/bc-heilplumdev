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
<?php 
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
query_posts(['post_type'=>'bc_locations','paged' => $paged]);?>
<main>
<?php get_template_part( 'page-templates/common/bc-banner-section'); ?>
	<div class="container-fluid py-3">
      <div class="container ">
        <h1 class="bc_text_48 bc_color_primary bc_text_medium bc_line_height_50 bc_font_alt_1 bc_mob_text_center">Our Reviews</h1>
      </div>
    </div>
	<div class="container-fluid text-center  py-5 plan01 position-relative">
      <div class="border_animation_plan01">
        <span><span><div class="position-absolute" style="top:0;"></div></span></span>
        <div class="container border_right">
			<div class="stars  bc_color_quaternary_bg  float-right position-relative bc_align_star" style="color:#FDDD05; margin-top: -3.8rem; width: 20%;">
				<i aria-hidden="true" class="fa fa-star bc_text_30"></i> 
				<i aria-hidden="true" class="fa fa-star bc_text_30"></i>
				<i aria-hidden="true" class="fa fa-star bc_text_30"></i>
				<i aria-hidden="true" class="fa fa-star bc_text_30"></i> 
				<i aria-hidden="true" class="fa fa-star bc_text_30"></i>
			</div>
			<div class="row equal">
			<?php 
		     	if ( have_posts() ) :
		     		while ( have_posts() ) : the_post();
		     			get_template_part( 'loop-templates/content-page', get_post_format() );
					endwhile; else :
					get_template_part( 'loop-templates/content', 'none' );
				endif;
			?>
			</div> 
			<div class="row mt-4">
				<div class="col"></div>
				<div class="col offset-1">
					<?php understrap_pagination(); ?></div>
				<div class="col"></div>
			</div>
        </div>
      </div>
    </div>
</main>

<?php get_footer(); ?>

