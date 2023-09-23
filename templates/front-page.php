<?php /*Template Name: Homepage*/ ?>


<?php get_header(); ?>


<!-- banner section -->
<section class="banner" id="banner-section" style="background-image:url('<?php the_field('banner_image'); ?>');">
    <div class="container">
        <div class="banner-content row">
            <div class="banner-text col-lg-7 col-md-6 col-sm-12">             
                <h1 class="prata"><?php the_field('banner_title') ?></h1>
                <p><?php the_field('banner_description') ?></p>
                <div class="request-btn">
                    <a href="#banner" class="red-btn"><?php the_field('banner_button_text') ?></a>
                </div>                    
            </div>
            <div class="form-container col-lg-5 col-md-6 col-sm-12">
                <div class="form-content">
                <h4><?php the_field('banner_form') ?></h4>
            <?php echo do_shortcode('[contact-form-7 id="6878957" title="Untitled"]') ?>          
                </div>
            </div>  
        </div>
    </div>
</section>

<!-- about section -->
<section class="about">
    <div class="container container-max">
        <div class="content row">
            <div class="about-img section-img col-md-6">
                <img src="<?php the_field('about_image'); ?>" class="content-img" alt="image-of-a-person">
            </div>
            <div class="about-text col-md-6">
                <h1 class="prata"><?php the_field('about_title') ?></h1>
                <div class="about-text-paragraph paragraph">
                    <p><?php the_field('about_description') ?></p>
                </div>
                <div class="request-btn">
                    <a href="#banner-section" class="red-btn"><?php the_field('about_button_text') ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-min">
        <div class="content-heading">
            <h1 class="prata"><?php the_field('about_title') ?></h1>
        </div>
        <div class="container-min-content">
            <div class="about-img section-img">
                <img src="<?php the_field('about_image'); ?>" class="content-img" alt="image-of-a-person"> 
            </div>

            <div class="content-text">
                <div class="content-text-paragraph">
                    <p><?php the_field('about_description') ?></p>
                </div>
            </div>  
            <div class="request-btn">
                <a href="#banner-section" class="red-btn"><?php the_field('about_button_text') ?></a>
            </div>
        </div>
    </div>


</section>

<!-- service section -->

<section class="service">
    <div class="container">
        <div class="content">
            <div class="service-text">
                <!-- <h1 class="prata">Carpet Cleaning Services Includes</h1> -->
                <h1 class="prata"><?php the_field('service_title') ?></h1>
                <p class="paragraph"><?php the_field('service_description') ?></p>
            </div>
          
            <div class="owl-carousel owl-theme first-carousel" >
                <?php
                    if( have_rows('service_carousel') ):
                    while ( have_rows('service_carousel') ) : the_row();
                ?>

                <div class="item-content">
                    <img class="item-img" src="<?php the_sub_field('service_carousel_image') ?>" alt="slide-item image cap">
                    <div class="item-data-container">
                        <div class="item-data">
                            <h5 class="item-title"><?php the_sub_field('service_carousel_title') ?></h5>
                            <p class="item-text"><?php the_sub_field('service_carousel_description') ?></p>
                            <div class="readmore">
                                <a href="<?php the_sub_field('service_carousel_button_link') ?>" class="read-more"><?php the_sub_field('service_carousel_button_text') ?></a>
                                <span class="right-arrow">&#8594</span>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                endwhile;
                else :
                    // no rows found
                endif;
                ?>

            </div>  

            <div><button class="red-btn"><?php the_field('service_button_text') ?></button></div>
        </div>
    </div>
</section>

<!-- choose us section -->

