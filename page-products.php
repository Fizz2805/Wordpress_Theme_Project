<?php get_header()?>
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
    <!-- ***** Preloader End ***** -->
    
    
    

    <!-- ***** Main Banner Area Start ***** -->

    <div class="page-heading" id="top" style="background-image: url('<?php echo get_the_post_thumbnail_url() ? esc_url(get_the_post_thumbnail_url()) : get_template_directory_uri() . "/assets/images/products-page-heading.jpg"; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Check Our Products</h2>
                    <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
            
             <!-- The Query to fetch posts from ALL categories. just add ? before executing this code-->
      <!--       <php
 
    $args = array(
        'category_name' => 'men Section, women Section,Kids section', // Replace with your category slugs
        'posts_per_page' => 9, // Number of posts to display
    );
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <div class="hover-content">
                            <ul>
                                <li><a href="<php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <php if (has_post_thumbnail()) { ?>
                            <img src="<php echo get_the_post_thumbnail_url(); ?>" alt="<php the_title(); ?>">
                        <php } else { ?>
                            <img src="<php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                        <php } ?>
                    </div>
                    <div class="down-content">
                        <h4><php the_title(); ?></h4>
                        <span><php echo get_post_meta(get_the_ID(), 'price_meta_key', true); ?></span> 
                        <ul class="stars">
                        <php
                        // Example of dynamically generating stars based on a custom field value
                        $rating = get_post_meta(get_the_ID(), 'rating_meta_key', true);
                        for ($i = 0; $i < $rating; $i++) {
                            echo '<li><i class="fa fa-star"></i></li>';
                        }
                        ?>
                    </ul>
                    </div>
                </div>
            </div>
            <php
        }
    } else {
   
        echo '<p>No posts found</p>';
    }

   
    wp_reset_postdata();
    ?>
 -->


            <!-- MEN PRODUCTS -->

            <?php
    // Define the category you want to fetch posts from
    $category_slug = 'category-slug'; // Replace with your category slug

    // The Query to fetch 3 posts from the specified category
    $args = array(
        'post_type' => 'post',  // Adjust post type if needed
        'posts_per_page' => 3,  // Number of posts to display
        'category_name' => 'men Section',  // Category slug or name
    );
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <div class="hover-content">
                            <ul>
                                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                        <?php } ?>
                    </div>
                    <div class="down-content">
                    <h4><a href="<?php the_permalink(); ?>" class="custom-link"><?php the_title(); ?></a></h4>
                        <!-- <h4><php the_title(); ?></h4> -->
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

              
    <!-- WOMEN PRODUCTS -->

    <?php
   
 

    // The Query to fetch 3 posts from the specified category
    $args = array(
        'post_type' => 'post',  // Adjust post type if needed
        'posts_per_page' => 3,  // Number of posts to display
        'category_name' => 'women Section',  // Category slug or name
    );
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <div class="hover-content">
                            <ul>
                                <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                        <?php } ?>
                    </div>
                    <div class="down-content">
                    <h4><a href="<?php the_permalink(); ?>" class="custom-link"><?php the_title(); ?></a></h4>
                      <!--   <h4><php the_title(); ?></h4> -->
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

               


  <!-- KIDS PRODUCTS -->

  <?php
   
 

   // The Query to fetch 3 posts from the specified category
   $args = array(
       'post_type' => 'post',  // Adjust post type if needed
       'posts_per_page' => 3,  // Number of posts to display
       'category_name' => 'Kids section',  // Category slug or name
   );
   $query = new WP_Query($args);

   // The Loop
   if ($query->have_posts()) {
       while ($query->have_posts()) {
           $query->the_post();
           ?>
           <div class="col-lg-4">
               <div class="item">
                   <div class="thumb">
                       <div class="hover-content">
                           <ul>
                               <li><a href="<?php the_permalink(); ?>"><i class="fa fa-eye"></i></a></li>
                               <li><a href="#"><i class="fa fa-star"></i></a></li>
                               <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                           </ul>
                       </div>
                       <?php if (has_post_thumbnail()) { ?>
                           <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                       <?php } else { ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                       <?php } ?>
                   </div>
                   <div class="down-content">

                   <h4><a href="<?php the_permalink(); ?>" class="custom-link"><?php the_title(); ?></a></h4>
             <!--           <h4><php the_title(); ?></h4> -->
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
                
 




                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    





















<?php get_footer()?>