<?php

    include_once 'PostController.php';
    include_once 'CommentController.php';

    
    $post_id = $_GET['post-id'];

    $post_controller = new PostController();
    $post = $post_controller->getPost($post_id);

    $popular_posts = $post_controller->getPopularPosts();
    $categories = $post_controller->getCategories();

    if(($_SERVER['REQUEST_METHOD'] == 'POST')){

       $comment_controller =  new CommentController();
       $comment_controller->addComment();

    }

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
                                <a class="nav-link dropdown-toggle" href="/">Home</a>
                            </li>
                            <?php $i = 0 ?>
                            <?php foreach($categories as $category) { 
                                if($i < 3){?>
                                <li class="nav-item">
                                    <a class="nav-link" href="category.html"><?= $category['cat_name'] ?></a>
                                </li>
                            <?php }  $i++; } ?>
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
                                    <li class="list-inline-item"><a href="#"><?= $post[0]['cat_name'] ?></a></li>
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
                                        <a href="#"  class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#replyModal">Reply</a>
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
                                        <a href="#" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#replyModal">Reply</a>
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
                                        <a href="#" class="btn btn-default btn-sm" data-bs-toggle="modal" data-bs-target="#replyModal">Reply</a>
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

                                <input type="hidden" name="post_id"  value = "<?= $post_id ?>"/>

                                <div class="row">

                                    <div class="column col-md-12">
                                        <!-- Comment textarea -->
                                        <div class="form-group">
                                            <textarea name="comment_body" id="comment_body" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="column col-md-6">
                                        <!-- Email input -->
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="visitor_email" name="visitor_email" placeholder="Email address" required="required">
                                        </div>
                                    </div>

                                    <div class="column col-md-6">
                                        <!-- Name input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="visitor_name" id="visitor_website" placeholder="Website" required="required">
                                        </div>
                                    </div>

                                    <div class="column col-md-12">
                                        <!-- Email input -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="InputName" name="com_visitor_name" placeholder="Your name" required="required">
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
                                    <?php foreach($popular_posts as $popular_post){ ?>
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
                                                <h6 class="post-title my-0"><a href="blog-single.html"><?= $popular_post['post_title'] ?></a></h6>
                                                <ul class="meta list-inline mt-1 mb-0">
                                                    <li class="list-inline-item"><?= $popular_post['created_at'] ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <!-- widget categories -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Topics</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <?php foreach($categories as $category){ ?>
                                            <li><a href="#"><?=  $category['cat_name'] ?></a><span><?=  $category['num_of_posts'] ?></span></li>
                                        <?php } ?>
                                    </ul>
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
    <!-- <div id="snackbar">Your comment has been sent and is pending approval by admin</div> -->
    
    <!-- Modal -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            <!-- comment form -->
            <div class="comment-form rounded bordered padding-30">

                <form id="comment-form" class="comment-form" method="post">

                    <div class="messages"></div>

                    <input type="hidden" name="post_id"  value = "<?= $post_id ?>"/>

                    <div class="row">

                        <div class="column col-md-12">
                            <!-- Comment textarea -->
                            <div class="form-group">
                                <textarea name="comment_body" id="comment_body" class="form-control" rows="4" placeholder="Your comment here..." required="required"></textarea>
                            </div>
                        </div>

                        <div class="column col-md-6">
                            <!-- Email input -->
                            <div class="form-group">
                                <input type="email" class="form-control" id="visitor_email" name="visitor_email" placeholder="Email address" required="required">
                            </div>
                        </div>

                        <div class="column col-md-6">
                            <!-- Name input -->
                            <div class="form-group">
                                <input type="text" class="form-control" name="visitor_name" id="visitor_website" placeholder="Website" required="required">
                            </div>
                        </div>

                        <div class="column col-md-12">
                            <!-- Email input -->
                            <div class="form-group">
                                <input type="text" class="form-control" id="InputName" name="com_visitor_name" placeholder="Your name" required="required">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn  btn-default">Save changes</button>
        </div>
        </div>
    </div>
    </div>




    <!-- JAVA SCRIPTS -->
    <script src="assets/frontend/js/jquery.min.js"></script>
    <script src="assets/frontend/js/popper.min.js"></script>
    <script src="assets/frontend/js/bootstrap.min.js"></script>
    <script src="assets/frontend/js/slick.min.js"></script>
    <script src="assets/frontend/js/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/frontend/js/custom.js"></script>

    <script>
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
    </script>


</body>

</html>