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
        <section class="inner-intro bg-img17 light-color overlay-dark parallax parallax-background2">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Portfolio</h2>
                    <div class="page-breadcrumb">
                        <a href="portfolio">Home</a>/<span>Portfolio</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->

        <!-- Client Section -->
        <section id="clients" class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3>Happy Clients</h3>
                    </div>
                </div>
                <div class="spacer-75"></div>
                <div class="row">

                    <?php

                    $dir = "img/clients/*";
                    foreach(glob($dir) as $file) {
                      $pathinfo = pathinfo($file);
                        // echo $pathinfo['filename'].'.'.$pathinfo['extension'];
                      // print_r($pathinfo);
                      $filepath = "img/clients/".$pathinfo['filename'].'.'.$pathinfo['extension'];

                    ?>

                    <div class="col-md-4">
                        <img src="<?php echo $filepath;?>" class="center-block" />
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- Client Section -->

        <!-- Testimonials -->
        <section id="testimonial" class="overlay-dark80 dark-bg ptb ptb-sm-80" style="background-image: url('img/full/22.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="owl-carousel testimonial-carousel nf-carousel-theme white">
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">" Screenplify kiosks were exhibited throughout the TEDxKL event. It was synergistic to have the kiosks as directional guides, to display relevant information and even beautify the event area. Truly important use of space and I am very sure any event would find Screenplify kiosk a great addition. "</p>
                            <h6 class="quote-author">Jason Ng<span style="font-weight: 400;"> TEDxKL</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">" The Global Startup Youth used the Screenplify kiosks to share important information about the event with the participants and mentors. The kiosks were a pleasure to use and the team was very efficient in making updates and changes to the kiosks in a timely manner. We see it as a more 'green' solution at events and programs that facilitates intelligent information sharing inline with today's technology. "</p>
                            <h6 class="quote-author">Vani Dhakshinamoorthy<span style="font-weight: 400;"> Program Director of Global Startup Youth</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">" For a charity event I organised, I needed a method to convey a lot of information to the public quickly and easily. Screenplify kiosk was a very effective medium to do so for it harnessed the power of social media to keep my audience informed. The smooth navigation and ability to draw out contents from the kiosks makes them a must-have technology for events in this tech-hungry era. "</p>
                            <h6 class="quote-author">Chermaine Poo <span style="font-weight: 400;">Chermaine Poo's Cupcakes for Charity</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials -->


        <!-- Partners Section -->
        <section id="partners" class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3>Partners</h3>
                        <p class="lead">Screenplify partners with various business and technology companies to deliver top-of-the-line digital signage software solutions.</p>
                    </div>
                </div>
                <div class="spacer-75"></div>
                <div class="row">
                    <div class="partner-logo col-md-4 ">
                        <img src="img/partners/intel.png" class="center-block" />
                    </div>
                    
                    <div class="partner-logo col-md-4 ">
                        <img src="img/partners/focusmedia.png" class="center-block" />
                    </div>
                    
                    <div class="partner-logo col-md-4 ">
                        <img src="img/partners/vsign.png" class="center-block" />
                    </div>
                </div>
                
                <div class="spacer-30"></div>
                
                <div class="row">
                    <div class="partner-logo col-md-4 ">
                        <img src="img/partners/armodilo.png" class="center-block" />
                    </div>
                    <div class="partner-logo col-md-4 ">
                        <img src="img/partners/omniphics.png" class="center-block" />
                    </div>
                    <div class="partner-logo col-md-4 ">
                        <img src="img/partners/tpm.png" class="center-block" style="width: 270px;" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Partners Section -->

        <!-- Gallery Section -->
        <section id="gallery" class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3>Image Gallery</h3>
                        <p class="lead">We are always keen on taking on the challenge of bringing our client's ideas to life. Here's a view of some of our past digital signage projects.</p>
                    </div>
                    <div class="spacer-60"></div>
                    <div class="container pt-80">
                        <div class="row container-grid nf-col-3">

                            <?php
                            $caption_array = array(
                                    "mahsing" => "Screens for Mah Sing property offices and property expos",
                                    "mydin" => "In-store information kiosk and store guide for Mydin Hypermarkets",
                                    "spark" => "Liven up your conferences with spark screens!",
                                    "lakecity" => "Landscape kiosk for property showcase for Lakecity",
                                    "klims" => "Sticker-wrapped information kiosks at Kuala Lumpur International Motor Show",
                                    "ioiproperty" => "IOI Property Showcase landscape kiosk with light-up model",
                                    "homedec" => "Information kiosk at Homedec exhibitions",
                                    "gsy" => "Information kiosk at Global Startup Youth Conference"
                                );

                            $dir = "img/gallery/*";
                            foreach(glob($dir) as $file) {
                              $pathinfo = pathinfo($file);
                                // echo $pathinfo['filename'].'.'.$pathinfo['extension'];
                              // print_r($pathinfo);
                              $filename = $pathinfo['filename'].'.'.$pathinfo['extension'];

                            ?>

                            <div class="nf-item branding coffee spacing">
                                <div class="item-box">
                                    <a class="cbox-gallary1" href="img/gallery/<?php echo $filename; ?>" title="<?php echo $caption_array[$pathinfo['filename']]; ?>">
                                        <img alt="1" src="img/gallery/<?php echo $filename; ?>" class="item-container">
                                        <div class="item-mask">
                                            <div class="item-caption">
                                                <h5 class="white"><?php echo $caption_array[$pathinfo['filename']]; ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section -->

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
    <script src="js/plugin/instafeed.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jPushMenu.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script src="js/contact-form.js" type="text/javascript"></script>
</body>
</html>
