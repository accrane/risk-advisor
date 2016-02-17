<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->



<?php wp_head(); ?>
</head>

<body>


   
    



<div id="main" class="wrapper">
    
    <div id="header">

      <header class="site-header">
    	 <?php if(is_home()) { ?>
            <h1 class="logo"><a href="<?php bloginfo('url'); ?>">Risk Advisor</a></h1>
        <?php } else { ?>
            <div class="logo"><a href="<?php bloginfo('url'); ?>">Risk Advisor</a></div>
        <?php } ?>
    
    <div id="sociallinks-text">
<a href="https://ii201.customerhub.net" target="_blank">Mastermind Group<br/>
Member Login</a></div>
    		<div id="sociallinks">
		   <ul>
            		<li class="facebook"><a href="<?php the_field('facebook_link', 'option') ?>" target="_blank">Facebook</a></li>
                  <li class="linkedin"><a href="<?php the_field('linkedin_link', 'option') ?>" target="_blank">Linkedin</a></li>
                  <li class="twitter"><a href="<?php the_field('twitter_link', 'option') ?>" target="_blank">Twitter</a></li>
            	</ul>
           </div><!-- sociallinks -->

      </header>
           
           <div id="dude-tagline"><?php the_field('header_tagline', 'option'); ?></div>
           <div id="dude"></div>
    
    
		<div id="main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div><!-- #site-navigation -->

	</div><!-- header -->


	