<?php
/**
 * Copyright
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php echo bc_get_theme_mod('bc_theme_options', 'footer','copyright_text', '<div class="bc_color_quaternary container border-top py-4 py-lg-2  font-uppercase bc_text_18 bc_line_height_60">
   © '.date("Y").' Heil Plumbing <span class="d-none d-lg-inline-block"></span> 
  <span class="d-none d-lg-inline-block d-none">&nbsp; | &nbsp;</span><a class="bc_color_quaternary no_hover_underline bc_text_18 bc_line_height_60 font-uppercase" href="#" data-toggle="modal" data-target="#disclaimer">Disclaimer</a>
  <span class="d-inline-block">&nbsp; | &nbsp;</span><a class="bc_text_18 bc_line_height_60 font-uppercase bc_color_quaternary no_hover_underline" href="#">Privacy Policy</a>
</div>');?>
