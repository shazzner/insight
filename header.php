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
                viability_custom_logo();
                
                if ( has_nav_menu( 'main-menu' ) ) {

                    // TODO Fix locale bug in Viability theme
                    printf ( '<a class="main-menu-toggle primary-button" href="#"><span class="main-menu-toggle-label">%1$s</span></a>',
                              __( 'Show Menu', 'insight' ) );

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
            </div>
        </header>                

