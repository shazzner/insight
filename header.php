<?php
/**
 * Header Template
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?>>
        <header role="banner" class="site-header default-site-header">
            <div class="site-header-container">
                <?php
                if ( has_nav_menu( 'main-menu' ) ) {

                    wp_nav_menu( array(
                        'theme_location'  => 'main-menu',
                        'container'       => 'nav',
                        'container_class' => 'insight-main-nav',
                        'menu_class'      => 'insight-main-links',
                        'depth'           => 2,
                    )
                    );
                }
                ?>
                <?php viability_custom_logo(); ?>
            </div>
        </header>
        <header role="banner" class="site-header mobile-site-header">
            <div class="site-header-container">
                <button type="button" class="toggle-menu" role="button" aria-label="<?php esc_attr_e( 'Toggle Navigation', 'insight' ); ?>">
                    <span class="navicon"></span>
                </button>
                <?php viability_custom_logo(); ?>
            </div>
        </header>
        

