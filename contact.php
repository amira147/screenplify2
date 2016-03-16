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
        <section class="inner-intro bg-img8 light-color overlay-dark parallax parallax-background2">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Contact Us</h2>
                    <div class="page-breadcrumb">
                        <a href="index">Home</a>/<span>Contact</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- End Intro Section -->


        <!-- Contact Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3>Get In Touch</h3>
                        <p class="lead">Request a quotation or ask us your questions and we'll be happy to help.</p>
                    </div>
                </div>
                <div class="spacer-75"></div>
                <div class="row">
                    <div class="col-md-5 contact">
                        <div class="contact-box-left mb-45">
                            <div class="contact-icon-left"><i class="ion ion-ios-location"></i></div>
                            <h6>Additional info</h6>
                            <p>
                                Office 13 Resource Center, <br />
                                Technology Park Malaysia, <br />
                                Lebuhraya Puchong - Sg. Besi, <br />
                                57000 Bukit Jalil, Kuala Lumpur, <br />
                                Malaysia
                            </p>
                            <!-- <a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>yourname@domain.com</a><br /> -->
                            <!-- <a><i class="fa fa-phone left"></i>+40 (0) 012 345 6789</a> -->
                            <a href="mailto:info@omniphics.com"><i class="fa fa-envelope-o left"></i>info@omniphics.com</a><br />
                            <a href="tel:+60122989995"><i class="fa fa-phone left"></i>+60122989995</a>
                        </div>
                        <div class="contact-box-left mb-45">
                            <div class="contact-icon-left"><i class="ion ion-ios-clock"></i></div>
                            <h6>Business Hours</h6>
                            <p>
                                <span>Mon - Fri : 8.30am to 6pm</span>
                            </p>
                        </div>
                        <!-- <div class="contact-box-left mb-45">

                            <h6>Follow Us</h6>
                            <ul class="list-none social">
                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://instagram.com/screenplify" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://vimeo.com/" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <!-- Contact FORM -->
                        <form class="contact-form" id="contact" role="form">

                            <!-- IF MAIL SENT SUCCESSFULLY -->
                            <h6 class="successContent">
                                <i class="fa fa-check left" style="color: #5cb45d;"></i>Your message has been sent successfully.
                            </h6>
                            <!-- END IF MAIL SENT SUCCESSFULLY -->

                            <!-- MAIL SENDING UNSUCCESSFULL -->
                            <h6 class="errorContent">
                                <i class="fa fa-exclamation-circle left" style="color: #e1534f;"></i>There was a problem validating the form please check!
                            </h6>
                            <!-- END MAIL SENDING UNSUCCESSFULL -->

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="form-name" type="text" name="form-name" placeholder="Your Name" required autofocus>
                            </div>

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="form-email" type="email" name="form-email" placeholder="Email" required>
                            </div>

                            <div class="form-field-wrapper">
                                <input class="input-sm form-full" id="form-mobile" type="text" name="form-mobile" placeholder="Mobile">
                            </div>

                            <div class="form-field-wrapper">
                                <textarea class="form-full" id="form-message" rows="7" name="form-message" placeholder="Your Message" required></textarea>
                            </div>

                            <div class="form-field-wrapper">
                                <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" style="margin-bottom: 5px;">
                                <br/>
                                <input class="input-md form-full" id="6_letters_code" name="6_letters_code" type="text" placeholder="Enter Captcha Code">
                            </div>

                            <button class="btn btn-md btn-black form-full" type="submit" id="form-submit" name="submit">Send Message</button>
                        </form>
                        <!-- END Contact FORM -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->

        <!-- Map Section -->
        <section class="map">
            <div id="map"></div>
        </section>
        <!-- Map Section -->

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
    <script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script src="js/contact-form.js" type="text/javascript"></script>
</body>
</html>
