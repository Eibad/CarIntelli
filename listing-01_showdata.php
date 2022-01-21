<?php
$order = "ORDER BY id DESC";
$where = " ";
if (isset($_POST['go'])) {
    // echo "go";
    if($_POST['order'] == "lowest"){
    $order = "ORDER BY car_price ASC";
    }
    if($_POST['order'] =="highest"){
        $order = "ORDER BY car_price DESC";
    }
    
    if($_POST['pricemax'] || $_POST['pricemin']){
        $max = "0";
        $min = "0";
        if($_POST['pricemax'] == "0"){
            $max = "2500000" ;
        }
        if($_POST['pricemin'] == "0"){
            $min = "0";
            echo "sss"; 
        }
        $max = $_POST['pricemax'];
        $mix = $_POST['pricemin'];
        $where = "AND car_price BETWEEN '$min' AND '$max'";
    }
    // if($_POST['condition'] != "all"){
    //     $order = "ORDER BY car_price DESC";
    // }
}

$model = ['2009','2010','2011','2019','2016','2017','2014','2022'];
$condition = ['new','used','Used','New'];
$make = ['Toyota','Lexus','Acura','Suzuki','Honda'];
$transmission = ['automatic','manual'];
$body = ['Hatchback','SUV','Sedan','Crossover'];
$place = ['Islamabad','Karachi','Lahore'];
$color = ['Silver','Grey','Red','Orange','white','Green'];


if(isset($_POST['year'])){
    $model = $_POST['year'];
    for ($i = 0; $i < count($model); $i++) {
        $x = "$model[$i]";
        if($x == 'all'){
            $model = ['2009','2010','2011','2019','2016','2017','2014','2022'];
        }
    }
}
if(isset($_POST['condition'])){
    $condition = $_POST['condition'];
    for ($i = 0; $i < count($condition); $i++) {
        $x = "$condition[$i]";
        if($x == 'all'){
            $condition = ['new','used','Used','New'];
        }
    }
    }
if(isset($_POST['make'])){
    $make = $_POST['make'];
    for ($i = 0; $i < count($make); $i++) {
        $x = "$make[$i]";
        if($x == 'all'){
            $make = ['Toyota','Lexus','Acura','Suzuki','Honda'];
        }
    }
    }
if(isset($_POST['transmission'])){
    $transmission = $_POST['transmission'];
    for ($i = 0; $i < count($transmission); $i++) {
        $x = "$transmission[$i]";
        if($x == 'all'){
            $transmission = ['automatic','manual'];
        }
    }
    }
if(isset($_POST['body'])){
    $body = $_POST['body'];
    for ($i = 0; $i < count($body); $i++) {
        $x = "$body[$i]";
        if($x == 'all'){
            $body = ['Hatchback','SUV','Sedan','Crossover'];
        }
    }
    }
if(isset($_POST['place'])){
    $place = $_POST['place'];
    for ($i = 0; $i < count($place); $i++) {
        $x = "$place[$i]";
        if($x == 'all'){
            $place = ['Islamabad','Karachi','Lahore'];
        }
    }
    }
if(isset($_POST['color'])){
    $color = $_POST['color'];
    for ($i = 0; $i < count($color); $i++) {
        $x = "$color[$i]";
        if($x == 'all'){
            $color = ['Silver','Grey','Red','Orange','white','Green'];
        }
    }
    }

   


$model = "'" . implode ( "', '", $model ) . "'";
$condition = "'" . implode ( "', '", $condition ) . "'";
$make = "'" . implode ( "', '", $make ) . "'";
$transmission = "'" . implode ( "', '", $transmission ) . "'";
$body =  "'" . implode ( "', '", $body ) . "'";
$place = "'" . implode ( "', '", $place ) . "'";
$color = "'" . implode ( "', '", $color ) . "'";

// print_r($model);

$con = mysqli_connect("localhost","root",'',"carintelli");

// $query = "SELECT * FROM car_list WHERE car_status = '1' ORDER BY id DESC";


$query = "SELECT * FROM car_list WHERE
              model IN (".$model.")
             AND car_condition IN (".$condition.")
             AND car_make IN (".$make.")
             AND transmission IN (".$transmission.")
             AND body IN (".$body.")
             AND registered_place IN (".$place.")
             AND exterior_color IN (".$color.")
             ".$where." 
             ".$order;
$r = mysqli_query($con,$query);
// print_r($r);



?>
