<?php
/**
* template name: Project listing 
* @package business
*/
get_header(); ?> 

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        $list_of_products_or_services = get_field('list_of_products_or_services');
                    if( $list_of_products_or_services ): ?>
                    <article class="projects">
                   
                    <?php while( has_sub_field('list_of_products_or_services') ): 
                       
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                        $text = get_sub_field('text'); ?>
                      
                        <section>
                            <h2><?php echo $title ?></h2>

                            <figure><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"> </figure>

                            <?php echo $text ?>
                        </section>

                    <?php endwhile; ?>

                </article>
        <?php endif; ?> 
        
        </main><!-- #main -->

    </div><!-- #primary -->

    <?php get_sidebar(); ?>

    </div><!-- #content -->

<?php get_footer(); ?>