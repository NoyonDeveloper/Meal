<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <!-- OPL Demos Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-3920997-4', 'auto');
        ga('send', 'pageview');
    </script>

    <?php wp_head(); ?>

</head>

<body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

        <div class="site-wrap">

            <nav class="site-menu" id="ftco-navbar-spy">
                <?php
                 echo wp_nav_menu( array(
                  'location'        => 'primary',
                  'container_class' => 'site-menu-inner',
                  'container_id'    => 'ftco-navbar',
                  'menu_class'      => 'list-unstyled',
                 ) );
                ?>
            </nav>

            <header class="site-header">
                <div class="row align-items-center">
                    <div class="col-5 col-md-3">

                    </div>
                    <div class="col-2 col-md-6 text-center site-logo-wrap">
                        <a href="<?php echo home_url(); ?>" class="logo-meal">
                            <?php

                             if ( has_custom_logo() ) {
                              the_custom_logo();
                             } else {
                              $homeurl = get_home_url();
                              echo "<a href='{$homeurl}' class='site-logo'>M</a>";
                             }

                            ?>
                        </a>
                    </div>
                    <div class="col-5 col-md-3 text-right menu-burger-wrap">
                        <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>
                    </div>
                </div>
            </header> <!-- site-header -->