<section class="choose-us">
    <div class="container container-max">
        <!-- <span class="c1">
        <img src="./public/assets/images/Rectangle 41.png" alt="span-vector">
        </span>
        <span class="c2">
        <img src="./public/assets/images/Vector 2.png" alt="span-vector">
        </span>
        <span class="c3">
        <img src="./public/assets/images/Rectangle 42.png" alt="span-vector">
        </span> -->
        <div class="content row">
            <div class="choose-us-img section-img col-md-6">
                <img src="<?php the_field('choose_us_image'); ?>" class="content-img" alt="close-up">
            </div>
            <div class="choose-us-text col-md-6">
                <h1 class="prata"><?php the_field('choose_us_title') ?></h1>
                <div class="choose-us-text-paragraph">
                    <p class="paragraph"><?php the_field('choose_us_description') ?></p>
                </div>
                
                    <div class="choose-us-list">
                        <ul class="choose-us-points">
                            <li><?php the_field('choose_us_item1') ?></li>
                            <li><?php the_field('choose_us_item2') ?></li>
                            <li><?php the_field('choose_us_item3') ?></li>
                        </ul>
                    </div>
               
                <?php if( get_field('choose_btn_text') ) : ?>    
                    <div class="request-btn">
                        <a href="#banner-section" class="red-btn"><?php the_field('choose_btn_text'); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container container-min">
        <div class="content-heading">
            <h1 class="prata"><?php the_field('choose_us_title') ?></h1>
        </div>
        <div class="container-min-content">
            <div class="about-img section-img">
                <img src="<?php the_field('choose_us_image'); ?>" class="content-img" alt="close-up">
            </div>
            <div class="content-text">
                <div class="content-text-paragraph">
                    <p class="paragraph"><?php the_field('choose_us_description') ?></p>
                </div>
                <div class="choose-us-list-container">
                <div class="choose-us-list">
                    <ul class="choose-us-points">
                        <li><?php the_field('choose_us_item1') ?></li>
                        <li><?php the_field('choose_us_item2') ?></li>
                        <li><?php the_field('choose_us_item3') ?></li>
                    </ul>
                </div>
            </div>
            </div>  
            <div class="request-btn">
                <a href="#banner-section" class="red-btn"><?php the_field('choose_btn_text') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- display ad -->

<section class="display-ad">
    <div class="container">
        <div class="ad-content d-flex">
            <div class="ad-text">
                <h4 class="lato"><?php the_field('display_title') ?></h4>
                <p class="lato paragraph"><?php the_field('display_description') ?></p>
            </div>
            <div class="vector">
                <img src="<?php the_field('display_ad')?>" alt="span-vector">
            </div>
            <div class="request-button">
               <a href="#banner-section" class="white-btn"><?php the_field('display_button_text') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->

<section class="gallery">
    <div class="container">
    <!-- <span class="g1">
        <img src="./public/assets/images/Rectangle 45.png" alt="span-vector">
    </span> -->
    <div class="gallery-content content">
        <div class="gallery-text">
            <h1 class="prata"><?php the_field('gallery_title') ?></h1>
        </div>
        <div class="gallery-images">

            <?php
                if( have_rows('gallery_images') ):
                while ( have_rows('gallery_images') ) : the_row();
            ?>
                <div class="gallery-item">
                    <img src="<?php the_sub_field('gallery_item') ?>" alt="gallery-item">
                    <div class="overlay">
                        <p><?php the_sub_field('gallery_item_text') ?></p>
                    </div>
                </div>

                <?php
                endwhile;
            else :
                // no rows found
            endif;
            ?>
        </div>

        
        <div>
            <button class="red-btn"><?php the_field('gallery_button_text') ?></button>
        </div>
    </div>
</section>

<section class="stories">
    <div class="container">

        <!-- <span class="s1">
          <img src="./public/assets/images/Rectangle 43.png" alt="span-vector">
        </span>
        <span class="s2">
          <img src="./public/assets/images/Rectangle 44.png" alt="span-vector">
        </span>
        <span class="s3">
          <img src="./public/assets/images/Vector 3.png" alt="span-vector">
        </span> -->


        <div class="content">
            <div class="stories-text">
                <h1 class="prata"><?php the_field("customer_title")?></h1>
                <p class="paragraph"><?php the_field("customer_description")?></p>
            </div>
            <div class="second-carousel owl-carousel owl-theme" id="myCarousel">
            <?php
                if( have_rows('customer_carousel') ):
                while ( have_rows('customer_carousel') ) : the_row();
            ?>

                <div class="story-content-container">
                    <div class="story-content">
                        <img class="item-img" src="<?php the_sub_field('customer_carousel_image') ?>" style="height: 86px; width: 86px; margin-bottom: 17px;"  alt="slide-item image cap">
                        <div class="story-data">
                            <div class="story-title">
                                <h5 class="story-heading"><?php the_sub_field('customer_carousel_title') ?></h5>
                                <p class="story-subheading"><?php the_sub_field('customer_carousel_sub_title') ?></p>
                            </div>
                            <p class="story-text"><?php the_sub_field('customer_carousel_description') ?></p>
                        </div>
                    </div>
                </div>

                <?php
                endwhile;
            else :
                // no rows found
            endif;
            ?>
            

                
            </div>
        </div>
    </div>
</section>        

<!-- Location -->

<section class="location">
    <iframe src="<?php the_field('location_link') ?>" height="100%" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<?php get_footer(); ?>