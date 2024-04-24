<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/js/Bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>mytheme</title>
    <?php wp_head(); ?>
</head>
<body>
   <?php get_header(); ?>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/photo/roses_2.jpg" class="d-block w-100 slide_show" alt="スライドショー１">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/photo/roses_3.jpg" class="d-block w-100 slide_show" alt="スライドショー２">
                </div>
                    <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/photo/flowers_2.jpg" class="d-block w-100 slide_show" alt="スライドショー３">
            </div>
        </div>
        <section class="container">
        <div class="row mt-5">
            <div class="col-md-9 row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/photo/bouquet_2.jpg" class="card-img-top main_card_img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ABOUT</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/photo/roses_1.jpg" class="card-img-top main_card_img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BLOG</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
        </section>
    <?php get_footer(); ?>
</body>
</html>