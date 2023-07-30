<?php /* Template Name: Dienstleister */ ?>
<?php get_header(); ?>
<style>
    
.content {
    min-height: 74vh;
}
</style>
<div class="bg-black">
<div class="container content pt-4 p-lg-0 bg-black">
        <div class="row d-flex justify-content-center ">
            <div class="col-12 text-white text-center">
                <h2 class="my-md-5">Dienstleister</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center ">
            <?php
            $dienstleisterRequest = array(
                'post_type'         => 'page',
                'posts_per_page'    => 100,
                'category_name' => 'Dienstleister'
            );
            $dienstleister = new WP_Query($dienstleisterRequest);

            // The Loop
            if ($dienstleister->have_posts()) {
                while ($dienstleister->have_posts()) {
                    $dienstleister->the_post();
                    $description = get_post_meta(get_the_ID(), 'Beschreibung', true);
                     $name = get_the_title();
                      ?>
                   <div class="col-12 col-md-3 col-lg-6 dienstleister-container me-md-5 mb-2 mt-2">
                        <div class="row">
                            <div class="col-12 p-0">
                            <a class="picture-link" href="<?php echo get_permalink(); ?>">
                                           <img class="dienstleister" src="<?php echo get_profile_picture() ?>" /> 
                                    </a>
                            </div>
                            <div class="col-12 p-5 bg-grey dienstleister-info">
                                <p class="m-0 text-white"><?php echo $description; ?></p>
                            </div>
                        </div>            
                        </div>
            <?php
                }
            }
            /* Restore original Post Data */
            wp_reset_postdata(); ?>
        </div>
</div>
</div>
<?php get_footer(); ?>