﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mazel - Multiprapose Html template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <link rel="icon" type="image/png" href="../img/favicon.png">
    <link rel="apple-touch-icon" href="../img/favicon.png">

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />

</head>

<body class="full-intro background--dark">

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Sidemenu -->
    <section class="side-menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
        <a class="menu-close toggle-menu menu-right push-body"><i class="ion ion-android-close"></i></a>
        <h5 class="white">Sign In</h5>
        <div class="sign-in">
            <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Email" value="" />
            <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Password" value="" />
            <input type="submit" class="btn btn-md btn-color-b form-full" value="Sign In" />
            <a>New Customer?</a>
        </div>
        <ul>
            <li><a class="all-demos-link" target="_blank" href="index.html">Main Demo Page</a></li>
            <li><a href="home.html">Home Default</a></li>
            <li><a href="portfolio-grid-2col.html">Portfolio</a></li>
            <li><a href="login-register.html">Login & Signup</a></li>
            <li><a href="faq-1.html">FAQ</a></li>
            <li><a href="about-1.html">About</a></li>
            <li><a href="service-1.html">Service</a></li>
            <li><a href="blog-grid-3col.html">Blog</a></li>
            <li><a href="404-error-1.html">404 Error</a></li>
            <li><a href="shop-checkout.html">Shopping Cart</a></li>
            <li><a href="contact-1.html">Contact Us</a></li>
        </ul>
    </section>
    <!--End Sidemenu -->

    <!-- Search menu Top -->
    <section class=" top-search-bar cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">
        <div class="container">
            <div class="search-wraper">
                <input type="text" class="input-sm form-full" placeholder="Search..." name="search" />
                <a class="search-bar-icon"><i class="fa fa-search"></i></a>
                <a class="bar-close toggle-menu menu-top push-body"><i class="ion ion-android-close"></i></a>
            </div>
        </div>
    </section>
    <!--End Search menu Top -->

    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="header">
            <div class="container">

                <!-- logo -->
                <div class="logo">
                    <a href="home.html">
                        <img class="l-black" src="../img/logo-black.png" />
                        <img class="l-white" src="../img/logo-white.png" />
                        <img class="l-color" src="../img/logo-color.png" />
                    </a>
                </div>
                <!--End logo-->

                <!-- Rightside Menu (Search, Cart, Bart icon) -->
                <div class="side-menu-btn">
                    <ul>
                        <!-- Search Icon -->
                        <li class="">
                            <a class="right-icon search toggle-menu menu-top push-body"><i class="fa fa-search"></i></a>
                        </li>
                        <!-- End Search Icon -->

                        <!-- Cart Icon -->
                        <li class="">
                            <a href="shop-checkout.html" class="right-icon cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="cart-notification">2</span>
                            </a>
                            <!-- Cart Dropdown List -->
                            <div class="cart-dropdown">
                                <ul class="cart-list">
                                    <li class="light-color">
                                        <a class="close-cart-list"><i class="fa fa-times-circle"></i></a>
                                        <div class="media">
                                            <a class="pull-left">
                                                <img src="../img/product/02.jpg" alt="fashion" /></a>
                                            <div class="media-body">
                                                <h6><a>Fashion Model New /01</a></h6>
                                                <p>$399.00</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="light-color">
                                        <a class="close-cart-list"><i class="fa fa-times-circle"></i></a>
                                        <div class="media">
                                            <a class="pull-left">
                                                <img src="../img/product/06.jpg" alt="fashion" /></a>
                                            <div class="media-body">
                                                <h6><a>Fashion Model New /02</a></h6>
                                                <p>$399.00</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <p class="cart-sub-totle"><span class="pull-left">Cart Subtotal</span><span class="pull-right totle"><strong>$798.00</strong></span></p>
                                <div class="clearfix"></div>
                                <div class="cart-checkout-btn">
                                    <a href="shop-checkout.html" class="btn btn-md btn-color-b form-full checkout">Checkout</a>
                                </div>
                            </div>
                            <!-- End Cart Dropdown List -->
                        </li>
                        <!-- End Cart Icon -->

                        <!--Sidebar Menu Icon-->
                        <li class="">
                            <a class="right-icon bar-icon toggle-menu menu-right push-body"><i class="fa fa-bars"></i></a>
                        </li>
                        <!-- End Sidebar Menu Icon-->
                    </ul>
                </div>
                <!-- End Rightside Menu -->

                <!-- Navigation Menu -->
                <nav class='navigation'>
                    <ul>
                        <li>
                            <a href="home.html">Home</a>
                            <!-- Nav Dropdown -->
                            <ul class="nav-dropdown">
                                <li class="nav-has-sub">
                                    <a href='#'>Multi Page</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="home.html">Default</a></li>
                                        <li><a href="home-video.html">Intro Video</a></li>
                                        <li><a href="home-youtube.html">Intro Youtube</a></li>
                                        <li><a href="home-static.html">Intro Static</a></li>
                                        <li><a href="home-agency-grid.html">Agency Grid</a></li>
                                        <li><a href="home-agency-masonry.html">Agency Masonry</a></li>
                                        <li><a href="home-fullwidth-slider.html">Fullwidth Slider</a></li>
                                        <li><a href="home-text-rotator1.html">Text Rotator1</a></li>
                                        <li><a href="home-text-rotator2.html">Text Rotator2</a></li>
                                        <li><a href="home-personal.html">Personal</a></li>
                                        <li><a href="home-fullscreen.html">Full Screen</a></li>
                                        <li><a href="home-canvas-pattern.html">Canvas Pattern</a></li>
                                        <li><a href="home-section-scroll.html">Page Section Scroll</a></li>
                                        <li><a href="shop-2col.html">Shop</a></li>
                                        <li><a href="home-coming-soon.html">Comming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="#">One Page</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="onepage.html">Default</a></li>
                                        <li><a href="onepage-personal.html">Personal</a></li>
                                        <li><a href="onepage-video.html">Video</a></li>
                                        <li><a href="onepage-youtube.html">Youtube</a></li>
                                        <li><a href="onepage-static.html">Static</a></li>
                                        <li><a href="onepage-fullwidth-slider.html">Fullwidth</a></li>
                                        <li><a href="onepage-text-rotator1.html">Text Rotator1</a></li>
                                        <li><a href="onepage-text-rotator2.html">Text Rotator2</a></li>
                                        <li><a href="onepage-canvas-pattern.html">Canvas Pattern</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End Nav Dropdown -->
                        </li>

                        <li class="nav-has-sub">
                            <a>Page</a>
                            <!-- Nav Dropdown -->
                            <ul class="nav-dropdown">
                                <li class="nav-has-sub">
                                    <a href="#">About Us</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="about-1.html">About 1</a></li>
                                        <li><a href="about-2.html">About 2</a></li>
                                        <li><a href="about-3.html">About 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="#">Service</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="service-1.html">Service 1</a></li>
                                        <li><a href="service-2.html">Service 2</a></li>
                                        <li><a href="service-3.html">Service 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="#">Contact Us</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="contact-1.html">Contact 1</a></li>
                                        <li><a href="contact-2.html">Contact 2</a></li>
                                        <li><a href="contact-3.html">Contact 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="#">Faq</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="faq-1.html">Faq 1</a></li>
                                        <li><a href="faq-2.html">Faq 2</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="#">Login / Register</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login-register.html">Login / Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="pricing.html">Pricing</a></li>

                                <li class="nav-has-sub">
                                    <a href="#">404 Error</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="404-error-1.html">404 page1</a></li>
                                        <li><a href="404-error-2.html">404 page2</a></li>
                                    </ul>
                                </li>
                                <li><a href="sidebar-left.html">Sidebar Left</a></li>
                                <li><a href="sidebar-right.html">Sidebar Right</a></li>
                                <li><a href="blank-page.html">Blank Page</a></li>

                            </ul>
                            <!-- End Nav Dropdown-->
                        </li>
                        <li>
                            <a>Portfolio</a>
                            <!-- Nav Dropdown -->
                            <ul class="nav-dropdown">

                                <li class="nav-has-sub">
                                    <a href='#'>Grid</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="portfolio-grid-2col.html">2 Columns</a></li>
                                        <li><a href="portfolio-grid-2col-no_spacing.html">2 Columns no-Spacing</a></li>
                                        <li><a href="portfolio-grid-3col.html">3 Columns</a></li>
                                        <li><a href="portfolio-grid-3col-no_spacing.html">3 Columns no-Spacing</a></li>
                                        <li><a href="portfolio-grid-4col.html">4 Columns</a></li>
                                        <li><a href="portfolio-grid-4col-no_spacing.html">4 Columns no-Spacing</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="">Masonry</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="portfolio-masonry-2col.html">2 Columns</a></li>
                                        <li><a href="portfolio-masonry-2col-no_spacing.html">2 Columns no-Spacing</a></li>
                                        <li><a href="portfolio-masonry-3col.html">3 Columns</a></li>
                                        <li><a href="portfolio-masonry-3col-no_spacing.html">3 Columns no-Spacing</a></li>
                                        <li><a href="portfolio-masonry-4col.html">4 Columns</a></li>
                                        <li><a href="portfolio-masonry-4col-no_spacing.html">4 Columns no-Spacing</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="">wide</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="portfolio-wide-grid.html">Grid</a></li>
                                        <li><a href="portfolio-wide-grid-no_spacing.html">Grid no-Spacing</a></li>
                                        <li><a href="portfolio-wide-masonry.html">Masonry</a></li>
                                        <li><a href="portfolio-wide-masonry-no_spacing.html">Masonry no-Spacing</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href='#'>Classical</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="portfolio-classical-spacing.html">Spacing</a></li>
                                        <li><a href="portfolio-classical-no_spacing.html">no-Spacing</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href='#'>Lightbox</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="portfolio-lightbox-grid.html">Grid</a></li>
                                        <li><a href="portfolio-lightbox-masonry.html">Masonry</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="">Single</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="portfolio-single1.html">Single 1</a></li>
                                        <li><a href="portfolio-single2.html">Single 2</a></li>
                                        <li><a href="portfolio-single3.html">Single 3</a></li>
                                        <li><a href="portfolio-single4.html">Single 4</a></li>
                                        <li><a href="portfolio-single5-slider.html">Single 5 - Slider</a></li>
                                        <li><a href="portfolio-single6-video.html">Single 6 - Video</a></li>
                                        <li><a href="portfolio-single7-youtube.html">Single 7 - youtube</a></li>
                                        <li><a href="portfolio-single8-vimeo.html">Single 8 - vimeo</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End Nav Dropdown -->
                        </li>
                        <li>
                            <a>Blog</a>
                            <!-- Nav Dropdown -->
                            <ul class="nav-dropdown">

                                <li class="nav-has-sub">
                                    <a href=''>Grid</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="blog-grid-2col.html">2 Columns</a></li>
                                        <li><a href="blog-grid-2col-sidebar.html">2 Columns - sidebar</a></li>
                                        <li><a href="blog-grid-3col.html">3 Columns</a></li>
                                    </ul>
                                </li>

                                <li class="nav-has-sub">
                                    <a href="">Masonry</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="blog-masonry-2col.html">2 Columns</a></li>
                                        <li><a href="blog-masonry-2col-sidebar.html">2 Columns - sidebar</a></li>
                                        <li><a href="blog-masonry-3col.html">3 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="">One Columns</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="blog-1col.html">no-sidebar</a></li>
                                        <li><a href="blog-1col-sidebar.html">with sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-has-sub">
                                    <a href="">Blog Detail</a>
                                    <ul class="nav-sub-dropdown">
                                        <li><a href="blog-single-image-post.html">Image Post</a></li>
                                        <li><a href="blog-single-slider-post.html">Slider Post</a></li>
                                        <li><a href="blog-single-video-post.html">Video Post</a></li>
                                        <li><a href="blog-single-audio-post.html">Audio Post</a></li>
                                        <li><a href="blog-single-youtube-post.html">Youtube Post</a></li>
                                        <li><a href="blog-single-vimeo-post.html">Vimeo Post</a></li>
                                        <li><a href="blog-single-quote-post.html">Quote Post</a></li>
                                    </ul>
                                </li>

                            </ul>
                            <!-- End Nav Dropdown -->
                        </li>
                        <li>
                            <a>Elements</a>
                            <!-- Nav Dropdown -->
                            <ul class="nav-dropdown">
                                <li><a href="element-components.html">Components</a></li>
                                <li><a href="element-tabs-and-accordian.html">Tabs & Accordian</a></li>
                                <li><a href="element-slider.html">Slider</a></li>
                                <li><a href="element-team.html">Team</a></li>
                                <li><a href="element-pricing.html">Pricing</a></li>
                                <li><a href="element-video-and-audio.html">Video / Audio</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                            </ul>
                            <!-- End Nav Dropdown -->
                        </li>
                        <li>
                            <a href="">Shop</a>
                            <!-- Nav Dropdown -->
                            <ul class="nav-dropdown">
                                <li class=""><a href="shop-2col.html">2 Columns</a></li>
                                <li class=""><a href="shop-3col.html">3 Columns</a></li>
                                <li class=""><a href="shop-4col.html">4 Columns</a></li>
                                <li class=""><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                <li class=""><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                <li class=""><a href="shop-detail.html">Shop Detail</a></li>
                                <li class=""><a href="shop-checkout.html">Checkout</a></li>
                            </ul>
                            <!-- End Nav Dropdown -->
                        </li>
                    </ul>
                </nav>
                <!--End Navigation Menu -->

            </div>
        </header>
        <!-- END HEADER -->

        <!-- CONTENT --------------------------------------------------------------------------------->

        <!-- Intro Section -->
        <section class="inner-intro bg-img21 overlay-dark light-color parallax parallax-background2">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Blog</h2>
                    <div class="page-breadcrumb">
                        <a>Home</a>/<a>Blog</a>/<span>Image Post</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Blog Post Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <!-- Post Bar -->
                    <div class="col-lg-9 col-md-9 blog-post-hr">
                        <div class="blog-post mb-30">
                            <div class="post-meta"><span>by <a>John Doe</a>,</span> <span>March 16, 2015</span></div>

                            <div class="post-header">
                                <h2>Maecenas nec odio ante varcy tincidunt.</h2>
                            </div>

                            <div class="post-media">
                                <img alt="" src="../img/full/28.jpg">
                            </div>

                            <div class="post-entry">
                                <p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                <blockquote>
                                    We're not leaving here without Buster, man. Leave no crash-test dummy behind nihil impedit quo minus id quod maxime placeat facere!
                                </blockquote>
                                <p class="lead">Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                <ul>
                                    <li>Excepturi sint occaecati cupiditate</li>
                                    <li>Molestias excepturi sint</li>
                                    <li>Similique sunt in culpa qui officia</li>
                                    <li>Deserunt mollitia animi</li>
                                </ul>
                                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            </div>

                            <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                        </div>

                        <hr />

                        <div class="post-author">
                            <div class="post-author-img pull-left">
                                <img alt="author" src="../img/user-av.jpg">
                            </div>
                            <div class="post-author-details pull-left">
                                <h6>John Doe</h6>
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                </ul>

                            </div>
                        </div>

                        <hr />

                        <div class="clearfix"></div>

                        <div class="post-comment mtb-30">
                            <h4>Comments <span class="comment-numb">(2)</span></h4>
                            <ul class="comment-list mt-30">
                                <li>
                                    <div class="comment-avatar">
                                        <img src="../img/user-av.jpg">
                                    </div>
                                    <div class="">
                                        <div class="comment-detail">
                                            <h6>John Doe</h6>
                                            <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                            <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                        </div>

                                        <div class="comment-reply">
                                            <div class="comment-avatar">
                                                <img src="../img/user-av.jpg">
                                            </div>
                                            <div class="">
                                                <div class="comment-detail">
                                                    <h6>John Doe</h6>
                                                    <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                                    <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comment-reply">
                                            <div class="comment-avatar">
                                                <img src="../img/user-av.jpg">
                                            </div>
                                            <div class="">
                                                <div class="comment-detail">
                                                    <h6>John Doe</h6>
                                                    <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                                    <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="comment-avatar">
                                        <img src="../img/user-av.jpg">
                                    </div>
                                    <div class="">
                                        <div class="comment-detail">
                                            <h6>John Doe</h6>
                                            <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                            <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="mtb-60">
                            <h4>Leave a comment</h4>
                            <div class="row mt-30">
                                <form>
                                    <div>
                                        <div class="col-md-4">
                                            <input type="text" class="input-lg form-full" value="" placeholder="Name" name="name" id="name" required />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" class="input-lg form-full" value="" placeholder="Email" name="email" id="email2" required />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="input-lg form-full" value="" placeholder="Website" name="website" id="website" required />
                                        </div>
                                        <div class="col-md-12">
                                            <textarea placeholder="Message" name="message" id="message" class="form-full" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-lg btn-black">Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                    <!-- End Post Bar -->

                    <!-- Sidebar -->
                    <div class="col-lg-3 col-md-3 mt-sm-30">

                        <div class="sidebar-widget">
                            <h5>Search</h5>
                            <div class="widget-search">
                                <input class="form-full input-lg" type="text" value="" placeholder="Search Here" name="search" id="wid-search">
                                <input type="submit" value="" name="email" id="wid-s-sub">
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h5>Categories</h5>
                            <hr>
                            <ul>
                                <li><a>Photography</a></li>
                                <li><a>Web Design</a></li>
                                <li><a>Lifestyle</a></li>
                                <li><a>Responsive</a></li>
                                <li><a>MultiPurpose Theme</a></li>
                                <li><a>Agency</a></li>
                                <li><a>Portfolio</a></li>
                            </ul>
                        </div>

                        <div class="sidebar-widget">
                            <h5>Recent Post</h5>
                            <hr>
                            <ul class="widget-post">
                                <li>
                                    <a class="widget-post-media">
                                        <img src="../img/portfolio/21.jpg">
                                    </a>
                                    <div class="widget-post-info">
                                        <h6><a>veritatis et quasi</a></h6>
                                        <div class="post-meta"><span>March 16, 2015</span></div>
                                    </div>
                                </li>
                                <li>
                                    <a class="widget-post-media">
                                        <img src="../img/portfolio/32.jpg">
                                    </a>
                                    <div class="widget-post-info">
                                        <h6><a>Sed fringilla mauris</a></h6>
                                        <div class="post-meta"><span>March 09, 2015</span></div>
                                    </div>
                                </li>
                                <li>
                                    <a class="widget-post-media">
                                        <img src="../img/portfolio/31.jpg">
                                    </a>
                                    <div class="widget-post-info">
                                        <h6><a>harum quidem rerum</a></h6>
                                        <div class="post-meta"><span>March 04, 2015</span></div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="sidebar-widget">
                            <h5>popular Tags</h5>
                            <hr>
                            <ul class="widget-tag">
                                <li><a>Art</a></li>
                                <li><a>Business</a></li>
                                <li><a>Design</a></li>
                                <li><a>Graphic</a></li>
                                <li><a>fashion</a></li>
                                <li><a>Model</a></li>
                                <li><a>Photography</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
        </section>
        <!-- End Blog Post Section -->

        <!-- Post Next Prev Bar -->
        <section class="mb-60">
            <div class="container">
                <div class="item-nav">
                    <a href="" class="item-prev">
                        <div class="prev-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="item-prev-text xs-hidden">
                            <h6>Prev Post</h6>
                        </div>
                    </a>

                    <a class="item-all-view">
                        <h6>Blog Page</h6>
                    </a>

                    <a href="" class="item-next">
                        <div class="next-btn"><i class="fa fa-angle-right"></i></div>
                        <div class="item-next-text xs-hidden">
                            <h6>Next Post</h6>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Post Next Prev Bar -->

        <!-- End CONTENT ------------------------------------------------------------------------------>

        <!-- FOOTER -->
        <footer class="footer pt-80">
            <div class="container">
                <div class="row mb-60">
                    <!-- Logo -->
                    <div class="col-md-3 col-sm-3 col-xs-12 mb-xs-30">
                        <a class="footer-logo" href="home.html">
                            <img src="../img/logo-black.png" /></a>
                    </div>
                    <!-- Logo -->

                    <!-- Newsletter -->
                    <div class="col-md-4 col-sm-5 col-xs-12 mb-xs-30">
                        <div class="newsletter">
                            <form>
                                <input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
                                <button class="newsletter-btn btn btn-xs btn-white" type="submit" value=""><i class="fa fa-angle-right mr-0"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- End Newsletter -->

                    <!-- Social -->
                    <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-12">
                        <ul class="social">
                            <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Social -->
                </div>
                <!--Footer Info -->
                <div class="row footer-info mb-60">
                    <div class="col-md-3 col-sm-12 col-xs-12 mb-sm-30">
                        <p class="mb-xs-0">Our ante tincidunt tempus, Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                        <a class="btn-link-a" href="about-1.html">Read More</a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30 mb-xs-0">
                        <ul class="link">
                            <li><a href="blog-grid-3col.html">Blog</a></li>
                            <li><a href="portfolio-grid-3col.html">Portfolio</a></li>
                            <li><a href="login-register.html">Login & Signup</a></li>
                            <li><a href="faq-1.html">FAQ</a></li>
                            <li><a href="about-1.html">About</a></li>
                            <li><a href="service-1.html">Service</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 mb-sm-30">
                        <ul class="link">
                            <li><a href="contact-1.html">Contact Us</a></li>
                            <li><a href="shop-checkout.html">Shopping Cart</a></li>
                            <li><a href="404-error-1.html">404 Error</a></li>
                            <li><a href="home.html">Home</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <p>502, DieSachbearbeiter, Schönhauser Allee, 167c10435 Berlin,Germany.</p>
                        <ul class="link-small">
                            <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>yourname@domain.com</a></li>
                            <li><a><i class="fa fa-phone left"></i>+40 (0) 012 345 6789</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Footer Info -->
            </div>

            <hr />

            <!-- Copyright Bar -->
            <section class="copyright ptb-60">
                <div class="container">
                    <p class="">
                        © 2015 <a><b>Mazel Template</b></a>. All Rights Reserved.
                        <br />
                        Template  by <a target="_blank" href="http://nileforest.com/"><b>nileforest</b></a>
                    </p>
                </div>
            </section>
            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="../js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="../js/plugin/background-check.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="../js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="../js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="../js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="../js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="../js/plugin/mediaelement-and-player.min.js"></script>
    <script src="../js/theme.js" type="text/javascript"></script>
    <script src="../js/navigation.js" type="text/javascript"></script>


</body>
</html>
