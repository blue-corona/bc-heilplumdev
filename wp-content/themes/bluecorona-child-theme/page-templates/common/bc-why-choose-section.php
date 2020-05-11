<div class="container-fluid m-0 p-0 why_choose_section">
  <div class="overlay py-5">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-12 text-center d-none d-md-block">
          <span class="bc_text_48 bc_line_height_50 bc_sm_text_32 bc_sm_line_height_37 bc_font_alt_1 bc_color_white bc_text_bold">Why Choose Heil?</span>
        </div>
        <!--  MobileYears in Business section-->
        <div class="col-lg-6 mt-4 d-md-none">
          <div class="row no-gutters">
            <div class="col-lg-12 text-center mb-4">
              <h5>Why Choose Heil?</h5>
            </div>
            <div class="business-btn-prev col-1 text-center no-focus" tabindex="0" aria-label="Previous slide">
              <i class="far fa-chevron-left bc_text_32 bc_line_height_37 bc_color_white h-100 align-self-center"></i>
            </div>
            <div class="col-10">
              <div class="swiper-container business-swiper">
                <div class="swiper-wrapper pb-4">
                    <div class="swiper-slide text-center">
                        <i class="fas fa-calendar-star bc_text_40 bc_line_height_40 bc_color_primary"></i>
                      <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">43</span>
                      <h7 class="d-block mt-4">Years in Business</span>
                    </div>
                    <div class="swiper-slide text-center">
                      <i class="fas fa-user bc_text_40 bc_line_height_40 bc_color_primary"></i>
                      <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">14,638</h7>
                      <h7 class="d-block mt-4">Customers Helped</h7>
                    </div>
                    <div class="swiper-slide text-center">
                      <i class="fas fa-thumbs-up bc_text_40 bc_line_height_40 bc_color_primary"></i>
                      <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">24/7</span>
                      <h7 class="d-block mt-4">Service</h7>
                    </div>
                </div>
              </div>
            </div>
            <span class="business-btn-next col-1 text-center no-focus" tabindex="0" aria-label="Next slide">
              <i class="far fa-chevron-right bc_text_32 bc_line_height_37 bc_color_white align-self-center h-100"></i>
            </span>
          </div>
        </div>
        <!-- End Mobile Years in Business section-->
        <div class="col-lg-6 mt-4">
          <div class="trusted_by">
            <div class="row no-gutters">
              <div class="whychoose-btn-prev col-1 text-center no-focus" tabindex="0" aria-label="Previous slide">
                <i class="far fa-chevron-left bc_text_20 bc_line_height_40 bc_sm_text_32 bc_sm_line_height_37 bc_color_primary h-100"></i>
              </div>
              <div class="col-10">
                <h4 class="text-center mt-4 mb-3">Trusted By</h4>
                <div class="swiper-container whychoose-swiper">
                  <div class="swiper-wrapper pb-4">
                    <?php 
                    $affiliations_args  = array( 'post_type' => 'bc_affiliations', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
                    $query = new WP_Query( $affiliations_args );
                    if ( $query->have_posts() ) :
                    while($query->have_posts()) : $query->the_post();
                    $affiliation_custom_image = get_post_meta( get_the_ID(), 'affiliation_custom_image', true );
                    ?>
                    <?php 
                    if(isset($affiliation_custom_image) && !empty($affiliation_custom_image)){
                    ?>
                      <div class="swiper-slide text-center">
                          <img src="<?php echo $affiliation_custom_image;?>" class="align-self-center img-fluid" alt="sb_bbb_logo">
                      </div>
                      <?php }?>
                    <?php
                      endwhile; 
                      wp_reset_query();
                    endif;
                    ?>
                  </div>
                </div>
              </div>
              <span class="whychoose-btn-next col-1 text-center no-focus" tabindex="0" aria-label="Next slide">
                <i class="far fa-chevron-right bc_text_20 bc_line_height_40 bc_sm_text_32 bc_sm_line_height_37 bc_color_primary h-100"></i>
              </span>
            </div>
          </div>
        </div>
        <!-- Deskto Years in Business section-->
        <div class="col-lg-6 py-5 d-none d-md-block">
          <div class="row no-gutters mt-3">
            <div class="col-md-4 text-center">
              <div class="border_right_white position-relative">
                <i class="fas fa-calendar-star bc_text_40 bc_line_height_40 bc_color_primary"></i>
                <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">43</span>
                <span class="h7 d-block mt-4">Years in Business</span>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="border_right_white position-relative">
                <i class="fas fa-user bc_text_40 bc_line_height_40 bc_color_primary"></i>
                <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">14,638</span>
                <span class="h7 d-block mt-4">Customers Helped</span>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="">
                <i class="fas fa-thumbs-up bc_text_40 bc_line_height_40 bc_color_primary"></i>
                <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">24/7</span>
                <span class="h7 d-block mt-4">Service</span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Deskto Years in Business section-->
      </div>
    </div>
  </div>
</div>