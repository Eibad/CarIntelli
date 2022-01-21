<?php 
if (isset($_POST['submitsearch'])){
    // echo ($_POST['make']);
    // echo ($_POST['condition']);
    $model = ['2009','2010','2011','2019','2016','2017','2014','2022'];
    $make = ['Toyota','Lexus','Acura','Suzuki','Honda'];
    $condition = ['new','used'];
    $transmission = ['automatic','manual'];
    $priceto = "0";
    $pricefrom = "0";
    $body = ['Hatchback','SUV','Sedan','Crossover'];
    $place = ['Islamabad','Karachi','Lahore'];
    $where = " ";
    if($_POST['condition'] != "all"){
        $condition = [];
        $condition[0] = $_POST['condition'];
    }
    if($_POST['transmission'] != "all"){
        $transmission = [];
        $transmission[0] = $_POST['transmission'];
    }
    if($_POST['body'] != "all"){
        $body = [];
        $body[0] = $_POST['body'];
    }
    if($_POST['make'] != "all"){
        $make = [];
        $make[0] = $_POST['make'];
    }
    if($_POST['model'] != "all"){
        $model = [];
        $model[0] = $_POST['model'];
    }
    if($_POST['pricemax'] || $_POST['pricemin']){
        $max = "0";
        $min = "0";
        if($_POST['pricemax'] == "0"){
            $max = $_POST['pricemin'];
        }
        if($_POST['pricemin'] == "0"){
            $min = "0";
            $max = "2500000" ;
        }else{
        $max = $_POST['pricemax'];
        $mix = $_POST['pricemin'];
        }
        $where = "AND car_price BETWEEN '$min' AND '$max'";
    }



    
    
// print_r($condition);
$model = "'" . implode ( "', '", $model ) . "'";
$condition = "'" . implode ( "', '", $condition ) . "'";
$make = "'" . implode ( "', '", $make ) . "'";
$transmission = "'" . implode ( "', '", $transmission ) . "'";
$body =  "'" . implode ( "', '", $body ) . "'";



$con = mysqli_connect("localhost","root",'',"carintelli");

// $query = "SELECT * FROM car_list WHERE car_status = '1' ORDER BY id DESC";

$query = "SELECT * FROM car_list WHERE car_status = '1'
             AND model IN (".$model.") 
             AND car_condition IN (".$condition.")
             AND car_make IN (".$make.")
             AND transmission IN (".$transmission.")
             AND body IN (".$body.")
             ".$where." 
             ORDER BY id DESC";
$r = mysqli_query($con,$query);

}

else{
include ('listing-01_showdata.php');
}
session_start();
?>


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

    <!-- jquery-ui -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

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
                                        <a href="index-2.php"><img id="logo_img2" src="images/logo-light.png" alt="logo"> </a>
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
                    <h1 class="text-white">product listing </h1>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 inner-intro -->


    <!--=================================
