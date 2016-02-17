<?php
/**
 * Template Name: Sitemap
 */

get_header(); ?>



			<?php while ( have_posts() ) : the_post(); ?>
            				
                
             
              
 
                
            <div class="page-left">    
            <div class="entry-content">
            
            <h1>
					<?php if(get_field('alternate_title')!="") {
                        the_field('alternate_title'); 
                            } else {
                        the_title(); }?>
              </h1>
            
              <?php wp_list_pages('title_li='); ?>
            </div><!-- entry-content -->
            </div><!-- page left -->
            
            
            <div class="page-right">
            	<?php get_template_part('sidebar-products'); ?>
            </div><!-- page right -->
            
            
        
                
                
                
				<?php // comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>