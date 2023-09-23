<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

    <?php if(get_field('banner_image')) { ?> 
		   <div class="container-fluid cmm_banner" style="background-image:url('<?php the_field('banner_image'); ?>');">
	  <?php } else { ?>
		   <div class="container-fluid cmm_banner" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/images/about_banner.png');">
	  <?php } ?>
	  <div class="container">
		<h1><?php the_title();?></h1>
	  </div>
	  <ul>
		<li><a href="<?php echo home_url();?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
		<li><?php the_title();?></li>
	  </ul>
	</div>
	
	<div class="container-fluid areas_wrp default">
	    <div class="container">
			<div class="row">
			    <?php	while(have_posts()) { the_post(); ?>
				  <?php the_content(); ?>
				<?php } ?>
			</div>							
		</div>
    </div>

<?php get_footer(); ?>
