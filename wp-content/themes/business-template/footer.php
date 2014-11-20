<?php
/**
 * The template for displaying the footer.
 * 
 * Contains the closing of the #content div and all content after
 *
 * @package business
 */
?>
</div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="centre-wrapper group">

            <nav id="site-footer-nav-navigation" class="footer-nav" role="navigation">
                
                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

                <!-- <div class="quick-menu">
                    <h3>Quick menu</h3>
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Term &amp; conditions</a></li>
                        <li><a href="#">Outreach</a></li>
                        <li><a href="#">About the founders</a></li>
                        <li><a href="#">Our partners</a></li>
                        <li><a href="#">Sponsorships </a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Contacts us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div> -->

            </nav><!-- #site-navigation -->

            <?php dynamic_sidebar( 'footer-area' ); ?>

            <div class="site-info" >
                <span>
                &copy; <?php echo date("Y"); ?> Beyerdegreef
                </span>
                <span class="attribution">
                    <a href="http://beyerdegreef.com" target="blank"><span class="genericon genericon-code"></span> site</a>
                </span>
            </div>

        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-39180067-2');ga('send','pageview');
    </script>

</body>
</html>