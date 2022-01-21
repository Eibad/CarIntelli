<?php
$id = $_GET['carid'];
$con = mysqli_connect("localhost","root",'',"carintelli");

// $query = "SELECT * FROM car_list WHERE car_status = '1' ORDER BY id DESC";

$query = "SELECT * FROM car_list WHERE id = '".$id."'";
$r = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($r);
$ids = $row['car_name'];
$car_name = $row['car_name'];
$car_price = $row['car_price'];
$car_main_image = $row['main_image'];

$model = $row['model'];
$car_make = $row['car_make'];
$mileage = $row['mileage'];
$car_condition = $row['car_condition'];
$exterior_color = $row['exterior_color'];
$transmission = $row['transmission'];
$engine = $row['engine'];

$air_condition = $row['air_condition'];
$alloy_wheels = $row['alloy_wheels'];
$abs = $row['abs'];
$power_steering = $row['power_steering'];
$power_windows = $row['power_windows'];
$navigation_system = $row['navigation_system'];
$general_info = $row['general_info'];
$vehicle_overview = $row['vehicle_overview'];


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

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="css/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css">

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
<script>
    $(document).ready(function(){
  $('.your-class').slick();
});

$('.modal').on('shown.bs.modal', function (e) {
  $('.your-class').slick('setPosition');
  $('.wrap-modal-slider').addClass('open');
})
    
// .modal-dialog {
//   max-width: 100%;
// }

.wrap-modal-slider {
  padding: 0 30px;
  opacity: 0;
  transition: all 0.3s;
}

.wrap-modal-slider.open {
  opacity: 1;
}

.slick-prev:before, .slick-next:before {
  color: red;
}
</script>

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
                    <h1 class="text-white"><?php echo  $car_name?> </h1>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
 inner-intro -->


    <!--=================================
