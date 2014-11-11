<?php
/**
 * The main template file. @package business
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop for first column take content from home-page, ACF repeater field*/ ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="colOne">
                    <header>
                        <h1> <?php get_field('section_title') ?>  </h1>
                    </header>
                    <section>
                        <h2><?php get_field('section_sub_title') ?></h2>
                        <p> <?php get_field('section_text') ?> </p>
                    </section>
                </article>                

            <?php endwhile; ?>

        <?php endif; ?> 

        
        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop for the second column >>> take content from home-page, ACF repeater fields*/ ?>
            
            <article class="colTwo">

                <?php while ( have_posts() ) : the_post(); ?>

                     <header>
                        <h1> <?php get_field('section_title') ?>  </h1>
                    </header>
                    <section>

                        <h2><?php get_field('section_sub_title') ?></h2>
                        <p> <?php get_field('section_text') ?> </p>
                        
                    </section>
                             
                <?php endwhile; ?>

            </article>  

        <?php endif; ?>

        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop for the second column >>> take content from home-page, ACF repeater fields*/ ?>
            <article class="colTwo">
                <aside class="widget group logo_showcase">
                    
                    <h2><?php get_field('section_title') ?></h2>

                    <?php while ( have_posts() ) : the_post(); ?>
              
                        <img src="<?php get_field('image') ?>" alt="">
    
                    <?php endwhile; ?>

                </aside>
            </article>  
        <?php endif; ?>

        <a class="contact" href="#">
             <p> <?php echo get_field('contact_us_reminder') ?> </p>
            <span class="genericon genericon-mail"></span>
        </a>
        
        </main><!-- #main -->

    </div><!-- #primary -->

    <?php get_sidebar(); ?>

    </div><!-- #content -->

<?php get_footer(); ?>