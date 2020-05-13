<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
global $post;
?>
<main>

    <?php get_template_part( 'page-templates/common/bc-banner-section'); ?>

	<div class="container-fluid pb-5">
		<div class="container">
		    <div class="row">
			    <div class="col-lg-8 col-md-12 col-xs-12 mt-5 px-5 sub_page_sidebar">
                    <h1><?php the_title();?></h1>
					<?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
				</div>
			    <?php get_template_part( 'sidebar-templates/sidebar', 'subpagerightsidebar' ); ?>
		    </div>
		</div>
	</div>
<?php get_template_part( 'page-templates/common/bc-heil-section'); ?>
<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>
</main>
<?php get_footer();
