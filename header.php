<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/js/Bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <title>mytheme_header</title> -->
    <?php wp_head(); ?>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
             <div class="container-fluid " >
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">8Haci</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo esc_url( home_url() ); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url( home_url('/about/') ); ?>">ABOUT</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
                        </li>
                    </ul>
                </div>
                    <form class="d-flex text-right" role="search" method="get" action="<?php echo esc_url( home_url() ); ?>" name="s">
                        <input class="form-control me-2" type="search" name="s" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
            </div>
        </nav>
    </div>
</body>
</html>
