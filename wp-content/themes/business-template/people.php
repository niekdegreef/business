<?php
/**
* template name: People listing 
* @package business
*/
get_header(); ?> 

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop for first column take content from home-page, ACF repeater field*/ ?>
                <article class="people">
                
                <header>
                    <h1><?php the_title() ?></h1>
                </header>


            <?php while ( have_posts() ) : the_post(); ?>

                <section>
                    <img src="images/caro.jpg" alt="">
                    <h2><?php get_field('name') ?><br> 
                        <span><?php get_field('function') ?></span>
                    </h2>
                    <img src=" <?php get_field('profile') ?> " alt="">
                    <p><?php get_field('bio') ?></p>
                        
                </section>

            <?php endwhile; ?>

                </article>
        
        <?php endif; ?> 


    <!--     <a class="contact" href="#">
            <p>contact us for more information about available personel &amp; software packages</p>
            <span class="genericon genericon-mail"></span>
        </a> -->
        
        </main><!-- #main -->

    </div><!-- #primary -->


    <?php get_sidebar(); ?>

    </div><!-- #content -->

<?php get_footer(); ?>