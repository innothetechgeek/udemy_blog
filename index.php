<?php

    include_once "PostController.php";
    $post_controller = new PostController();
    $posts = $post_controller->getPosts();

    $featured_posts = $post_controller->getFeaturedPosts();
    $popular_posts = $post_controller->getPopularPosts();
    $categories = $post_controller->getCategories();


?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Katen - Minimal Blog & Magazine HTML Theme</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <!-- Favicon -->
     <link rel="icon" href="assets/brand/favicon.png" type="image/png">

    <!-- STYLES -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/frontend/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/frontend/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/frontend/css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/frontend/css/style.css" type="text/css" media="all">

    <!-- aos scroll plugin -->
    <link rel="stylesheet" href="assets/plugins/aos/aos.css" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="book">
            <div class="inner">
                <div class="left"></div>
                <div class="middle"></div>
                <div class="right"></div>
            </div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    <!-- site wrapper -->
    <div class="site-wrapper">

        <div class="main-overlay"></div>

        <!-- header -->
        <header class="header-personal">
            <div class="container-xl header-top">
                <div class="row align-items-center">

                    <div class="col-4 d-none d-md-block d-lg-block">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                        <!-- site logo -->
                        <a class="navbar-brand" href="personal.html"><img src="assets/frontend/images/other/avatar-lg.png" alt="logo" /></a>
                        <a href="personal.html" class="d-block text-logo">Argon<span class="dot">.</span></a>
                        <span class="slogan d-block">Professional Writer & Personal Blogger</span>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <!-- header buttons -->
                        <div class="header-buttons float-md-end mt-4 mt-md-0">
                            <button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
                            <button class="burger-menu icon-button ms-2 float-end float-md-none">
							<span class="burger-icon"></span>
						</button>
                        </div>
                    </div>

                </div>
            </div>

            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">

                    <div class="collapse navbar-collapse justify-content-center centered-nav">
                        <!-- menus -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="index.html">Home</a>
                            </li>
                            <?php foreach($categories as $category){ ?>
                                <li  class="nav-item">
                                    <a class="nav-link"><?= $category['cat_name'] ?></a>
                                </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>

        <section class="hero-carousel">
            
            <div class="row post-carousel-featured post-carousel">
                <?php foreach($featured_posts as $featured_post) { ?>
                    <!-- post -->
                    <div class="post featured-post-md">
                        <div class="details clearfix">
                            <a href="category.html" class="category-badge"> <?= $featured_post['cat_name'] ?></a>
                            <h4 class="post-title"><a href="post-details.html"><?= $featured_post['post_title'] ?></a></h4>
                            <ul class="meta list-inline mb-0">
                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                <li class="list-inline-item"><?= $featured_post['created_at'] ?></li>
                            </ul>
                        </div>
                        <a href="post-details.html">
                            <div class="thumb rounded">
                                <div class="inner data-bg-image" data-bg-image="assets/frontend/images/posts/featured-md-4.jpg"></div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- section main content -->
        <section class="main-content">
            <div class="container-xl">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="row gy-4">
                            <?php foreach($posts as $key => $post) { ?>
                                <div class="col-sm-6">
                                    <!-- post -->
                                    <div class="post post-grid rounded bordered" data-aos="fade-up" data-aos-offset="220" data-aos-duration ="1000">
                                        <div class="thumb top-rounded">
                                            <a href="category.html" class="category-badge position-absolute"><?= $post['cat_name'] ?></a>
                                            <span class="post-format">
                                            <i class="icon-picture"></i>
                                            </span>
                                            <a href="post-details.php?post-id=<?= $post['post_id'] ?>">
                                                <div class="inner">
                                                    <img src="post_images/post_<?=$post['post_id']?>/<?=$post['post_image']?>" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#"><img src="assets/frontend/images/other/author-sm.png" class="author" alt="author" />Katen Doe</a>
                                                </li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                            <h5 class="post-title mb-3 mt-3">
                                                <a href="post-details.php?post-id=<?= $post['post_id'] ?>"><?= $post['post_title'] ?></a>
                                            </h5>
                                            <?php $post_content = strip_tags($post['post_content']) ?>
                                            <p class="excerpt mb-0">  <?= substr($post_content,0,60) ?> ... </p>
                                        </div>
                                        <div class="post-bottom clearfix d-flex align-items-center">
                                            <div class="social-share me-auto">
                                                <button class="toggle-button icon-share"></button>
                                                <ul class="icons list-unstyled list-inline mb-0">
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="more-button float-end">
                                                <a href="post-details.html"><span class="icon-options"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>

                    </div>
                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="widget rounded">
                                <div class="widget-about data-bg-image text-center" data-bg-image="assets/frontend/images/map-bg.png">
                                    <img src="assets/brand/blue.png" alt="logo" class="mb-4" />
                                    <p class="mb-4">Hello, We’re content writer who is fascinated by content fashion, celebrity and lifestyle. We helps clients bring the right content to the right people.</p>
                                    <ul class="social-icons list-unstyled list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- widget popular posts -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Popular Posts</h3>
                                    <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">1</span>
                                            <a href="post-details.html">
                                                <div class="inner">
                                                    <img src="assets/frontend/images/posts/tabs-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="post-details.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- widget categories -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Posts by categories</h3>
                                    <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                   
                                        <ul class="list">
                                            <?php foreach($categories as $category){ ?>
                                                <li><a href="#"><?= $category['cat_name'] ?></a><span>(<?= $category['num_of_posts'] ?>)</span></li>
                                            <?php } ?>
                                        </ul>
                                  
                                </div>

                            </div>

                            <!-- widget newsletter -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Newsletter</h3>
                                    <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
                                    <form>
                                        <div class="mb-2">
                                            <input class="form-control w-100 text-center" placeholder="Email address…" type="email">
                                        </div>
                                        <button class="btn btn-default btn-full" type="submit">Sign Up</button>
                                    </form>
                                    <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
                                </div>
                            </div>

                            <!-- widget post carousel -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Celebration</h3>
                                    <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <div class="post-carousel-widget">
                                        <!-- post -->
                                        <div class="post post-carousel">
                                            <div class="thumb rounded">
                                                <a href="category.html" class="category-badge position-absolute">How to</a>
                                                <a href="post-details.html">
                                                    <div class="inner">
                                                        <img src="assets/frontend/images/widgets/widget-carousel-1.jpg" alt="post-title" />
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-0 mt-4"><a href="post-details.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
                                            <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                        <!-- post -->
                                        <div class="post post-carousel">
                                            <div class="thumb rounded">
                                                <a href="category.html" class="category-badge position-absolute">Trending</a>
                                                <a href="post-details.html">
                                                    <div class="inner">
                                                        <img src="assets/frontend/images/widgets/widget-carousel-2.jpg" alt="post-title" />
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-0 mt-4"><a href="post-details.html">Master The Art Of Nature With These 7 Tips</a></h5>
                                            <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                        <!-- post -->
                                        <div class="post post-carousel">
                                            <div class="thumb rounded">
                                                <a href="category.html" class="category-badge position-absolute">How to</a>
                                                <a href="post-details.html">
                                                    <div class="inner">
                                                        <img src="assets/frontend/images/widgets/widget-carousel-1.jpg" alt="post-title" />
                                                    </div>
                                                </a>
                                            </div>
                                            <h5 class="post-title mb-0 mt-4"><a href="post-details.html">5 Easy Ways You Can Turn Future Into Success</a></h5>
                                            <ul class="meta list-inline mt-2 mb-0">
                                                <li class="list-inline-item"><a href="#">Katen Doe</a></li>
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- carousel arrows -->
                                    <div class="slick-arrows-bot">
                                        <button type="button" data-role="none" class="carousel-botNav-prev slick-custom-buttons" aria-label="Previous"><i class="icon-arrow-left"></i></button>
                                        <button type="button" data-role="none" class="carousel-botNav-next slick-custom-buttons" aria-label="Next"><i class="icon-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- footer -->
        <footer>
            <div class="container-xl">
                <div class="footer-inner">
                    <div class="row d-flex align-items-center gy-4">
                        <!-- copyright text -->
                        <div class="col-md-4">
                            <span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
                        </div>

                        <!-- social icons -->
                        <div class="col-md-4 text-center">
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <!-- go to top button -->
                        <div class="col-md-4">
                            <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- end site wrapper -->

    <!-- search popup area -->
    <div class="search-popup">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>
        <!-- content -->
        <div class="search-content">
            <div class="text-center">
                <h3 class="mb-4 mt-0">Press ESC to close</h3>
            </div>
            <!-- form -->
            <form class="d-flex search-form">
                <input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
                <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>

    <!-- canvas menu -->
    <div class="canvas-menu d-flex align-items-end flex-column">
        <!-- close button -->
        <button type="button" class="btn-close" aria-label="Close"></button>

        <!-- logo -->
        <div class="logo">
            <img src="assets/brand/blue.png" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="/">Home</a>
                </li>
                <?php foreach($categories as $category){ ?>
                    <li><a href="category.html"><?= $category['cat_name'] ?></a></li>
                <?php } ?>
            </ul>
        </nav>

        <!-- social icons -->
        <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

    <!-- JAVA SCRIPTS -->
    <script src="assets/frontend/js/jquery.min.js"></script>
    <script src="assets/frontend/js/popper.min.js"></script>
    <script src="assets/frontend/js/bootstrap.min.js"></script>
    <script src="assets/frontend/js/slick.min.js"></script>
    <script src="assets/frontend/js/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/frontend/js/custom.js"></script>

    <script src="assets/plugins/aos/aos.js"></script>
    <script>
      $(function() {
        AOS.init();
      });
    </script>   
    
</body>

</html>