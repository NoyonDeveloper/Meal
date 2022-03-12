<?php
require_once get_theme_file_path( "/lib/csf/cs-framework.php" );
require_once get_theme_file_path( "/inc/metaboxes/section.php" );
require_once get_theme_file_path( "/inc/metaboxes/page.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-banner.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-featured-recipe.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-gallery.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-chef.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-services.php" );
require_once get_theme_file_path( "/inc/metaboxes/taxonomy-featured.php" );
require_once get_theme_file_path( "/inc/metaboxes/recipe-price.php" );
require_once get_theme_file_path( "/inc/metaboxes/section-testimonails.php" );

define( 'CS_ACTIVE_FRAMEWORK', true ); // default true
define( 'CS_ACTIVE_METABOX', true ); // default true
define( 'CS_ACTIVE_TAXONOMY', true ); // default true
define( 'CS_ACTIVE_SHORTCODE', false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE', false ); // default true

function meal_theme_support() {
 load_theme_textdomain( "meal", get_template_directory() . "/languages" );
 add_theme_support( "title-tag" );
 add_theme_support( "post-thumbnails" );
 add_theme_support( "automaitc-feed-links" );
 add_theme_support( "custom-logo" );
 add_theme_support( "html", array(
  "search-form",
  "comment-form",
  "comment-list",
  "gallery",
  "caption",
 ) );
 register_nav_menu( 'primary', __( 'Main Menu', 'meal' ) );
}

add_action( "after_setup_theme", "meal_theme_support" );

function meal_assets_manegment() {
 wp_enqueue_style( "fonts-googleapis", "//fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" );
 wp_enqueue_style( "bootstrap-css", "//demos.onepagelove.com/html/meal/css/bootstrap.css", null, '1.0' );
 wp_enqueue_style( "animate-css", "//demos.onepagelove.com/html/meal/css/animate.css", null, '1.0' );
 wp_enqueue_style( "carousel-css", "//demos.onepagelove.com/html/meal/css/owl.carousel.min.css", null, '1.0' );
 wp_enqueue_style( "magnific-css", "//demos.onepagelove.com/html/meal/css/magnific-popup.css", null, '1.0' );
 wp_enqueue_style( "aos-css", "//demos.onepagelove.com/html/meal/css/aos.css", null, '1.0' );
 wp_enqueue_style( "datepicker-css", "//demos.onepagelove.com/html/meal/css/bootstrap-datepicker.css", null, '1.0' );
 wp_enqueue_style( "timepicker-css", "//demos.onepagelove.com/html/meal/css/jquery.timepicker.css", null, '1.0' );
 wp_enqueue_style( "ionicons-css", "//demos.onepagelove.com/html/meal/fonts/ionicons/css/ionicons.min.css", null, '1.0' );
 wp_enqueue_style( "awesome-css", "//demos.onepagelove.com/html/meal/fonts/fontawesome/css/font-awesome.min.css", null, '1.0' );
 wp_enqueue_style( "flaticon-css", "//demos.onepagelove.com/html/meal/fonts/flaticon/font/flaticon.css", null, '1.0' );
 wp_enqueue_style( "theme-style-css", "//demos.onepagelove.com/html/meal/css/style.css", null, '1.0' );
 wp_enqueue_style( "style-core", get_stylesheet_uri() );

 wp_enqueue_script( "jquery", "//demos.onepagelove.com/html/meal/js/jquery-3.2.1.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "migrate", "//demos.onepagelove.com/html/meal/js/jquery-migrate-3.0.1.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "popper", "//demos.onepagelove.com/html/meal/js/popper.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "bootstrap-js", "//demos.onepagelove.com/html/meal/js/bootstrap.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "carousel-js", "//demos.onepagelove.com/html/meal/js/owl.carousel.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "waypoints-js", "//demos.onepagelove.com/html/meal/js/jquery.waypoints.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "datepicker-js", "//demos.onepagelove.com/html/meal/js/bootstrap-datepicker.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "timepicker-js", "//demos.onepagelove.com/html/meal/js/jquery.timepicker.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "stellar-js", "//demos.onepagelove.com/html/meal/js/jquery.stellar.min.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "easing-js", "//demos.onepagelove.com/html/meal/js/jquery.easing.1.3.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "aos-js", "//demos.onepagelove.com/html/meal/js/aos.js", array( 'jquery' ), '1.0', true );
 wp_enqueue_script( "google-map-meal", "//maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s" );
 wp_enqueue_script( "main-js-meal", "//demos.onepagelove.com/html/meal/js/main.js", array( 'jquery' ), '1.0', true );

 if ( is_page_template( "page-templates/landing.php" ) ) {
  wp_enqueue_script( "meal-reservation-js", get_template_directory_uri() . "/assets/js/reservation.js", array( 'jquery' ), '1.0', true );
  wp_enqueue_script( "meal-contact-js", get_template_directory_uri() . "/assets/js/contact.js", array( 'jquery' ), '1.0', true );

  $ajaxurl = admin_url( "admin-ajax.php" );
  wp_localize_script( "meal-reservation-js", "mealurl", array( 'ajaxurl' => $ajaxurl ) );
  wp_localize_script( "meal-contact-js", "mealurl", array( 'ajaxurl' => $ajaxurl ) );
 }

 if ( is_page_template( 'ajax.php' ) ) {
  wp_enqueue_script( "meal-ajax-js", get_theme_file_uri( "/assets/js/ajaxtest.js" ), array( 'jquery' ), time(), true );
  $ajaxurl = admin_url( "admin-ajax.php" );
  wp_localize_script( 'meal-ajax-js', 'urls', array( 'ajaxurl' => $ajaxurl ) );
 }

}

add_action( "wp_enqueue_scripts", "meal_assets_manegment" );

function meal_codestar_init() {
 CSFramework_Metabox::instance( array() );
 CSFramework_Taxonomy::instance( array() );

 $settings = array(
  'menu_title'      => __( 'Meal Options', 'meal' ),
  'menu_type'       => 'submenu',
  'menu_parent'     => 'themes.php',
  'menu_slug'       => 'meal_option_panel',
  'framework_title' => __( 'Meal Options', 'meal' ),
  'menu_icon'       => 'dashicon-dashicon',
  'menu_position'   => 20,
  'ajax_save'       => false,
  'show_reset_all'  => true,
 );

 new CSFramework( $settings, meal_get_theme_options() );
}

add_action( "init", "meal_codestar_init" );

function meal_get_theme_options() {
 $options   = array();
 $options[] = array(
  'name'   => 'meal_theme_activations',
  'title'  => __( 'Meal Activation', 'meal' ),
  'icon'   => 'fa fa-heart',
  'fields' => array(
   array(
    'id'    => 'meal_username',
    'type'  => 'text',
    'title' => __( 'User Name', 'meal' ),
   ),
   array(
    'id'    => 'meal_purchase_code',
    'type'  => 'text',
    'title' => __( 'Purchase Code', 'meal' ),
   ),
  ),
 );

 $username     = cs_get_option( 'meal_username' );
 $purches_code = cs_get_option( 'meal_purchase_code' );
 $token        = get_option( 'meal_theme_token' );

 if ( get_option( 'meal_theme_activation' ) == 1 ) {
  $demo_url                                 = "http://localhost/licence/delevery.php?username={$username}&pccode={$purches_code}&token={$token}&file=demo-theme";
  $options[count( $options ) - 1]['fields'][] = array(
   'id'      => 'meal-active',
   'type'    => 'notice',
   'class'   => 'success',
   'content' => "Download <a href='{$demo_url}' target='_blank' >Domo File</a>",
  );
 }

 return $options;
}

//Catergory Name Show Function
function get_recipe_category( $recipe_id ) {
 $terms = wp_get_post_terms( $recipe_id, "category" );

 if ( $terms ) {
  $first_term = array_shift( $terms );
  return $first_term->name;
 }

 return "category";
}

//Reservation Section Start

function meal_ajax_process_reservation() {

 if ( check_ajax_referer( "reservation", "rev" ) ) {
  $name    = sanitize_text_field( $_POST['name'] );
  $email   = sanitize_text_field( $_POST['email'] );
  $phone   = sanitize_text_field( $_POST['phone'] );
  $persons = sanitize_text_field( $_POST['persons'] );
  $date    = sanitize_text_field( $_POST['date'] );
  $time    = sanitize_text_field( $_POST['time'] );

  $data = array(
   'name'    => $name,
   'email'   => $email,
   'phone'   => $phone,
   'persons' => $persons,
   'date'    => $date,
   'time'    => $time,
  );
  print_r( $data );

  $reservation_arguments = array(
   'post_type'   => 'reservation',
   'post_author' => 1,
   'post_date'   => time( 'Y-m-d H:i:s' ),
   'post_status' => 'publish',
   'post_title'  => sprintf( '%s - Reservation for %s Persion on %s - %s Phone %s', $name, $persons, $date . " : " . $time, $email, $phone ),
   'meta_input'  => $data,
  );

  $reservations_check = new WP_Query( array(
   'post_type'   => 'reservation',
   'post_status' => 'publish',
   'meta_query'  => array(
    'relaction'   => 'AND',
    'email_check' => array(
     'key'   => 'email',
     'value' => $email,
    ),
    'date_check'  => array(
     'key'   => 'date',
     'value' => $date,
    ),
    'time_check'  => array(
     'key'   => 'time',
     'value' => $time,
    ),
   ),
  ) );

  if ( $reservations_check->found_posts > 0 ) {
   echo "Duplacted";
  } else {
   $wp_error       = '';
   $reservation_id = wp_insert_post( $reservation_arguments, $wp_error );

   // Transient Check
   $reservation_count = get_transient( 'reser_count' ) ? get_transient( 'reser_count' ) : 0;

// Transient Check End

   if ( !$wp_error ) {
    $reservation_count++;
    set_transient( 'reser_count', $reservation_count, 0 );

    $_name      = explode( " ", $name );
    $order_data = array(
     'first_name' => $_name[0],
     'last_name'  => isset( $_name[1] ) ? $_name[1] : '',
     'email'      => $email,
     'phone'      => $phone,
    );
    $order = wc_create_order();
    $order->set_address( $order_data );
    $order->add_product( wc_get_product( 78 ), 1 );
    $order->set_customer_note( $reservation_id );
    $order->calculate_totals();

    add_post_meta( $reservation_id, 'order_id', $order->get_id() );

    echo $order->get_checkout_payment_url();
   }

  }

 } else {
  echo "Not Allowed";
 }

 die();
}

add_action( "wp_ajax_reservation", "meal_ajax_process_reservation" );
add_action( "wp_ajax_noprev_reservation", "meal_ajax_process_reservation" );
// Reservation Section end

function meal_field_remove( $fields ) {
 // Remove Billing Fields
 unset( $fields['billing']['bulling_company'] );
 unset( $fields['billing']['bulling_address_1'] );
 unset( $fields['billing']['bulling_address_2'] );
 unset( $fields['billing']['bulling_city'] );
 unset( $fields['billing']['bulling_postcode'] );
 unset( $fields['billing']['bulling_country'] );
 unset( $fields['billing']['bulling_state'] );

 // Remove Shipping Fields
 unset( $fields['shipping']['shipping_first_name'] );
 unset( $fields['shipping']['shipping_last_name'] );
 unset( $fields['shipping']['shipping_company'] );
 unset( $fields['shipping']['shipping_address_1'] );
 unset( $fields['shipping']['shipping_address_2'] );
 unset( $fields['shipping']['shipping_city'] );
 unset( $fields['shipping']['shipping_postcode'] );
 unset( $fields['shipping']['shipping_country'] );
 unset( $fields['shipping']['shipping_state'] );

 return $fields;
}

add_filter( "woocommerce_checkout_fields", "meal_field_remove" );

function meal_order_status_porcessing( $order_id ) {
 $order          = wc_get_order( $order_id );
 $reservation_id = $order->get_customer_note();

 if ( $reservation_id ) {
  $reservation = get_post( $reservation_id );
  wp_update_post( array(
   'ID'         => $reservation_id,
   'post_title' => '[paid] -' . $reservation->post_title,
  ) );

  add_post_meta( $reservation_id, 'paid', 1 );
 }

}

add_filter( "woocommerce_order_status_processing", "meal_order_status_porcessing" );

// Reservation Section End

// Transient Notfaction Babul
function meal_menu_class( $menu ) {
 $reservation_count = get_transient( 'reser_count' ) ? get_transient( 'reser_count' ) : 0;

 if ( $reservation_count > 0 ) {
  $menu[4][0] = "Reservation <span class='awaiting-mod'>{$reservation_count}</span>";
 }

 return $menu;
}

add_filter( "add_menu_classes", "meal_menu_class" );

function meal_screen_type( $screen ) {
 $_screen = get_current_screen();

 if ( "edit.php" == $screen && "reservation" == $_screen->post_type ) {
  delete_transient( "reser_count" );
 }

}

add_action( "admin_enqueue_scripts", "meal_screen_type" );

// Transient Notfaction Babul End

// Contact Form Start
function meal_contact_form() {
 $name    = isset( $_POST['name'] ) ? $_POST['name'] : '';
 $email   = isset( $_POST['email'] ) ? $_POST['email'] : '';
 $phone   = isset( $_POST['phone'] ) ? $_POST['phone'] : '';
 $message = isset( $_POST['message'] ) ? $_POST['message'] : '';

 $_message    = printf( "%s \nFrom: %s \nEmail: %s \nPhone: %s", $message, $name, $email, $phone );
 $admin_email = get_option( 'admin_email' );

 wp_mail( $admin_email, __( 'someone traid to contact you', 'meal' ), $_message, "From: {$admin_email}\r\n" );
 die( "Successfull" );
}

add_action( "wp_ajax_contact", "meal_contact_form" );
add_action( "wp_ajax_nopriv_contact", "meal_contact_form" );

// Contact Form End

// Comment Form Working
function meal_comment_form_fields( $fields ) {

//  echo "<pre>";

//  print_r($fields);
 //  echo "</pre>";
 $comments_field = $fields['comment'];
 unset( $fields['comment'] );
 $fields['comment'] = $comments_field;
 unset( $fields['cookies'] );
 return $fields;
}

add_filter( "comment_form_fields", "meal_comment_form_fields" );

function meal_widget_sidebar() {
 register_sidebar( array(
  'name'          => __( 'About Us', 'meal' ),
  'id'            => 'about-us',
  'description'   => __( 'About US Footer', 'meal' ),
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="mb-4">',
  'after_title'   => '</h3>',
 ) );

 register_sidebar( array(
  'name'          => __( 'Lunch Service', 'meal' ),
  'id'            => 'lunch-service',
  'description'   => __( 'Lunch Service Footer', 'meal' ),
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="mb-4">',
  'after_title'   => '</h3>',
 ) );

 register_sidebar( array(
  'name'          => __( 'Dinner Service', 'meal' ),
  'id'            => 'dinner-service',
  'description'   => __( 'Dinner Service Footer', 'meal' ),
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="mb-4">',
  'after_title'   => '</h3>',
 ) );

 register_sidebar( array(
  'name'          => __( 'Copyright Section', 'meal' ),
  'id'            => 'copyright',
  'description'   => __( 'Copyright Footer Section', 'meal' ),
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<p>',
  'after_title'   => '</p>',
 ) );
}

add_action( "widgets_init", "meal_widget_sidebar" );

function meal_ajaxtest() {

 if ( check_ajax_referer( "ajaxtest", "secruity" ) ) {
  $info = $_POST['info'];
  echo strtoupper( $info );

  die();
 }

}

add_action( "wp_ajax_ajaxtest", "meal_ajaxtest" );

function meal_ajaxtest_noprive() {
 $info = $_POST['info'];
 echo strtoupper( "GLOBAL " . $info );

 die();
}

add_action( "wp_ajax_nopriv_ajaxtest", "meal_ajaxtest_noprive" );

function meal_nonce_life() {
 return 20;
}

add_filter( "nonce_life", "meal_nonce_life" );
