<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

	  <?php if(get_field('banner_images')) { ?> 
		   <div class="container-fluid cmm_banner" style="background-image:url('<?php the_sub_field('banner_image'); ?>');">
	  <?php } else { ?>
		   <div class="container-fluid cmm_banner" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/images/about_banner.png');">
	  <?php } ?>  
	  <div class="container">
		<h1>Error 404</h1>
	  </div>
	  <ul>
		<li><a href="<?php echo home_url();?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
		<li>Error 404</li>
	  </ul>
	</div>
    
    <div class="container-fluid areas_wrp default">
	    <div class="container">
			<div class="row">
                <h4><?php _e( 'Oops! That page can&rsquo;t be found.' ); ?></h4>			
				<p><?php _e( 'It looks like nothing was found at this location.' ); ?></p>
			</div>							
		</div>
    </div>

<?php get_footer(); ?>
