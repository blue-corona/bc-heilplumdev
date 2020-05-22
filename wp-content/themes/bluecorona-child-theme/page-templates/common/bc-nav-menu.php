<div class="container-fluid bc_nav_container p-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark m-auto d-table w-100 p-0">
            <div id="navbarSupportedContent" class="navbar-collapse collapse" style="">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="d-none navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon navbar-dark"></span>
                </button>
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler float-right mt-2 d-inline-block d-lg-none show-on-touch-inline" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="fal fa-times text-white bc_text-30 bc_line_height_24"></span>
                </button>
                <?php 
                    $args = [
                    'menu' => 'main-menu',
                    'depth' => 3,
                    'theme_location' => 'primary',
                    'container' => false,
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'menu_class' => 'navbar-nav m-auto',
                    'fallback_cb'     => 'Bluecorona_WP_Bootstrap_Navwalker::fallback',
                    'walker' => new Bluecorona_WP_Bootstrap_Navwalker(),
                    ];
                    wp_nav_menu( $args )
                ?>
            </div>
        </nav>
    </div>
</div>
