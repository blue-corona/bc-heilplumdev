<?php
    $img1x = bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);
    $img2x = bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);
    $img3x = get_template_directory_uri()."/img/mobile_banner.jpg";
?>
<?php echo do_shortcode('[custom-bg-srcset class="home-page-banner" img1x="'.$img1x.'" img2x="'.$img2x.'" img3x="'.$img3x.'" size1x="cover" size2x="cover" size3x="cover"]'); ?>
<div class="container-fluid p-0 bc_hero_container home-page-banner bc_home_section_bg d-none d-md-block">

    <div class="hero-overlay-gradient">
        <div class="container px-4 pt-lg-4">
            <div class="row text-center text-lg-left text-md-left pt-5 pt-lg-0">
                <div class="col-lg-5 py-lg-5 mt-md-5 mt-5 pl-4">
                    <span class="bc_text_55 bc_line_height_50 bc_sm_text_32 bc_sm_line_height_33 bc_font_alt_1 bc_text_bold bc_color_primary">
                        <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_image_overlay_text', 'From our family <br> to yours.');?>
                    </span>
                </div>
                <div class="col-lg-7 px-4 d-none d-md-block">
                    <div class="hero_banner_form rounded overflow-hidden bc_color_white_bg">
                        <div class="row no-gutters bc_color_4_bg py-4 px-2">
                            <div class="col-md-3 py-2">
                                <div class="media border_right position-relative">
                                    <i class="fal fa-award bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Exceptional <br> Workmanship </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="media border_right position-relative">
                                    <i class="fal fa-user-clock bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Expert <br> Plumbers </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="media border_right position-relative">
                                    <i class="fal fa-hands-heart bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Caring <br> Service </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="media">
                                    <i class="fal fa-calendar-star bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Family Owned <br> Since 1977 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-12 px-5">
                                <span class="bc_text_28 bc_line_height_27 bc_font_alt_1 bc_text_bold bc_color_3 d-block mt-3 bc_hero_form_title"> How Can We Help?</span>
                               <?php echo do_shortcode('[gravityform id=1 ajax=true]')?>
                              <!--  <span class="d-block mt-n2 bc_text_12 bc_line_height_36 bc_font_default bc_color_5 bc_text_bold">
                                   <input type="checkbox" class="bc_text_18 bc_line_height_50 bc_color_5" style="height: 13px;">
                                    Yes, sign me up for the newsletter.
                               </span> -->
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .hero-overlay-gradient-->
</div>
<script>
    jQuery(document).on("gform_confirmation_loaded", function (e, form_id) {
	if(form_id == 1){
		jQuery(".bc_hero_form_title").html("Thank you!");
	}
    });
</script>
<!-- for mobile -->
<div class="container-fluid p-0 bc_hero_container bc_home_section_bg d-md-none" style="background-image:url('<?php echo get_stylesheet_directory_uri();?>/img/mobile_banner_heilplum.jpg')">

    <div class="hero-overlay-gradient">
        <div class="container px-4 pt-lg-4">
            <div class="row text-center text-lg-left text-md-left pt-5 pt-lg-0">
                <div class="col-lg-5 py-lg-5 mt-md-5 mt-5 pl-4">
                    <span class="bc_text_55 bc_line_height_50 bc_sm_text_32 bc_sm_line_height_33 bc_font_alt_1 bc_text_bold bc_color_primary">
                        <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_image_overlay_text', 'From our family <br> to yours.');?>
                    </span>
                </div>
                <div class="col-lg-7 px-4 d-none d-md-block">
                    <div class="hero_banner_form rounded overflow-hidden bc_color_white_bg">
                        <div class="row no-gutters bc_color_4_bg py-4 px-2">
                            <div class="col-md-3 py-2">
                                <div class="media border_right position-relative">
                                    <i class="fal fa-award bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Exceptional <br> Workmanship </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="media border_right position-relative">
                                    <i class="fal fa-user-clock bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Expert <br> Plumbers </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="media border_right position-relative">
                                    <i class="fal fa-hands-heart bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Caring <br> Service </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 py-2">
                                <div class="media">
                                    <i class="fal fa-calendar-star bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                                    <div class="media-body bc_line_height_17">
                                        <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Family Owned <br> Since 1977 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-12 px-5">
                                <span class="bc_text_28 bc_line_height_27 bc_font_alt_1 bc_text_bold bc_color_3 d-block mt-3"> How Can We Help?</span>
                               <?php echo do_shortcode('[gravityform id=1 ajax=true]')?>
                              <!--  <span class="d-block mt-n2 bc_text_12 bc_line_height_36 bc_font_default bc_color_5 bc_text_bold">
                                   <input type="checkbox" class="bc_text_18 bc_line_height_50 bc_color_5" style="height: 13px;">
                                    Yes, sign me up for the newsletter.
                               </span> -->
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .hero-overlay-gradient-->
</div>


<style type="text/css">
.hero-image{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_color', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_text_color', '#ffffff');?>;}

<?php if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_rotation', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_start', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_end',false,false);?>));}
<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_solid_color', false ,false);?>);}
<?php }?>
</style>
