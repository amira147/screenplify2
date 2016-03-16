<?php 

include('db.php');
include('utility.php')

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
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/jPushMenu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="css/app-logo-animate.css" rel="stylesheet" type="text/css" />

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
        <section class="inner-intro bg-img11 overlay-dark light-color parallax parallax-background2">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Blog</h2>
                    <div class="page-breadcrumb">
                        <a href="index">Home</a>/<a>Blog</a>
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
                    <!-- Post Item -->
                    <div class="col-lg-9 col-md-9">
                        <div class="row">

                            <div class="col-md-12 blog-post-hr">

                                <?php
                                $sql="SELECT*FROM tbl_post";
                                $result=mysql_query($sql) or die (mysql_error());
                                
                                while ($row=mysql_fetch_array($result))
                                {
                                ?>
                                <div class="blog-post mb-30">
                                    <div class="post-media">
                                        <?php if($row['media_type']=="image"){ ?>
                                            <img src="<?php echo $row['media_link']; ?>" alt="" />
                                        <?php }else if($row['media_type']=="video"){ ?>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/S_kXyWhBB10" frameborder="0" allowfullscreen></iframe>
                                        <?php } ?>
                                        <!-- <div class="owl-carousel item1-carousel nf-carousel-theme">
                                            <div class="item">
                                                <img src="img/full/26.jpg" alt="" />
                                            </div>
                                            <div class="item">
                                                <img src="img/full/04.jpg" alt="" />
                                            </div>
                                            <div class="item">

                                                <img src="img/full/28.jpg" alt="" />
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="post-meta"><span>by <a><?php echo $row['author']; ?></a>,</span> <span><?php echo date("F j, Y", $row['created_datetime']); ?></span></div>
                                    <div class="post-header">
                                        <h4><a href="blog/<?php echo $row['url_title']; ?>"><?php echo $row['title']; ?></a></h4>
                                    </div>
                                    <div class="post-entry">
                                        <?php echo truncate($row['text'], 300); ?>
                                    </div>
                                    <!-- <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div> -->
                                    <div class="post-more-link pull-right"><a href="post/<?php echo $row['url_title']; ?>">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                                </div>

                                <?php
                                }  //end blog post foreach
                                ?>

                                <hr />

                            </div>

                        </div>

                        <!-- Pagination Nav -->
                        <!-- <div class="pagination-nav text-left mt-60 mtb-xs-30">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div> -->
                        <!-- End Pagination Nav -->

                    </div>
                    <!-- End Post Item -->

                    <!-- Sidebar -->
                    <div class="col-lg-3 col-md-3 mt-sm-60">

                        <div class="sidebar-widget">
                            <h5>Search</h5>
                            <div class="widget-search">
                                <input class="form-full input-lg" type="text" value="" placeholder="Search Here" name="search" id="wid-search">
                                <input type="submit" value="" name="email" id="wid-s-sub">
                            </div>
                        </div>

                        <!-- <div class="sidebar-widget">
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
                        </div> -->

                        <div class="sidebar-widget">
                            <h5>Recent Post</h5>
                            <hr>
                            <ul class="widget-post">
                                <?php

                                $sql="SELECT*FROM tbl_post";
                                $result=mysql_query($sql) or die (mysql_error());
                                mysql_close();
                                // print_r($result);
                                while ($row=mysql_fetch_array($result))
                                {
                                ?>
                                <li>
                                    <a class="widget-post-media">
                                        <img src="<?php echo $row['media_link']; ?>">
                                    </a>
                                    <div class="widget-post-info">
                                        <h6><a><?php echo $row['title']; ?></a></h6>
                                        <div class="post-meta"><span><?php echo date("F j, Y", $row['created_datetime']); ?></span></div>
                                    </div>
                                </li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>

                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
        </section>
        <!-- End Blog Post Section -->

        <?php include('action_quotation.php'); ?>

        <!-- End CONTENT ------------------------------------------------------------------------------>

        <?php include('footer.php'); ?>

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/background-check.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>


</body>
</html>
