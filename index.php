<?php get_header(); ?>

<style>
.custom-link {
    color: black;
    text-decoration: none;
}

.custom-link:hover {
    color: #aaa;
    text-decoration: underline; /* Optional */
}
</style>

    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> 
    
<!--     <script>
        // Wait for the entire page to load
        window.onload = function() {
            // Select the preloader element
            var preloader = document.getElementById('preloader');
            // Hide the preloader
            preloader.style.display = 'none';
        };
    </script> -->

    <!-- ***** Preloader End ***** -->
    
    
  

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
            <?php
$post_id = 123;
$post = get_post($post_id);
?>
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                         <div class="inner-content">
                          <h4><?php echo get_the_title($post_id); ?></h4>
                           <span><?php echo get_the_excerpt($post_id); ?></span>
                           <div class="main-border-button">
                               <a href="<?php echo get_permalink($post_id); ?>">Purchase Now! </a>
                          </div>
                        </div>

                        <?php
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, 'large', array('alt' => get_the_title($post_id)));
            } 
            ?>
                           <!--  <img src="<php echo get_template_directory_uri(); ?>/assets/images/left-banner-image.jpg" alt="Left Banner Image"> -->
                            <!-- <img src="assets/images/left-banner-image.jpg" alt=""> -->
                        </div>
                    </div>
                </div>



              

                <?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,  // Number of posts to display
    'category_name' => 'sections',  // Replace with your category slug
);

