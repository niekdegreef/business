<?php
/**
 * The main template file. @package business
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop 

            take content from home-page, ACF fields*/ ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="colOne">
                    <header>
                        <h1>What we do</h1>
                    </header>
                    <section>
                        <h2>web design</h2>
                        <p>
                        This text is only here for the purpose of showing you a full paragraph. This is where you introduce your awesome company and the various services or products you offer.
                        </p>
                    </section>
                </article>                

            <?php endwhile; ?>

        <?php endif; ?>

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop for the first column >>> take content from home-page, ACF fields*/ ?>
                <article class="colOne">
            <?php while ( have_posts() ) : the_post(); ?>
              
                    <header>
                        <h1>What we do</h1>
                    </header>
                    <section>
                        <h2>web design</h2>
                        <p>
                        This text is only here for the purpose of showing you a full paragraph. This is where you introduce your awesome company and the various services or products you offer.
                        </p>
                    </section>

            <?php endwhile; ?>
                </article>    
        <?php endif; ?>

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop for the second column >>> take content from home-page, ACF fields*/ ?>
                <article class="colTwo">
            <?php while ( have_posts() ) : the_post(); ?>

                    <header>
                        <h1>Expertise</h1>
                    </header>
                    <section>
                        <p>This is to boast about your awareness of the latest developments in the industry through conferences, exhibitions and presentations. Do you work with software you'd like to advertise, that can be shown here. If you're an engineering company, you'd be showing these: </p>
                    </section>
                             
            <?php endwhile; ?>
                </article>  
        <?php endif; ?>








        <article class="colTwo">
      
            <aside class="widget group logo_showcase">
            <h2>Software</h2>

            <img src="images/logo1.png" alt="">
            <img src="images/logo2.png" alt="">
            <img src="images/logo3.png" alt="">
            <img src="images/logo4.png" alt="">
            <img src="images/logo5.png" alt="">
            <img src="images/logo6.png" alt="">
            <img src="images/logo7.png" alt="">
            
        </aside>

        <a class="contact" href="#">
            <p>contact us for more information about our products &amp; services</p>
            <span class="genericon genericon-mail"></span>
      
        </a>
        </article>
        
        </main><!-- #main -->

    </div><!-- #primary -->

   <?php include 'sidebar.php' ?>

    </div><!-- #content -->
<?php include 'footer.php' ?>