<?php
/**
 * Category Template
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

        printf( '<h1>%1$s</h1>',
                single_cat_title(
                    '', false )
        );

        insight_excerpt_loop();
        ?>
        </div></div>
        <?php
        if ( is_active_sidebar( 'primary' ) ) {
            get_sidebar( 'primary' );
        }
        ?>
</article>

<?php get_footer(); ?>