car-details  -->

    <section class="car-details page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3><?php echo  $car_name?> </h3>
                    <p>Temporibus possimus quasi beatae, You will begin to realize why, consectetur adipisicing elit. aspernatur nemo maiores.</p>
                </div>
                <div class="col-md-3">
                    <div class="car-price text-lg-right">
                        <strong>Rs. <?php echo  number_format((int)$car_price)?> </strong>
                        <span>Plus Taxes & Licensing</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="slider-slick">
                        <div class="slider slider-for detail-big-car-gallery">
                            <img class="img-fluid" src="<?php echo 'images/car/'.$car_main_image?>"  style='height: 458px; width: 750px' alt="">
                            <img class="img-fluid" src="images/detail/big/02.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/03.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/04.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/05.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/06.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/07.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/08.jpg" alt="">
                        </div>
                        <div class="slider slider-nav">
                            <img class="img-fluid" src="<?php echo 'images/car/'.$car_main_image?> " style='height: 93px; width: 130px'alt="">
                            <img class="img-fluid" src="images/detail/thum/02.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/03.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/04.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/05.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/06.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/07.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/08.jpg" alt="">
                        </div>
                    </div>
                    <div id="tabs">
                        <ul class="tabs">
                            <li data-tabs="tab1" class="active"> <span aria-hidden="true" class="icon-diamond"></span> General Information</li>
                            <li data-tabs="tab2"><span aria-hidden="true" class="icon-list"></span>Features & Options</li>
                            <li data-tabs="tab3"> <span aria-hidden="true" class="icon-equalizer"></span> Vehicle Overview</li>
                        </ul>
                        <div id="tab1" class="tabcontent">
                            <h6><?php echo  $car_name?></h6>
                            <p><?php echo  $general_info?></p>
                        </div>
                        <div id="tab2" class="tabcontent">
                            <h6>Details</h6>
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <th scope="row"> Air conditioning</th>
                                        <td><?php echo  $air_condition?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Anti-Lock Brakes (ABS)</th>
                                        <td><?php echo  $abs?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alloy Wheels</th>
                                        <td><?php echo  $alloy_wheels?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab3" class="tabcontent">
                            <h6><?php echo  $car_name?></h6>
                            <p><?php echo  $vehicle_overview?></p>
                        </div>
                    </div>
                    <div class="extra-feature">
                        <h6> extra feature</h6>
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="list-style-1">
                                    <li><i class="fa fa-check"></i> Security System</li>
                                    <li><i class="fa fa-check"></i> Air conditioning</li>
                                    <li><i class="fa fa-check"></i> Alloy Wheels</li>
                                    <li><i class="fa fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                    <li><i class="fa fa-check"></i> Anti-Theft</li>
                                    <li><i class="fa fa-check"></i> Anti-Starter </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-style-1">
                                    <li><i class="fa fa-check"></i> Security System</li>
                                    <li><i class="fa fa-check"></i> Air conditioning</li>
                                    <li><i class="fa fa-check"></i> Alloy Wheels</li>
                                    <li><i class="fa fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                    <li><i class="fa fa-check"></i> Anti-Theft</li>
                                    <li><i class="fa fa-check"></i> Anti-Starter </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="list-style-1">
                                    <li><i class="fa fa-check"></i> Security System</li>
                                    <li><i class="fa fa-check"></i> Air conditioning</li>
                                    <li><i class="fa fa-check"></i> Alloy Wheels</li>
                                    <li><i class="fa fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                    <li><i class="fa fa-check"></i> Anti-Theft</li>
                                    <li><i class="fa fa-check"></i> Anti-Starter </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-car">
                        <h6>Recently Vehicle</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel" data-nav-arrow="true" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-space="15">
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

                        ?>
                                        <div class="item">
                                            <div class="car-item gray-bg text-center">
                                                <div class="car-image">
                                                    <img class="img-fluid" src="<?php echo 'images/car/'.$car_main_image?>"  style='height: 171px; width: 240px'    alt="">
                                                    <div class="car-overlay-banner">
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
                                                    <a href="details-01.php?carid=<?php echo  $id?>"><?php echo  $car_name?></a>
                                                    <div class="separator"></div>
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
                </div>
                <div class="col-md-4">
                    <div class="car-details-sidebar">
                        <div class="details-block details-weight">
                            <h5>DESCRIPTION</h5>
                            <ul>
                                <li> <span>Make</span> <strong class="text-right"><?php echo  $car_make?></strong></li>
                                <li> <span>Model</span> <strong class="text-right"><?php echo  $model?></strong></li>
                                <li> <span>Mileage</span> <strong class="text-right"><?php echo  $mileage?> km</strong></li>
                                <li> <span>Condition</span> <strong class="text-right"><?php echo  $car_condition?></strong></li>
                                <li> <span>Exterior Color</span> <strong class="text-right"><?php echo  $exterior_color?></strong></li>
                                <li> <span>Transmission</span> <strong class="text-right"><?php echo  $transmission?></strong></li>
                                <li> <span>Engine</span> <strong class="text-right"><?php echo  $engine?> cc</strong></li>
                            </ul>
                        </div>
                        <div class="details-form contact-2 details-weight">
                            <form class="gray-form">
                                <h5>SEND ENQUIRY</h5>
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label>Email address*</label>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Comment* </label>
                                    <textarea class="form-control" rows="4" placeholder="Comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <a class="button red" href="#">Send Enquiry</a>
                                </div>
                                <div class="form-group">
                                    <a class="button red" data-toggle="modal" data-target="#exampleModalCenter">Contact Mechanic</a>
            
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" style='max-width: 947px;' role="document">
                                    <div class="modal-content">
                                    <div style='height: 35px;'>
                                        <h5 class="modal-title" id="exampleModalCenterTitle">You can contact our certified mechanic</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="wrap-modal-slider">
                                        <div class="your-class">
                                        <div class="row">
    
                                        <div class="row">
    <div class="col-sm-4" >
    <div class="card" style="width:280px">
    <img class="card-img-top" src="images/team/02.jpg" alt="Card image" style="width: 280px; height: 340px">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Inspect vehicle engine and mechanical/electrical components to diagnose issues accurately</p>
      <hr>
       <i class="fa fa-phone">  + 01 234 567 89</i>
                        </br>
       <i class="fa fa-map-marker">   asd asf as da sd</i>
    </div>
  </div>
    </div>

    <div class="col-sm-4">
    <div class="card" style="width:280px">
    <img class="card-img-top" src="images/team/10.jpg" alt="Card image" style="width: 280px; height: 340px">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Inspect vehicle engine and mechanical/electrical components to diagnose issues accurately</p>
      <hr>
       <i class="fa fa-phone">  + 01 234 567 89</i>
                        </br>
       <i class="fa fa-map-marker">   asd asf as da sd</i>
    </div>
  </div>
    </div>

     <div class="col-sm-4" >
    <div class="card" style="width:280px">
    <img class="card-img-top" src="images/team/02.jpg" alt="Card image" style="width: 280px; height: 340px">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Inspect vehicle engine and mechanical/electrical components to diagnose issues accurately</p>
      <hr>
       <i class="fa fa-phone">  + 01 234 567 89</i>
                        </br>
       <i class="fa fa-map-marker">   asd asf as da sd</i>
    </div>
  </div>
    </div>



  </div>

                                        </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="details-phone details-weight">
                            <div class="feature-box-3">
                                <div class="icon">
                                    <i class="fa fa-headphones"></i>
                                </div>
                                <div class="content">
                                    <h4>0900 786 01 </h4>
                                    <p>Call our seller to get the best price </p>
                                </div>
                            </div>
                        </div>
                        <div class="details-form contact-2">
                            <form class="gray-form">
                                <h5>Financing Calculator</h5>
                                <div class="form-group">
                                    <label>Vehicle Price ($)*</label>
                                    <input type="text" class="form-control" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label>Interest rate (%)*</label>
                                    <input type="text" class="form-control" placeholder="Rate">
                                </div>
                                <div class="form-group">
                                    <label>Period (Month)*</label>
                                    <input type="text" class="form-control" placeholder="Month">
                                </div>
                                <div class="form-group">
                                    <label>Down Payment *</label>
                                    <input type="text" class="form-control" placeholder="Payment">
                                </div>
                                <div class="form-group">
                                    <a class="button red" href="#">estimate payment</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
car-details -->


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

    <!-- appear -->
    <script type="text/javascript" src="js/jquery.appear.js"></script>

    <!-- owl-carousel -->
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- slick -->
    <script type="text/javascript" src="js/slick/slick.min.js"></script>

    <!-- select -->
    <script type="text/javascript" src="js/select/jquery-select.js"></script>

    <!-- magnific popup -->
    <script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- style customizer  -->
    <script type="text/javascript" src="js/style-customizer.js"></script>

    <!-- custom -->
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- php forms -->
    <script type="text/javascript" src="js/forms/form-validation.js"></script>
    <script src="../../recaptcha/api.js?render=explicit" async="" defer=""></script>
    <script type="text/javascript" src="js/forms/recaptcha.js"></script>

</body>

</html>