<?php
/**
 * Template Name: Promotions Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
<div class="container-fluid" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="height:230px; background-size: 100%; background-position: top; background-repeat: no-repeat; background-image: url('<?php echo $image[0]; ?>');" <?php }
else{ ?> style="height:230px; background-size: 100%; background-position: top; background-repeat: no-repeat; background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');" <?php }?>>
    <div class="container d-none d-lg-block pt-5">
        <div class="row no-gutters">
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

<div class="container-fluid m-0 px-0 py-lg-5 pb-4 bc_color_4_bg bg_color_white">
    <div class="container">
        <div class="row">
            <!-- The Content Starts -->
            <div class="col-lg-12 col-md-12 col-xs-12 mt-2 px-5">
                <h1><?php the_title();?></h1>
				<div class="row text-center">
                <?php
                $args  = array( 'post_type' => 'bc_promotions', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                while($query->have_posts()) : $query->the_post();
                    
                    $promotion_type = get_post_meta(get_the_ID(), 'promotion_type', TRUE);
                    if($promotion_type == 'Builder'){
                    $date = get_post_meta( get_the_ID(), 'promotion_expiry_date1', true );
                    if(strtotime($date) >= strtotime(current_time('m/d/Y'))){
                        $title = get_post_meta( get_the_ID(), 'promotion_title1', true );
                        $color = get_post_meta( get_the_ID(), 'promotion_color', true );
                        $subheading = get_post_meta( get_the_ID(), 'promotion_subheading', true );
                        $footer_heading = get_post_meta( get_the_ID(), 'promotion_footer_heading', true ); ?>
                        <div class="col-md-4 col-lg-6 p-2 text-center">
                          <div class="bc_color_primary_bg p-3">
                            <div class="border_dashed text-center py-4 px-3 pt-0 ">
                                <span class="mb-2 d-block bc_font_alt_1 bc_text_50 bc_line_height_40 bc_color_secondary text-uppercase bc_text_bold"><?php echo $title;?></span>
                                <span class="bc_text_20 bc_line_height_26 bc_font_default bc_color_white my-4 d-block"><?php echo $subheading;?> </span>
                                <span onclick="window.open('<?php the_permalink(get_the_ID()); ?>')" class="cursor_pointer bc_text_24 bc_line_height_40 bc_font_alt_1 d-block mb-2 bc_text_normal bc_color_secondary text-uppercase"><?php echo $footer_heading;?></span>
                            </div>
                          </div>
                        </div>
                        <?php }
                    }else if($promotion_type == 'Image'){
                        $date2 = get_post_meta( get_the_ID(), 'promotion_expiry_date2', true );
                        if(strtotime($date2) >= strtotime(current_time('m/d/Y'))){
                            $title2 = get_post_meta( get_the_ID(), 'promotion_title2', true );
                            $promotion_custom_image = get_post_meta( get_the_ID(), 'promotion_custom_image', true ); ?>
                            <div class="col-md-4 col-lg-4 p-2 text-center">
                                <a href="<?php the_permalink(get_the_ID()); ?>" target="_blank">
                                    <img class="img-fluid" class="img-fluid" src="<?php echo $promotion_custom_image;?>" />
                                </a>
                            </div>
                    <?php }
                    }
                endwhile; 
                wp_reset_query();
                endif;
                ?>
                </div>
			</div>
        
        </div>
    </div>
</div>

<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>
</main>
<?php get_footer();?>