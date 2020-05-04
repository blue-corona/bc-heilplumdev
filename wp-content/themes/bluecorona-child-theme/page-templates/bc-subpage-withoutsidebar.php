<?php
/**
 * Template Name: SubPage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
<div class="container-fluid" style="height:300px; background-position: center; background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/sub_banner.jpg">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 subpage">
                        <h1>Heading One Goes Here</h1>
                        <h2>Heading Two Goes Here</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

<h3>Heading Three Goes Here</h3>

<ul>
    <li>Enim ipsam voluptatem quia voluptas sit</li>
    <li>Aspernatur aut odit aut fugit, sed quia </li>
    <li>Consequuntur magni dolores eos qui ratione </li>
    <li>Voluptatem sequi nesciunt. Neque porro</li>
    <li>Quisquam est, qui dolorem ipsum quia dolor sit </li>
    <li> Amet, consectetur, adipisci velit, sed quia non</li>
    <li> Numquam eius modi tempora incidunt ut labore</li>
</ul>
<div class="w-75 py-3 px-4 bc_color_primary_bg no_hover_underline rounded btn_base btn my-4 position-relative mx-auto d-table">
    <span class="no_hover_underline calenter_line align-baseline-middel">
        <i class="fal fa-calendar-check bc_text_80 float-left bc_color_secondary"> </i> <span class="bc_color_white bc_font_alt_1 bc_text_30 align-baseline-middel">Schedule Your Service Today</span> <i class="fal fa-play-circle bc_text_40 bc_color_secondary mx-4 align-baseline-middel"></i>
    </span>
    </div>
<p><a href="#">Hyperlink example</a> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
<p>
<strong>Example of bold text<a href="#"> bold hyperlink example </a></strong>
</p>
                    </div>


                </div>
            </div>
        </div>

<div class="container-fluid my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/sub_heil_truck.png" class="img-fluid"></div>

                    <div class="col-lg-5">
                          <span class="bc_text_38 bc_text_semibold bc_font_alt_1 bc_line_height_40 bc_color_primary">Why Choose Heil</span><p class="bc_color_black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                <div class="p-2 "><a href="#" class="btn px-5 btn-secondary border-0">Learn More</a></div>     
                      </div>
                </div>
            </div>
        </div>








         <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</main>
<?php get_footer();?>