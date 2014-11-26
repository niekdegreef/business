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