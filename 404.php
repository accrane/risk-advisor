<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <div class="page-left">    

			<article id="post-0" class="post error404 no-results not-found">
				  <div class="entry-content">
            
            <h1>Page Not Found
              </h1>
            <h2>We're sorry. The page you're looking for cannot be found. Please try selecting a page from our sitemap:
              <?php wp_list_pages('title_li='); ?>
            </div><!-- .entry-content -->
			</article><!-- #post-0 -->

	</div><!-- page left -->
            

<?php get_footer(); ?>