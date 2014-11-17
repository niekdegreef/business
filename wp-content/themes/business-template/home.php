<?php
/**
 * The main template file. @package business
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <?php
            // The Query
            $the_query = new WP_Query( 'pagename=home' );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $section_col_one = get_field('section_col_one');
                    $section_col_two = get_field('section_col_two');
                    $section_title_one = get_field('section_title_col_one');
                    $section_title_two = get_field('section_title_col_two');
            ?>

            <article class="colOne">
                <header> <h1> <?php echo $section_title_one ?>  </h1> </header>

                    <?php
                    if( $section_col_one ): ?>

                    <?php while( has_sub_field('section_col_one') ): 
                        $section_sub_title = get_sub_field('section_sub_title');
                        $section_text = get_sub_field('section_text'); ?>
                      
                        <section>
                            <h2><?php echo $section_sub_title ?></h2>
                            <?php echo $section_text ?>
                        </section>

                    <?php endwhile; ?>
                    <?php endif; ?>

            </article>  

            <article class="colTwo">
              
                <header> <h1> <?php echo $section_title_two ?>  </h1> </header>

                    <?php
                    if( $section_col_two ): ?>

                    <?php while( has_sub_field('section_col_two') ): 
                        $section_sub_title = get_sub_field('section_sub_title');
                        $section_text = get_sub_field('section_text'); ?>
                      
                        <section>
                            <h2><?php echo $section_sub_title ?></h2>
                            <?php echo $section_text ?>
                        </section>

                    <?php endwhile; ?>
                    <?php endif; ?>
                      
                <?php $reminder = get_field('contact_us_reminder');
                    if( $reminder ){ ?>
                    <a class="contact full-width" href="/contact"> 
                        <p> <?php echo $reminder; ?> </p> 
                        <span class="genericon genericon-mail"></span>
                    </a>
                <?php } ?>       

            </article>  
           
            <?php 
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata(); ?>
        
        </main><!-- #main -->

    </div><!-- #primary -->

    <?php get_sidebar(); ?>

    </div><!-- #content -->

<?php get_footer(); ?>