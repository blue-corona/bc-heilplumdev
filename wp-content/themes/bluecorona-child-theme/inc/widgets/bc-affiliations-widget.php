<?php 
/*Custom widget*/
// BC Affiliation Widget
class BC_Affiliations_Widget extends WP_Widget {
	public function __construct() {

		$id = 'BC_Affiliations_widget';
		$title = esc_html__('BC Affiliation Widget', 'bc-affiliation-custom-widget');
		$options = array(
			'classname' => 'bc-affiliation-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-affiliation-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	function addSwiperInitAffiliationJsToFooter($instance){
		echo "<script>
		var swiper_affiliation = new Swiper('#".$instance."', {
		    navigation: {
			    nextEl: '.swiper-affiliations-button-next',
			    prevEl: '.swiper-affiliations-button-prev',
		    },
            loop: true
		});
		</script>";
	}

public function widget( $args, $instance ) {
	//Add JS for widget to footer
	$widgetInstance = $this->id;
	add_action('wp_footer', function() use ( $widgetInstance ) { 
    $this->addSwiperInitAffiliationJsToFooter( $widgetInstance ); });
?>
<div class="row no-gutters px-5" style="background-repeat: no-repeat; background-position: center; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/sidebar_shape.png">
	<div class="col-1 my-auto">
        <div class="swiper-button-prev swiper-affiliations-button-prev"><i class="far fa-chevron-left"></i></div>
	</div>
	<div class="col-10">
		<div id="<?php echo $this->id ?>" class="swiper-container swiper-container-affiliation text-center my-5 pt-5">

		<h4>
		<?php 
			if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
				echo $args['before_title'] . $instance['title'] . $args['after_title']; 
			}
		?>
		</h4>
		<p></p>
				<!-- before pase -->
				<div class="swiper-wrapper" style="padding-bottom: 5rem;">
		            <?php 
					$affiliations_args  = array( 'post_type' => 'bc_affiliations', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
			        $query = new WP_Query( $affiliations_args );
			        if ( $query->have_posts() ) :
			            while($query->have_posts()) : $query->the_post();
						$affiliation_custom_image = get_post_meta( get_the_ID(), 'affiliation_custom_image', true );
					?>
		        	<?php 
		        	if(isset($affiliation_custom_image) && !empty($affiliation_custom_image)){
		        	?>
		            <div class="swiper-slide">
		            	<img src="<?php echo $affiliation_custom_image;?>">
		            </div>
		            <?php }?>
			        <?php
		            	endwhile; 
		            wp_reset_query();
		        	endif;
		        	?>
		        </div>
		        <!-- Add Arrows -->
		</div>
	</div>
	<div class="col-1 my-auto">
        <div style="right:0px !important;" class="swiper-button-next swiper-affiliations-button-next"><i class="far fa-chevron-right"></i></div>
	</div>
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
		$label = __( 'Title', 'bc-affilations-custom-widget' );
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
function bc_affiliations_register_widgets() {
	register_widget( 'BC_Affiliations_Widget' );
}
add_action( 'widgets_init', 'bc_affiliations_register_widgets' );
