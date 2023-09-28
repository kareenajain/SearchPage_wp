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
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/script.js"></script>

  
</body>
</html>
