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
            <?php foreach ( get_categories( array(
                'orderby' => 'name',
                'order' => 'ASC',
                'number' => 2 ) ) as $category ) {
            ?>
                <div class="category-container-box default-bg-color">
            <?php printf ( '<h2>%1$s</h2><h3>%2$s</h3>',
                           __( $category->name, 'insight' ),
                           __( $category->description, 'insight' ) ); ?>
                    <ul>
                <?php foreach ( get_posts ( array(                    
                    'posts_per_page' => 5,
                    'category' => array( $category->term_id ) ) ) as $post ) {
                    printf ( '<li><a href="%1$s">%2$s</a></li>',
                             get_permalink(),
                             __( $post->post_title, 'insight' ) );
                } ?>
                    </ul>
                    <?php printf( '<div class="category-box-link"><a href="%1$s" class="button">%2$s</a></div>',
                                  get_category_link( $category->term_id ),
                                  __( 'See All', 'insight' )
                    ); ?>
                </div>
            <?php 
            }
            ?>
        </div>
        <div class="category-container">
            <?php foreach ( get_categories( array(
                'orderby' => 'name',
                'order' => 'ASC',
                'offset' => 2,
                'number' => 2 ) ) as $category ) {
            ?>
                <div class="category-container-box default-bg-color">
            <?php printf ( '<h2>%1$s</h2><h3>%2$s</h3>',
                           __( $category->name, 'insight' ),
                           __( $category->description, 'insight' ) ); ?>
                    <ul>
                <?php foreach ( get_posts ( array(                    
                    'posts_per_page' => 5,
                    'category' => array( $category->term_id ) ) ) as $post ) {
                    printf ( '<li><a href="%1$s">%2$s</a></li>',
                             get_permalink(),
                             __( $post->post_title, 'insight' ) );
                } ?>
                    </ul>
                    <?php printf( '<div class="category-box-link"><a href="%1$s" class="button">%2$s</a></div>',
                                  get_category_link( $category->term_id ),
                                  __( 'See All', 'insight' )
                    ); ?>
                </div>
            <?php 
            }
            ?>
        </div>
        
    </div>
</section>
<?php get_footer(); ?>
