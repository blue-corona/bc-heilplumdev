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
                  <div class="services text-center py-4">
                    <div class="py-2">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-01.png" class="img-fluid" alt="icon-01" >
                    </div>
                    <h6 class="mb-4">Plumbing <br> Service</h6>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="services text-center py-4">
                    <div class="py-2">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-02.png" class="img-fluid" alt="icon-02">
                    </div>
                    <h6 class="mb-4">Water & <br> Sewer Lines</h6>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="services text-center py-4">
                    <div class="py-2">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-03.png" class="img-fluid" alt="icon-03">
                    </div>
                    <h6 class="mb-4">Water <br> Heaters</h6>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="services text-center py-4">
                    <div class="py-2">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-04.png" class="img-fluid" alt="icon-04">
                    </div>
                    <h6 class="mb-4">Drain <br> Cleaning </h6>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="services text-center py-4">
                    <div class="py-2">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-05.png" class="img-fluid" alt="icon-05">
                    </div>
                    <h6 class="mb-4">Sewer Video <br> Inspections </h6>
                  </div>
                </div>
              </div>
           </div>
        </div>
    </div>
    <!-- End Desktop Service section -->

    <!-- mobile Service section -->
    <div class="container-fluid m-0 py-5 d-lg-none mobile_service_sectiom">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12">
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-01.png" class="align-self-center img-fluid" alt="icon-01">
                <div class="media modal-body">
                <span class="bc_text_22 bc_font_alt_1 bc_color_primary bc_line_height_24 bc_text_medium">Plumbing <br> Service</span>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-02.png" class="align-self-center img-fluid" alt="icon-02">
                <div class="media modal-body">
                <span class="bc_text_22 bc_font_alt_1 bc_color_primary bc_line_height_24 bc_text_medium">Water & <br> Sewer Lines </span>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-03.png" class="align-self-center img-fluid" alt="icon-03">
                <div class="media modal-body">
                <span class="bc_text_22 bc_font_alt_1 bc_color_primary bc_line_height_24 bc_text_medium">Water <br> Heaters </span>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2 mb-3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-04.png" class="align-self-center img-fluid" alt="icon-04">
                <div class="media modal-body">
                <span class="bc_text_22 bc_font_alt_1 bc_color_primary bc_line_height_24 bc_text_medium">Drain <br> Cleaning </span>
                </div>
                <a href="#" class="align-self-center"><i class="fas fa-arrow-circle-right bc_text_28 bc_line_height_72 bc_color_primary"></i> </a>
            </div>
            <div class="media pb-2 mx-auto border_bottom px-2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-05.png" class="align-self-center img-fluid" alt="icon-05" >
                <div class="media modal-body">
                <span class="bc_text_22 bc_font_alt_1 bc_color_primary bc_line_height_24 bc_text_medium">Sewer Video <br> Inspections </span>
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
            <a class="bc_text_24 bc_line_height_50 bc_sm_text_16 bc_sm_line_height_40 no_hover_underline bc_color_error_hover bc_font_alt_1 bc_color_error font-bold" data-toggle="collapse" href="#read_more" aria-expanded="false" aria-controls="collapseExample">Read More <i class="ml-1 far fa-plus bc_color_error"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid m-0 p-0 why_choose_section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home_img2.jpg'); background-position: center;">
      <div class="overlay py-5">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-12 text-center">
              <span class="bc_text_48 bc_line_height_50 bc_font_alt_1 bc_color_white bc_text_bold">Why Choose Heil?</span>
            </div>
          </div>
        </div>
      </div>
    </div>

</main>
<?php function serviceAreaJavascript() {?>
    <script type="text/javascript">
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


<script type="text/javascript">

 $(document).ready(function(){

    if($('.brands_slider').length)
    {
        var brandsSlider = $('.brands_slider');

        brandsSlider.owlCarousel(
        {
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            nav:false,
            dots:false,
            autoWidth:true,
            items:8,
            margin:42
        });

        if($('.brands_prev').length)
        {
            var prev = $('.brands_prev');
            prev.on('click', function()
            {
                brandsSlider.trigger('prev.owl.carousel');
            });
        }

        if($('.brands_next').length)
        {
            var next = $('.brands_next');
            next.on('click', function()
            {
                brandsSlider.trigger('next.owl.carousel');
            });
        }
    }


});

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