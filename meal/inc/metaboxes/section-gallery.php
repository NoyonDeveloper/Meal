<?php 
function meal_gallery_section_metabox($metaboxes){


    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ("section" != get_post_type($section_id)) {
        return $metaboxes;
    }

    $section_meta = get_post_meta($section_id, "section-type-metabox", true);
    $section_type = $section_meta['type'];

    if ("gallery" != $section_type) {
        return $metaboxes;
    }


    $metaboxes[] = array(
        'id' => 'meal-section-gallery',
        'title' => __( 'Gallery Setting', 'meal' ),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'meal-gallery-section-one',
                'icon' => 'fa fa-image',
                'fields' => array(
                    array(
                        'id' => 'portfolio',
                        'type' => 'group',
                        'title' => __( 'Portfolio', 'meal' ),
                        'button_title' => __('New Image', 'meal'),
                        'accordion_title' => __('Add New Image', 'meal'),
                        'fields' => array(
                            array(
                                'id' => 'image',
                                'title' => __( 'image', 'meal' ),
                                'type' => 'image'
                            ),
                            array(
                                'id' => 'categories',
                                'title' => __( 'Category', 'meal' ),
                                'type' => 'text'
                            )
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter("cs_metabox_options", "meal_gallery_section_metabox");