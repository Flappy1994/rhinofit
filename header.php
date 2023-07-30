<?php /* Template Name: Header */ ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

    <!-- Ideali CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/rhino-logo.png">

    <title>Rhinofit Supplements - Ihr Partner im Bereich Nahrungsergänzungsmittel</title>
    <meta name="description" content="Ideali Models ist die Model- und Werbeagentur, die nicht nur die Models der neuen Generation präsentiert, sondern auch alle Komponenten einer Produktion über Werbespots, Fotoshootings, als auch Visagisten und Fotografen zu Verfügung stellt.">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container-fluid header-desktop d-lg-flex fixed-top pt-md-4 px-md-0 align-items-center justify-content-around">
        <div class="navbar-nav">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-2 p-0">
                        <a class="navbar-brand" href="/">
                            <img class="w-100" id="logo" src="<?php echo get_template_directory_uri(); ?>/img/banner/rhino-banner-complete.jpg" />
                        </a>
                    </div>
                    <div class="offset-md-1 col-5 pe-lg-2">
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div>
                    <div class="offset-md-1 col-1">
                        <a href="localhost/rhinofit/mein-konto">
                        <img width="25px" src="<?php echo get_template_directory_uri();?>/img/customer/person-fill.svg"/></a>
                    </div>
                    <div class="col-1">
                        <img width="25px" src="<?php echo get_template_directory_uri();?>/img/customer/cart-fill.svg"/>
                    </div>
                </div>
                <div class="row d-flex align-items-center pt-md-5 justify-content-center">
                    <div class="col-12">
                                <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'menu_class' => 'd-flex justify-content-center flex-wrap orange-background px-md-5'
                            ));
                            ?>
                    </div>
                </div>
        </div>
    </div>
</div>