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
<div class="container-fluid" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="height:300px; background-size: cover;background-position: center;background-image: url('<?php echo $image[0]; ?>');" <?php }
    else{ ?> style="height:300px;background-size: cover;background-position: center;background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');" <?php }?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="row no-gutters bc_color_4_bg py-3 px-2">
                    <div class="col-md-3">
                        <div class="media border_right position-relative">
                            <i class="fal fa-award bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Exceptional <br> Workmanship </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media border_right position-relative">
                            <i class="fal fa-user-clock bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Expert <br> Plumbers </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media border_right position-relative">
                            <i class="fal fa-hands-heart bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Caring <br> Service </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <i class="fal fa-calendar-star bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Family Owned <br> Since 1977 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
