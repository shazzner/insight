<?php
/**
 * Footer Template
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */ ?>
<footer role="contentinfo" class="site-footer">
    <?php insight_footer_menus(); ?>
    <div class="site-footer-container">
        <div class="site-c-line">
                    <?php
                    if ( has_nav_menu( 'social-menu' ) ) {
                        wp_nav_menu(
                            array(
                                'theme_location' => 'social-menu',
                                'container'      => false,
                                'menu_class'     => 'social-links',
                                'link_before'    => '<span class="screen-reader-text">',
                                'link_after'     => '</span>',
                                'depth'          => 1,
                            )
                        );
                    }
                    printf(
                        __( '<div class="c-line"><p>Copyright &copy; %1$s %2$s.</p><p><a href="%3$s" target="_blank">Insight</a> designed and built by <a href="%4$s" target="_blank">Heavy Heavy</a>.</p></div>', 'liftoff' ),
                        esc_html( date( 'Y' ) ),
                        esc_html( get_bloginfo( 'name' ) ),
                        esc_url( '//getviability.com/themes/insight' ),
                        esc_url( '//heavyheavy.com' )
                    );
                    ?>
        </div>
    </div>
</footer>
    <?php wp_footer(); ?>
    </body>
</html>
