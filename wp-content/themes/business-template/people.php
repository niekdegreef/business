<?php
/**
* template name: People listing 
* @package business
*/
get_header(); ?> 

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        $list_of_people = get_field('list_of_people');
            
            if( $list_of_people ): ?>

                    <article class="people">

                    <header>
                        <h1><?php the_title() ?></h1>
                    </header>

                    <?php while( has_sub_field('list_of_people') ): 
                       
                        $name = get_sub_field('name');
                        $image = get_sub_field('image');
                        $function = get_sub_field('function');
                        $bio = get_sub_field('bio'); ?>
                      
                        <section>
                            <h2><?php echo $name ?>
                                <span><?php echo $function ?></span>
                            </h2>

                            <figure><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"> </figure>

                            <?php echo $bio ?>

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