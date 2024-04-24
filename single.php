<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿</title>
</head>
<body>
<?php get_header(); ?>
   <section class="container">
        <div class="row pt-3">
            <div class="col-9">
            <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="mb-3" id="post-meta">
                    <p>作成日時：<?php echo get_the_date(); ?></p>
                    <?php the_category(); ?>
                    </div>
                    <section>
                        <?php the_content(); ?>
                    </section>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="col-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>
</body>
</html>
