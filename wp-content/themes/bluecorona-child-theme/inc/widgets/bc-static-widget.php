<?php 
/*Custom widget*/
// BC Static Widget
class BC_Static_Widget extends WP_Widget {
	public function __construct() {

		$id = 'BC_Static_widget';
		$title = esc_html__('BC Static Widget', 'bc-static-custom-widget');
		$options = array(
			'classname' => 'bc-static-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-static-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	function addSwiperInitStaticJsToFooter($instance){
		echo "<script>
		var swiper_business = new Swiper('#".$instance."', {
		    navigation: {
		    nextEl: '.swiper-button-next',
		    prevEl: '.swiper-button-prev',
		    },
		    loop: true,
            effect: 'fade',
            fadeEffect: {
                          crossFade: true
            },
		  });
		</script>";
	}

public function widget( $args, $instance ) {
	//Add JS for widget to footer
	$widgetInstance = $this->id;
	add_action('wp_footer', function() use ( $widgetInstance ) { 
    $this->addSwiperInitStaticJsToFooter( $widgetInstance ); });
?>

<div id="<?php echo $this->id ?>" class="swiper-container swiper-container-business text-center">
    <!-- <h4>Why Choose Heil</h4> -->
	<h4>
	<?php 
		if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
			echo $args['before_title'] . $instance['title'] . $args['after_title']; 
		}
	?>
	</h4>
	<p></p>
	<!-- before pase -->
	<div class="swiper-wrapper" style="padding: 2rem 0rem;">
        <div class="swiper-slide">
		<i class="fas fa-calendar-star bc_text_40 bc_color_primary bc_line_height_50"></i><span class="my-3 bc_text_55 bc_text_bold bc_line_height_24 bc_color_primary bc_font_alt_1 d-block">43</span><h7>Years in Business</h7>
		</div>
		
		<div class="swiper-slide">
		<i class="fas fa-user bc_text_40 bc_color_primary bc_line_height_50"></i><span class="my-3 bc_text_55 bc_text_bold bc_line_height_24 bc_color_primary bc_font_alt_1 d-block">14,638</span><h7>Customers Helped</h7>
		</div>

		<div class="swiper-slide">
		<i class="fas fa-thumbs-up bc_text_40 bc_color_primary bc_line_height_50"></i><span class="my-3 bc_text_55 bc_text_bold bc_line_height_24 bc_color_primary bc_font_alt_1 d-block">24/7</span><h7>Service</h7>
		</div>

    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next mr-5"><i class="far fa-chevron-right"></i></div>
    <div class="swiper-button-prev ml-5"><i class="far fa-chevron-left"></i></div>
</div>

<?php echo $args['after_widget'];
// }
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc-static-custom-widget' );
		$title = '';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>
<?php }
}
// register widget
function bc_static_register_widgets() {
	register_widget( 'BC_Static_Widget' );
}
add_action( 'widgets_init', 'bc_static_register_widgets' );
