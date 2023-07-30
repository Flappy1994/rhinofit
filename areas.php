<?php /* Template Name: Bereiche */ ?>
<?php get_header(); ?>
<style>
    .services{
        min-height:77vh;
    }
</style>
<div class="wrapper-areas">
<div class="container-fluid services bg-grey d-grid">
    <div class="row d-flex justify-content-center pb-4 pb-md-0 align-content-md-center mt-5 mt-lg-0">
        <div class="col-md-6 col-10 text-center">
            <h2 class="text-white">Unsere Bereiche</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center pb-5 text-center">
            <div class="col-12 col-md-6 col-lg-4">
            <a href="/category/weiblich">
                <img class="area-img" src="<?php echo get_template_directory_uri(); ?>/img/areas/weiblich.jpg" class="card-img-top" alt="...">
                </a>
            </div>
            <div class="col-12 d-lg-none my-4">
                <a href="/category/weiblich" class="text-white text-center d-lg-none">Weiblich</a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <a href="/category/maennlich">
                    <img class="area-img" src="<?php echo get_template_directory_uri(); ?>/img/areas/maennlich.jpg" class="card-img-top" alt="...">
                    </a>
            </div>
            <div class="col-12 d-lg-none my-4">
            <a href="/category/maennlich" class="text-white text-center d-lg-none">Männlich</a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <a href="/category/petit">
                <img class="area-img" src="<?php echo get_template_directory_uri(); ?>/img/areas/petit.jpg" class="card-img-top" alt="...">
                </a>
            </div>
            <div class="col-12 d-lg-none my-4">
            <a href="/category/petit" class="text-white text-center d-lg-none">Petit</a>
            </div>
            <div class="d-none d-lg-block col-md-6 col-lg-4 px-3 px-xl-none">
                <a href="/category/weiblich" class="text-white ">Weiblich</a>
            </div>
            <div class="d-none d-lg-block col-md-6 col-lg-4 px-3 px-xl-none">
                <a href="/category/maennlich" class="text-white ">Männlich</a>
            </div>
            <div class="d-none d-lg-block col-md-6 col-lg-4 px-3 px-xl-none">
                <a href="/category/petit" class="text-white ">Petit</a>
            </div>
    </div>
</div>
</div>
<?php get_footer(); ?>