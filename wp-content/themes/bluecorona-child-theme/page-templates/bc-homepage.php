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

    <?php get_template_part( 'page-templates/common/bc-services');?>

    <?php get_template_part( 'page-templates/common/bc-heil-content-section');?>
    
    <?php get_template_part( 'page-templates/common/bc-achievment-section');?>
    
    <?php get_template_part( 'page-templates/common/bc-why-choose-section');?>

    

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