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
                    <h1 class="text-white">blog </h1>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 inner-intro -->


    <!--=================================
 blog  -->

    <section class="blog page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Read what we say in our blog </span>
                        <h2>Our blog</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                <?php
                $con = mysqli_connect("localhost","root",'',"carintelli");
                $q1="select * from blog";
                $result=mysqli_query($con,$q1);


                        while($row=mysqli_fetch_assoc($result)){
                        $blog_title = $row['title'];
                        $blog_user = $row['user'];
                        $blog_content = $row['content'];
                        $blog_image = $row['image'];

                                    
                 ?>
                    <div class="blog-entry">
                        <div class="blog-entry-image  clearfix">
                            <div class="portfolio-item">
                                <img class="img-fluid" src="<?php echo 'images/blog/'.$blog_image?>" alt="">
                            </div>
                        </div>
                        <div class="entry-title">
                            <a><?php echo $blog_title?></a>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i><?php echo $blog_user?></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?php echo $blog_content ?></p>
                        </div>
                        <div class="entry-share clearfix">
                            <a class="button red float-left" href="#"> Read More </a>
                            <div class="share float-right">
                                <!-- <a href="#"> <i class="fa fa-share-alt"></i> </a> -->
                                <div class="blog-social">
                                    <ul class="list-style-none">
                                        <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                                        <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                                        <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="gray">
                <?php }
                ?>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
blog -->


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
                <div class="col-lg-4 col-md-6">
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
                        <?php
                            $q1="select * from blog";
                            $result=mysqli_query($con,$q1);
                            $count = 0 ;
                                while($row=mysqli_fetch_assoc($result)){
                                $count++;
                                // print_r($row);
                                $blog_title = $row['title'];
                                $blog_user = $row['user'];
                                $blog_content = $row['content'];
                                $blog_image = $row['image'];
                                // echo $blog_image;
                        ?>
                        <div class="recent-post">
                            <div class="recent-post-image">
                                <img class="img-fluid" src="<?php echo 'images/car/'.$blog_image?>" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#"><?php echo $blog_title?></a>
                                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                            </div>
                        </div>
                        <?php
                             if($count==3)
                             {
                                 break;
                             }  
                            }
                        ?>
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
                            <li><a href="privacy-policy.php">privacy policy </a> | </li>
                            <li><a href="terms-and-conditions.php">terms and conditions </a> |</li>
                            <li><a href="about-01.php">About Us</a></li>
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

    <!-- bootstrap -->
    <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

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