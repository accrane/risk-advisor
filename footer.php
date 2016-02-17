<?php
/**
 * The template for displaying the footer.
 *
 */
?>
	</div><!-- #main .wrapper -->
	<div id="footer">
		<div class="site-info">
        
        <div id="footernav">	
        	<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        </div><!-- footer nav-->
        
        <div class="clear"></div>
        
          
          <div class="footer-sprite-info">
              <div class="footer-sprite">
                    <div class="footeremail"></div><!-- footeremail -->
                    
                    
                        
                    Email: <span class="underline">
                     <?php $personEmail = get_field('footer_email', 'option'); ?>
                        <a href="mailto: <?php echo antispambot($personEmail); ?>">
                          <?php echo antispambot($personEmail); ?>
                        </a>
                   </span>
              </div><!-- footer-sprite -->
              
              <div class="footer-sprite">
                    <div class="footerphone"></div><!-- footerphone -->
                    Phone: <?php the_field('footer_phone', 'option'); ?>
              </div><!-- footer-sprite -->
              
              <div class="footer-sprite">
                    <div class="footerhome"></div><!-- footerhome -->
                    <?php the_field('footer_home', 'option'); ?>
              </div><!-- footer-sprite -->
          </div><!-- footer-sprite-info -->
          
          <div class="clear"></div>
          
            <div class="copyright">&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?>. All Rights Reserved.</div><!-- #copyright -->
            
		</div><!-- .site-info -->
	</div><!-- #footer -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54837621-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
</body>
</html>