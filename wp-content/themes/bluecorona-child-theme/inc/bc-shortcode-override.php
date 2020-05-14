<?php
/*- overriding plugins shortcode -*/

add_action('wp_head', 'bc_promotion_shortcode_custom');
function bc_promotion_shortcode_custom() {
	remove_shortcode('bc-testimonial');
	add_shortcode('bc-testimonial', 'custom_testimonial_shortcode');

    
    remove_shortcode('bc-promotion');
    add_shortcode('bc-promotion', 'custom_promotion_shortcode');
    
    remove_shortcode('bc-geotargeting');
    add_shortcode( 'bc-geotargeting', 'custom_location_shortcode' );
    
}

function custom_location_shortcode ( $atts ) {
    $categoryIds = null;
    $args  = array( 'post_type' => 'bc_locations', 'posts_per_page' => -1, 'order'=> 'ASC','post_status'  => 'publish');
    if(isset($atts['category_id'])) {
        $categoryIds = explode(',', $atts['category_id']);
        $taxArgs = array(
                        array(
                            'taxonomy' => 'bc_location_category', //double check your taxonomy name in you dd 
                            'field'    => 'id',
                            'terms'    => $categoryIds,
                        ),
                        );
        $args['tax_query'] = $taxArgs;
    }
    
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
        if(isset($atts['withrowwrapper']) == 1) { echo "<div class='row bc_geolocation_list'>"; }
        while($query->have_posts()) : $query->the_post();
        ?>
            <div class="col-md-3 bc_geolocation_list_item">
                <h5 class="nav-item mr-5">
                    <a class="nav-link" href="<?php the_permalink(); ?>"><?php echo ( $query->post->custom_city ? $query->post->custom_city : the_title() ); ?> </a>
                </h5>
            </div>
        <?php
        endwhile; 
        if(isset($atts['withrowwrapper']) == 1) 
            { echo "</div>"; }
        wp_reset_query();
    endif;
}

function custom_promotion_shortcode( $atts , $content = null ){
static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
    ?>
<script>
var swiperTestimonials<?php echo $count ?> = new Swiper('#services-swiper_<?php echo $count ?>', {
         slidesPerView: 2,
            loop: true,
            speed: 400,
            // autoplay: true,
            paginationClickable: true,
            spaceBetween: 50,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
          }     
        });
        </script>
        <?php });
    $Ids = null;
    $args  = array( 'post_type' => 'bc_promotions', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
    if(isset($atts['id'])) {
        $Ids = explode(',', $atts['id']);
        $postIds = $Ids;
        $args['post__in'] = $postIds;
    }
    ob_start();
    ?>
    <div class="container-fluid m-0 px-0 py-lg-5 pb-4 bc_color_4_bg bg_color_white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-md-12 col-xs-12 mt-2 px-5 text-center">
            <h2 class="mb-5">Save on Our Services</h2>
          </div>
          <div class="col-lg-12 text-center">
            <div id="services-swiper_<?php echo $count;?>" class="swiper-container services-swiper pb-1">
              <div class="swiper-wrapper">
                <?php 
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
                    $footer_heading = get_post_meta( get_the_ID(), 'promotion_footer_heading', true );
                    ?>
                    <div class="swiper-slide text-center">
                      <div class="bc_color_primary_bg p-3">
                        <div class="border_dashed text-center py-4 px-3 pt-0 ">
                            <span class="mb-2 d-block bc_font_alt_1 bc_text_50 bc_line_height_40 bc_color_secondary text-uppercase bc_text_semibold"><?php echo $title;?></span>
                            <span class="bc_text_20 bc_line_height_26 bc_font_default bc_color_white my-4 d-block"><?php echo $subheading;?> </span>
                            <span onclick="window.open('<?php the_permalink(get_the_ID()); ?>')" class="cursor_pointer bc_text_24 bc_line_height_40 bc_font_alt_1 d-block mb-2 bc_text_normal bc_color_secondary text-uppercase"><?php echo $footer_heading;?></span>
                        </div>
                      </div>
                    </div>
                  <?php }
                  } 
                endwhile; 
                wp_reset_query();
                endif;
                ?>
              </div>
            </div>
              <!-- Add Pagination -->
            <div class="swiper-pagination services-pagination d-md-none"></div>
            <a href="<?php echo get_home_url();?>/specials/" class="btn_secondary mt-5">View All Deals</a>
          </div>
        </div>
      </div>
    </div>

