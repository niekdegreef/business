<?php
/**
* template name: Project listing 
* @package business
*/
get_header(); ?> 

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop for first column take content from home-page, ACF repeater field*/ ?>
                <article class="projects">
                
                    <header>
                        <h1><?php the_title() ?></h1>
                    </header>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <section>
                            <h2><?php get_field('name') ?></h2>
                            <figure><img src="<?php get_field('project') ?>" alt=""> </figure>
                            <p><?php get_field('project_description') ?></p>
                        </section>

                    <?php endwhile; ?>

                </article>

                <!-- optional extra contact button, if page is long -->
               <!--  <a class="contact" href="<?php //get_field('link') ?>">
                    <p><?php //get_field('button_text') ?></p>
                    <span class="genericon genericon-mail"></span>
                </a> -->

        
        <?php endif; ?> 
        
        </main><!-- #main -->

    </div><!-- #primary -->

    <?php get_sidebar(); ?>

    </div><!-- #content -->

<?php get_footer(); ?>