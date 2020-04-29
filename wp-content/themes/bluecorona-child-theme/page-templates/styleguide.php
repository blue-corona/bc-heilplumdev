<?php
/**
* Template Name: styleGuide
*
* Template for displaying a page without sidebar even if a sidebar widget is published.
*
* @package understrap
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<main>
	<div class="container-fluid " >

		<div class="container p-4">
			<div class="row">
				<div class=" col-lg-4 col-md-4 col-12 text-center ">
					<img alt="hiel_icons" class="img-fluid " src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/heil_logo.png">
				</div>
				<div class="col-lg-4 col-md-4 col-12 text-center ">
					<img alt="hiel_icons" class="img-fluid " src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/logo-02.png">
				</div>
				<div class=" col-lg-4 col-md-4 col-12 text-center">
					<img alt="hiel_icons" class="img-fluid " src="http://localhost/bc-heil/wp-content/themes/bluecorona-child-theme/img/logo-03.png">
				</div>

				<div class=" col-lg-12 col-md-12 col-12 ">
					
					<p class="desk_top">DESKTOP</p>
					<h1>H1 Oswald #29265f  Bold/700  48px  LH 50px</h1>
					<h2 >H2 Oswald #29265f  Semi-Bold/600  38px  LH 48px</h2>
					<h3 >H3 Oswald # 70a3d7  Light/300  36px  LH 40px</h3>
					<h4 >H4 Oswald #29265f  Semi-Bold/600  34px  LH 36px</h4>
					<h5 class="bc_color_tertiary_bg p-2"> H5 Oswald #FFFFFF  Semi-Bold/600  30px  LH 36px</h5>
					<h6 >H6 Oswald #29265f  Bold/700  18px  LH 20px</h6>
					<span class="h7" >H7  Open Sans #29265f  Regular/400 16px  LH 20 </span>
					<p >Paragraph - Open Sans  #000000 Regular/400  20px - Line Height 36</p>
					<p class="navigation">Navigation - Oswald #70a3d7  Regular/400  20px  LH30px </p>
					<div class="d-flex flex-wrap">
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_36">About Us</div>
						<div class="p-2 bc_color_secondary nav_lists bc_text_20 bc_line_height_36 "> Plumbing Services</div>
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_36">Water & Sewer </div>
						<div class="p-2  bc_color_secondary bc_text_20 bc_line_height_36">Resources</div>
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_36 "> Contact Us</div>

					</div>

					
				</div>

				<div class=" col-lg-12 col-md-12 col-12 ">
					
					<p class="desk_top">MOBILE</p>
					<h1 >H1 Oswald #29265f  Bold/700  32px  LH 37px</h1>
					<h2 >H2 Oswald #29265f  Semi-Bold/600  26px  LH 31px</h2>
					<h3 >H3 Oswald # 70a3d7  Light/300  22px  LH 25px</h3>
					<h4 >H4 Oswald #29265f  Semi-Bold/600  34px  LH 36px</h4>
					<h5 class="bc_color_tertiary_bg p-2"> H5 Oswald #FFFFFF  Semi-Bold/600  32px  LH 37px</h5>
					<h6 >H6 Oswald #29265f  Bold/700  22px  LH 24px</h6>
					<span class="h7" >H7  Open Sans #29265f  Regular/400 22px  LH 24  </span>
					<p >Paragraph - Open Sans  #000000 Regular/400  16px - Line Height 26 </p>
					<p class="navigation">Navigation - Oswald #29265f  Regular/400  20px  LH55px  </p>
					<div class="d-flex flex-wrap">
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_30">About Us</div>
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_30 "> Plumbing Services</div>
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_30">Water & Sewer </div>
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_30">Resources</div>
						<div class="p-2 bc_color_secondary bc_text_20 bc_line_height_30"> Contact Us</div>

					</div>

					
				</div>
				<div class="col-lg-8 col-md-8  col-12">
					<div class="d-flex flex-wrap">
						<div class="p-2 "><a href="#" class="btn btn-error " >button example 1</a></div>
						<!-- <div class="p-2 "><a href="#" class="btn btn-tertiary bc_text_24 bc_line_height_27">button rollover</a></div> -->
						<div class="p-2 "><a href="#" class="btn btn-secondary ">button example 2</a></div>

					</div>
				</div>
				<div class="col-lg-4 col-md-4  col-12">
				</div>
				<div class="col-lg-12 col-md-12  col-12">
					<p class="color_style p-2">Color Style Guide </p>
				</div>
				<div class="col-lg-12 col-md-12  col-12">
					<div class="d-flex flex-wrap">
						<div class="p-2  "><p class="d-block p-80 bc_color_secondary_bg"></p></div>
						<div class="p-2 "><p class="d-block p-80 bc_color_primary_bg"></p></div>
						<div class="p-2 "><p class="d-block p-80 bc_color_error_bg"></p></div>
					</div>
				</div>
			</div>
		</div>

		<!-- The Content Starts -->


	</main>

	<?php get_footer(); ?>
