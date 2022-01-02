<?php

$con = mysqli_connect("localhost","root",'',"carintelli");

$query = "SELECT * FROM car_list WHERE car_status = '1' ORDER BY id DESC";
$r = mysqli_query($con,$query);



?>