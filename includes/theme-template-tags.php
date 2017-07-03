<?php
/*----------------------------------------------------------------------------*/
/* Footer Menus
/*----------------------------------------------------------------------------*/

/**
 * Footer Menus
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */

function insight_footer_menus() {
    if ( has_nav_menu( 'footer-one' ) || has_nav_menu( 'footer-two' ) || has_nav_menu( 'footer-three' ) || has_nav_menu( 'footer-four' ) ) {
        echo "<div class='site-footer-menu-container'>";
        if ( has_nav_menu( 'footer-one' ) ) {
            echo "<div class='footer-menu-col'>";
            printf(
                '<h3>%s</h3>',
                esc_html( viability_get_theme_menu_name( 'footer-one' ) )
            );
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-one',
                    'container'      => false,
                    'menu_class'     => 'footer-links',
                    'depth'          => 1,
                )
            );
            echo "</div>";
        }
        if ( has_nav_menu( 'footer-two' ) ) {
            echo "<div class='footer-menu-col'>";
            printf(
                '<h3>%s</h3>',
                esc_html( viability_get_theme_menu_name( 'footer-two' ) )
            );
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-two',
                    'container'      => false,
                    'menu_class'     => 'footer-links',
                    'depth'          => 1,
                )
            );
            echo "</div>";
        }
        if ( has_nav_menu( 'footer-three' ) ) {
            echo "<div class='footer-menu-col'>";
            printf(
                '<h3>%s</h3>',
                esc_html( viability_get_theme_menu_name( 'footer-three' ) )
            );
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-three',
                    'container'      => false,
                    'menu_class'     => 'footer-links',
                    'depth'          => 1,
                )
            );
            echo "</div>";
        }
        if ( has_nav_menu( 'footer-four' ) ) {
            echo "<div class='footer-menu-col'>";
            printf(
                '<h3>%s</h3>',
                esc_html( viability_get_theme_menu_name( 'footer-four' ) )
            );
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-four',
                    'container'      => false,
                    'menu_class'     => 'footer-links',
                    'depth'          => 1,
                )
            );
            echo "</div>";
        }
        echo "</div>";
    }
}


/*----------------------------------------------------------------------------*/
/* Category Loop
/*----------------------------------------------------------------------------*/

/**
 * Category Loop
 *
 * Loop through posts via category
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */

function insight_category_loop( $category ) {
    
    global $post;
    
    foreach ( get_posts( array( 'category_name' => $category ) ) as $post ) {
        setup_postdata( $post );

        printf( '<h2><a href="%1$s">%2$s</a></h2><p>%3$s</p>',
                get_permalink(),
                get_the_title(),
                get_the_excerpt() );
    
    }
    
}

/*----------------------------------------------------------------------------*/
/* Excerpt Loop
/*----------------------------------------------------------------------------*/

/**
 * Excerpt Loop
 *
 * Loop through posts and only display link plus excerpt
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */

function insight_excerpt_loop( ) {

    while ( have_posts() ) : the_post();
        
        printf( '<h2><a href="%1$s">%2$s</a></h2><p>%3$s</p>',
                get_permalink(),
                get_the_title(),
                get_the_excerpt() );
        
    endwhile;
    
}

/*----------------------------------------------------------------------------*/
/* Search Form
/*----------------------------------------------------------------------------*/

/**
 * Search Form
 *
 * Create a large main search form
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */

function insight_index_search() {
    ?>
    <form role="search" method="get" id="searchform" class="insight_index_search" action="<?php echo home_url( '/' ); ?>">
        <div>
            <label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'insight' ); ?></label>
            <input type="text" value="" name="s" id="s" placeholder="<?php _e( 'Search documentation...', 'insight' ); ?>" />
            <input type="submit" id="searchsubmit" value="<?php _e( 'Search', 'insight'); ?>" />
        </div>
    </form>
    <?php 
}

