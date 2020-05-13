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
<?php get_template_part( 'page-templates/common/bc-banner-section'); ?>
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
<?php get_template_part( 'page-templates/common/bc-heil-section'); ?>
<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>
</main>
<?php get_footer();?>