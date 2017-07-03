<?php
/**
 * Single Post Template
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */
get_header(); if ( have_posts() ) : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'container' ); ?>>     
        <div class="article-content">
        <?php
        if ( function_exists( 'wap8_trailblaze' ) ) {
            wap8_trailblaze();
        }   
        viability_content_loop();
        ?>
        </div>
        <?php
        if ( is_active_sidebar( 'primary' ) ) {
            get_sidebar( 'primary' );
        }
        ?>
    </article>
<?php endif; get_footer(); ?>
