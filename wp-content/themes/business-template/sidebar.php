<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package business
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
//     return;
// }
?>
   <div id="secondary" class="sidebar widget-area" role="complementary">
        <!-- Show post types with category of featured -->
        <!-- if flex sidebar has content display it, otherwise show featured articles & recent news -->
            <?php
            $flexible_sidebar = get_field('flexible_sidebar');
            
            if( $flexible_sidebar ){ 

                while( has_sub_field('flexible_sidebar') ): 
                    $heading = get_sub_field('heading');
                    $content = get_sub_field('content');
                ?>

                    <?php if( $heading ): ?>

                        <aside class="widget group">
                            <h3><?php echo $heading ?></h3>
                            <?php echo $content ?>
                        </aside>
                    
                    <?php endif ?>

                <?php endwhile; ?>

            <?php } ?>

            <?php //image gallery

            $image_gallery = get_field('image_gallery');

            if( $image_gallery ){ 

            echo '<h3>' . $heading .'</h3>' ;

                while( has_sub_field('image_gallery') ):
                    $heading = get_sub_field('images_heading');
                    $images = get_sub_field('images'); ?>

                    <aside class="widget group">

                            <?php foreach( $images as $image ): ?>

                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" /> 

                            <?php endforeach; ?>

                    </aside>

                    <?php endwhile; ?>

             <?php } //end of image gallery ?>



            <?php dynamic_sidebar( 'sidebar-1' ); // used for recent news widget, through theme admin ?> 
        
        

    </div><!-- #secondary -->