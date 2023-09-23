<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header(); ?>

    <?php if(get_field('banner_image')) { ?> 
		   <div class="container-fluid cmm_banner" style="background-image:url('<?php the_field('banner_image'); ?>');">
	  <?php } else { ?>
		   <div class="container-fluid cmm_banner" style="background-image:url('<?php bloginfo('template_url'); ?>/assets/images/service_banner.png');">
	  <?php } ?>
	  <div class="container">
		<h1>Blog</h1>
	  </div>
	  <ul>
		<li><a href="<?php echo home_url();?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
		<li><a href="<?php echo get_permalink(11);?>">Blog</a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
		<li><?php the_title();?></li>
	  </ul>
	</div>

    <div class="container-fluid cmm_area">
		<div class="container">
			<div class="row blog_details_in">
				<div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 blog_details_lf">
				    <?php
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();
								get_template_part( 'template-parts/content', get_post_type() );
							}
						}
					?>
			  </div>
              <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 blog_details_rg">
				<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
              </div>
            </div>
		</div>
	</div>

<?php get_footer(); ?>
