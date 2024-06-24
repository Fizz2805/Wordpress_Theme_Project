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
    
    
    

   

    <div class="page-heading about-page-heading" id="top" style="background-image: url('<?php echo get_the_post_thumbnail_url() ? esc_url(get_the_post_thumbnail_url()) : get_template_directory_uri() . "/assets/images/about-us-page-heading.jpg"; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>About Our Company</h2>
                    <span>Awesome, clean &amp; creative HTML5 Template</span>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">


        <?php
// The Query
$query = new WP_Query(array(
    'category_name' => 'skills', // Replace with your category slug
    'posts_per_page' => 1, // Number of posts to display
));

// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="left-image">
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-left-image.jpg" alt="Default Image">
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <h4><?php the_title(); ?></h4>
                    <span><?php echo wp_trim_words(get_the_content(), 16, '.'); ?></span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p><?php echo wp_trim_words(get_the_content(), 16, '.'); ?></p>
                    </div>
                    <p><?php the_excerpt(); ?></p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    // no posts found
    echo '<p>No posts found</p>';
}

/* Restore original Post Data */
wp_reset_postdata();
?>


        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Amazing Team</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>

                <?php
    // The Query
    $query = new WP_Query(array(
        'category_name' => 'team', // Replace with your category slug
        'posts_per_page' => 3, // Number of posts to display
    ));

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="col-lg-4">
                <div class="team-item">
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="inner-content">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                        <?php } ?>
                    </div>
                    <div class="down-content">
                        <h4><?php the_title(); ?></h4>
                        <span><?php the_excerpt(); ?></span>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // no posts found
        echo '<p>No posts found</p>';
    }

    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
            

            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>

                <?php
        // The Query
        $query = new WP_Query(array(
            'category_name' => 'ourService', // Replace with your category slug
            'posts_per_page' => 3, // Number of posts to display
        ));

        // The Loop
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" alt="Default Image">
                        <?php } ?>
                    </div>
                </div>
                <?php
            }
        } else {
            // No posts found
            echo '<p>No posts found</p>';
        }

        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
      

            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->


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














<?php get_footer();?>