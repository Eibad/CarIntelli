<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Car Intelli - The Best Car Intelli Automotive Responsive HTML5 Template">
    <meta name="author" content="MS-Orbit Tech">
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

    <!-- jquery-ui -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Style customizer -->
    <link rel="stylesheet" href="#" data-style="styles">
    <link rel="stylesheet" type="text/css" href="css/style-customizer.css">

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
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
    <noscript><iframe src="../../ns.html?id=GTM-557RCPW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--=================================
  loading -->

    <div id="loading">
        <div id="loading-center">
            <img src="images/loader3.gif" alt="">
        </div>
    </div>

    <!--=================================
  loading -->


    <!--=================================
 header -->

    <header id="header" class="topbar-dark">
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
                                    <li><a style="color: red;" href="logout.php"><?php echo(($_SESSION['fname']))?> <i class="fa fa-angle-down fa-indicator"></i> </a>
                                    <ul class="drop-down-multilevel right-menu">
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
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
 rev-slider -->

    <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="car-dealer-05"
        data-source="gallery"
        style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
        <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-3" data-transition="random-static,random-premium,random"
                    data-slotamount="default,default,default,default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-randomtransition="on"
                    data-easein="default,default,default,default" data-easeout="default,default,default,default"
                    data-masterspeed="default,default,default,default"
                    data-thumb="revolution/assets/100x50_3ecde-01.jpg" data-rotate="0,0,0,0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="revolution/assets/3ecde-01.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="62" data-y="179"
                        data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-transform:uppercase;">
                        The wind is <br> not even close to us </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme" id="slide-3-layer-2" data-x="62" data-y="348"
                        data-width="['657']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1720,"speed":1070,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 657px; max-width: 657px; white-space: normal; font-size: 14px; line-height: 24px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                        We are dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo consequat. </div>

                    <!-- LAYER NR. 3 -->
                    
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-4" data-transition="random-static,random-premium,random"
                    data-slotamount="default,default,default,default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-randomtransition="on"
                    data-easein="default,default,default,default" data-easeout="default,default,default,default"
                    data-masterspeed="default,default,default,default"
                    data-thumb="revolution/assets/100x50_ac5dd-02.jpg" data-rotate="0,0,0,0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="revolution/assets/ac5dd-02.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption   tp-resizeme" id="slide-4-layer-1" data-x="62" data-y="179"
                        data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-transform:uppercase;">
                        We have everything <br> Your car needs! </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme" id="slide-4-layer-2" data-x="62" data-y="348"
                        data-width="['657']" data-height="['auto']" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":1720,"speed":1070,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
                        data-textalign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; min-width: 657px; max-width: 657px; white-space: normal; font-size: 14px; line-height: 24px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Open Sans;">
                        We Provide best solution. consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </div>

                    <!-- LAYER NR. 6 -->
                    <!-- <div class="tp-caption button red " id="slide-4-layer-4" data-x="62" data-y="430"
                        data-width="['auto']" data-height="['auto']" data-type="button" data-responsive_offset="on"
                        data-frames='[{"delay":1720,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]'
                        data-textalign="['left','left','left','left']" data-paddingtop="[10,10,10,10]"
                        data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[30,30,30,30]"
                        style="z-index: 7; white-space: nowrap; font-size: 14px; line-height: 16px; font-weight: 400;font-family:Open Sans;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        Discover More </div> -->
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>

    <!--=================================
 rev-slider -->


    <!--=================================
 search -->
 <?php
                                        if (isset($_SESSION['email'])){
                                    ?>
    <section class="search white-bg">
        <div class="container">
            <div class="search-block">
                <form action="listing-01.php" method="POST">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Select make</span>
                                    <div class="selected-box">
                                        <select  name="make" class="selectpicker">
                                            <option value="all">All Make </option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Lexus">Lexus </option>
                                            <option value="Acura">Acura </option>
                                            <option value="Suzuki">Suzuki </option>
                                            <option value="Honda">Honda </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span>Select model</span>
                                    <div class="selected-box">
                                        <select name="model" class="selectpicker">
                                            <option value="all">All Model</option>
                                            <option value="2022">2022</option>
                                            <option value="2019">2019</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2014">2014</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span>Select Transmission</span>
                                    <div class="selected-box">
                                        <select name="transmission" class="selectpicker">
                                            <option value="all">All Transmission</option>
                                            <option value"manual">Manual</option>
                                            <option value="automatic">Automatic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span>Select body style</span>
                                    <div class="selected-box">
                                        <select name="body" class="selectpicker">
                                            <option value="all">All Body style</option>
                                            <option value="Hatchback">Hatchback</option>
                                            <option value="Sedan">Sedan</option>
                                            <option value="Crossover">Crossover</option>
                                            <option value="Suv">SUV</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <span>Select vehicle status</span>
                                    <div class="selected-box">
                                        <select name="condition" class="selectpicker">
                                            <option value="all">All Conditions</option>
                                            <option value="new">Brand New</option>
                                            <option value="used">Used</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <span>Select Price Range (Rs.)</span>
                                <div class="row">
                                    <div class="col-md-6">
                                                <div class="selected-box">
                                                    <select name="pricemin" class="selectpicker">
                                                        <option value="0">0</option>
                                                        <option value="100000">100,000</option>
                                                        <option value="200000">200,000</option>
                                                        <option value="400000">400,000</option>
                                                        <option value="600000">600,000</option>
                                                        <option value="800000">800,000</option>
                                                        <option value="1000000">10,00,000</option>
                                                        <option value="1200000">12,00,000</option>
                                                        <option value="1400000">14,00,000</option>
                                                        <option value="2000000">20,00,000</option>
                                                        <option value="2500000">25,00,000</option>
                                                    </select>
                                                </div>
                                    </div>
                                    <div class="col-md-6">
                                                <div class="selected-box">
                                                    <select name="pricemax" class="selectpicker">
                                                        <option value="0">0</option>
                                                        <option value="100000">100,000</option>
                                                        <option value="200000">200,000</option>
                                                        <option value="400000">400,000</option>
                                                        <option value="600000">600,000</option>
                                                        <option value="800000">800,000</option>
                                                        <option value="1000000">10,00,000</option>
                                                        <option value="1200000">12,00,000</option>
                                                        <option value="1400000">14,00,000</option>
                                                        <option value="2000000">20,00,000</option>
                                                        <option value="2500000">25,00,000</option>
                                                    </select>
                                                </div>
                                    </div>
                                </div>
                                <div class="row">  
                                    <div class="col-md-12"> 
                                    <button class="button red" name="submitsearch">Search the Vehicle</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
                                        }
    ?>

    <!--=================================
 search -->


    <!--=================================
 welcome -->

    <section class="welcome-3 white-bg page-section-ptb">
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="content-box-2 car-bg-1">
                        <i class="glyph-icon flaticon-beetle"></i>
                        <a class="title" href="#">Buy a Car</a>
                        <p>We sell perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium</p>
                        <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box-2 car-bg-2">
                        <i class="glyph-icon flaticon-price-tag"></i>
                        <a class="title" href="#">Sell My Car</a>
                        <p>You can sell sed ut unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium</p>
                        <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-box-2 car-bg-3">
                        <i class="glyph-icon flaticon-reparation"></i>
                        <a class="title" href="#">Get Service</a>
                        <p>We provide sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium</p>
                        <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
            </div> -->
            <div class="row about custom-block-2">
                <div class="col-md-6">
                    <h2>About us </h2>
                    <span>Everything you need to build an amazing dealership website. </span>
                    <p>Car Intelli is the bestCar Recommender We provide everything you need to build an <b>Amazing
                            dealership website </b> developed especially for car sellers, dealers or auto motor
                        retailers. You can use this template for creating website
                        based on any framework and any language </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid center-block" src="images/car/11.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box-2 box-hover">
                        <div class="icon">
                            <i class="glyph-icon flaticon-beetle"></i>
                        </div>
                        <div class="content">
                            <h5>All brands</h5>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem acantium doloremque
                                laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box-2 box-hover">
                        <div class="icon">
                            <i class="glyph-icon flaticon-interface-1"></i>
                        </div>
                        <div class="content">
                            <h5>Free Support</h5>
                            <p>Omnis sed ut perspiciatis unde iste natus error sit voluptatem acantium doloremque
                                laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box-2 box-hover">
                        <div class="icon">
                            <i class="glyph-icon flaticon-key"></i>
                        </div>
                        <div class="content">
                            <h5>Dealership</h5>
                            <p>Error sed ut perspiciatis unde omnis iste natus sit voluptatem acantium doloremque
                                laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box-2 box-hover">
                        <div class="icon">
                            <i class="glyph-icon flaticon-wallet"></i>
                        </div>
                        <div class="content">
                            <h5>Affordable</h5>
                            <p>Perspiciatis sed ut unde omnis iste natus error sit voluptatem acantium doloremque
                                laudantium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 welcome -->


    <!--=================================
 feature-car -->

    <section class="feature-car gray-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Check out our recent cars</span>
                        <h2>Recent Cars </h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3"
                        data-sm-items="2" data-xs-items="1" data-space="15">
                        <?php
                        $con = mysqli_connect("localhost","root",'',"carintelli");

                        // $query = "SELECT * FROM car_list WHERE car_status = '1' ORDER BY id DESC";
                        
                        $query = "SELECT * FROM car_list ORDER BY id DESC";
                         $count =0;
                         $result=mysqli_query($con,$query);
         
         
                                while($row=mysqli_fetch_assoc($result)){
                                $count++;
                                $id = $row['id'];
                                $car_name = $row['car_name'];
                                $car_price = $row['car_price'];
                                $car_main_image = $row['main_image'];
                                $car_condition = $row['car_condition'];
                                $model = $row['model'];
                                $engine = $row['engine'];
                                $mileage = $row['mileage'];

                        ?>
                        <div class="item">
                            <div class="car-item-2 text-center">
                                <div class="car-image">
                                    <img class="img-fluid" src="<?php echo 'images/car/'.$car_main_image?>" style='height: 264px; width: 370px' alt="">
                                    <div class="car-overlay-banner">
                                        
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="details-01.php?carid=<?php echo  $id?>"><?php echo  $car_name?></a>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li> <?php echo  $model?> </li>
                                            <li> <?php echo  $car_condition?> </li>
                                            <li> <?php echo  $engine?> CC </li>
                                            <li> <?php echo  $mileage?> km</li>
                                        </ul>
                                    </div>
                                    <!-- <div class="info">
                                        <p>You will begin to realize why this exercise Pattern is called the Dickens
                                            with to ghost.</p>
                                    </div> -->
                                    <div class="price">
                                        <span class="new-price">Rs. <?php echo  number_format((int)$car_price)?> </span>
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
 feature-car -->


    <!--=================================
 our-service -->

    <section class="our-service white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2>our services</h2>
                    <span>We provide best services processus dynamicus, qui sequitur mutationem co</span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-box-2">
                                <div class="icon">
                                    <i class="glyph-icon flaticon-wallet"></i>
                                </div>
                                <div class="content">
                                    <h5>Affordable</h5>
                                    <p>Laudantium perspiciatis sed ut unde omnis iste natus error sit voluptatem
                                        acantium doloremque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box-2">
                                <div class="icon">
                                    <i class="glyph-icon flaticon-gas-station"></i>
                                </div>
                                <div class="content">
                                    <h5>Oil Changes</h5>
                                    <p>Voluptatem perspiciatis sed ut unde omnis iste natus error sit acantium
                                        doloremque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-box-2">
                                <div class="icon">
                                    <i class="glyph-icon flaticon-air-conditioning"></i>
                                </div>
                                <div class="content">
                                    <h5>Air conditioning</h5>
                                    <p>Natus perspiciatis sed ut unde omnis iste error sit voluptatem acantium
                                        doloremque laudantium.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-box-2">
                                <div class="icon">
                                    <i class="glyph-icon flaticon-gearstick"></i>
                                </div>
                                <div class="content">
                                    <h5>transmission</h5>
                                    <p>Omnis perspiciatis sed ut unde iste natus error sit voluptatem acantium
                                        doloremque laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="images/car/12.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 our-service -->


    <!--=================================
 latest news -->

    <section class="latest-blog gray-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Read our latest blog</span>
                        <h2>latest blog </h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                                     $con = mysqli_connect("localhost","root",'',"carintelli");

                            $q1="select * from blog";
                            $result=mysqli_query($con,$q1);
                            $count = 0 ;
                                while($row=mysqli_fetch_assoc($result)){
                                $count++;
                                // print_r($row);
                                $blog_title = $row['title'];
                                $blog_user = $row['user'];
                                $blog_content = $row['short_desc'];
                                $blog_image = $row['image'];
                                $name = $row['name'];
                                // echo $blog_image;
                        ?>

                <div class="col-lg-4 col-md-12">
                    <div class="blog-2">
                        <div class="blog-image">
                            <img class="img-fluid" src="<?php echo 'images/blog/'.$blog_image?>" alt="">
                            <div class="date">
                                <span>aug 17</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-admin-main">
                                <div class="blog-admin">
                                    <img class="img-fluid"src="<?php echo 'images/team/'.$blog_image?> "alt="">
                                    <span><?php echo $name?></span>
                                </div>
                            </div>
                            <div class="blog-description text-center">
                                <a href="blog-fullwidth.php"><?php echo $blog_title?></a>
                                <div class="separator"></div>
                                <p><?php echo $blog_content ?></p>
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
    </section>

    <!--=================================
 latest news -->


    <!--=================================
 testimonial -->

    <section class="testimonial-3 white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>What Our Happy Clients say about us</span>
                        <h2>Our Testimonial </h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="1" data-md-items="1"
                        data-sm-items="1" data-xs-items="1" data-space="30">
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
                            <div class="testimonial-block">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="testimonial-avtar">
                                            <img class="img-fluid center-block" src="<?php echo 'images/team/'.$image?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <div class="testimonial-content">
                                            <p><i class="fa fa-quote-left"></i> <span><?php echo $review?></span> <i
                                                    class="fa fa-quote-right float-right"></i></p>
                                        </div>
                                        <div class="testimonial-info">
                                            <h6><?php echo $name?></h6>
                                            <span><?php echo $designation?></span>
                                        </div>
                                    </div>
                                </div>
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
            </div>
        </div>
    </section>

    <!--=================================
 testimonial -->


    <!--=================================
 Newsletter -->

    <section class="news-letter-main bg-1 bg-overlay-black-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-red">Subscribe to Our Newsletter Feed</h4>
                    <p class="text-white">Simply Dummy Text of the Printin Galley of Type and Bled it to Make a Type.
                    </p>
                </div>
                <div class="col-md-6">
                    <form class="news-letter-form">
                        <div class="row no-gutter">
                            <div class="col-md-10 col-9"><input type="email" placeholder="Enter your Email"
                                    class="form-control placeholder"></div>
                            <div class="col-md-2 col-3"><a class="button red" href="#">Subscribe</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 Newsletter -->


    <!--=================================
 footer -->

    <footer class="footer-3 footer-topbar light page-section-pt">
        <div class="container">
            <div class="row top">
                <div class="col-lg-3 col-md-12">
                    <img class="img-fluid" id="logo_footer_dark" src="images/logo-dark.png" alt="">
                </div>
               
                <div class="col-lg-4 col-md-12">
                    <div class="social text-lg-right text-center">
                        <ul>
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-dribbble"></i> </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-linkedin"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
            <div class="row">
                <!-- <div class="col-lg-5 col-md-12">
                    <div class="about-content">
                        <h6 class="text-black">about us</h6>
                        <p class="text-gray">Car Intelli is the bestCar Recommender We provide everything you need to
                            build an Amazing dealership website developed especially for car sellers, dealers or auto
                            motor retailers. You can use this template for creating website.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <h6 class="text-black">Useful Links</h6>
                    <div class="usefull-link">
                        <div class="row">
                            <div class="col-md-4">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Change </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Replacement</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Change </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Replacement</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Change </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Replacement</a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-angle-right"></i> Contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="text-lg-left text-center">
                        <p>©Copyright 2022 Car Intelli Developed by <a href="https://jinnah.edu/" target="_blank">MAJU</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="list-inline text-lg-right text-center">
                            <li><a href="team-02.php">Our Team </a> |</li>
                            <li><a href="about-01.php">About us </a></li>
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

    <!-- jquery-ui -->
    <script type="text/javascript" src="js/jquery-ui.js"></script>

    <!-- select -->
    <script type="text/javascript" src="js/select/jquery-select.js"></script>

    <!-- magnific popup -->
    <script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- revolution -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- custom -->
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- style customizer  -->
    <script type="text/javascript" src="js/style-customizer.js"></script>

    <script type="text/javascript">
        (function ($) {
            "use strict";

            var tpj = jQuery;
            var revapi3;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_3_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_3_1");
                } else {
                    revapi3 = tpj("#rev_slider_3_1").show().revolution({
                        sliderType: "standard",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: false,
                                hide_onleave: false,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0
                                }
                            }
                        },
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: 1270,
                        gridheight: 700,
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner3",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            });
        })(jQuery);
    </script>

</body>

</html>