<?php 

$con = mysqli_connect("localhost","root",'',"carintelli");

session_start();

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];

    if($password == $confirm_password){

        $password = md5($password);
        $query = "INSERT INTO register(fname,lname,email,password,gender) VALUES ('$fname','$lname','$email','$password','$gender')";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
            $_SESSION['status']= "Register Succesfully";
             header("Location: login.php");
        }
        else
        {
            $_SESSION['status']= "Register Failed";
             header("Location: register.php");
        }
    
    }

}

// $name = $first_name.' '.$last_name;


?>