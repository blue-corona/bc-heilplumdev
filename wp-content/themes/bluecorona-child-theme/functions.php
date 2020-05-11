<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
     wp_enqueue_script( 'child-hideshow-scripts', get_stylesheet_directory_uri() . '/js/show-hide-text.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );


//shortcode for phone number
//<a href="tel:[site_info_phone_number]">[site_info_phone_number]</a>
add_shortcode( 'site_info_phone_number', 'bc_site_info_phone_number' );
function bc_site_info_phone_number ( $atts ) {
    $anchor = true;
    if(isset($atts['anchor'])){
        $anchor = $atts['anchor'];
    }
    $tel = bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '3334357');
    ob_start();
    if($anchor){
        echo "<a href='tel:$tel'>$tel</a>";
    }else{
     echo $tel;
    }
    return ob_get_clean();
}

// [button_schedule_your_service title="Schedule Your Service Today" link="/schedule-appointment"]
add_shortcode( 'button_schedule_your_service', 'bc_schedule_your_service' );
function bc_schedule_your_service ( $title, $url ) {
    ob_start();
    echo '<div onclick="window.location.href =\''.get_home_url().$title['link'].'\'"  class="w-100 py-3 px-5 bc_color_primary_bg no_hover_underline rounded btn_base btn my-4 position-relative d-none d-lg-block">
    <h5 class="no_hover_underline calenter_line align-baseline-middel">
        <i class="fal fa-calendar-check bc_text_55 float-left bc_color_secondary bc_line_height_50"> </i> <h5 class=" align-baseline-middel">'.$title['title'].'</h5> <i class="fal fa-play-circle bc_text_40 bc_color_secondary mx-4 align-baseline-middel bc_line_height_50" style="float: right;
    margin-top: -2.7rem;"></i>
    </h5>
    </div>';
    return ob_get_clean();
}

add_action('wp_footer', 'accordion_method');
function accordion_method(){?>
<script>
jQuery(document).ready(function () {
  jQuery('#accordion').on('show.bs.collapse', function (e) {
      toggleIcon(e.target);
  });
  jQuery('#accordion').on('hidden.bs.collapse', function (e) {
      toggleIcon(e.target);
  });
});
function toggleIcon(target){
    var target = jQuery(target).parent('.card').children('.card-header').children('h2').children('svg'); 
    console.log(target);
    target.toggleClass('fa-minus-circle');
    target.toggleClass('fa-plus-circle');
}
</script>
<?php }
// Accordion Shortcode Start
add_shortcode( 'bc_accordion', 'accordion_shortcode' );
function accordion_shortcode( $atts, $content = null ) {
    $content = str_replace('<br>', '', $content);
    return '<div id="accordion" class="accordion w-100 text-left">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'bc_card', 'card_shortcode' );
function card_shortcode( $atts, $content = null ) {
    $title='';  
    if(isset($atts['title'])) {
        $title = $atts['title'];
    }
    $iconClass = 'fal fa-plus-circle';
    $expanded = '';
    if(isset($atts['expanded'])) {
        $expanded = 'show';
        $iconClass = 'fal fa-minus-circle';
    }
    $id = 'collapse'.rand(0,100000);
    return '<div class="card bg-transparent border-0">
                <div id="headingOne" class="card-header border-0  bg-transparent p-0">
                    <h2>'.$title.'<i class="'.$iconClass.' bc_color_primary  bc_text_30 float-right toggle_icon mt-2 ml-2" data-toggle="collapse" data-target="#'.$id.'" aria-controls="'.$id.'"></i></h2>
                </div>
                <div id="'.$id.'" class="collapse '.$expanded.'" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">'.do_shortcode($content).'</div>
                </div>
            </div>';
}
