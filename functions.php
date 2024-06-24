<?php
function my_theme_enqueue_styles() {
    // Main theme stylesheet
    wp_enqueue_style( 'my_theme_style', get_stylesheet_uri() );

    // Additional stylesheets
   wp_enqueue_style( 'my_bootstrap_style', get_theme_file_uri('/assets/css/bootstrap.min.css') );
   wp_enqueue_style( 'my_slider_style', get_theme_file_uri('/assets/css/flex-slider.css') );
    wp_enqueue_style( 'my_font_style', get_theme_file_uri('/assets/css/font-awesome.css') );
    wp_enqueue_style( 'my_lightbox_style', get_theme_file_uri('/assets/css/lightbox.css') );
     wp_enqueue_style( 'my_carousel_style', get_theme_file_uri('/assets/css/owl-carousel.css') );
     
   wp_enqueue_style( 'my_template_style', get_theme_file_uri('/assets/css/templatemo-hexashop.css') ); 

//ADDING JAVASCRIPTS FILES


    // Enqueue scripts
    wp_enqueue_script( 'jquery' ); // Make sure jQuery is enqueued
    wp_enqueue_script( 'my_custom_script10', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script13', get_theme_file_uri('/assets/js/scrollreveal.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script3', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script1', get_theme_file_uri('/assets/js/accordions.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script2', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script4', get_theme_file_uri('/assets/js/datepicker.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script5', get_theme_file_uri('/assets/js/imgfix.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script6', get_theme_file_uri('/assets/js/isotope.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script7', get_theme_file_uri('/assets/js/jquery-2.1.0.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script8', get_theme_file_uri('/assets/js/jquery.counterup.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script9', get_theme_file_uri('/assets/js/lightbox.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script10', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script11', get_theme_file_uri('/assets/js/popper.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script12', get_theme_file_uri('/assets/js/quantity.js'), array('jquery'), null, true );

    wp_enqueue_script( 'my_custom_script14', get_theme_file_uri('/assets/js/slick.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script15', get_theme_file_uri('/assets/js/waypoints.min.js'), array('jquery'), null, true );
    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array('jquery'), '1.0', true);


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function enqueue_custom_fonts() {
    wp_enqueue_style( 'custom-fonts', get_template_directory_uri() . '/assets/css/font-awesome.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_fonts' );

//to add featured image in wordpress
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

// this functio is to register menu in our theme 
function register_my_menu() {
    register_nav_menu('primary', __('Primary Menu', 'mytheme'));
  }
  add_action('after_setup_theme', 'register_my_menu');


  function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');


function custom_add_custom_fields() {
    add_meta_box(
        'custom_fields_section',
        'Custom Fields',
        'custom_fields_callback',
        'post',  // Change 'post' to 'page' if adding custom fields to pages
        'normal',
        'default'
    );
}

function custom_fields_callback($post) {
    wp_nonce_field(basename(__FILE__), 'custom_fields_nonce');
    $price_value = get_post_meta($post->ID, 'price_meta_key', true);
    $rating_value = get_post_meta($post->ID, 'rating_meta_key', true);
    ?>
    <p>
        <label for="price_field">Price:</label><br>
        <input type="text" id="price_field" name="price_field" value="<?php echo esc_attr($price_value); ?>">
    </p>
    <p>
        <label for="rating_field">Rating:</label><br>
        <input type="number" id="rating_field" name="rating_field" min="1" max="5" value="<?php echo esc_attr($rating_value); ?>">
    </p>
    <?php
}

function custom_save_custom_fields($post_id) {
    if (!isset($_POST['custom_fields_nonce']) || !wp_verify_nonce($_POST['custom_fields_nonce'], basename(__FILE__))) {
        return $post_id;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    if ('post' != $_POST['post_type']) {
        return $post_id;
    }

    if (isset($_POST['price_field'])) {
        update_post_meta($post_id, 'price_meta_key', sanitize_text_field($_POST['price_field']));
    }
    if (isset($_POST['rating_field'])) {
        update_post_meta($post_id, 'rating_meta_key', sanitize_text_field($_POST['rating_field']));
    }
}

add_action('add_meta_boxes', 'custom_add_custom_fields');
add_action('save_post', 'custom_save_custom_fields');


//For single prod page to add A SECOND IMAGE IN ASINGLE POST. SO  THAT ONLY ONE CONTENT IS FETCHED



// Add custom meta box for second image
function custom_product_meta_box() {
    add_meta_box(
        'custom-product-meta',
        'Additional Images',
        'custom_product_meta_box_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'custom_product_meta_box');

// Callback function to display the meta box content
function custom_product_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('custom_product_meta_box_nonce', 'custom_product_meta_box_nonce');

    // Get saved second image ID
    $second_image_id = get_post_meta($post->ID, 'second_image_id', true);

    // Output the field
    ?>
    <p>
        <label for="second-image-id">Second Image:</label><br>
        <input type="button" id="upload-second-image-button" class="button" value="Upload Image">
        <input type="hidden" id="second-image-id" name="second_image_id" value="<?php echo esc_attr($second_image_id); ?>">
        <div id="second-image-preview">
            <?php if ($second_image_id) echo wp_get_attachment_image($second_image_id, 'thumbnail'); ?>
        </div>
    </p>
    <?php
}

// Save custom meta box data
function save_custom_product_meta($post_id) {
    // Check if nonce is set
    if (!isset($_POST['custom_product_meta_box_nonce'])) {
        return $post_id;
    }

    // Verify nonce
    if (!wp_verify_nonce($_POST['custom_product_meta_box_nonce'], 'custom_product_meta_box_nonce')) {
        return $post_id;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // Check if the current user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Update or save second image ID
    if (isset($_POST['second_image_id'])) {
        update_post_meta($post_id, 'second_image_id', sanitize_text_field($_POST['second_image_id']));
    }
}
add_action('save_post', 'save_custom_product_meta');





// Enqueue scripts and styles for image upload
function enqueue_custom_scripts() {
    wp_enqueue_media();
    wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/js/custom-admin.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'enqueue_custom_scripts');

// JavaScript for handling image upload
function custom_admin_script() {
    ?>
    <script>
    jQuery(document).ready(function($){
        // Handle second image upload
        $('#upload-second-image-button').click(function(e) {
            e.preventDefault();
            var image = wp.media({ 
                title: 'Upload Image',
                multiple: false
            }).open().on('select', function(e){
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                var image_id = uploaded_image.toJSON().id;
                $('#second-image-id').val(image_id);
                $('#second-image-preview').html('<img src="' + image_url + '" style="max-width:100px;">');
            });
        });
    });
    </script>
    <?php
}
add_action('admin_footer', 'custom_admin_script');

// SECOND IMAGE CUSTOM BOX CODE ENDS HERE




?>
