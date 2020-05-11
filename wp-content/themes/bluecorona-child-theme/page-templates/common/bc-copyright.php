<?php
/**
 * Copyright
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php echo bc_get_theme_mod('bc_theme_options', 'footer','copyright_text', '<div class="bc_color_quaternary container border-top py-4 py-lg-2  font-uppercase bc_text_18 bc_line_height_60 bc_sm_text_18 text-uppercase bc_sm_line_height_18" style="border-color:  #999999 !important;">
   © '.date("Y").' Heil Plumbing <span class="d-none d-lg-inline-block"></span> 
  <span class=" d-lg-inline-block d-none">&nbsp; | &nbsp;</span><br class="d-block d-lg-none"><a class="bc_text_18 bc_line_height_60 bc_color_quaternary_hover bc_sm_text_18 bc_sm_line_height_18 text-uppercase font-uppercase bc_color_quaternary no_hover_underline" href="#">Privacy Policy</a>
  <span class="d-inline-block">&nbsp; | &nbsp;</span><a class="bc_color_quaternary bc_color_quaternary_hover no_hover_underline bc_text_18 bc_line_height_60 bc_sm_text_18 bc_sm_line_height_18 text-uppercase font-uppercase" href="#" data-toggle="modal" data-target="#disclaimer">Disclaimer</a>
</div>');?>


<button data-toggle="modal" data-target="#myModal_mobile" class="btn btn-lg w-100 d-block d-lg-none bc_color_secondary  bc_color_primary_bg  position-fixed sticky-footer bc_font_alt_1 bc_text_bold  bc_text_22 bc_line_height_72 p-0 border-0" style="bottom: 0; z-index:999; font-weight: 600 !important; position: fixed !important; border-radius: 0px !important;"> How Can We Help?<span> &nbsp; <i class="fal fa-chevron-up bc_text_24"></i>
</span></button>




<div class="h-100 modal fade bc_color_primary_bg" id="myModal_mobile" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true" style="    overflow-y: inherit !important;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-0 bc_color_primary_bg position-relative" style="height: 500px; z-index:100001">
      <div class="modal-header bc_color_primary_bg" style="z-index: 9; ">
        <button type="button" class="close mt-n4" data-dismiss="modal" aria-label="Close" style="opacity: 1;">
          <i class="fal fa-times bc_color_white" style="font-size: 30px;"></i>
        </button>
      </div>
      <div class="modal-body p-0 ">
        <div class="">
                    <div class=" col-md-12 col-lg-9 col-sm-12 col-xs-12 offset-lg-2 text-center py-4 bc_color_primary_bg">
                       <span class="d-block bc_text_32 bc_line_height_32 text-white bc_font_alt_1 text-center bc_text_bold mb-2">
            CONTACT US     	</span>
                        <div class="entry-content bc_hero_form_body">
                           <?php echo do_shortcode('[gravityform id=7 ajax=true]')?>
                        </div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>
