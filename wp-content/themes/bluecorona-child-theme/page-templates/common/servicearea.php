<?php
/**
 * ServiceArea
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container-fluid m-0 bc_color_7_bg m-0 mb-4">
	<div class="container px-2 text-center text-lg-left">
	    <h4 class="abc mb-0">
	    	<a href="javascript:void(0)" class="bc_color_8 bc_color_8_hover no_hover_underline bc_font_alt_1 bc_text_20 bc_line_height_50 bc_text_normal">Service Areas 
		    	<i id="plus" aria-hidden="true" class="far fa-plus fa-xs"></i>
		    	<i id="minus" aria-hidden="true" class="far fa-minus fa-xs"></i>
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
</div>
