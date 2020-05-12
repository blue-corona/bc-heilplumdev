<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
global $post;
?>
<main>

<div class="container-fluid sub_banner" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="height:230px; background-size: 100%; background-position: top; background-repeat: no-repeat; background-image: url('<?php echo $image[0]; ?>');" <?php }
else{ ?> style="height:230px; background-size: 100%; background-position: top; background-repeat: no-repeat; background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');" <?php }?>>
    <div class="container d-none d-lg-block pt-5">
        <div class="row no-gutters">
            <div class="col-lg-8 offset-lg-2">
                <div class="row no-gutters bc_color_4_bg py-3 px-2" style="border-radius: 5px;">
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

	<div class="container-fluid pb-5">
		<div class="container">
		    <div class="row">
			    <div class="col-lg-8 col-md-12 col-xs-12 mt-5 px-5 sub_page_sidebar">
                    <h1><?php the_title();?></h1>
					<?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
				</div>
			    <?php get_template_part( 'sidebar-templates/sidebar', 'subpagerightsidebar' ); ?>
		    </div>
		</div>
	</div>
<?php get_template_part( 'page-templates/common/bc-heil-section'); ?>
<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>
</main>
<?php get_footer();
