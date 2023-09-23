<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<section class="footer">
      <footer class="top-footer footer">
        <div class="top-footer-container container">
          <p><?php the_field("top_footer")?></p>
        </div>
      </footer>

      <hr class="line"></hr>    

      <footer class="bottom-footer footer">
        <div class="bottom-footer-container container">
          <p><?php the_field("bottom_footer")?></p>
        </div>
      </footer>   
    </section>
	
    <?php wp_footer(); ?>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/spscript.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/slick.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/ekko-lightbox.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmp7PGAtdUmMfW7z8BnZg8Ei_-se8C9Bc&callback=initMap" type="text/javascript"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/map.js"></script>
	
  
</body>
</html>
