<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!-- Footer -->
<footer class="page-footer font-small blue mobile-text-center margin_on_mobile">
<!-- Include servicearea file here -->
<?php if ( is_front_page() || in_array($post->ID, [341,364,432,466,478]) ) {?>
<?php get_template_part( 'page-templates/common/servicearea' ); ?>
<?php }else{?>
    <div class="container py-3"></div>
<?php } ?>
    <!-- Footer Links -->

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar( 'footer' ); ?>
            </div>
        </div>
    </div>
<?php get_template_part( 'page-templates/common/bc-copyright' ); ?>
</footer>

<div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <button type="button" class="close bc_color_secondary_hover_bg" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fal fa-times fa-2x"></i></span>
            </button>
        </div>
    <div class="modal-body px-5 pb-5 col-md-10 offset-1">
        <div id="disclaimerLabel" class="bc_color_black h1">Disclaimer</div>
        <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a class="text-danger bc_text_bold" href="<?php echo get_site_url()?>/contact-us">Contact us</a> for complete details.</p>
    </div>
</div>
</div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery(".hide_div").hide();
    jQuery("#minus").toggle();
    jQuery(".abc").click(function(){
        jQuery("#minus").toggle();
        jQuery("#plus").toggle();
        jQuery(".hide_div").toggle(500);
    });
});
</script>
</body>

</html>
