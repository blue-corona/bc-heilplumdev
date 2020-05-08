<?php
/**
 * Template Name: SubPage-Siderbar Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

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

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 subpage">
              <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                    the_content();
                  endwhile;
                endif;
              ?>
            </div>
            <?php get_template_part( 'sidebar-templates/sidebar-subpagerightsidebar' ); ?>
        </div>
    </div>
</div>
<?php get_template_part( 'page-templates/common/bc-heil-section'); ?>
<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>
</main>
<?php get_footer();?>
