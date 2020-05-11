<?php
/**
 * Template Name: SubPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
<div class="container-fluid" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="height:300px; background-size: cover;background-position: center;background-image: url('<?php echo $image[0]; ?>');" <?php } else{ ?> style="height:300px;background-size: cover;background-position: center;background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');" <?php }?>>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 subpage">
                    <h1><?php the_title();?></h1>
                    <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();
                            the_content();
                          endwhile;
                        endif;
                      ?>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part( 'page-templates/common/bc-choose-heil-section'); ?>
<?php get_template_part( 'page-templates/common/bc-heil-waves-section'); ?>

</main>
<?php get_footer();?>