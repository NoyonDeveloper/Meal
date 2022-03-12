<div class="section" data-aos="fade-up" id="section-contact">
    <div class="container">
        <div class="row section-heading justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <ul>
                    <?php
                        wp_list_comments();
                    ?>
                </ul>
                <h2 class="heading mb-3">Leave Your Comment</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 p-5 form-wrap">
                <?php
                    $meal_comment_fields         = array();
                    $meal_comment_leabel_name    = __( 'Name', 'meal' );
                    $meal_comment_leabel_email   = __( 'Email', 'meal' );
                    $meal_comment_leabel_website = __( 'Website', 'meal' );
                    $meal_comment_leabel_comment = __( 'Comment', 'meal' );
                    $meal_comment_leabel_button  = __( 'Send', 'meal' );

                    $meal_comment_fields['author'] = <<<EOD
<div class="form-group col-md-6">
    <label for="name" class="label">{$meal_comment_leabel_name}</label>
    <div class="form-field-icon-wrap">
        <span class="icon ion-android-person"></span>
        <input type="text" id="author" name="author" class="form-control" id="name">
    </div>
</div>
EOD;
                    $meal_comment_fields['email'] = <<<EOD
<div class="form-group col-md-6">
    <label for="email" class="label">{$meal_comment_leabel_email}</label>
    <div class="form-field-icon-wrap">
        <span class="icon ion-email"></span>
        <input type="email" id="email" name="email" class="form-control" id="email">
    </div>
</div>
EOD;
                    $meal_comment_fields['url'] = <<<EOD
<div class="form-group col-md-12">
    <label for="phone" class="label">{$meal_comment_leabel_website}</label>
    <div class="form-field-icon-wrap">
        <span class="icon ion-android-phone"></span>
        <input type="text" id="url" name="url" class="form-control" id="phone">
    </div>
</div>
EOD;
                    $meal_comment_field = <<<EOD
<div class="form-group col-md-12">
        <label for="message" class="label">{$meal_comment_leabel_comment}</label>
        <textarea name="message" id="comment" name="comment" cols="5" rows="2" class="form-control"></textarea>
    </div>
</div>
EOD;
                    $meal_submit_button = <<<EOD
<div class="row justify-content-center">
    <div class="col-md-2">
        <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="{$meal_comment_leabel_button}">
    </div>
</div>
EOD;

                    $meal_comment_args = array(
                        'fields'               => $meal_comment_fields,
                        'comment_field'        => $meal_comment_field,
                        'submit_button'        => $meal_submit_button,
                        'class_form'           => 'row justify-content-center',
                        'comment_notes_before' => '',
                        'comment_notes_after'  => '<p>Your email address will not be Published. Requred Fields are Marked*</p>',
                        'title_reply'          => '',
                    );
                    comment_form( $meal_comment_args );
                ?>
            </div>
        </div>
    </div>
</div> <!-- .section -->

