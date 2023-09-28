<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

 

<div class="main eeee" style="background-image:url('http://localhost/Search-Page/wp-content/uploads/2023/09/bg-image-1.jpg');">
        <div class="container content">
            <h1><?php echo get_the_title(); ?></h1>
            
        </div>
    </div>
    <div class="category-2 container category">
    <div class="category-items">
    <?php
        if( have_rows('category_page_item') ):
        while ( have_rows('category_page_item') ) : the_row();
        ?>



    
        <div class="card category-card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"><?php the_sub_field('card_title')?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php the_sub_field('card_subtitle')?></h6>
            <p class="card-text"><?php the_sub_field('card_description')?></p>
            </div>
        </div>   


        <?php
        endwhile;
        endif;
        ?>

    </div>
    </div>
        <?php get_footer(); ?>