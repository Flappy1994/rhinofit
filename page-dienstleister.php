<?php /* Template Name: Page Dienstleister */ ?>
<?php get_header(); ?>
<style>
    h2{
       margin-top:5%; 
    }
    a, a:hover{
        color:white;
    }
    .wp-block-columns, figure{
        margin-bottom:0px !important;
    }
</style>
<div class="container-fluid pe-0 ps-lg-4 bg-grey">
    <div class="row d-flex ps-lg-5">
        <div class="col-12 ps-0 text-white text-center">
        <?php echo the_content();?>
        </div>
    </div>
</div>
<?php get_footer(); ?>