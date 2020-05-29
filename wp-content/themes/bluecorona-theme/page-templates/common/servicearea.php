<?php
/**
 * ServiceArea
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container p-2 text-center text-lg-left">
    <h4 class="abc mb-0">
    	<a href="javascript:void(0)" class="bc_color_secondary bc_color_primary_hover bc_font_alt_1 bc_text_24">Service Areas 
	    	<i id="plus" aria-hidden="true" class="fa fa-plus fa-xs"></i>
	    	<i id="minus" aria-hidden="true" class="fa fa-minus fa-xs"></i>
    	</a>
    </h4>
    <div class="hide_div row">
        <?php
	if ( is_front_page() ) {
		echo do_shortcode('[bc-geotargeting category_id=11]'); //Home page
	}else if($post->ID == 341){
		echo do_shortcode('[bc-geotargeting category_id=23]'); //Commercial Plumbing Service 
	}else if($post->ID == 364){
		echo do_shortcode('[bc-geotargeting category_id=20]'); //Emergency Plumbing Service 
	}else if($post->ID == 432){
		echo do_shortcode('[bc-geotargeting category_id=26]'); //Sewer Line Repair Service 
	}else if($post->ID == 466){
		echo do_shortcode('[bc-geotargeting category_id=17]'); //Water Line Repair Service 
	}else if($post->ID == 478){
		echo do_shortcode('[bc-geotargeting category_id=14]'); //Water Line Replacement Service 
	}
	?>
    </div>
</div>
