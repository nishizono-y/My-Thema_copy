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
<?php
/**
 * Template Name: 1カラムテンプレート
 */
?>
 
   <?php get_header(); ?>
   <section class="container">
        <div class="row pt-3">
            <div class="col-12">
                <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                        <h1><?php the_title(); ?></h1>
                        <section>
                            <?php the_content(); ?>
                        </section>
                    <?php
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>