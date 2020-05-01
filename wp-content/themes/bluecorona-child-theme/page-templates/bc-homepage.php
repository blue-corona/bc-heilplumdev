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
  <div class="container-fluid">
      <div class="row bc_logo_section_bg">
          
          <div class="container">
              
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-12">
              <ul class="servies_info">
                  
                  <li><img src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/icon-01.png" class="img-fluid">
                      <p class="bc_text_18  bc_line_height_20">Plumbing<br> Service</p>
                  </li>
                   <li><img src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/icon-02.png" class="img-fluid">
                      <p class="bc_text_18  bc_line_height_20">Water &<br> Sewer Lines</p></li>
                    <li><img src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/icon-03.png" class="img-fluid">
                      <p class="bc_text_18  bc_line_height_20">Water<br>Heaters</p></li>
                     <li><img src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/icon-04.png" class="img-fluid">
                      <p class="bc_text_18  bc_line_height_20">Drain<br>Cleaning</p></li>
                      <li><img src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/icon-05.png" class="img-fluid">
                      <p class="bc_text_18  bc_line_height_20">Sewer Video<br>Inspections</p></li>
              </ul>
                
                  </div> 

              </div>
          </div>
 

      </div>
  </div>

<div class="container">
    
<div class="row bc-row_second">
    <div class="col-lg-12 col-md-12 col-12">
       <h1 class="text-center">Quality Plumbers in Your Neighborhood </h1> 
       <h2 class="text-center">Proudly Serving Howard County & the Surrounding Baltimore Washington Region</h2>
    </div>      
     <div class="col-lg-6 col-md-6 col-12">
         
         <img src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/truck_img.png" class="img-fluid">

     </div>
     <div class="col-lg-6 col-md-6 col-12">
         <p class="text-justify my-message" id="my-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
            
         Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </p> <a id="showHide" onclick="showmoreText();"> Read More  <i class="fas fa-plus"></i></a>


     </div>

</div>
</div>

<div class="container-fluid">
    <div class="row bc_whychoose_section_bg">
        <div class="container">
            
            <div class="row">
                 <div class="col-md-12 col-lg-12 col-12">
                     
                     <h1 class="text-center bc_color_white p-2">Why Choose Heil?</h1>
                 </div>
       <div class="col-md-6 col-lg-6 col-12">
           
           
               

          <div class="bc_left d-block bc_color_white_bg m-3">
             <h4 class="text-center">Trusted By</h4>
            <?php echo do_shortcode('[logocarousel id="29"]'); ?>


           </div>
       </div>
       <div class="col-md-6 col-lg-6 col-12">
           
<div class="wrapper">
    <div class="counter col_fourth">
      
      <i class="fas fa-calendar-star fa-2x"></i>


      <h2 class="timer count-title count-number" data-to="300" data-speed="1500"></h2>
       <p class="count-text ">Years in Business</p>
    </div>

    <div class="counter col_fourth">
     
      <i class="fas fa-users fa-2x"></i>

      <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
      <p class="count-text ">Customers Helped</p>
    </div>

    <div class="counter col_fourth">
    
      <i class="fas fa-thumbs-up fa-2x"></i>

      <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
      <p class="count-text ">Service</p>
    </div>

   
</div>




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
