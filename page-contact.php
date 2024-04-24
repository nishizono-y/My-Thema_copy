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
  <div class="row">
    <h1 class="mt-3">お問い合せ</h1>
    <form class="m-5">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" id="name">
      </div>
      <div class="mb-3">
        <label for="email1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Example textarea</label>
        <textarea class="form-control" id="text" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary mt-3 justify-content-center">送信</button>
    </form>
  </div>
</section>
   
 <?php get_footer(); ?>
</body>
</html>
</body>
</html>