<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package business
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>
   <div id="secondary" class="sidebar widget-area" role="complementary">

        <!-- Show post types with category of featured -->

        <aside class="widget feature group">

            <?php
            // WP_Query arguments
            $args = array (
                'category_name'  => 'featured',
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {   
                while ( $query->have_posts() ) {
                    $query->the_post(); 
                        echo '<a href="' , the_permalink(), '"><h3>' , the_title() , '</h3>' , get_the_post_thumbnail() , the_excerpt() , '</a>' ;     
                    }
                ?>
            <?php
            }
            else {
                // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>

        </aside>


        <?php dynamic_sidebar( 'sidebar-1' ); ?>


        
    </div><!-- #secondary -->