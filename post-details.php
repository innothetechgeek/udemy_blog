<?php

    include_once 'PostController.php';

    
    $post_id = $_GET['post-id'];

    $post_controller = new PostController();
    $post = $post_controller->getPost($post_id);

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
    <link rel="stylesheet" href="assets/frontendcss/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/frontendcss/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/frontendcss/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/frontend/css/style.css" type="text/css" media="all">

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
        <header class="header-default">
            <nav class="navbar navbar-expand-lg">
                <div class="container-xl">
                    <!-- site logo -->
                    <a class="navbar-brand" href="index.html"><img width="118" height="26" src="assets/brand/blue.png" alt="logo" /></a>

                    <div class="collapse navbar-collapse">
                        <!-- menus -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="index.html">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.html">Magazine</a></li>
                                    <li><a class="dropdown-item" href="personal.html">Personal</a></li>
                                    <li><a class="dropdown-item" href="personal-alt.html">Personal Alt</a></li>
                                    <li><a class="dropdown-item" href="minimal.html">Minimal</a></li>
                                    <li><a class="dropdown-item" href="classic.html">Classic</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Lifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="category.html">Inspiration</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="category.html">Category</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="blog-single-alt.html">Blog Single Alt</a></li>
                                    <li><a class="dropdown-item" href="about.html">About</a></li>
                                    <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- header right section -->
                    <div class="header-right">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <!-- header buttons -->
                        <div class="header-buttons">
                            <button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
                            <button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- section main content -->
        <section class="main-content mt-3">
            <div class="container-xl">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#"><?= $post[0]['cat_name'] ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $post[0]['post_title'] ?></li>
                    </ol>
                </nav>

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <!-- post single -->
                        <div class="post post-single">
                            <!-- post header -->
                            <div class="post-header">
                                <h1 class="title mt-0 mb-3"><?= $post[0]['post_title'] ?></h1>
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"><img src="assets/frontend/images/other/author-sm.png" class="author" alt="author" />Katen Doe</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">Trending</a></li>
                                    <li class="list-inline-item">29 March 2021</li>
                                </ul>
                            </div>
                            <!-- featured image -->
                            <div class="featured-image">
                                <img src="post_images/post_<?=$post[0]['post_id']?>/<?=$post[0]['post_image'] ?>" alt="post-title" />
                            </div>
                            <!-- post content -->
                            <div class="post-content clearfix">
                                <?= $post[0]['post_content'] ?>
                            </div>
                            <!-- post bottom section -->
                            <div class="post-bottom">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-6 col-12 text-center text-md-start">
                                        <!-- tags -->
                                        <a href="#" class="tag">#Trending</a>
                                        <a href="#" class="tag">#Video</a>
                                        <a href="#" class="tag">#Featured</a>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <!-- social icons -->
                                        <ul class="social-icons list-unstyled list-inline mb-0 float-md-end">
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="spacer" data-height="50"></div>

                        <div class="about-author padding-30 rounded">
                            <div class="thumb">
                                <img src="assets/frontend/images/other/avatar-about.png" alt="Katen Doe" />
                            </div>
                            <div class="details">
                                <h4 class="name"><a href="#">Katen Doe</a></h4>
                                <p>Hello, I’m a content writer who is fascinated by content fashion, celebrity and lifestyle. She helps clients bring the right content to the right people.</p>
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
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Comments (3)</h3>
                            <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                        </div>
                        <!-- post comments -->
                        <div class="comments bordered padding-30 rounded">

                            <ul class="comments">
                                <!-- comment item -->
                                <li class="comment rounded">
                                    <div class="thumb">
                                        <img src="assets/frontend/images/other/comment-1.png" alt="John Doe" />
                                    </div>
                                    <div class="details">
                                        <h4 class="name"><a href="#">John Doe</a></h4>
                                        <span class="date">Jan 08, 2021 14:41 pm</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae odio ut tortor fringilla cursus sed quis odio.</p>
                                        <a href="#" class="btn btn-default btn-sm">Reply</a>
                                    </div>
                                </li>
                                <!-- comment item -->
                                <li class="comment child rounded">
                                    <div class="thumb">
                                        <img src="assets/frontend/images/other/comment-2.png" alt="John Doe" />
                                    </div>
                                    <div class="details">
                                        <h4 class="name"><a href="#">Helen Doe</a></h4>
                                        <span class="date">Jan 08, 2021 14:41 pm</span>
                                        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                                        <a href="#" class="btn btn-default btn-sm">Reply</a>
                                    </div>
                                </li>
                                <!-- comment item -->
                                <li class="comment rounded">
                                    <div class="thumb">
                                        <img src="assets/frontend/images/other/comment-3.png" alt="John Doe" />
                                    </div>
                                    <div class="details">
                                        <h4 class="name"><a href="#">Anna Doe</a></h4>
                                        <span class="date">Jan 08, 2021 14:41 pm</span>
                                        <p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                                        <a href="#" class="btn btn-default btn-sm">Reply</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Leave Comment</h3>
                            <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                        </div>
                        <!-- comment form -->
                        <div class="comment-form rounded bordered padding-30">

                            <form id="comment-form" class="comment-form" method="post">

                                <div class="messages"></div>

                                <div class="row">

                                    <div class="column col-md-12">
                                        <!-- Comment textarea -->
                                        <div class="form-group">
                                            <textarea name="InputComment" id="InputComment" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="column col-md-6">
                                        <!-- Email input -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required="required">
                                        </div>
                                    </div>

                                    <div class="column col-md-6">
                                        <!-- Name input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="InputWeb" id="InputWeb" placeholder="Website" required="required">
                                        </div>
                                    </div>

                                    <div class="column col-md-12">
                                        <!-- Email input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Your name" required="required">
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button>
                                <!-- Submit Button -->

                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <div class="widget rounded">
                                <div class="widget-about data-bg-image text-center" data-bg-image="assets/frontend/images/map-bg.png">
                                    <img width="118" height="26" src="assets/brand/blue.png" alt="logo" class="mb-4" />
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
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="assets/frontend/images/posts/tabs-1.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">2</span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="assets/frontend/images/posts/tabs-2.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item">29 March 2021</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- post -->
                                    <div class="post post-list-sm circle">
                                        <div class="thumb circle">
                                            <span class="number">3</span>
                                            <a href="blog-single.html">
                                                <div class="inner">
                                                    <img src="assets/frontend/images/posts/tabs-3.jpg" alt="post-title" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h6>
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
                                    <h3 class="widget-title">Explore Topics</h3>
                                    <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Lifestyle</a><span>(5)</span></li>
                                        <li><a href="#">Inspiration</a><span>(2)</span></li>
                                        <li><a href="#">Fashion</a><span>(4)</span></li>
                                        <li><a href="#">Politic</a><span>(1)</span></li>
                                        <li><a href="#">Trending</a><span>(7)</span></li>
                                        <li><a href="#">Culture</a><span>(3)</span></li>
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

                            <!-- widget advertisement -->
                            <div class="widget no-container rounded text-md-center">
                                <span class="ads-title">- Sponsored Ad -</span>
                                <a href="#" class="widget-ads">
                                    <img src="assets/frontend/images/ads/ad-360.png" alt="Advertisement" />
                                </a>
                            </div>

                            <!-- widget tags -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Tag Clouds</h3>
                                    <img src="assets/frontend/images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <a href="#" class="tag">#Trending</a>
                                    <a href="#" class="tag">#Video</a>
                                    <a href="#" class="tag">#Featured</a>
                                    <a href="#" class="tag">#Gallery</a>
                                    <a href="#" class="tag">#Celebrities</a>
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
            <img width="118" height="26" src="assets/brand/blue.png" alt="Katen" />
        </div>

        <!-- menu -->
        <nav>
            <ul class="vertical-menu">
                <li class="active">
                    <a href="index.html">Home</a>
                    <ul class="submenu">
                        <li><a href="index.html">Magazine</a></li>
                        <li><a href="personal.html">Personal</a></li>
                        <li><a href="personal-alt.html">Personal Alt</a></li>
                        <li><a href="minimal.html">Minimal</a></li>
                        <li><a href="classic.html">Classic</a></li>
                    </ul>
                </li>
                <li><a href="category.html">Lifestyle</a></li>
                <li><a href="category.html">Inspiration</a></li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="submenu">
                        <li><a href="category.html">Category</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="blog-single-alt.html">Blog Single Alt</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
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

</body>

</html>