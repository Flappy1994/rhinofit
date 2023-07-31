<?php /* Template Name: Index */ ?>
<?php get_header(); ?>
<main class="content">
<div class="container-fluid welcome text-center">
    <div class="row d-flex justify-content-center py-4">
        <div class="col-md-6 col-10">
            <h2>Rhinofit Supplements</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-10">
            <p>Dein Partner für Sport & Fitness im Nahrungsergänzungsmittelbereich</p>
        </div>
    </div>
</div>
<div class="container-fluid services bg-blue px-0">
        <div class="row d-flex justify-content-center pb-4">
            <div class="col-md-6 col-10 mt-5 text-center">
                <h2 class="text-white">Starte jetzt durch</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card col-3 align-items-center bg-blue">
                <img class="card-img-top index-categories" src="<?php echo get_template_directory_uri(); ?>/img/categories/whey-protein.png" alt="Card image cap">
                <div class="card-body white">
                <h3>Whey-Protein</h3>
                <p class="card-text">Entdecke unsere Whey-Proteine</p>
                </div>
            </div>
            <div class="card col-3 align-items-center bg-blue">
                <img class="card-img-top index-categories" src="<?php echo get_template_directory_uri(); ?>/img/categories/booster.png" alt="Card image cap">
                <div class="card-body white">
                <h3>Booster</h3>
                <p class="card-text">Entdecke unsere Booster</p>
                </div>
            </div>
            <div class="card col-3 align-items-center bg-blue">
                <img class="card-img-top index-categories" src="<?php echo get_template_directory_uri(); ?>/img/categories/protein-isolate.png" alt="Card image cap">
                <div class="card-body white">
                <h3>Protein Isolat</h3>
                <p class="card-text">Entdecke unsere Protein Isolate</p>
                </div>
            </div>
            <div class="card col-3 align-items-center bg-blue">
                <img class="card-img-top index-categories" src="<?php echo get_template_directory_uri(); ?>/img/categories/vegan-protein.png" alt="Card image cap">
                <div class="card-body white">
                <h3>Vegane Produkte</h3>
                <p class="card-text">Entdecke unsere veganen Produkte</p>
                </div>
            </div>
</div>
</div>
<div class="container-fluid who-we-are p-md-5 bg-black">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-10">
            <div id="carousel-who-we-are" class="carousel carousel-who-we-are slide" data-bs-ride="true">
            <div class="carousel-indicators pt-md-5">
                <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel-who-we-are" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner p-5 text-center">
                <div class="carousel-item carousel-item-our-identity bg-black text-white active p-md-5">
                    <h2 class="">Unser Versprechen</h2> 
                    <p class="mt-5 mb-0">Jedes Produkt wurde nach strengen Richtlinien für dich produziert</p>
                    <p class="mb-0">dabei achten wir auf Qualität & ein sehr gutes Preis-Leistungsverhältnis</p>
                    <p class="pb-md-5"><br></p>
                </div>
                <div class="carousel-item carousel-item-our-identity bg-black text-white p-md-5">
                    <h2 class="">Unsere Motivation</h2>
                    <p class="mt-5 mb-0">Wir möchten im Bereich Sport & Fitness dein persönlicher Partner werden</p>
                    <p class="mb-0">Wir untersützen dich mit besten Produkten</p>
                    <p class="pb-md-5">und tragen damit zu deinem Erfolg bei</p>
                </div>
                <div class="carousel-item carousel-item-our-identity bg-black text-white p-md-5">
                    <h2 class="">Unser Team</h2>
                    <p class="mt-5 mb-0">Wir haben immer ein Projekt, an dem wir arbeiten. Meistens für unsere Kund*innen.</p>
                    <p class="mb-0">Von Zeit zu Zeit ist es aber auch ein persönliches Vorhaben,</p>
                    <p class="pb-md-5">wie für gemeinnützige Organisationen, das uns neue Inspiration gewinnen lässt.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-who-we-are" data-bs-slide="prev">
                <span class="carousel-control-prev-icon carousel-control-prev-icon-white" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-who-we-are" data-bs-slide="next">
                <span class="carousel-control-next-icon carousel-control-next-icon-white" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid call-to-action bg-black pb-md-5">
    <div class="row d-flex justify-content-center pt-5 pt-md-0 pt-lg-5">
        <div class="col-md-12 col-lg-8 ps-0 bg-white pt-md-3 pt-lg-0">
            <h2 class="mt-0 mx-0 px-2 px-lg-0 mt-lg-5 mx-lg-5 text-center">Kontaktieren Sie uns noch heute!</h2>
            <div class="mt-0 mx-0 px-2 px-lg-0 mt-lg-5 mx-lg-5">
            <?php echo do_shortcode('[contact-form-7 id="1334" title="Index | Kontaktieren Sie uns noch heute!"]');?>
            </div>
        </div>
    </div>
</div>
</main>
<?php get_footer(); ?>