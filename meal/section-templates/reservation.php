<?php
 global $meal_section_id;
 $meal_post_section_type   = get_post( $meal_section_id );
 $meal_section_title       = $meal_post_section_type->post_title;
 $meal_section_description = $meal_post_section_type->post_content;
?>
<div class="section bg-light" data-aos="fade-up" id="section-reservation">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="heading mb-3">
                    <?php echo esc_html( $meal_section_title ); ?>
                </h2>
                <?php echo apply_filters( 'the_content', $meal_section_description ); ?>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 p-5 form-wrap">
                <form action="#">
                    <?php
                     wp_nonce_field( 'reservation', 'rev' );
                    ?>
                    <div class="row mb-4">
                        <div class="form-group col-md-4">
                            <label for="name" class="label"><?php _e( 'Name', 'meal' ); ?></label>
                            <div class="form-field-icon-wrap">
                                <span class="icon ion-android-person"></span>
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="email" class="label"><?php _e( 'Email', 'meal' ); ?></label>
                            <div class="form-field-icon-wrap">
                                <span class="icon ion-email"></span>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone" class="label"><?php _e( 'Phone', 'meal' ); ?></label>
                            <div class="form-field-icon-wrap">
                                <span class="icon ion-android-call"></span>
                                <input type="text" class="form-control" id="phone">
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="persons" class="label">Number of Persons</label>
                            <div class="form-field-icon-wrap">
                                <span class="icon ion-android-arrow-dropdown"></span>
                                <select name="persons" id="persons" class="form-control">
                                    <option value="1">1 person</option>
                                    <option value="2">2 persons</option>
                                    <option value="3">3 persons</option>
                                    <option value="4">4 persons</option>
                                    <option value="5">5+ persons</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="date" class="label"><?php _e( 'Date', 'meal' ); ?></label>
                            <div class="form-field-icon-wrap">
                                <span class="icon ion-calendar"></span>
                                <input type="text" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="time" class="label"><?php _e( 'Time', 'meal' ); ?></label>
                            <div class="form-field-icon-wrap">
                                <span class="icon ion-android-time"></span>
                                <input type="text" class="form-control" id="time">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <input type="submit" id="reservnow" class="btn btn-primary btn-outline-primary btn-block" value="Reserve Now">
                            <a href="#" target="_blank" id="paynow" class="btn btn-primary btn-outline-primary btn-block" style="display: none;">
                            <?php _e( "Complate Payment", "meal" ); ?>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- .section -->