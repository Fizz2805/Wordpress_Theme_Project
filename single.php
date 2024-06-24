<?php get_header(); ?>

<body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
   
 


<div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Single Post Page</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->



     <section class="section" id="product">
        <div class="container">
            <div class="row">
            <?php
while (have_posts()) {
    the_post(); ?>
                <div class="col-lg-8">
                <div class="left-image">
                <?php 
    if ( has_post_thumbnail() ) { 
        the_post_thumbnail('large'); // You can change the size to 'thumbnail', 'medium', 'large', or a custom size
    } 
    ?>
               <!--  <img src="<php echo get_template_directory_uri(); ?>/assets/images/single-product-01.jpg" alt="">
                <img src="<php echo get_template_directory_uri(); ?>/assets/images/single-product-02.jpg" alt=""> -->

                  
                </div>
              
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                <h2><?php the_title(); ?></h2>
                <!--     <h4>New Green Jacket</h4> -->
                <span class="price"><?php echo get_post_meta(get_the_ID(), 'price_meta_key', true); ?></span> 
                    <!-- <span class="price">$75.00</span> -->
                    <ul class="stars">
                        <?php
                        // Example of dynamically generating stars based on a custom field value
                        $rating = get_post_meta(get_the_ID(), 'rating_meta_key', true);
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<li><i class="fa fa-star"></i></li>';
                        }
                        ?>
                    </ul>
                    <span><?php echo wp_trim_words(get_the_content(), 20, '.'); ?></span>
       <!--              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.</span>  -->
       <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 16, '.'); ?></p>
                    </div>             
       
       
       <!-- <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod.</p>
                    </div> -->
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <!-- <h4>Total: $210.00</h4> -->
                        <h4>Total: <?php echo get_post_meta(get_the_ID(), 'price_meta_key', true); ?></h4> 
                        <div class="main-border-button"><a href="#">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            </div>

            <?php } ?>
        </div>
    </section> 
    <!-- ***** Product Area Ends ***** -->

    <?php get_footer()?>