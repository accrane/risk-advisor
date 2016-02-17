<?php
/**
 * The main template file.
 */

get_header(); ?>

<?php 
$args = array(
	'post_type' => 'page',
	'page_id' => '43' // Homepage ID
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            
            <div class="page-content">
				
			<div class="homepage-youtube">
           	<?php the_field('youtube_link'); ?>
          </div><!-- youtube -->
           
           <div id="homepage-top-right">
           	<div class="free-graphic">
            		<img src="<?php bloginfo('template_url'); ?>/images/free.png" />
               </div><!-- free graphic -->
           	<?php the_field('free_webinar_training'); ?>
           </div><!-- homepage-top-right -->
           
           
<?php endwhile; ?>
<?php endif; // end have_posts() check ?>
           
           <div class="clear"></div>
           
           
           
           
           <!--
           --------------------------------------------------
           				Testimonials
           
           -->
           
<?php 
$args = array(
	'post_type' => 'testimonials',
	'posts_per_page' => '3',
	'orderby' => 'date',
	'order' => 'ASC',
	'meta_query' => array(
                     array(
                        'key' => 'show_on_homepage',
                        'value' => 'yes',
                        'compare' => '=', 
                        'type'      => 'CHAR'
                      )
                 )
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="testimonial-container">
    
    <div class="read-more-testimonials"><a href="<?php bloginfo('url'); ?>/testimonials">Read more testimonials</a></div>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
           
           
           <?php // set up a counter for some margins
			  ++$counter;
			  if($counter == 3) { 
				$postclass = 'third-post';
				$counter = 0;
			  } else { $postclass = 'right-margin'; }
			?>
            
            

           
           <div class="box-testimonial <?php echo $postclass; ?>">
           	<div class="box-test-title">"<?php the_title(); ?>"</div><!-- box test title -->
            	<div class="box-test-contents">
            
                	<div class="test-pic">
                    <?php 
 							$image = get_field('image');
						 
							if( !empty($image) ): ?>
                            
                            <?php
									// vars
									$url = $image['url'];
									$title = $image['title'];
									$alt = $image['alt'];
									$caption = $image['caption'];
								 
									// thumbnail
									$size = 'testimonial-pic';
									$thumb = $image['sizes'][ $size ];
									$width = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ];
									
									?>
                            
                    			<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"  />
                                
                    		<?php endif; ?>
                  </div><!-- test pic -->
                    	<div class="box-test-name">
                        	<?php the_field('name'); ?>
                      </div><!-- box test name -->
                      <div class="box-test-test">
                        <?php echo custom_field_excerpt(); ?>
                      </div><!-- box test name -->
              
               </div><!-- box test contents -->
           </div><!-- gradient box -->

  <?php endwhile; ?>
  
  </div><!-- testimonial container -->
  
  <?php endif; ?>              
                
           
       </div><!-- page-content -->  
       
       
<?php 
$args = array(
	'post_type' => 'page',
	'page_id' => '43' // Homepage ID
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>   
           
           
           
           
           
           <div id="bluecallouts">
           	<div id="bluecallout1">
            	
                    <a href="#" class="eModal-1">
					<?php the_field('blue_callout_1'); ?>
                    <div class="get-report">	
                    	<img src="<?php bloginfo('template_url'); ?>/images/get-report.png" />
                    </div><!-- get report -->
                    </a>
                    
            	</div><!-- blue callout 1 -->
                <div id="bluecallout2">
            		<a href="#" class="eModal-2">
					<?php the_field('blue_callout_2'); ?>
                    <div class="get-report">	
                    	<img src="<?php bloginfo('template_url'); ?>/images/get-report.png" />
                    </div><!-- get report -->
                    </a>
                    
            	</div><!-- blue callout 1 -->
                <div id="bluecallout3">
            		<a href="<?php the_field('blue_callout_3_link'); ?>">
					<?php the_field('blue_callout_3'); ?>
                    <div class="learnmore-home">	
                    	<img src="<?php bloginfo('template_url'); ?>/images/learnmore-home.png" />
                    </div><!-- get report -->
                  </a>
            	</div><!-- blue callout 1 -->
           </div><!-- blue callouts -->
           
           
           <div id="disclaimer"><?php the_field('disclaimer'); ?></div>
   
   
   
   <?php endwhile; ?>
  
  <?php endif; ?>            
            
<?php get_footer(); ?>