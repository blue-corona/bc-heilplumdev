<?php 
/*Custom widget*/
// BC Licenses Widget
class BC_Licenses_Widget extends WP_Widget {
    public function __construct() {

        $id = 'BC_Licenses_widget';
        $title = esc_html__('BC Licenses', 'bc-licenses-custom-widget');
        $options = array(
            'classname' => 'bc-licenses-markup-widget col-lg-3',
            'description' => esc_html__('Add Custom HTML in inputbox', 'bc-licenses-custom-widget')
        );
        parent::__construct( $id, $title, $options );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <span class="bc_text_36 bc_line_height_40 bc_sm_text_26 bc_color_10 bc_font_alt_1 bc_text_semibold">Licenses</span>
        <span class="bc_text_20 bc_sm_text_16 bc_sm_line_height_26 bc_line_height_30 bc_color_quaternary bc_text_normal d-block mt-4">MD #6428<br class="d-none d-lg-block">
        WSSC #243<br class="d-none d-lg-block">
        BALT CO. #910<br class="d-none d-lg-block">
        AA #A2 00936<br class="d-none d-lg-block">
        CC #P-00933-MG
    <?php echo $args['after_widget'];
    }
}
// register widget
function bc_licenses_register_widgets() {
    register_widget( 'BC_Licenses_Widget' );
}
add_action( 'widgets_init', 'bc_licenses_register_widgets' );
?>
