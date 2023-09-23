<?php /*Template Name: search Page*/ ?>


<?php get_header(); ?>

<div class="main" style="background-image:url('<?php the_field('searchbar_bg_image'); ?>');">
        <div class="container content">
            <h1><?php the_field("searchbar_heading")?></h1>
            <div class="searchbar">
                <form class="d-flex search-area" role="search">
                    <input class="form-control me-3 search-box" type="text" placeholder="Search" id="searchInput" autocomplete="off" aria-label="Search">
                    
                    <div class="search-icon">
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







<div class="category-2 container category">

    <?php
    if( have_rows('category_div') ):
    while ( have_rows('category_div') ) : the_row();
    ?>


    <h2><?php the_sub_field('category_heading')?></h2>
    <div class="category-items">




        <?php
        if( have_rows('category_card') ):
        while ( have_rows('category_card') ) : the_row();
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


    <?php
    endwhile;
    endif;
    ?>


</div>




  <!-- 
    <div class="category-3 container category">
        <h2>Category Three</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="category-4 container category">
        <h2>Category Four</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="category-5 container category">
        <h2>Special Category Five</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>

    <div class="category-6 container category">
        <h2>Special Category six</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="category-7 container category">
        <h2>Category seven</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="category-8 container category">
        <h2>Category eight</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="category-9 container category">
        <h2>Special Category nine</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="category-10 container category">
        <h2>Special Category ten</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="category-11 container category">
        <h2>Special Category eleven</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="category-12 container category">
        <h2>Category twelve</h2>
        <div class="category-items">
        
            <div class="card category-card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">C3</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            
        </div>
    </div> -->


<?php get_footer(); ?>