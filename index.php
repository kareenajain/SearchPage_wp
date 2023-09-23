<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

    <div class="container-fluid cmm_banner" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/blog_banner.png')">
	  <div class="container">
		<h1>Blog</h1>
	  </div>
	  <ul>
		<li><a href="<?php echo home_url();?>">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
		<li>Blog</li>
	  </ul>
	</div>

    <div class="container-fluid services_wrapper">
		<div class="container">

	            <div class="services_wrp">	
					<?php
					    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array('post_type' => 'post',  'posts_per_page' => 3, 'order' =>'DESC','paged' => $paged) ;
						$services = new WP_Query($args);
						while($services->have_posts()) : $services->the_post(); 
						$post_image =  wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'large');
					?>
					<div class="services_items boxes">	
						<div class="inner_box">	
						   <div class="s_item_img">
							   <div class="inner_s_item_img" style="background-image:url('<?php echo $post_image[0]; ?>');"></div>
						   </div>
						   <div class="s_content">
						       <span><?php echo $date = date_i18n( 'F j, Y' ); ?></span>
							   <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							   <p><?php echo wp_trim_words( get_the_content(), 15, '....' );?></p>
							   <div class="continue_btn"><a href="<?php the_permalink(); ?>">continue reading</a></div>
						   </div>
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php echo wpbeginner_numeric_posts_nav(); ?>
				</div>

	

    </div>
</div>



<?php get_footer(); ?>
