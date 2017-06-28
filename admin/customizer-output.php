<?php
/*----------------------------------------------------------------------------*/
/* Customizer Styles
/*----------------------------------------------------------------------------*/

add_action( 'wp_head', 'insight_customizer_styles', 10 );

/**
 * Customizer Styles
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */

function insight_customizer_styles() {
    $options = get_option( 'viability_options' ); // get the saved theme options

    // link colors
    $link_color       = ( isset( $options['link_color'] ) ) ? $options['link_color'] : '#17b890';
    $link_hover_color = ( isset( $options['link_hover_color'] ) ) ? $options['link_hover_color'] : '#1fe3b2';

    // background colors
    $dark_bg_color  = ( isset( $options['dark_bg_color'] ) ) ? $options['dark_bg_color'] : '#272829';
    $light_bg_color = ( isset( $options['light_bg_color'] ) ) ? $options['light_bg_color'] : '#edf3f6';
?>
    <style id="liftoff-customizer-styles" type="text/css">
     .hero-block, .img-bg-block, .liftoff-main-nav ul li ul, .dark-bg-color {
         background-color: <?php echo $dark_bg_color; ?>;
     }
     .light-bg-color {
         background-color: <?php echo $light_bg_color; ?>;
     }
     .liftoff-main-nav ul li ul li a:hover, .liftoff-main-nav ul li ul li a:active, .liftoff-main-nav ul li ul .current-menu-item a, .highlighted-pricing-color .pricing-tier-head, .banner-social-links li a:hover, .banner-social-links li a:active, .liftoff-main-nav ul .primary-menu-button a, .two-cols h2::before, .three-cols h2::before {
         background-color: <?php echo $link_color; ?>;
     }
     .liftoff-main-nav ul .primary-menu-button a:hover, .liftoff-main-nav ul .primary-menu-button a:active {
         background-color: <?php echo $link_hover_color; ?>;
     }
     .liftoff-main-nav ul li a:hover, .liftoff-main-nav ul li a:active, .liftoff-main-nav ul .current-menu-item a, .pricing-tier-features li::before, .banner-social-links li a, .banner-social-links li a:visited {
         color: <?php echo $link_color; ?>;
     }
     .banner-social-links li a, .banner-social-links li a:visited, .dark-bg-color .banner-social-links li a:hover, .dark-bg-color .banner-social-links li a:active, .dark-bg-color .banner-social-links li a:visited:hover, .dark-bg-color .banner-social-links li a:visited:active {
         border-color: <?php echo $link_color; ?>;
     }
    </style>
<?php }
