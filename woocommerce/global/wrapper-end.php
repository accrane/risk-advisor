<?php
/**
 * Content wrappers
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */


/*$template = get_option( 'template' );

switch( $template ) {
	case 'twentyeleven' :
		echo '</div></div>';
		break;
	case 'twentytwelve' :
		echo '</div></div>';
		break;
	case 'twentythirteen' :
		echo '</div></div>';
		break;
	case 'twentyfourteen' :
		echo '</div></div></div>';
		get_sidebar( 'content' );
		break;
	default :
		echo '</div></div>';
		break;
}*/?>

        </div><!-- entry-content -->
       
        
        
	</div><!-- page-left product -->
    
    <div class="page-right-product"><?php get_template_part('sidebar-products'); ?></div><!-- page right -->
    
<!--</div> page-content -->