<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>
<div class="container-fluid container-xl-fluid content h-75 bg-black text-white">
    <div class="row d-flex justify-content-center mt-md-5">
        <div class="col-12 col-lg-6">
            <h2 class="mt-5 mx-0 mx-lg-5 text-center">Buchen Sie noch heute ein kostenloses Beratungsgespräch</h2>
                <div class="mt-5 mx-0 mx-lg-5">
                    <?php echo do_shortcode('[contact-form-7 id="1353" title="Marketing | Beratungsgespräch"]');?>
                </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col px-lg-0 text-center mt-5">
                    <h2 class="mb-5">Gerne vereinbaren wir Termine vor Ort</h2>
                    <iframe class="mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.6713860348545!2d8.222902951536627!3d50.07371557932426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdbe0c49ccbdff%3A0xdb7b686b0dfe1435!2sEibinger%20Str.%203%2C%2065197%20Wiesbaden!5e0!3m2!1sde!2sde!4v1653583610780!5m2!1sde!2sde" id="ideali-address-location" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row text-center d-flex justify-content-center">
                                <div class="col-12 col-lg-3">
                                    <div class="col-12">
                                    <a class="border-hover-none" href="tel: +49 174 1550246">
                                    <img class="w-25 text-white" src="<?php echo get_template_directory_uri(); ?>/img/telephone.svg">
                                    </a>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <p>0174 / 155 0246</p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="col-12">
                                    <a class="border-hover-none" href="mailto: kontakt@idealimodels.de">
                                    <img class="w-25 text-white" src="<?php echo get_template_directory_uri(); ?>/img/envelope.svg">
                                    </a>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <p>kontakt@idealimodels.de</p>
                                    </div>
                                
                                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>