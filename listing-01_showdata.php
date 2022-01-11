<?php
$model = ['2009','2010','2011'];
$condition = ['new','used'];



if(isset($_POST['year'])){
    $model = $_POST['year'];
    for ($i = 0; $i < count($model); $i++) {
        $x = "$model[$i]";
        if($x == 'all'){
            $model = ['2009','2011','2010'];
        }
    }
}
if(isset($_POST['condition'])){
    $condition = $_POST['condition'];
    }

   
// print_r($model);

$model = "'" . implode ( "', '", $model ) . "'";
$condition = "'" . implode ( "', '", $condition ) . "'";




$con = mysqli_connect("localhost","root",'',"carintelli");

// $query = "SELECT * FROM car_list WHERE car_status = '1' ORDER BY id DESC";

$query = "SELECT * FROM car_list WHERE car_status = '1'
             AND model IN (".$model.") 
             AND car_condition IN (".$condition.") 
             ORDER BY id DESC";
$r = mysqli_query($con,$query);



?>
