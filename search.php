<?php
/**
 * Search Template
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */
get_header(); ?>
<article <?php post_class( 'container' ); ?>>     
    <div class="article-content">
        <div class="article-entry">
        <?php
        if ( function_exists( 'wap8_trailblaze' ) ) {
            wap8_trailblaze();
        }

        printf( '<h1>%1$s %2$s %3$s</h1>',
                $wp_query->found_posts,
                __( 'Search results found for: ', 'insight' ),
                get_search_query()                
        );

        insight_search_loop();
        ?>
        </div></div>
        <?php
        if ( is_active_sidebar( 'primary' ) ) {
            get_sidebar( 'primary' );
        }
        ?>
</article>

<?php get_footer(); ?>
