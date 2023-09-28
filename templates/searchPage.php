<?php /*Template Name: search Page*/ ?>


<?php get_header(); ?>

<div class="main" style="background-image:url('<?php the_field('searchbar_bg_image'); ?>');">
    <div class="container content">
        <h1><?php the_field("searchbar_heading")?></h1>
        <div class="searchbar container">
            <div class="searchbar-content">
                <form class="d-flex search-area" role="search">
                    <input class="form-control me-3 search-box" type="text" placeholder="Search" id="searchInput" autocomplete="off" aria-label="Search">
                    
                    <div class="search-icon" id="search-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                        </svg>
                    </div>
                    
                </form>
                <div class="dropdownMenu">
                    <ul id="suggestionList" class="suggestionList listContainer dropdown"></ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$args = array('post_type' => 'project',   'posts_per_page' => -1, 'order' =>'ASC') ;
$projects = new WP_Query($args);
while($projects->have_posts()) : $projects->the_post(); 
?>
    <div class="category-2 container category">
        <a href="<?php the_permalink(); ?>"><h2><?php echo get_the_title(); ?></h2></a>
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
                            
                            
<?php endwhile; wp_reset_postdata(); ?>
            

    

<?php get_footer(); ?>