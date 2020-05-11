<?php
/**
 * Dont See Service
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container-fluid m-0 quality_plumbers pb-5">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-10 offset-lg-1 text-left text-md-center order-first">
        <h1>Quality Plumbers in Your Neighborhood </h1>
        <h2 class="mt-3 bc_sm_text_light px-lg-5">Proudly Serving Howard County & the Surrounding Baltimore Washington Region</h2>
      </div>
      <div class="col-lg-6 mt-lg-5 mt-3">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/truck_img.png" class="align-self-center img-fluid" alt="truck_img">
      </div>
      <div class="col-lg-6 mt-lg-5 mt-3 order-first order-lg-last">
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