<?php }



function custom_testimonial_shortcode($atts , $content = null){
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
    ?>
    <script>
      var swiperService<?php echo $count ?> = new Swiper('#services-swiper_<?php echo $count ?>', {
        navigation: {
            nextEl: '.services-btn-next',
            prevEl: '.services-btn-prev',
        },
         slidesPerView: 1,
            loop: true,
            speed: 400,
            // autoplay: true,
            paginationClickable: true,
            spaceBetween: 50,
            pagination: {
                el: '.services-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
          }     
        });

    var swiperService<?php echo $count ?> = new Swiper('#customer-swiper_<?php echo $count ?>', {
        navigation: {
            nextEl: '.customer-btn-next',
            prevEl: '.customer-btn-prev',
        },
         slidesPerView: 1,
            loop: true,
            speed: 400,
            // autoplay: true,
            paginationClickable: true,
            spaceBetween: 50,
            pagination: {
                el: '.customer-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
          }     
        });
    </script>
    <?php });
    $Ids = null;
    $args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
    if(isset($atts['id'])) {
        $Ids = explode(',', $atts['id']);
        $postIds = $Ids;
        $args['post__in'] = $postIds;
    }
    ob_start();
    ?>
    <div class="container-fluid m-0 p-0 customer_section">
      <div class="container py-5">
        <div class="row no-gutters">
          <div class="col-12 text-center mt_20">
            <h2>Customer Experience</h2>
          </div>
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 mt-lg-5 mt-3 text-center">
            <div class="customer-btn-prev d-none d-md-block no-focus" tabindex="0" aria-label="Previous slide position-relative">
              <div class="left text-left pl-3">
                <i class="fas fa-chevron-left bc_text_30 bc_line_height_50 bc_sm_text_32 bc_sm_line_height_37 bc_color_primary h-100 align-self-center"></i>
              </div>
            </div>
            <div class="customer">
                <div class="row no-gutters py-lg-5 pb-5 pt-4">
                  <div class="col-md-12 col-12 text-center">
                    <div class="mb-4">
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                      <i class="fas fa-star bc_text_29 bc_line_height_40 bc_color_6"></i>
                    </div>
                    <div id="customer-swiper_<?php echo $count ?>" class="swiper-container customer-swiper">
                      <div class="swiper-wrapper">
                    <?php
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while($query->have_posts()) : $query->the_post();
                    $title = get_post_meta( get_the_ID(), 'testimonial_title', true );
                    $message = get_post_meta( get_the_ID(), 'testimonial_message', true );
                    if(strlen($message) > 300) {
                      $message = substr($message, 0, 299) . '...';
                    };
                    $name = get_post_meta( get_the_ID(), 'testimonial_name', true );
                    ?>
                        <div class="swiper-slide text-center">
                            <p class="px-lg-5 px-3">"<?php echo $message; ?>"</p>
                            <span class="bc_text_20 bc_line_height_40 bc_color_primary bc_font_default bc_text_bold"><?php echo $title;?> - <?php echo $name?></span>
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

              <div class="customer-btn-next d-none d-md-block no-focus" tabindex="0" aria-label="Next slide">
                <div class="right text-right pr-3">
                  <i class="fas fa-chevron-right bc_text_30 bc_line_height_50 bc_sm_text_32 bc_sm_line_height_37 bc_color_primary align-self-center h-100"></i>
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination customer-pagination d-md-none mt-2"></div>

              <span class="d-none d-md-block mb-1">
                <a href="<?php echo get_home_url();?>/testimonials/" class="btn_secondary my-5 d-inline-block">Read Our Testimonials</a>
              </span>
              <a href="<?php echo get_home_url();?>/testimonials/" class="btn_secondary mt-5 d-md-none">Read More</a>
          </div>
        </div>
      </div>
    </div>
<?php 
$output = ob_get_clean();
return $output;
}
