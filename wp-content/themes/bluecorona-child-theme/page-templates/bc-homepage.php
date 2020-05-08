<?php
/**
 * Template Name: HomePage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>




<main role="main">
    <?php 
    if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'background_image') == 'background_image'){
        get_template_part( 'page-templates/hero-section/bc-hero-banner' );
    }else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'image_slider') == 'image_slider'){
        get_template_part( 'page-templates/hero-section/bc-hero-swiper' );
    }
    else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'video') == 'video'){
        get_template_part( 'page-templates/hero-section/bc-hero-video' );
    }
    ?>
    <!-- Desktop Service section -->
    <div class="container-fluid p-0 bc_hero_container desktop_service_sectiom bc_home_section_bg d-none d-lg-block" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/waves.png'); background-position: center;">
        <div class="bc_white_gradiont py-5">
            <div class="container">
              <div class="row m-0">
                <div class="col-lg">
                  <a href="#" class="no_hover_underline">
                    <div class="services text-center py-4">
                      <div class="py-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-01.PNG" class="img-fluid" alt="icon-01" >
                      </div>
                      <h6 class="mb-4">Plumbing <br> Service</h6>
                    </div>
                  </a>
                </div>
                <div class="col-lg">
                  <a href="#" class="no_hover_underline">
                    <div class="services text-center py-4">
                      <div class="py-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-02.PNG" class="img-fluid" alt="icon-02">
                      </div>
                      <h6 class="mb-4">Water & <br> Sewer Lines</h6>
                    </div>
                  </a>
                </div>
                <div class="col-lg">
                  <a href="#" class="no_hover_underline">
                    <div class="services text-center py-4">
                      <div class="py-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-03.PNG" class="img-fluid" alt="icon-03">
                      </div>
                      <h6 class="mb-4">Water <br> Heaters</h6>
                    </div>
                  </a>
                </div>
                <div class="col-lg">
                  <a href="#" class="no_hover_underline">
                    <div class="services text-center py-4">
                      <div class="py-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-04.png" class="img-fluid" alt="icon-04">
                      </div>
                      <h6 class="mb-4">Drain <br> Cleaning </h6>
                    </div>
                  </a>
                </div>
                <div class="col-lg">
                  <a href="#" class="no_hover_underline">
                    <div class="services text-center py-4">
                      <div class="py-2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-05.png" class="img-fluid" alt="icon-05">
                      </div>
                      <h6 class="mb-4">Sewer Video <br> Inspections </h6>
                    </div>
                  </a>
                </div>
              </div>
           </div>
        </div>
    </div>
    <!-- End Desktop Service section -->

    <!-- mobile Service section -->
    <div class="container-fluid m-0 py-lg-5 py-4 d-lg-none mobile_service_sectiom">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12">
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-01.PNG" class="align-self-center img-fluid w_80" alt="icon-01">
                <div class="media modal-body px-1">
                <h6>Plumbing <br> Service</h6>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-02.PNG" class="align-self-center img-fluid w_80" alt="icon-02">
                <div class="media modal-body px-1">
                <h6>Water & <br> Sewer Lines </h6>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-03.PNG" class="align-self-center img-fluid w_80" alt="icon-03">
                <div class="media modal-body px-1">
                <h6>Water <br> Heaters </h6>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-04.png" class="align-self-center img-fluid w_80" alt="icon-04">
                <div class="media modal-body px-1">
                <h6>Drain <br> Cleaning </h6>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2">
              <img src="<?php echo get_stylesheet_directory_uri();?>/img/icon-05.png" class="align-self-center img-fluid w_80" alt="icon-05" >
                <div class="media modal-body px-1">
                <h6>Sewer Video <br> Inspections </h6>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End mobile Service section -->
    <div class="container-fluid m-0 quality_plumbers pb-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-10 offset-lg-1 text-left text-md-center order-first">
            <h1>Quality Plumbers in Your Neighborhood </h1>
            <h2 class="mt-3 bc_sm_text_light px-lg-5">Proudly Serving Howard County & the Surrounding Baltimore Washington Region</h2>
          </div>
          <div class="col-lg-6 mt-lg-5 mt-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/truck_img.png" class="align-self-center img-fluid" alt="truck_img">
          </div>
          <div class="col-lg-6 mt-lg-5 mt-3 order-first order-lg-last">
            <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <span class="d-none d-md-block">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span> </p> 
            <p id="read_more" class="collapse mb-2"> <span class="d-md-none">exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            <a class="bc_text_24 bc_line_height_50 bc_sm_text_16 bc_sm_line_height_40 no_hover_underline bc_color_error_hover bc_font_alt_1 bc_color_error font-bold bc_toggle_content" data-toggle="#read_more" href="#">  <span> Read More </span> <i class="far fa-plus bc_color_error bc_text_20 bc_line_height_50" aria-hidden="true"></i></a>

           <!--  <a class="bc_text_24 bc_line_height_50 bc_sm_text_16 bc_sm_line_height_40 no_hover_underline bc_color_error_hover bc_font_alt_1 bc_color_error font-bold" data-toggle="collapse" href="#read_more" aria-expanded="false" aria-controls="collapseExample">Read More <i class="ml-1 far fa-plus bc_color_error"></i> </a> -->
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 p-0 d-md-none">
      <div class="container">
        <div class="row no-gutters plus bc_color_4_bg shadow_lg">
          <div class="col-6 text-center p-4">
            <i class="fal fa-award bc_text_50 bc_line_height_50 bc_color_secondary"></i>
            <span class="bc_text_16 bc_line_height_20 bc_font_alt_1 bc_text_bold bc_color_3 d-block"> Exceptional <br> Workmanship </span>
          </div>
          <div class="col-6 text-center p-4">
            <i class="fal fa-user-clock bc_text_50 bc_line_height_50 bc_color_secondary"></i>
            <span class="bc_text_16 bc_line_height_20 bc_font_alt_1 bc_text_bold bc_color_3 d-block"> Expert <br> Plumbers </span>
          </div>
          <div class="col-6 text-center p-4">
            <i class="fal fa-hands-heart bc_text_50 bc_line_height_50 bc_color_secondary"></i>
            <span class="bc_text_16 bc_line_height_20 bc_font_alt_1 bc_text_bold bc_color_3 d-block"> Caring <br> Service </span>
          </div>
          <div class="col-6 text-center p-4">
            <i class="fal fa-calendar-star bc_text_50 bc_line_height_50 bc_color_secondary"></i>
            <span class="bc_text_16 bc_line_height_20 bc_font_alt_1 bc_text_bold bc_color_3 d-block"> Family Owned <br> Since 1977 </span>
          </div>
        </div>
      </div>
    </div>

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
                          <span class="bc_text_22 bc_line_height_24 bc_text_normal bc_font_default bc_color_primary bc_text_normal d-block mt-4">Years in Business</span>
                        </div>
                        <div class="swiper-slide text-center">
                          <i class="fas fa-user bc_text_40 bc_line_height_40 bc_color_primary"></i>
                          <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">14,638</span>
                          <span class="bc_text_22 bc_line_height_24 bc_text_normal bc_font_default bc_color_primary bc_text_normal d-block mt-4">Customers Helped</span>
                        </div>
                        <div class="swiper-slide text-center">
                          <i class="fas fa-thumbs-up bc_text_40 bc_line_height_40 bc_color_primary"></i>
                          <span class="bc_text_55 bc_line_height_19 bc_font_alt_1 bc_color_primary bc_text_bold d-block mt-4">24/7</span>
                          <span class="bc_text_22 bc_line_height_24 bc_text_normal bc_font_default bc_color_primary bc_text_normal d-block mt-4">Service</span>
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
                          <div class="swiper-slide text-center">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sb_bbb_logo.png" class="align-self-center img-fluid" alt="sb_bbb_logo">
                          </div>
                          <div class="swiper-slide text-center">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/al_logo1.png" class="align-self-center img-fluid" alt="al_logo1">
                          </div>
                          <div class="swiper-slide text-center">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/phcc_logo.png" class="align-self-center img-fluid" alt="phcc_logo">
                          </div>
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

    <div class="container-fluid m-0 p-0 customer_section">
      <div class="container py-5">
        <div class="row no-gutters">
          <div class="col-12 text-center mt_20">
            <h2>Customer Experience</h2>
          </div>
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 mt-lg-5 mt-3 text-center">
            <div class="customer-btn-prev d-none d-md-block no-focus" tabindex="0" aria-label="Previous slide position-relative">
              <div class="left text-left pl-2">
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
                    <div class="swiper-container customer-swiper">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <p class="px-lg-5 px-3">"Excellent service as always. Well mannered professionals did the job on time and left the place clean. They are and will remain our friend of the family for a long time. Thank you for a job well done."</p>
                            <span class="bc_text_20 bc_line_height_40 bc_color_primary bc_font_default bc_text_bold">Nanda - Laurel, MD</span>
                        </div>
                        <div class="swiper-slide text-center">
                            <p class="px-lg-5 px-3">"Excellent service as always. Well mannered professionals did the job on time and left the place clean. They are and will remain our friend of the family for a long time. Thank you for a job well done."</p>
                            <span class="bc_text_20 bc_line_height_40 bc_color_primary bc_font_default bc_text_bold">Nanda - Laurel, MD</span>
                        </div>
                        <div class="swiper-slide text-center">
                            <p class="px-lg-5 px-3">"Excellent service as always. Well mannered professionals did the job on time and left the place clean. They are and will remain our friend of the family for a long time. Thank you for a job well done."</p>
                            <span class="bc_text_20 bc_line_height_40 bc_color_primary bc_font_default bc_text_bold">Nanda - Laurel, MD</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="customer-btn-next d-none d-md-block no-focus" tabindex="0" aria-label="Next slide">
                <div class="right text-right pr-2">
                  <i class="fas fa-chevron-right bc_text_30 bc_line_height_50 bc_sm_text_32 bc_sm_line_height_37 bc_color_primary align-self-center h-100"></i>
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination customer-pagination d-md-none mt-2"></div>

              <span class="d-none d-md-block">
                <a href="#" class="btn_secondary mt-4">Read Our Testimonials</a>
              </span>
              <a href="#" class="btn_secondary mt-5 d-md-none">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid m-0 px-0 py-lg-5 pb-4 bc_color_4_bg bg_color_white">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 text-center mb-md-5 mb-2">
            <h2>Save on Our Services</h2>
          </div>
          <div class="col-lg-12 text-center">
            <div class="swiper-container services-swiper pb-1">
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center">
                  <div class="bc_color_primary_bg p-3">
                    <div class="border_dashed text-center py-4 px-3 pt-0 ">
                        <span class="mb-2 d-block bc_font_alt_1 bc_text_50 bc_line_height_40 bc_color_secondary text-uppercase bc_text_bold">$40 OFF</span>
                        <span class="bc_text_20 bc_line_height_26 bc_font_default bc_color_white my-4 d-block">Any Plumbing Service <br> <i>(Minimum $202)</i> </span>
                        <span class="bc_text_24 bc_line_height_40 bc_font_alt_1 d-block mb-2 bc_text_normal bc_color_secondary text-uppercase">VIEW DETAILS</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center">
                  <div class="bc_color_primary_bg p-3">
                    <div class="border_dashed text-center py-4 px-3 pt-0 ">
                        <span class="mb-2 d-block bc_font_alt_1 bc_text_50 bc_line_height_40 bc_color_secondary text-uppercase bc_text_bold">$202 OFF</span>
                        <span class="bc_text_20 bc_line_height_26 bc_font_default bc_color_white my-4 d-block">Any Water Heater Replacement <br> <i>(Minimum $1250)</i> </span>
                        <span class="bc_text_24 bc_line_height_40 bc_font_alt_1 d-block mb-2 bc_text_normal bc_color_secondary text-uppercase">VIEW DETAILS</span>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center">
                  <div class="bc_color_primary_bg p-3">
                    <div class="border_dashed text-center py-4 px-3 pt-0 ">
                        <span class="mb-2 d-block bc_font_alt_1 bc_text_50 bc_line_height_40 bc_color_secondary text-uppercase bc_text_bold">$40 OFF</span>
                        <span class="bc_text_20 bc_line_height_26 bc_font_default bc_color_white my-4 d-block">Any Plumbing Service <br> <i>(Minimum $202)</i> </span>
                        <span class="bc_text_24 bc_line_height_40 bc_font_alt_1 d-block mb-2 bc_text_normal bc_color_secondary text-uppercase">VIEW DETAILS</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination customer-pagination d-md-none"></div>
            <a href="#" class="btn_secondary mt-5">View All Deals</a>
          </div>
        </div>
      </div>
    </div>

</main>
<?php function serviceAreaJavascript() {?>
    <script type="text/javascript">
      var swiperService = new Swiper('.whychoose-swiper', {
        navigation: {
            nextEl: '.whychoose-btn-next',
            prevEl: '.whychoose-btn-prev',
        },
         slidesPerView: 3,
            loop: true,
            speed: 400,
            // autoplay: true,
            paginationClickable: true,
            spaceBetween: 50,
            pagination: {
                el: '.whychoose-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          }
        });

      var swiperService = new Swiper('.business-swiper', {
        navigation: {
            nextEl: '.business-btn-next',
            prevEl: '.business-btn-prev',
        },
         slidesPerView: 3,
            loop: true,
            speed: 400,
            // autoplay: true,
            paginationClickable: true,
            spaceBetween: 50,
            pagination: {
                el: '.business-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
            640: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          }     
        });

      var swiperService = new Swiper('.customer-swiper', {
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
      var swiperService = new Swiper('.services-swiper', {
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


        var str=jQuery("#my-message").text();
        var strlen=str.split(" ").length;
        var stringlimit=300;
        var showStr=str.substr(0,stringlimit);
        jQuery("#showHide").hide();
        jQuery(document).ready(function(){
            jQuery(".hide_div").hide();
            jQuery("#minus").toggle();
            jQuery(".abc").click(function(){
                jQuery("#minus").toggle();
                jQuery("#plus").toggle();
                jQuery(".hide_div").toggle(500);
            }); 
            if(strlen>100)
                jQuery("#showHide").show();
            jQuery("#my-message").text(showStr);
    //alert(str.split(" ").length);
});
// 
var i=1;
function showmoreText(){
    var restStr=str.substr(stringlimit*i,stringlimit*i++);
    jQuery("#my-message").append(restStr); 
}

</script>

<script>

 (function ($) {
    $.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
            increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
            $self = $(this),
            loopCount = 0,
            value = settings.from,
            data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
                value += increment;
                loopCount++;
                
                render(value);
                
                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                
                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    
                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }
            
            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
    
    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

 jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
});
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
}
});

</script>

<?php }
add_action( 'wp_footer' , 'serviceAreaJavascript' );?>
<?php get_footer(); ?>