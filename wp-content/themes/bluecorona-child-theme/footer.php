<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
    <!-- Footer -->
    <footer class="page-footer font-small blue mobile-text-center margin_on_mobile">
        <!-- Include servicearea file here -->
        <?php if ( is_front_page() ) {?>
            <?php get_template_part( 'page-templates/common/servicearea' ); ?>
                <?php }else{?>
                    <div class="container py-3"></div>
                    <?php } ?>
                        </div>
                        <!-- Footer Links -->

                        <div class="container-fluid">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 p-0">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heil_footer_logo.png">
                                        <div class="media mx-auto border_bottom_primary_3 mobile-text-align">
                                            <i class="align-self-center fas fa-mobile-alt  bc_text_36 bc_line_height_32 bc_color_primary d-none d-md-blocl"></i>
                                            <div class="media modal-body mobile_anchor_footer text-center d-lg-flex">
                                                <i class="align-self-center fas fa-mobile-alt bc_text_30 bc_line_height_72 bc_color_primary d-md-none"></i> &nbsp; 
                                                
                                                <span class="bc_text_16 bc_line_height_32 bc_sm_text_32 bc_sm_line_height_36 bc_color_3 bc_text_bold text-uppercase mobile_anchor_footer"><?php echo do_shortcode("[site_info_phone_number]");?></span>
                                            </div>

                                        </div>
                                        <div class="media mx-auto border_bottom_primary_3 mobile-text-align">
                                            <i class="align-self-center far fa-clock bc_text_36 bc_line_height_22 bc_color_primary"></i>
                                            <a href="#" class="no_hover_underline">
                                                <div class="media modal-body">
                                                    <span class="bc_text_20 bc_sm_text_16 bc_sm_line_height_26 bc_line_height_22 bc_color_quaternary bc_text_normal ">1Monday - Friday <br> 7:30am - 5pm</span>

                                                    </span>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="media mx-auto border_bottom_primary_3 mobile-text-align">
                                            <i class="align-self-center far fa-map-marker-alt bc_text_36 bc_color_primary"></i>
                                            <a href="#" class="no_hover_underline">
                                                <div class="media modal-body ">
                                                    <span class="bc_text_20 bc_sm_text_16 bc_sm_line_height_26 bc_line_height_22 bc_color_quaternary bc_text_normal ">8177 Mission Road <span class="d-block">Jessup, MD 20794</span>

                                                    </span>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 d-none d-lg-block">
                                        <span class="bc_text_36 bc_line_height_40 bc_sm_text_26 bc_color_3 bc_font_alt_1 bc_text_samibold">Company</span>
                                        <ul class="list-unstyled ">
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary"> About Us</a>
                                            </li>
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary">Plumbing Services</a>
                                            </li>
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary">Water & Sewer</a>
                                            </li>
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary">Resources</a>
                                            </li>
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary">Contact Us</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="col-lg-3 d-none d-lg-block">
                                        <span class="bc_text_36 bc_line_height_40 bc_sm_text_26 bc_color_3 bc_font_alt_1 bc_text_samibold">Quick Links</span>
                                        <ul class="list-unstyled ">
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary">Careers</a>
                                            </li>
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary">Financing</a>
                                            </li>
                                            <li>
                                                <a href="#" class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20a bc_text_normal no_hover_underline bc_line_height_48 bc_color_secondary">Join Our Newsletter</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="bc_text_36 bc_line_height_40 bc_sm_text_26 bc_color_3 bc_font_alt_1 bc_text_samibold">Licenses</span>

                                        <span class="bc_text_20 bc_sm_text_16 bc_sm_line_height_20 bc_line_height_30 bc_color_quaternary bc_text_normal d-block">MD #6428<br class="d-none d-lg-block">
                                            WSSC #243<br class="d-none d-lg-block">
                                            BALT CO. #910<br class="d-none d-lg-block">
                                            AA #A2 00936<br class="d-none d-lg-block">
                                            CC #P-00933-MG
                                        </div>
                                    </div>
                                </div>
                            </div>
    <?php get_template_part( 'page-templates/common/bc-copyright' ); ?>
</footer>

<div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <button type="button" class="close bc_color_secondary_hover_bg" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fal fa-times fa-2x"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body px-5 pb-5 col-md-10 offset-1">
                                        <div id="disclaimerLabel" class="bc_color_black h1">Disclaimer</div>
                                        <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a class="text-danger bc_text_bold" href="<?php echo get_site_url()?>/contact-us" target="_blank">Contact us</a> for complete details.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                <div class="modal-content rounded-0">
                                    <div class="modal-header">
                                        <button type="button" class="close bc_color_secondary_hover_bg" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fal fa-times fa-2x"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body px-5 pb-5 col-md-10 offset-1">
                                        <span id="disclaimerLabel" class="bc_color_black bc_text_bold bc_text_48 bc_line_height_54 bc_font_alt_1 bc_sm_text_32">Disclaimer</span>
                                        <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a class="bc_color_quaternary bc_text_normal" href="<?php echo get_site_url()?>/contact-us" target="_blank">Contact us</a> for complete details.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php wp_footer(); ?>
                            </body>

                            </html>