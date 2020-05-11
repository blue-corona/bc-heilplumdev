<?php 
/*Custom widget*/
// BC Footer Address Widget
class BC_Footer_Address_Widget extends WP_Widget {
    public function __construct() {

        $id = 'BC_Footer_Address_widget';
        $title = esc_html__('BC Footer Identity', 'bc-footer-address-custom-widget');
        $options = array(
            'classname' => 'bc-footer-address-markup-widget col-lg-3 p-0',
            'description' => esc_html__('Add Custom HTML in inputbox', 'bc-footer-address-custom-widget')
        );
        parent::__construct( $id, $title, $options );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/heil_footer_logo.png">
    <div class="media mx-auto border_bottom_primary_3 mobile-text-align">
        <i class="align-self-center fas fa-mobile-alt  bc_text_36 bc_line_height_32 bc_color_primary d-none d-md-block"></i>
        <div class="media modal-body mobile_anchor_footer text-center d-lg-flex">
            <i class="align-self-center fas fa-mobile-alt bc_text_30 bc_line_height_72 bc_color_primary d-md-none"></i> &nbsp; 
            
            <span class="bc_text_32 bc_line_height_26 bc_sm_text_32 bc_sm_line_height_36 bc_color_3 bc_text_bold text-uppercase mobile_anchor_footer"><?php echo do_shortcode("[site_info_phone_number]");?></span>
        </div>

    </div>
    <div class="media mx-auto border_bottom_primary_3 mobile-text-align">
        <i class="align-self-center far fa-clock bc_text_36 bc_line_height_22 bc_color_primary"></i>
        <a href="javascript:vodi(0);" class="no_hover_underline">
            <div class="media modal-body">
                <span class="bc_text_20 bc_sm_text_16 bc_sm_line_height_26 bc_line_height_26 bc_color_quaternary bc_text_normal ">1Monday - Friday <br> 7:30am - 5pm</span>
                </span>
            </div>
        </a>

    </div>
    <div class="media mx-auto border_bottom_primary_3 mobile-text-align">
        <i class="align-self-center far fa-map-marker-alt bc_text_36 bc_color_primary"></i>
        <a href="javascript:vodi(0);" class="no_hover_underline">
            <div class="media modal-body ">
                <span class="bc_text_20 bc_sm_text_16 bc_sm_line_height_26 bc_line_height_26 bc_color_quaternary bc_text_normal">
                <?php echo bc_get_theme_mod('bc_theme_options', 'bc_address',false, '8177 Mission Road <span class="d-block">Jessup, MD 20794</span>');?>
                </span>
            </div>
        </a>
    </div>
    <?php echo $args['after_widget'];
    }
}
// register widget
function bc_footer_address_register_widgets() {
    register_widget( 'BC_Footer_Address_Widget' );
}
add_action( 'widgets_init', 'bc_footer_address_register_widgets' );
?>
