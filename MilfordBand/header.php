<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="top-navigation">
        <div class="container">
            <div class="justify-content-end">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'    =>  'primary',
                        'depth'             =>  1,
                        'container'         =>  'nav',
                        'container_class'   =>  'main-menu',
                        'menu_class'        =>  'top-menu d-flex flex-row navigation justify-content-end list-unstyled',
                        'fallback_cb'       =>  false
                    )
                );
                ?>
            </div>
        </div>
    </div>
    <div class="sticky-header">
        <div class="container">
            <div class="logo-container">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if (has_custom_logo()) {
                    echo '<a href="../"><img src="'. esc_url($logo[0]).'" alt="milford-band-logo"></a>';
                }
            ?>
                <a href="../"><h1><?php esc_html_e('Mr. Mentzer - Band', 'milfordband'); ?></h1></a>
            </div>
            <button type="button" class="navbar-open">
                <i class="mobile-nav-toggler fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
    <button type="button" class="navbar-open">
        <i class="mobile-nav-toggler fa-solid fa-bars"></i>
    </button>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <nav class="menu-box">
            <ul class="navigation clearfix"></ul>
        </nav>
    </div>