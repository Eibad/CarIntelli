<?php 

$con = mysqli_connect("localhost","root",'',"carintelli");

session_start();

if(isset($_REQUEST['submit']))
{

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $password = md5($password);
    $line = "select * from register where email='$email' and password='$password'";
    $query = mysqli_query($con,$line);
    $result = mysqli_num_rows($query);

    if($result>0)
    {
    
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['email'] = $row['email'];


        header("location:index-3.php");


    }
    
   

}



?>