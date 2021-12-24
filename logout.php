<?php 

session_start();
// $con = mysqli_connect("localhost","root",'',"profiling");
// include 'config.php';
session_destroy();
header("location:index.html");

?>