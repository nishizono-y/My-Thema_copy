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
<section id="content">
  <div id="content-wrap" class="container row pt-3">
    <div id="main" class="col-md-9">
    <h1>「<?php the_search_query(); ?>」の検索結果</h1>
      <h1>投稿一覧</h1>
      <hr>
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="mb-3" id="post-meta">
            <p>作成日時：<?php echo get_the_date(); ?></p>
            <?php the_category(); ?>
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