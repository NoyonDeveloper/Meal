<?php
/**
* Plugin Name:       Meal Companion
* Plugin URI:        webproogrammer@gmail.com
* Description:       Meal Companion Plugin for Meal Theme
* Version:           1.0.0
* Requires at least: 5.2
* Requires PHP:      7.2
* Author:            Noyon Hossain
* Author URI:        webproogrammer@gmail.com
* License:           GPL v2 or later
* License URI:       webproogrammer@gmail.com
* Text Domain:       meal-companion
* Domain Path:       /languages
*/

function meal_companion_plugin_manegment(){
    load_plugin_textdomain("meal-companion", false, dirname(__FILE__). "/languages");
}
add_action("plugins_loaded", "meal_companion_plugin_manegment");


function meal_companion_plugin_maneg_thmee(){

    /**
     * Post Type: Section.
     */

    $labels = [
        "name" => __("Section", "meal"),
        "singular_name" => __("Sections", "meal"),
    ];

    $args = [
        "label" => __("Section", "meal"),
        "labels" => $labels,
        "description" => "",
        "public" => false,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "section", "with_front" => true],
        "query_var" => true,
        "menu_position" => 5,
        "menu_icon" => "dashicons-media-document",
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("section", $args);

    /**
     * Post Type: Recipes.
     */

    $labels = [
        "name" => __("Reservation", "meal"),
        "singular_name" => __("Reservations", "meal"),
    ];

    $args = [
        "label" => __("Reservation", "meal"),
        "labels" => $labels,
        "description" => "",
        "public" => false,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "reservation", "with_front" => true],
        "query_var" => true,
        "menu_position" => 5,
        "menu_icon" => "dashicons-media-document",
        "supports" => ["title"],
        "show_in_graphql" => false,
    ];

    register_post_type("reservation", $args);


    /**
     * Post Type: Recipes.
     */

    $labels = [
        "name" => __("Recipes", "meal"),
        "singular_name" => __("Recipe", "meal"),
        'featured_image' => __( 'Recipe Photo', 'meal-companion' )
    ];

    $args = [
        "label" => __("Recipes", "meal"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "recipe", "with_front" => false],
        "query_var" => true,
        "menu_position" => 5,
        "menu_icon" => "dashicons-carrot",
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
        "show_in_graphql" => false,
        "taxonomies" => array("category")
    ];

    register_post_type("recipe", $args);
}

add_action('init', 'meal_companion_plugin_maneg_thmee');

