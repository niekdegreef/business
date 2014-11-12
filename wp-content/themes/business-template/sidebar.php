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

        <?php dynamic_sidebar( 'sidebar-1' ); ?>

        <!-- use widgets to show latest news items -->

        <aside class="reallign widget feature group">
          
                <h2>News</h2>

                <article>
                    <a href=""><h3>Title of news itemTitle of news item</h3> <time>12-12-2014</time></a> 
                </article>

                <article>
                    <a href=""><h3>Title of news item</h3> <time>12-12-2014</time></a> 
                </article>
             
        </aside>

        <!-- use widgets to show cpt's with category of featured -->

        <aside class="widget video_showcase group">
            <h2 class="widget-title">Showcase</h2>
            <ul>
                <li>
                    <figure>
                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video1.png" alt=""></a>
                    </figure>
                    <figcaption>
                        <h3>Revit 3D Autocad project</h3>
                        <p>Walkthrough of this project, created with this and this software, for project A in the fall of 2014</p>
                    </figcaption>
                </li>
                <li>
                    <figure>
                         <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video2.png" alt=""></a>
                    </figure>
                    <figcaption>
                        <h3>Revit 3D Autocad project</h3>
                        <p>Walkthrough of this project, created with this and this software, for project A in the fall of 2014</p>
                    </figcaption>
                </li>
                
               <li>
                <h3>YouTube channel</h3>
                   <a href="#">
                  
                    <img style="max-width:120px" src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png" alt="youtube channel" width="100"></a>
               </li>
            </ul>
        </aside>
        
    </div><!-- #secondary -->