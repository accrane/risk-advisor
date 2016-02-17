<?php
/**
 * Template Name: Products 
 */

get_header(); ?>



<?php while ( have_posts() ) : the_post(); ?>
				

	<div class="page-left-product">
        <div class="entry-content">
                    
                  
        <?php 
		
					//  Actually, we need to go to Woocommerce/global/wrapperstart
					
					//  Then, archive-product.php does a lot
		
		
		?>
        
        
 <ul class="products">
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => 'healthcare-broker-books-and-products',
					'operator' => 'NOT IN'
				)
	)
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				woocommerce_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul><!--/.products-->


<div class="clear"></div>



 <ul class="products">
<a name="healthcare"></a> <h2>Shop for Healthcare Broker Books and Products</h2>
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => -1,
			'product_cat' => 'healthcare-broker-books-and-products'
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				woocommerce_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul><!--/.products-->
        
                    
                    
        </div><!-- entry-content -->
	</div><!-- page-left -->
   <?php endwhile; // end of the loop. ?>
   
    
    <div class="page-right-product"><?php get_template_part('sidebar-products'); ?></div><!-- page right -->
    




<?php get_footer(); ?>