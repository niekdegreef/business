<?php
/**
* template name: FAQ page with accordion dropdown
* @package business
*/
get_header(); ?> 
  
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        $frequently_asked_question = get_field('frequently_asked_question');
            
            if( $frequently_asked_question ): ?>

                <header>
                    <h1><?php the_title() ?></h1>
                </header>

                <dl id="accordion" class="accordion">
                    <?php while( has_sub_field('frequently_asked_question') ): 
                       
                        $question = get_sub_field('question');
                        $answer = get_sub_field('answer'); ?>

                            <dt><a href=""><?php echo $question ?> </a></dt>
                            <dd><?php echo $answer ?></dd>

                    <?php endwhile; ?>

                </dl>

        <?php endif; ?> 
  
        </main><!-- #main -->

    </div><!-- #primary -->


    <?php get_sidebar(); ?>

    </div><!-- #content -->

<?php get_footer(); ?>




