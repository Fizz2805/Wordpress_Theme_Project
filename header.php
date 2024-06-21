<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> -->

    <title>Hexashop Ecommerce HTML CSS Template</title>

<?php wp_head(); ?>
    <!-- Additional CSS Files -->
   <!--  <link rel="stylesheet" type="text/css" href="wp-content/themes/hexashopWS/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css"> -->
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    bhggbh
<?php
  wp_head();
?>
<!--       ***** Header Area Start *****
      <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <img src="/assets/images/logo.png" alt="Left Banner Image">

    wp_nav_menu(array(
    'theme_location' => 'primary',
    'container' => 'nav',
    'container_class' => 'main-menu',
    'menu_class' => 'nav-menu',
  ));


                  
                    
                </div>
            </div>
        </div>
    </header> -->

    <!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <div class="header-content">
          <img style="margin-top: 30px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="header-logo">
          <?php

class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = null ) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"sub-menu\">\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
      $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
      $class_names = ' class="' . esc_attr($class_names) . '"';

      if (in_array('menu-item-has-children', $classes)) {
          $class_names = ' class="has-dropdown ' . esc_attr($class_names) . '"';
      }

      $output .= $indent . '<li' . $class_names .'>';

      $atts = array();
      $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
      $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
      $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
      $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

      $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

      $attributes = '';
      foreach ( $atts as $attr => $value ) {
          if ( ! empty( $value ) ) {
              $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
              $attributes .= ' ' . $attr . '="' . $value . '"';
          }
      }

      $title = apply_filters('the_title', $item->title, $item->ID);

      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'>';
      $item_output .= $args->link_before . $title . $args->link_after;

      if (in_array('menu-item-has-children', $classes)) {
          $item_output .= ' <i class="fas fa-angle-down"></i>';
      }

      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}


            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => 'nav',
              'container_class' => 'main-menu',
              'menu_class' => 'nav-menu',
              'walker' => new Walker_Nav_Menu_Dropdown()
            ));
          ?>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->

