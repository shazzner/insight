<?php
/*----------------------------------------------------------------------------*/
/* Theme Setup
/*----------------------------------------------------------------------------*/

add_action( 'after_setup_theme', 'insight_theme_setup', 10 );

/**
 * Theme Setup
 *
 * Perform basic theme setup, registrations and init actions during theme
 * initialization.
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */

function liftoff_theme_setup() {

    // define version
    define( 'INSIGHT_VERSION', '1.0.0' );

    // define EDD slug
    define( 'EDD_SLUG', 'themes' );

    // There's a race condition on defining _STORE_URL
    if ( !defined( 'EDD_SL_STORE_URL' ) ) {
        define( 'EDD_SL_STORE_URL', 'https://getviability.com' );
    }
    // Here we define a _CHILDNAME instead, used for Easy Digital Downloads
    define( 'EDD_SL_ITEM_CHILDNAME', 'Insight' );

    define( 'CHILDTHEME_SLUG', 'insight' );

    // TODO add post thumnail and sizes

    // make theme available for translation
    // translations can be filed in the /languages/ directory
    load_theme_textdomain( 'insight', get_template_directory() . '/languages' );

    $locale = get_locale();
    $locale_file = get_template_directory() . '/languages/$locale.php';
    if ( is_readable( $locale_file ) )
        require_once( $locale_file );

    // TODO add our additional help & support stuff

    new EDD_Theme_Updater( array(
        'remote_api_url'   => EDD_SL_STORE_URL,
	    'version' 	       => INSIGHT_VERSION,
	    'license' 	       => esc_attr( get_option( 'viability-help-' . CHILDTHEME_SLUG . '-licensekey' ) ),
        'item_name'        => EDD_SL_ITEM_CHILDNAME,
        'theme_slug'       => CHILDTHEME_SLUG,
	    'author' 	       => 'Heavy Heavy',
	    'url'              => home_url()
    ), array(
		'update-notice'    => __( "Updating this child theme may lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'insight' ),
		'update-available' => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'insight' ),
    ) );
    
}

/*----------------------------------------------------------------------------*/
/* Theme Stylesheets
/*----------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'insight_theme_stylesheets', 10 );

/**
 * Theme Stylesheets
 *
 * Register and enqueue all theme related stylesheets using wp_register_style()
 * and wp_enqueue_style() respectively.
 *
 * @package liftoff
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */

function insight_theme_stylesheets() {
    
    if ( !is_admin() ) {
        
        // register parent theme stylesheet
        wp_register_style( 'viability-core', get_template_directory_uri() . '/assets/css/main.min.css', array( 'viability-fonts', 'viability-icons' ), wp_get_theme( 'viability' )->get( 'Version' ), 'screen' );
        
        wp_enqueue_style( 'insight', get_stylesheet_directory_uri() . '/assets/css/insight.min.css', array( 'viability-core' ), wp_get_theme()->get( 'Version' ), 'screen' );
        
    }
}