$custom_query = new WP_Query($args);
?>
<div class="col-lg-6">
    <div class="right-content">
        <div class="row">
            <?php if ($custom_query->have_posts()) : ?>
                <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <div class="col-lg-6">
                        <div class="right-first-image">
                            <div class="thumb">
                                <div class="inner-content">
                                    <h4><?php the_title(); ?></h4>
                                    <span><?php echo get_the_excerpt(); ?></span>
                                </div>
                                <div class="hover-content">
                                    <div class="inner">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php echo get_the_content(); ?></p>
                                        <div class="main-border-button">
                                            <a href="<?php the_permalink(); ?>">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e('No posts found.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
   
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Men's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
            
                          <div class="owl-men-item owl-carousel" >


                         
    <?php
    // Define the query arguments
    $args = array(
        'post_type' => 'post',  // Adjust post type if needed
        'posts_per_page' => 4,  // Number of posts to display
        'category_name' => 'men Section',  // Category slug or name
    );

    // Instantiate a new query
    $query = new WP_Query($args);

    // Check if there are posts
    if ($query->have_posts()) :
        // Loop through the posts
        while ($query->have_posts()) :
            $query->the_post();
            ?>
            <div class="item">
                <div class="thumb">
                    <div class="hover-content">
                        <ul>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-star"></i></a></li>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>">
                </div>
                <div class="down-content">
        <!--         <h4><a href="<php the_permalink(); ?>"><php the_title(); ?></a></h4> -->
                <h4><a href="<?php the_permalink(); ?>" class="custom-link"><?php the_title(); ?></a></h4>
                    <!-- <h4><php the_title(); ?></h4> -->
                   <!--  this work could be done without creating custom fields. we can get the get_the_excerpt
                    on the place of price meta key value and could dfine static value 5 in place of rating.
                    using this approach i can change stars value as desired for each post separately. -->
                    <!-- <span><php echo get_the_excerpt(); ?></span> -->
                     <span><?php echo get_post_meta(get_the_ID(), 'price_meta_key', true); ?></span> 
                    <ul class="stars">
                        <?php
                        // Example of dynamically generating stars based on a custom field value
                        $rating = get_post_meta(get_the_ID(), 'rating_meta_key', true);
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<li><i class="fa fa-star"></i></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        <?php
        endwhile;
        // Restore original post data
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>





                        </div>


                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Women's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">


                        <?php
    // Define the query arguments
    $args = array(
        'post_type' => 'post',  // Adjust post type if needed
        'posts_per_page' => 4,  // Number of posts to display
        'category_name' => 'Women section',  // Category slug or name
    );

    // Instantiate a new query
    $queryWomen = new WP_Query($args);

    // Check if there are posts
    if ($queryWomen->have_posts()) :
        // Loop through the posts
        while ($queryWomen->have_posts()) :
            $queryWomen->the_post();
            ?>
            <div class="item">
                <div class="thumb">
                    <div class="hover-content">
                        <ul>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-star"></i></a></li>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>">
                </div>
                <div class="down-content">
               <!--      <h4><php the_title(); ?></h4> -->
               <h4><a href="<?php the_permalink(); ?>" class="custom-link"><?php the_title(); ?></a></h4>
                   <!--  this work could be done without creating custom fields. we can get the get_the_excerpt
                    on the place of price meta key value and could dfine static value 5 in place of rating.
                    using this approach i can change stars value as desired for each post separately. -->
                    <!-- <span><php echo get_the_excerpt(); ?></span> -->
                     <span><?php echo get_post_meta(get_the_ID(), 'price_meta_key', true); ?></span> 
                    <ul class="stars">
                        <?php
                        // Example of dynamically generating stars based on a custom field value
                        $rating = get_post_meta(get_the_ID(), 'rating_meta_key', true);
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<li><i class="fa fa-star"></i></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        <?php
        endwhile;
        // Restore original post data
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>



                         


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kid's Latest</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">


                        <?php
    // Define the query arguments
    $args = array(
        'post_type' => 'post',  // Adjust post type if needed
        'posts_per_page' => 4,  // Number of posts to display
        'category_name' => 'Kids section',  // Category slug or name
    );

    // Instantiate a new query
    $queryKids = new WP_Query($args);

    // Check if there are posts
    if ($queryKids->have_posts()) :
        // Loop through the posts
        while ($queryKids->have_posts()) :
            $queryKids->the_post();
            ?>
            <div class="item">
                <div class="thumb">
                    <div class="hover-content">
                        <ul>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-star"></i></a></li>
                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>">
                </div>
                <div class="down-content">
            <!--         <h4><php the_title(); ?></h4> -->
            <h4><a href="<?php the_permalink(); ?>" class="custom-link"><?php the_title(); ?></a></h4>
                    <!-- <span><php echo get_the_excerpt(); ?></span> -->
                     <span><?php echo get_post_meta(get_the_ID(), 'price_meta_key', true); ?></span> 
                    <ul class="stars">
                        <?php
                        // Example of dynamically generating stars based on a custom field value
                        $rating = get_post_meta(get_the_ID(), 'rating_meta_key', true);
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<li><i class="fa fa-star"></i></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        <?php
        endwhile;
        // Restore original post data
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>






                           



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
                        <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                        </div>
                        <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
                        <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
                        <div class="main-border-button">
                            <a href="products.html">Discover More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Leather Bags</h4>
                                    <span>Latest Collection</span>
                                </div>
                            </div>
                          <!--   <div class="col-lg-6">
                                <div class="first-image">
                                <img src="<php echo get_template_directory_uri(); ?>/assets/images/explore-image-01.jpg" alt="Left Banner Image">
                                
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                <img src="<php echo get_template_directory_uri(); ?>/assets/images/explore-image-02.jpg" alt="Left Banner Image">
                              
                                </div>
                            </div> -->
                            
    <?php
    // Arguments to fetch 2 posts from a specific category (replace 'your-category-slug' with your category slug)
    $args = array(
        'category_name' => 'explore',
        'posts_per_page' => 2
    );
    
    // Custom query
    $queryExplore = new WP_Query($args);

    // Check if the query returns any posts
    if ( $queryExplore->have_posts()) :
        // Loop through the posts
        while ( $queryExplore->have_posts()) :  $queryExplore->the_post();
            ?>
            <div class="col-lg-6">
                <div class="first-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <!-- Display the post's featured image -->
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                   <!--  <div class="inner-content">
                        <h4><php the_title(); ?></h4>
                        <span><php the_excerpt(); ?></span>
                    </div> -->
                </div>
            </div>
            <?php
        endwhile;
        // Reset post data
        wp_reset_postdata();
    else :
        // If no posts are found
        echo '<p>No posts found.</p>';
    endif;
    ?>




                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Different Types</h4>
                                    <span>Over 304 Products</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Social Media</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">



        <div class="row images">
    <?php
    // Arguments to fetch 6 posts from a specific category
    $args = array(
        'category_name' => 'social media',
        'posts_per_page' => 6
    );

    // Custom query
    $query = new WP_Query($args);

    // Check if the query returns any posts
    if ($query->have_posts()) :
        // Loop through the posts
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="<?php the_permalink(); ?>">
                            <h6><?php the_title(); ?></h6>
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

         

        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->


    

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">


                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                
            
                <div class="col-lg-4">
    <div class="row">
        <div class="col-6">
            <ul>
                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
            </ul>
        </div>
        <div class="col-6">
            <ul>
                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
            </ul>
        </div>
        <div class="col-6">
            <ul>
                <li>Phone:<br><span>010-020-0340</span></li>
            </ul>
        </div>
        <div class="col-6">
            <ul>
                <li>Email:<br><span>info@company.com</span></li>
            </ul>
        </div>
        <div class="col-6">
            <ul>
                <li>Office Location:<br><span>North Miami Beach</span></li>
            </ul>
        </div>
        <div class="col-6">
            <ul>
                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
            </ul>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
    




   <?php get_footer(); ?>