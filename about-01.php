<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Car Intelli - The Best Car Intelli Recommander">
    <meta name="author" content="MS-Orbit Tech.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Car Intelli - The Best Car Intelli Recommander</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css">

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Style customizer -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" type="text/css" href="css/style-customizer.css">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-557RCPW');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="../../ns.html?id=GTM-557RCPW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--=================================
  loading -->

    <div id="loading">
        <div id="loading-center">
            <img src="images/loader.gif" alt="">
        </div>
    </div>

    <!--=================================
  loading -->


     <!--=================================
 header -->

 <header id="header" class="defualt">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="topbar-left text-lg-left text-center">
                            <ul class="list-inline">
                                <li> <i class="fa fa-envelope-o"> </i> support@carintelli.com</li>
                                <li> <i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="topbar-right text-lg-right text-center">
                            <ul class="list-inline">
                                <li> <i class="fa fa-phone"></i> +92 00 786 01</li>
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=================================
 mega menu -->

        <div class="menu">
            <!-- menu start -->
            <nav id="menu" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                        <a href="index-2.html"><img id="logo_img2" src="images/logo-light.png" alt="logo"> </a>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                <ul class="menu-links">
                                    <!-- active class -->
                                    <li><a href="index-3.php"> Home </a>

                                    </li>
                                    <li><a href="listing-01.php">Recommend Me a Car </a>
                                        
                                    </li>
                                    <li><a href="blog-fullwidth.php">Blog </a></li>
                                    <li><a href="contact-01.php">Contact </a>
                                    </li>
                                    <li><a href="javascript:void(0)"> More <i class="fa fa-angle-down fa-indicator"></i></a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel right-menu">
                                            <li><a href="about-01.php">About</a></li>
                                            <li><a href="service-01.php">Service</a></li>
                                            <li><a href="career.php">Career</a></li>
                                            <li><a href="team-02.php">Team</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                    </li>
                                    <?php
                                        if (isset($_SESSION['email'])){
                                    ?>
                                    <li><a href="logout.php"> Logout </a>
                                    </li>
                                    <?php
                                        }
                                        else{
                                            ?>
                                            <li><a href="login.php"> Login </a> 
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
            <!-- menu end -->
        </div>
    </header>


    <!--=================================
 header -->


    <!--=================================
 inner-intro -->

    <section class="inner-intro bg-1 bg-overlay-black-70">
        <div class="container">
            <div class="row text-center intro-title">
                <div class="col-md-12 text-md-left d-inline-block">
                    <h1 class="text-white">About us </h1>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 inner-intro -->


    <!--=================================
 welcome -->

    <section class="welcome-4 page-section-ptb white-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section-title">
                        <span>Welcome to </span>
                        <h2>the Car Intelli online</h2>
                        <div class="separator"></div>
                        <p>Car Intelli is the bestCar Recommender We provide everything you need to build an <strong>Amazing dealership website</strong> developed especially for car sellers, dealers or auto motor retailers. You can use this template for
                            creating website based on any framework language.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="0">
                        <div class="item">
                            <img class="img-fluid" src="images/car/15.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/car/16.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="images/car/17.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Dealer obcaecati adipisci vero lorem ipsum dolor sit amet, consectetur adipisicing elit. dolorum pariatur aut consectetur. Sit quisquam rerum corporis neque atque inventore nulla, quibusdam, ipsa suscipit aperiam reiciendis, ea odio?</p>
                    <br>
                    <p>Adipisicing ipsum dolor sit amet, consectetur elit. Obcaecati adipisci vero dolorum pariatur aut consectetur. Sit quisquam rerum corporis neque atque inventore nulla, quibusdam, ipsa suscipit aperiam reiciendis, ea odio?</p>
                    <p>Obcaecati adipisci vero dolorum pariatur aut consectetur. lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quisquam rerum corporis neque atque inventore nulla, quibusdam, ipsa suscipit aperiam reiciendis, ea odio?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-beetle"></i>
                        </div>
                        <div class="content">
                            <h6>All brands </h6>
                            <p>Obcaecati adipisci vero dolorum pariatur </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-interface-1"></i>
                        </div>
                        <div class="content">
                            <h6>Free Support</h6>
                            <p>lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-key"></i>
                        </div>
                        <div class="content">
                            <h6>Dealership </h6>
                            <p>Sit quisquam rerum corporis neque</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="glyph-icon flaticon-wallet"></i>
                        </div>
                        <div class="content">
                            <h6>affordable</h6>
                            <p>Suscipit aperiam reiciendis, ea odio?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 welcome -->

    <hr class="gray">

    <!--=================================
our History -->

    <section class="our-history white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Car Intelli's 30 year timeline from the beginning</span>
                        <h2>our history</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline list-style-none">
                        <li>
                            <div class="timeline-badge">
                                <h4>01</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5>the beginning</h5>
                                </div>
                                <div class="timeline-body">
                                    <p>From the beginning lorem ipsum dolor sit amet, consectetur sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge">
                                <h4>02</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5>New Service Garage</h5>
                                </div>
                                <div class="timeline-body">
                                    <p>We own our own New Service Garage incididunt Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <h4>03</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5>New Main office</h5>
                                </div>
                                <div class="timeline-body">
                                    <p>With new super cool office elit lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-badge">
                                <h4>04</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5>New Website launch</h5>
                                </div>
                                <div class="timeline-body">
                                    <p>Start online business tempor lorem ipsum dolor sit amet, consectetur adipiscing elit incididunt ut labore.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
our History-->


    <!--=================================
 Counter -->

    <section class="counter counter-style-2 bg-red bg-1 bg-overlay-black-70 page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="counter-block text-left">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Vehicles in Stock</h6>
                            <i class="glyph-icon flaticon-beetle"></i>
                            <b class="timer text-white" data-to="561" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="counter-block text-left">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Dealer Reviews</h6>
                            <i class="glyph-icon flaticon-interface"></i>
                            <b class="timer text-white" data-to="856" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="counter-block text-left">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Happy Customer</h6>
                            <i class="glyph-icon flaticon-circle"></i>
                            <b class="timer text-white" data-to="789" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="counter-block text-left">
                        <div class="separator"></div>
                        <div class="info">
                            <h6 class="text-white">Awards</h6>
                            <i class="glyph-icon flaticon-cup"></i>
                            <b class="timer text-white" data-to="356" data-speed="10000"></b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 Counter -->


    <!--=================================
 testimonial -->

    <section class="testimonial-1 white-bg page page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>What Our Happy Clients say about us</span>
                        <h2>our Testimonial </h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="30">
                        <?php
                         $con = mysqli_connect("localhost","root",'',"carintelli");
                         $q1="select * from testimonial";
                         $count =0;
                         $result=mysqli_query($con,$q1);
         
         
                                 while($row=mysqli_fetch_assoc($result)){
                                $count++;
                                 $name = $row['name'];
                                 $designation = $row['designation'];
                                 $image = $row['image'];
                                 $car_image = $row['car_image'];
                                 $review = $row['review'];
                        ?>
                        <div class="item">
                            <div class="testimonial-block text-center">
                                <div class="testimonial-image">
                                    <img class="img-fluid" src="<?php echo 'images/testimonial/'.$car_image?>" alt="">
                                </div>
                                <div class="testimonial-box">
                                    <div class="testimonial-avtar">
                                        <img class="img-fluid" src="<?php echo 'images/team/'.$image?>" alt="">
                                        <h6><?php echo $name?></h6>
                                        <span><?php echo $designation?></span>
                                    </div>
                                    <div class="testimonial-content">
                                        <p><?php echo $review?></p>
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                if($count==4)
                                {
                                    break;
                                }  
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 testimonial -->


    <!--=================================
 footer -->

    <footer class="footer bg-3 bg-overlay-black-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="social">
                        <ul>
                            <li><a class="facebook" href="https://www.facebook.com/">facebook <i class="fa fa-facebook"></i> </a></li>
                            <li><a class="twitter" href="https://twitter.com/?lang=en">twitter <i class="fa fa-twitter"></i> </a></li>
                            <li><a class="pinterest" href="https://www.pinterest.com/">pinterest <i class="fa fa-pinterest-p"></i> </a></li>
                            <li><a class="dribbble" href="https://dribbble.com/">dribbble <i class="fa fa-dribbble"></i> </a></li>
                            <li><a class="google-plus" href="https://myaccount.google.com/intro/profile">google plus <i class="fa fa-google-plus"></i> </a></li>
                            <li><a class="behance" href="https://www.behance.net/">behance <i class="fa fa-behance"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="about-content">
                        <img class="img-fluid" id="logo-footer" src="images/logo-light.png" alt="">
                        <p>We provide everything you need to build an amazing dealership website developed especially for car sellers dealers or auto motor retailers.</p>
                    </div>
                    <div class="address">
                        <ul>
                            <li> <i class="fa fa-map-marker"></i><span>Lal Kothi Bus Stop, Main Shahrah-e-Faisal, 22-E, Block-6, PECHS, Karachi-75400</span> </li>
                            <li> <i class="fa fa-phone"></i><span>+92 00 786 01</span> </li>
                            <li> <i class="fa fa-envelope-o"></i><span>support@carintelli.com</span> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="recent-post-block">
                        <h6 class="text-white">recent posts </h6>
                        <div class="recent-post">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="images/car/01.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Time to change your </a>
                                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="images/car/02.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">The best time to </a>
                                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="images/car/03.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Replacing a timing </a>
                                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="news-letter">
                        <h6 class="text-white">subscribe Our Newsletter </h6>
                        <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                        <form class="news-letter">
                            <input type="email" placeholder="Enter your Email" class="form-control placeholder">
                            <a class="button red" href="#">Subscribe</a>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="text-lg-left text-center">
                            <p>©Copyright 2022 Car Intelli Developed by <a href="https://jinnah.edu/" target="_blank">MAJU</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="list-inline text-lg-right text-center">
                            <li><a href="#">privacy policy </a> | </li>
                            <li><a href="#">terms and conditions </a> |</li>
                            <li><a href="#">contact us </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--=================================
 footer -->





    <!--=================================
 back to top -->

    <div class="car-top">
        <span><img src="images/car.png" alt=""></span>
    </div>

    <!--=================================
 back to top -->


    <!--=================================
 jquery -->

    <!-- jquery  -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

    <!-- bootstrap -->
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- mega-menu -->
    <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

    <!-- appear -->
    <script type="text/javascript" src="js/jquery.appear.js"></script>

    <!-- counter -->
    <script type="text/javascript" src="js/counter/jquery.countTo.js"></script>

    <!-- owl-carousel -->
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- select -->
    <script type="text/javascript" src="js/select/jquery-select.js"></script>

    <!-- magnific popup -->
    <script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- style customizer  -->
    <script type="text/javascript" src="js/style-customizer.js"></script>

    <!-- custom -->
    <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>