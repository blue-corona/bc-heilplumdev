<?php
/**
 * Template Name: Single Promotions Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="icon" href="<?php echo bc_get_theme_mod('bc_theme_options', 'bc_favicon_upload',false, get_template_directory_uri().'/img/favicon.ico'); ?>">

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script data-search-pseudo-elements defer src="https://use.fontawesome.com/releases/latest/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
</head>
<body>
<style type="text/css">
@media print{.no-print, .no-print *{display: none !important;}}
* { -webkit-print-color-adjust: exact !important; /*Chrome, Safari */
color-adjust: exact !important;  /*Firefox*/ }
</style>
<script type="text/javascript">function printPreview(){window.print();}</script>
    <main>
        <div class="container-fluid" >
            <div class="container">
                <div class="row">
                <div class="col-lg-6 equal_height col-sm-12 mt-2 px-5">
                        <?php 
                        global $post;
                        $promotion_type = get_post_meta(get_the_ID(), 'promotion_type', TRUE);
                        if($promotion_type == 'Builder'){
                            $date = get_post_meta( get_the_ID(), 'promotion_expiry_date1', true );
                            if(strtotime($date) >= strtotime(current_time('m/d/Y'))){
                                $title = get_post_meta( get_the_ID(), 'promotion_title1', true );
                                $color = get_post_meta( get_the_ID(), 'promotion_color', true );
                                $subheading = get_post_meta( get_the_ID(), 'promotion_subheading', true );
                                $footer_heading = get_post_meta( get_the_ID(), 'promotion_footer_heading', true ); ?>

                        
                            <div class="bc_color_secondary p-4 mb-3 text-center" style="background-color: <?php echo $color;?>">
                                    <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                        <span class="py-3 bc_font_alt_1 bc_text_48 bc_line_height_50 d-block bc_color_success text-capitalize "><?php echo $title; ?></span>
                                       <p class="bc_text_20 bc_color_quinary bc_line_height_30 bc_text_semibold d-block my-2"><?php echo $subheading;?></p>
                                        <span class="mt-3 bc_text_16 bc_color_quinary bc_text_normal ">Expires <?php echo $date;?></span>
                                        <span class="bc_color_quinary bc_line_height_18 bc_text_14 bc_text_thin d-block"><?php echo $footer_heading;?></span>
                                    </div>
                                </div>
                        <?php }
                        }else if($promotion_type == 'Image'){
                           $date2 = get_post_meta( get_the_ID(), 'promotion_expiry_date2', true );
                            if(strtotime($date2) >= strtotime(current_time('m/d/Y'))){
                                $title2 = get_post_meta( get_the_ID(), 'promotion_title2', true );
                                $promotion_custom_image = get_post_meta( get_the_ID(), 'promotion_custom_image', true ); 
                            ?>
                            <div class="bc_color_secondary p-4 mb-3 text-center" style="background-color: <?php echo $color;?>">
                                <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                    <a href="<?php the_permalink(get_the_ID()); ?>" target="_blank">
                                        <img class="img-fluid" src="<?php echo $promotion_custom_image;?>"  style="width:auto;height:228px;">
                                    </a>
                                </div>
                            </div>
                        <?php }
                        }
                        ?>
                        
                        <div class="no-print">
                            <button class="btn  bc_primary_bg  bc_color_tertiary_hover_bg bc_color_quaternary_hover  py-3 mt-4 bc_color_quaternary shadow mb-5 bc_text_24 bc_font_alt_1 border-lg mx-auto d-table" onclick="printPreview()">
                            <span class=""><i class="fa fa-print" style="font-size:1em" aria-hidden="true"></i>&nbsp;Print</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>


