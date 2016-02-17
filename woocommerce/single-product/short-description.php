<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post;

if ( ! $post->post_excerpt ) return;
?>
<div itemprop="description">Complete satisfaction guaranteed or your money back.</div>

<div itemprop="international-link">
<a href="<?php bloginfo('url');?>/ordering-information">Click here for International Orders</a>
	<?php //echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>