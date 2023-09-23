<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
	  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/styles.css" rel="stylesheet" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/css.css" rel="stylesheet" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ekko-lightbox.css" rel="stylesheet" />
	  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.theme.default.min.css"  rel="stylesheet" />
	  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/stylesheet.css" rel="stylesheet" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/media.css" rel="stylesheet"/>
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/spstyle.css" rel="stylesheet"/>

<?php wp_head(); ?>

<style>
html {
    margin-top: 0px !important;
}
</style>

</head>

<body <?php body_class(); ?>>

<section class="header">
  <div class="container">
    <div class="header-content  d-flex">
      <div class="logo">
        <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo.png"  alt="logo"></a>
      </div>
      <div class="header-btns gap-4">  
        <div class="e-mail">
            <a href="mailTo:<?php the_field('mail_button') ?>" class="btn btn-outline-danger contact-btn"><?php the_field('mail_button') ?></a>
        </div>
        <div class="contact">
            <a href="tel:<?php the_field('contact_button') ?>" class="btn btn-danger contact-btn"><?php the_field('contact_button') ?></a> 
        </div>
      </div>
      
      <div class="header-btns-icon">
        <div class="e-mail header-icon-border email-icon-circle">
          <a href="mailto:info@perfectdry.co.nz" class="header-icon"><svg class="email-icon" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg></a>
        </div>
        <div class="contact header-icon-border call-icon-circle">
          <a href="tel:0220304004" class="header-icon"><svg class="call-icon" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg></a>    
        </div>
      </div>
    </div>
  </div>    
</section>


