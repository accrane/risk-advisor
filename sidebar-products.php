<?php if ( is_active_sidebar( 'sidebar-product' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-product' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

<div class="sidebar-box z1">
   <a href="#" class="eModal-1">
	<?php the_field('box_1', 'option'); ?>
    <div class="get-report-blue">
    	<img src="<?php bloginfo('template_url'); ?>/images/get-report-blue.png" />
    </div><!-- get report blue -->
    </a>
</div><!-- sidebar box -->

<div class="sidebar-box z2">
    <a href="#" class="eModal-2">
	<?php the_field('box_2', 'option'); ?>
    <div class="get-report-blue">
    	<img src="<?php bloginfo('template_url'); ?>/images/get-report-blue.png" />
    </div><!-- get report blue -->
    </a>
</div><!-- sidebar box -->

<div class="sidebar-box z3">
    <a href="<?php the_field('box_3_link', 'option'); ?>">
	<?php the_field('box_3', 'option'); ?>
    <div class="learnmore">
    	<img src="<?php bloginfo('template_url'); ?>/images/learnmore.png" />
    </div><!-- learnmore -->
    </a>
</div><!-- sidebar box -->