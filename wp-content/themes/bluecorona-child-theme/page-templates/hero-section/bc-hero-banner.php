<div class="container-fluid p-0 bc_hero_container bc_home_section_bg" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);?>')">
    <div class="hero-overlay-gradient">
        <div class="container px-4 pt-4">
            <div class="row text-center text-lg-left text-md-left">
                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 m-auto">
                    <!-- <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_image_overlay_text', false);?> -->

                  <!--   <button onclick="window.location.href = '<?php echo get_home_url().bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_link', '/promotions')?>';"  class="btn bc_color_primary_bg py-2 mt-2 mb-4 mb-md-0 hero-image bc_color_secondary_hover"> <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_text', 'Schedule Service Today');?> &nbsp;<i aria-hidden="true" class="fa fa-chevron-circle-right"></i></button> -->

                 <div class="banner_text bc_color_primary bc_text_55 bc_line_height_50 text-center">From our famil <br>to yours.</div>


                </div>
                <div class="col-md-6 col-xs-12 col-lg-6 col-sm-12 p-4 d-none d-md-block">
                    <div class=" col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
                        <div class="bc_color_4_bg d-flex py-3 px-4">
                            <div class="m-auto">
                              <!--   <div class="d-flex flex-wrap">
                                    
                                         <i class="fal fa-award col-1"></i>
                                        <p class="bc_text_15 bc_line_height_17 bc_color_3 col-2"> Exceptional Workmanship</p>
                                    <div class="p-2 col-3"><p class="bc_text_15 bc_line_height_17 bc_color_3 "><i class="fal fa-user-clock"></i> Expert Plumbers</p></div>
                                    <div class="p-2 col-3"><p class="bc_text_15 bc_line_height_17  bc_color_3"><i class="fal fa-hands-heart"></i>Charity Caring Service</p></div>
                                    <div class="p-2 col-3"><p class="bc_text_15 bc_line_height_17 bc_color_3 "><i class="fal fa-calendar-star"></i>Status Family Owned Since 1977</p></div>


                                </div> -->

                                <ul class="icon_info">
                                   
                                    <li><i class="fal fa-award"></i> <p class="bc_text_15 bc_line_height_17 bc_color_3 ">Exceptional Workmanship</p></li> 
                                     <li>
                                         
                                       <i class="fal fa-user-clock"></i><p class="bc_text_15 bc_line_height_17 bc_color_3 "> Expert Plumbers</p>  
                                     </li> 
                                      <li><i class="fal fa-hands-heart"></i> <p class="bc_text_15 bc_line_height_17  bc_color_3">Charity Caring Service</p></li> 
                                       <li><i class="fal fa-calendar-star"></i><p class="bc_text_15 bc_line_height_17 bc_color_3 ">Status Family Owned Since 1977</p></li> 

                                </ul>

                            </div>
                        </div>
                        <div class="requested  bc_text_28 bc_color_3 py-3 px-4 bc_color_white_bg ">Request Service</div>
                        <div class="entry-content bc_hero_form_body">
                           <?php echo do_shortcode('[gravityform id=1 ajax=true]')?>
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