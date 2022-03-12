<?php
function meal_recipe_price_metabox($metaboxes){
    $metaboxes[] = array(
        'id' => 'section-price-metabox',
        'title' => __('Price Count', 'meal'),
        'post_type' => 'recipe',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'meal-section-price-section-one',
                'icon' => 'fa fa-image',
                'fields' => array(
                    array(
                        'id' => 'price',
                        'title' => __( 'Price', 'meal' ),
                        'type' => 'text',
                        'default' => '0.0'
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter("cs_metabox_options", "meal_recipe_price_metabox");
