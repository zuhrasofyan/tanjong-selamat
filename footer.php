<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_sidebar('footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
    
    <div class="container">

        <div class="row">

            <div class="col-md-12">
    
                <footer id="colophon" class="site-footer" role="contentinfo">

                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'http://rambideunt.com/', 'understrap' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'understrap' ), 'Rambideunt' ); ?></a>
                        <span class="sep"> | </span>
                        <?php printf( __( 'Theme: %1$s by %2$s.', 'understrap' ), 'TanjongSelamat', '<a href="http://rambideunt.com/theme" rel="designer">rambideunt.com</a>' ); ?> 
                        (<?php printf( __( 'Version', 'understrap' ) ); ?>: 1.0.0)
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
