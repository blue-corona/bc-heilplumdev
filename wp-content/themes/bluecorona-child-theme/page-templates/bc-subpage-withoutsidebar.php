<?php
/**
 * Template Name: SubPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
<div class="container-fluid" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="height:300px; background-size: cover;background-position: center;background-image: url('<?php echo $image[0]; ?>');" <?php } else{ ?> style="height:300px;background-size: cover;background-position: center;background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');" <?php }?>>
    <div class="container d-none d-lg-block">
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
                <div class="col-lg-12 subpage">
                    <h1><?php the_title();?></h1>
                    <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();
                            the_content();
                          endwhile;
                        endif;
                      ?>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part( 'page-templates/common/bc-choose-heil-section'); ?>
<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>

</main>
<?php get_footer();?>