<?php
/**
 * Index Template
 *
 * @package insight
 * @version 1.0.0
 * @since 1.0.0
 * @author Chris Hardee <shazzner@heavyheavy.com>
 *
 */
get_header(); viability_blog_hero(); ?>
<section class="insight-section">
    <div class="insight-container">
        <?php printf ( '<h1>%1$s</h1>',
        __( get_bloginfo( 'description' ), 'insight' ) );
        insight_index_search(); ?>
    </div>
</section>
<section class="insight-section">
    <div class="insight-container">
        <div class="category-container">
            <?php  foreach ( get_categories( array(
                'orderby' => 'name',
                'order' => 'ASC', ) ) as $category ) {
            ?>
                <div class="category-container-box default-bg-color">
            <?php printf ( '<h2>%1$s</h2>',
                           __( $category->name ) ); ?>
                    <ul>
                <?php foreach ( get_posts ( array(
                    'posts_per_page' => 10,
                    'category' => array( $category->term_id ) ) ) as $post ) {
                    printf ( '<li><a href="%1$s">%2$s</a></li>',
                             get_permalink(),
                             __( $post->post_name, 'insight' ) );
                } ?>
                    </ul>
                </div>        
            <?php 
            }
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
