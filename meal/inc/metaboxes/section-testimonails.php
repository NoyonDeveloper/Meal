<?php
function meal_testimonails_section($metaboxes){

    $section_id = 0;
    if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
        $section_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
    }

    if ("section" != get_post_type($section_id)) {
        return $metaboxes;
    }

    $section_meta = get_post_meta($section_id, "section-type-metabox", true);
    $section_type = $section_meta['type'];

    if ("testimonails" != $section_type) {
        return $metaboxes;
    }

    $metaboxes[] = array(
        'id' => 'meal-testimonails-section',
        'title' => __( 'Testimonail Setting ', 'meal' ),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'testimonails',
                'icon' => 'fa fa-image',
                'fields' => array(
                    array(
                        'id' => 'testimonail',
                        'type' => 'group',
                        'title' => __('Testimonail', 'meal'),
                        'button_title' => __('New Testimonail', 'meal'),
                        'accordion_title' => __('Add New Testimonail', 'meal'),
                        'fields' => array(
                            array(
                                'id' => 'image',
                                'title' => __('Image', 'meal'),
                                'type' => 'image'
                            ),                            
                            array(
                                'id' => 'name',
                                'title' => __('Name', 'meal'),
                                'type' => 'text'
                            ),
                            array(
                                'id' => 'profission',
                                'title' => __( 'Profission', 'meal' ),
                                'type' => 'text'
                            ),
                            array(
                                'id' => 'description',
                                'title' => __('Description', 'meal'),
                                'type' => 'textarea'
                            )                                                     
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter("cs_metabox_options", "meal_testimonails_section");