<?php

/**
 * Template Name: Ajax Form
 */
get_header();
the_post();
?>

<?php
$meal_section_id = 14;
get_template_part("/section-templates/banner");
?>

<div class="section bg-light" id="section-menu" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                        <?php the_post_thumbnail('small'); ?>

                        <div class="d-block d-md-flex menu-food-item">

                            <div class="text order-1 mb-3">

                                <h3><a href="#"><?php the_title(); ?></a></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div> <!-- .menu-food-item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4">
    <div class="footer-widget">
        <h3 class="mb-4">Newsletter</h3>
        <form action="<?php echo home_url("/"); ?>" method="POST" class="ftco-footer-newsletter">
            <div class="form-group">
            <?php wp_nonce_field("ajaxtest", "ajaxtest"); ?>
                <label for="info">Ajax Information</label>
                <input type="text" id="info" name="info" class="form-control" placeholder="Enter Info" style="border:1px solid balck">
                <input type="submit" id="ajaxsubmit" value="Submit">
            </div>
        </form>
    </div>
</div>

<?php
get_footer();
?>

