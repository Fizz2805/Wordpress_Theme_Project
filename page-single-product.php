<?php get_header()?>
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
    
    
   

    <!-- ***** Main Banner Area Start ***** -->

    <div class="page-heading" id="top" style="background-image: url('<?php echo get_the_post_thumbnail_url() ? esc_url(get_the_post_thumbnail_url()) : get_template_directory_uri() . "/assets/images/products-page-heading.jpg"; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                <h2>Single Product Page</h2>
                <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                </div>
            </div>
        </div>
    </div>
</div>

  
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->



    <section class="section" id="product">
    <div class="container">
        <div class="row">
        <?php
    // Define the category you want to fetch posts from
    $category_slug = 'category-slug'; // Replace with your category slug

    // The Query to fetch 3 posts from the specified category
    $args = array(
        'post_type' => 'post',  // Adjust post type if needed
        'posts_per_page' => 2,  // Number of posts to display
        'category_name' => 'single product',  // Category slug or name
    );
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>



            <div class="col-lg-8">
                <div class="left-images">
                    <?php
                    // Get first featured image
                    if (has_post_thumbnail()) {
                        echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'large') . '" alt="">';
                    }

                    // Get second image from custom field
                    $second_image_id = get_post_meta(get_the_ID(), 'second_image_id', true);
                    if (!empty($second_image_id)) {
                        echo '<img src="' . wp_get_attachment_url($second_image_id) . '" alt="">';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?php the_title(); ?></h4>
                    <span class="price"><?php echo get_post_meta(get_the_ID(), 'price_meta_key', true); ?></span> 
                    <ul class="stars">
                        <?php
                        // Example of dynamically generating stars based on a custom field value
                        $rating = get_post_meta(get_the_ID(), 'rating_meta_key', true);
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<li><i class="fa fa-star"></i></li>';
                        }
                        ?>
                    </ul>
                    <span><?php the_content(); ?></span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: $210.00</h4>
                        <div class="main-border-button"><a href="#">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
    } else {
        // No posts found
        echo '<p>No posts found</p>';
    }
    ?>

        </div>
    </div>
</section>


















  
<?php get_footer()?>