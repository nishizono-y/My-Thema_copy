<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/js/Bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <title></title> -->
<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<section id="content" class="container">
  <div id="content-wrap" class="row pt-3">
    <div id="main" class="col-md-9">
        <h1>投稿一覧</h1>
        <hr>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
        <div class="f_box">
          <div>
              <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
              <div id="post-meta ">
                  <p>作成日時：<?php echo get_the_date(); ?></p>
                  <?php the_category(); ?>
              </div>
          </div>
          <div class="f_item">
                      <?php if (has_post_thumbnail()) : ?> 
                              <?php the_post_thumbnail('medium'); ?>
                              <?php endif; ?>
          </div>
        </div>
        <hr>
      <?php
        endwhile;
      endif;
      ?>

    </div>
    <div id="sidebar" class="col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
</body>
</html>
