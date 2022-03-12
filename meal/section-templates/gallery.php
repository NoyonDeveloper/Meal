<?php
global $meal_section_id;
$meal_section_meta = get_post_meta($meal_section_id, "meal-section-gallery", true);

$meal_post_section_type = get_post($meal_section_id);
$meal_section_title = $meal_post_section_type->post_title;
$meal_section_description = $meal_post_section_type->post_content;

?>
<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-8 section-heading">
                <h2 class="heading mb-5">
                    <?php echo esc_html($meal_section_title); ?>
                </h2>
                <?php
                echo apply_filters('the_content', $meal_section_description);
                ?>
            </div>
        </div>
    </div>
</div> <!-- .section -->


<?php
$meal_gallery_items = $meal_section_meta['portfolio'];
$meal_items_categories = [];
foreach ($meal_gallery_items as $meal_gallery_item) {
    $meal_gallery_item_categoryes = explode(",", $meal_gallery_item['categories']);
    foreach ($meal_gallery_item_categoryes as $meal_gallery_item_category) {
        $meal_gallery_item_category = trim($meal_gallery_item_category);
        if (!in_array($meal_gallery_item_category, $meal_items_categories)) {
            array_push($meal_items_categories, $meal_gallery_item_category);
        }
    }
}

?>

<div class="containerer">
    <?php
    foreach ($meal_items_categories as $meal_item_category) :
    ?>
        <input type="radio" id="<?php echo esc_attr($meal_item_category); ?>" name="color" />
        <label for="<?php echo esc_attr($meal_item_category); ?>"><?php echo esc_html($meal_item_category); ?></label>
    <?php
    endforeach;
    ?>


    <?php
    foreach ($meal_gallery_items as $meal_gallery_item) :
        $meal_item_class = str_replace(",", "", $meal_gallery_item['categories']);
        $meal_item_image_id = $meal_gallery_item['image'];
        $meal_thumbnail_image = wp_get_attachment_image_src($meal_item_image_id, "medium");
    ?>
        <img src="<?php echo esc_url($meal_thumbnail_image[0]); ?>" class="tile <?php echo esc_attr($meal_item_class); ?>"></img>
    <?php
    endforeach;
    ?>
    <img src="" alt="">

</div>

<!--Gallery Sections End-->