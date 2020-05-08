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

    <?php get_template_part( 'page-templates/common/testimonials');?>    

    <?php echo do_shortcode('[bc-promotion]')?>

    

</main>
<?php function serviceAreaJavascript() {?>
    <script type="text/javascript">
      var swiperWhyChoose = new Swiper('.whychoose-swiper', {
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

      var swiperBusiness = new Swiper('.business-swiper', {
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