<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
	<div class="container-fluid" style="height:230px; background-size: 100%; background-position: top; background-repeat: no-repeat; background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');">

        <div class="container d-none d-lg-block pt-5">
        <div class="row no-gutters">
            <div class="col-lg-8 offset-lg-2">
                <div class="row no-gutters bc_color_4_bg py-3 px-2">
                    <div class="col-md-3">
                        <div class="media border_right position-relative">
                            <i class="fal fa-award bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Exceptional <br> Workmanship </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media border_right position-relative">
                            <i class="fal fa-user-clock bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Expert <br> Plumbers </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media border_right position-relative">
                            <i class="fal fa-hands-heart bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Caring <br> Service </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <i class="fal fa-calendar-star bc_text_42 bc_line_height_35 bc_color_secondary align-self-center mx-2"></i>
                            <div class="media-body bc_line_height_17">
                                <span class="bc_text_15 bc_font_alt_1 bc_text_semibold bc_color_3"> Family Owned <br> Since 1977 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

	<div class="container-fluid">
		<div class="container">
		  <div class="row">
		    <div class="col-lg-8 col-md-12 col-xs-12">
		      <h2>Our Blog</h2>
		     	<?php 
		     	if ( have_posts() ) :
		     		while ( have_posts() ) : the_post();
		     			get_template_part( 'loop-templates/content', get_post_format() );
					endwhile; else :
					get_template_part( 'loop-templates/content', 'none' );
				endif;
				?>
		      	<!-- Pagination -->
		      	<?php understrap_pagination(); ?>
		    </div>
		    <!-- rIGHT sidebar starts -->
		    <?php get_template_part( 'sidebar-templates/sidebar', 'blogrightside' ); ?>
		    <!-- right sidebar ends -->
		  </div>
		</div>
	</div>
</main>
<?php get_footer()?>

