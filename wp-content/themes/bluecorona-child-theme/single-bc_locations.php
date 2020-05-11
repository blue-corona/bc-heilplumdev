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

    <div class="container-fluid" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="height:300px; background-size: cover;background-position: center;background-image: url('<?php echo $image[0]; ?>');" <?php }
    else{ ?> style="height:300px;background-size: cover;background-position: center;background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');" <?php }?>>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

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
</main>
<?php get_footer();
