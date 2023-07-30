<?php /* Template Name: Page Model */ ?>
<?php get_header(); ?>
<?php
$augen = get_post_meta(get_the_ID(), 'Augen', true);
$groesse = get_post_meta(get_the_ID(), 'Größe', true);
$brust = get_post_meta(get_the_ID(), 'Brust', true);
$taille = get_post_meta(get_the_ID(), 'Taille', true);
$huefte = get_post_meta(get_the_ID(), 'Hüfte', true);
$schuhe = get_post_meta(get_the_ID(), 'Schuhe', true);
$haare = get_post_meta(get_the_ID(), 'Haare', true);
$konfektion = get_post_meta(get_the_ID(), 'Konfektionsgröße', true);

?>
<main id="main" class="site-main bg-black" role="main">
    <div class="container-fluid container-xl">
        <div class="row d-flex justify-content-center ">
            <div class="col-12 mb-2">
                <h2 class="text-center text-white my-md-5 mt-4"><?php the_title(); ?></h2>
            </div>
            <div class="col-12 d-flex justify-content-center px-0 mt-2">
                <div class="content-model">
                    <div class="row d-flex justify-content-lg-between justify-content-start pb-4 px-lg-3 px-0">
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Brust</b> <?php echo $brust; ?></div>
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Taille</b> <?php echo $taille; ?></div>
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Hüfte</b> <?php echo $huefte; ?></div>
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Augen</b> <?php echo $augen; ?></div>
                    </div>
                    <div class="row d-flex justify-content-lg-between justify-content-start pb-4 px-lg-3 px-0">
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Größe</b> <?php echo $groesse; ?></div>
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Haare</b> <?php echo $haare; ?></div>
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Konfektion</b> <?php echo $konfektion; ?></div>
                        <div class="col-6 col-md-4 col-lg text-md-center text-start text-white px-md-0"><b>Schuhe</b> <?php echo $schuhe; ?></div>
                    </div>
                    <?php the_content(); ?>
                    <div class="container-fluid my-md-5 call-to-action text-white">
                        <div class="row">
                            <h2 class="text-center">Sie möchten mit dem Model arbeiten?</h2>
                        </div>
                        <div class="row text-center mt-md-5">
                            <div class="col-12 col-lg-3"></div>
                            <div class="col-12 col-lg-3">
                                <div class="col-12">
                                <a class="border-hover-none" href="tel: +491736679653">
                                <img class="w-25 text-white" src="<?php echo get_template_directory_uri(); ?>/img/telephone.svg">
                                </a>
                                </div>
                                <div class="col-12 mt-2">
                                    <p>0173 / 667 9653</p>
                                </div>
                               
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="col-12">
                                <a class="border-hover-none" href="mailto: bookings@idealimodels.de">
                                <img class="w-25 text-white" src="<?php echo get_template_directory_uri(); ?>/img/envelope.svg">
                                </a>
                                </div>
                                <div class="col-12 mt-2">
                                    <p>bookings@idealimodels.de</p>
                                </div>
                               
                            </div>
                            <div class="col-12 col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- .site-main -->
<?php get_footer(); ?>