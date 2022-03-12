<?php

/**
 * Template Name: Landing Page
 */
?>
<?php
get_header();
?>
<div class="main-wrap " id="section-home">

    <?php
    $meal_current_page = get_the_ID();
    $meal_page_meta = get_post_meta($meal_current_page, "meal-page-section", true);
    foreach ($meal_page_meta['page-section-one'] as $meal_page_section) {
        $meal_section_id = $meal_page_section['section'];
        $meal_section_meta = get_post_meta($meal_section_id, "section-type-metabox", true);
        $meal_section_type = $meal_section_meta['type'];
        get_template_part("/section-templates/{$meal_section_type}");
    }
    ?>
   
    <div class="map-wrap" id="map" data-aos="fade"></div>

    

</div>

<?php
get_footer();
?>