<?php 

include('db.php'); 
if($_GET){
    $_GET['title'] ? $title = $_GET['title'] : '';
    // echo $title;
    // exit;
    $sql="SELECT*FROM tbl_post WHERE url_title = '".$title."'";
    $result=mysql_query($sql) or die (mysql_error());
    
    $row=mysql_fetch_array($result);
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Screenplify - Complete Digital Signage Software Solution</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="../css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../css/app-logo-animate.css" rel="stylesheet" type="text/css" />

</head>

<body class="full-intro background--dark">

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Site Wraper -->
    <div class="wrapper">

        <?php include('header.php'); ?>

        <!-- CONTENT --------------------------------------------------------------------------------->

        <!-- Intro Section -->
        <section class="inner-intro bg-img21 overlay-dark light-color parallax parallax-background2">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Blog</h2>
                    <div class="page-breadcrumb">
                        <a href="index">Home</a>/<a href="/screenplify2/blog">Blog</a>/<span><?php echo $row['title']; ?></span>
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
                            <div class="post-meta"><span>by <a><?php echo $row['author']; ?></a>,</span> <span><?php echo date("F j, Y", $row['created_datetime']); ?></span></div>

                            <div class="post-header">
                                <h2><?php echo $row['title']; ?>.</h2>
                            </div>

                            <div class="post-media">
                                <img alt="" src="../img/full/28.jpg">
                            </div>

                            <div class="post-entry">
                                <?php echo $row['post_html']; ?>
                            </div>

                            <!-- <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div> -->
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

        <!--Footer Section-->
        <footer id="footer" class="footer ptb-80 gray-bg">
            <div class="container text-center">

                <!-- Copyright -->
                <p class="copyright mb-25">
                    &copy; 2016 <a href="http://www.ounch.com"><b>Ounch Sdn Bhd</b></a>. All Rights Reserved.<br>
                </p>
                <!-- Copyright -->

                <!-- Social -->
                <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/ounch" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/screenplify" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/ounchupdates" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
                <!-- End Social -->

            </div>
        </footer>
        <!-- End Footer Section-->

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
