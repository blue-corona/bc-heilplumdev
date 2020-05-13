<?php
/**
 * Template Name: Review Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main>
<?php get_template_part( 'page-templates/common/bc-banner-section'); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">

        <div class="col-lg-12 col-md-12 col-xs-12 mt-2 px-5">
        <h1><?php the_title();?></h1>
            <div class="row text-center">
                <div class="customer">
                <div class="row no-gutters py-lg-5 pb-5 pt-4">
                  <?php
                  $args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
                  $query = new WP_Query( $args );
                  if ( $query->have_posts() ) :
                      while($query->have_posts()) : $query->the_post();
                  $title = get_post_meta( get_the_ID(), 'testimonial_title', true );
                  $message = get_post_meta( get_the_ID(), 'testimonial_message', true );
                  $name = get_post_meta( get_the_ID(), 'testimonial_name', true );
                  ?>
                  <div class="col-md-4 col-4 text-center">
                    <div class="mb-4">
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                    </div>
                    <div class="swiper-container customer-swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <p class="px-lg-5 px-3">"<?php echo $message; ?>"</p>
                            <span class="bc_text_20 bc_line_height_40 bc_color_primary bc_font_default bc_text_bold"><?php echo $title;?> - <?php echo $name?></span>
                        </div>

                      </div>
                    </div>
                  </div>
                  <?php
                  endwhile; 
                  wp_reset_query();
                  endif;?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?php get_template_part( 'page-templates/common/bc-heil-section'); ?>
<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>
</main>
<?php get_footer();?>