product-listing  -->

    <section class="product-listing page-section-ptb">
        <div class="container">
            <form method="post" id="search_form">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="listing-sidebar">
                        <?php
                                        if (isset($_SESSION['email'])){
                                    ?>
                            <div class="widget">
                                <div class="widget-search">
                                    <h5>Advanced Search</h5>
                                    <ul class="list-style-none">
                                        <li><i class="fa fa-star"> </i> Results Found <span class="float-right">(39)</span></li>
                                    </ul>
                                </div>
                                <form action="listing-01_showdata.php" method="POST">
                                    <div class="clearfix">
                                        <ul class="list-group">
                                        <button class="button red" name="submit"> Search </button>
                                            <li class="list-group-item">
                                                <a href="#">Year</a>
                                                <ul>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="all"> All Years
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="2022"> 2022
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                        <input type="checkbox" name="year[]"value="2019"> 2019
                                                        </label>
                                                    </span></li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="2017"> 2017
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="2016"> 2016
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="2014"> 2014
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="2011"> 2011
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="2010"> 2010
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="year[]"value="2009"> 2009
                                                            </label>
                                                        </span>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Condition</a>
                                                <ul>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="condition[]"value="all"> All Conditions
                                                            </label>
                                                        </span></li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                            <input type="checkbox" name="condition[]"value="new"> Brand New
                                                            </label>
                                                        </span></li>
                                                    
                                                    <li><span class="checkbox">
                                                            <label>
                                                            <input type="checkbox" name="condition[]"value="used"> Used
                                                            </label>
                                                        </span></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Body</a>
                                                <ul>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="body[]"value="all"> All Body Styles
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="body[]"value="Hatchback"> Hatchback
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="body[]"value="Sedan"> Sedan
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="body[]"value="SUV"> SUV
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="body[]"value="Crossover"> Crossover
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <!-- <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Double Cabin
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Single Cabin
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Van
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Mini Van
                                                            </label>
                                                        </span>
                                                    </li> -->
                                                    
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Make</a>
                                                <ul>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="make[]"value="all"> All Make
                                                            </label>
                                                        </span></li>
                                                        <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="make[]"value="Toyota"> Toyota
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="make[]"value="Lexus"> Lexus
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="make[]"value="Acura"> Acura
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="make[]"value="Suzuki"> Suzuki
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="make[]"value="Honda"> Honda
                                                            </label>
                                                        </span>
                                                    </li>
                                                                    
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Transmission</a>
                                                <ul>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="transmission[]"value="all"> All Transmissions
                                                            </label>
                                                        </span></li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                            <input type="checkbox" name="transmission[]"value="automatic"> Manual
                                                            </label>
                                                        </span></li>
                                                    <li><span class="checkbox">
                                                            <label>
                                                            <input type="checkbox" name="transmission[]"value="manual"> Automatic
                                                            </label>
                                                        </span></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Exterior Color</a>
                                                <ul>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="color[]"value="all"> Any Color
                                                        </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="color[]"value="white"> White
                                                        </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="color[]"value="Green"> Green
                                                        </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="color[]"value="Orange"> Orange
                                                        </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="color[]"value="Grey"> Grey
                                                        </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="color[]"value="Red"> Red
                                                        </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="color[]"value="Silver"> Silver
                                                        </label>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Assembly</a>
                                                <ul>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="place[]"value="all"> Any
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="place[]"value="Islamabad"> Islamabad
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="place[]"value="Lahore"> Lahore
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li><span class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="place[]"value="Karachi"> Karachi
                                                            </label>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                 </from>
                            </div>
                            <?php
                                        }
                            ?>
                            <div class="widget-banner">
                                <img class="img-fluid center-block" src="images/banner.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="sorting-options-main">
                        <div class="row">
                        <?php
                                        if (! isset($_SESSION['email'])){
                                    ?>
                            
                                <div class="col-lg-3">
                                <div class="selected-box">
                                                    <select name="pricemin" class="selectpicker">
                                                        <option >Min Price</option>
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
                                <div class="col-lg-3">
                                <div class="selected-box">
                                                    <select name="pricemax" class="selectpicker">
                                                      <option >Max Price</option>
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
                                        <!-- <div class="price-search">
                                            <span>Price search</span>
                                            <div class="search">
                                                <i class="fa fa-search"></i>
                                                <input type="search" class="form-control placeholder" placeholder="Search....">
                                            </div>
                                        </div> -->
                                </div>

                                <div class="col-lg-3 text-right">
                                    <div class="selected-box">
                                        <select name="order">
                                            <option>Sort by </option>
                                            <option value="lowest">Price: Lowest first</option>
                                            <option value="highest">Price: Highest first </option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-right">
                                    <button class="button" name="go"> Go </button>
                                </div>
                            </div>
                            <?php
                                        }
                            ?>
                            
                        </div>
                        <div class="row">
                            <?php
                            while($row=mysqli_fetch_assoc($r)){

                            $id = $row['id'];
                            $car_name = $row['car_name'];
                            $car_price = $row['car_price'];
                            $car_main_image = $row['main_image'];
                            $transmission = $row['transmission'];
                            $model = $row['model'];
                            $mileage = $row['mileage'];
                                    
                            ?>
                        
                            
                                <div class="col-sm-4">
                                    
                                    <div class="car-item gray-bg text-center">
                                        <div class="car-image">
                                            <img class="img-fluid" src="<?php echo 'images/car/'.$car_main_image?>"  style='height: 187px; width: 263px' alt="">
                                            <div class="car-overlay-banner" href="#">
                                            </div>
                                        </div>
                                        <div class="car-list">
                                            <ul class="list-inline">
                                                <li><i class="fa fa-registered"></i><?php echo  $model?></li>
                                                <li><i class="fa fa-cog"></i><?php echo  $transmission?></li>
                                                <li><i class="fa fa-tachometer"></i><?php echo  $mileage?> km</li>
                                            </ul>
                                        </div>
                                        <div class="car-content">
                                            <!-- <div class="star">
                                                <i class="fa fa-star orange-color"></i>
                                                <i class="fa fa-star orange-color"></i>
                                                <i class="fa fa-star orange-color"></i>
                                                <i class="fa fa-star orange-color"></i>
                                                <i class="fa fa-star-o orange-color"></i>
                                            </div> -->
                                            <a href="details-01.php?carid=<?php echo  $id?>"><?php echo  $car_name?></a>
                                            <div class="separator"></div>
                                            <div class="price">
                                                <!-- <span class="old-price">$35,568</span> -->
                                                <span class="new-price">Rs. <?php echo  number_format((int)$car_price)?> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>        
                            
                        </div>
                    
                    
                        <!-- <div class="pagination-nav d-flex justify-content-center">
                            <ul class="pagination">
                                <li><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>

            </form>
        </div>
    </section>

    <!--=================================
product-listing  -->


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

    <!-- mega-menu -->
    <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

    <!-- jquery-ui -->
    <script type="text/javascript" src="js/jquery-ui.js"></script>

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
