<?php
global $meal_section_id;
$meal_section_meta = get_post_meta($meal_section_id, "meal-testimonails-section", true);

$meal_post_section_type = get_post($meal_section_id);
$meal_section_title = $meal_post_section_type->post_title;
$meal_section_description = $meal_post_section_type->post_content;
?>

<div class="section bg-white" data-aos="fade-up">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3">
                    <?php echo esc_html($meal_section_title); ?>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center text-center" data-aos="fade-up">

        <?php 
        $mela_testimonails = $meal_section_meta['testimonail'];
        if($mela_testimonails):
        ?>
            <div class="col-md-8">
                <div class="owl-carousel home-slider-loop-false">

                <?php 
                foreach($mela_testimonails as $mela_testimonail):
                    $mela_testimonail_image = wp_get_attachment_image_src($mela_testimonail['image'], 'medium');
                ?>
                    <div class="item">
                        <blockquote class="testimonial">
                            <p>
                            <?php echo esc_html($mela_testimonail['description']); ?>
                            </p>
                            <div class="author">
                                <img src="<?php echo esc_url($mela_testimonail_image[0]) ?>" alt="<?php echo esc_attr($mela_testimonail['name']); ?>" class="mb-3">
                                <h4><?php echo esc_html($mela_testimonail['name']); ?></h4>
                                <p><?php echo esc_html($mela_testimonail['profission']); ?></p>
                            </div>
                        </blockquote>
                    </div>                  
                    <?php endforeach; ?>
                    
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div> <!-- .section -->