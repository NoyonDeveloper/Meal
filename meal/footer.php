<footer class="ftco-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="footer-widget">
                    <?php

                     if ( is_active_sidebar( 'about-us' ) ) {
                      dynamic_sidebar( 'about-us' );
                     }

                    ?>
                    <!-- <input type="submit" class="btn btn-primary btn-outline-primary" value="Send Message"> -->
                    <p><a href="<?php echo home_url(); ?>" target="_blank" class="btn btn-primary btn-outline-primary"><?php _e( 'More Templates', 'meal' ); ?></a></p>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="footer-widget">
                    <?php

                     if ( is_active_sidebar( 'lunch-service' ) ) {
                      dynamic_sidebar( 'lunch-service' );

                     }

                    ?>

                    <?php

                     if ( is_active_sidebar( 'dinner-service' ) ) {
                      dynamic_sidebar( 'dinner-service' );
                     }

                    ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="mb-4">Follow Along</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="fa fa-tripadvisor"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h3 class="mb-4">Newsletter</h3>
                    <form action="#" class="ftco-footer-newsletter">
                        <div class="form-group">
                            <button class="button"><span class="fa fa-envelope"></span></button>
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <div class="row pt-5">
            <div class="col-md-12 text-center">
                <?php

                 if ( is_active_sidebar( 'copyright' ) ) {
                  dynamic_sidebar( 'copyright' );
                 }

                ?>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff7a5c" />
    </svg></div>

<?php wp_footer(); ?>
</body>

</html>