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
<?php get_template_part( 'page-templates/common/bc-banner-section'); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 subpage">
                <h1><?php the_title();?></h1>
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
