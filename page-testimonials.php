<?php
/**
 * Template Name: Testimonials
 */

get_header(); ?>

<div class="page-content">

<?php
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=>'testimonials',
	'paged' => $paged,
	'posts_per_page' => -1,
));
if ($wp_query->have_posts()) : ?>

	<div id="isotope-container">

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="item">
    	<div class="box-testimonial <?php //echo $postclass; ?>">
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
                        <?php the_field('testimonial'); ?>
                      </div><!-- box test name -->
              
               </div><!-- box test contents -->
           </div><!-- gradient box -->
    </div><!-- item -->
    
<?php endwhile; ?>

	</div><!-- isotope container -->	
    
<?php endif; ?>
            
</div><!-- page-content -->
                
<?php get_footer(); ?>