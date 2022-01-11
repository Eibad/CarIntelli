<?php 

$con = mysqli_connect("localhost","root",'',"carintelli");

// session_start();

if(isset($_POST['submit'])){

	// print_r($_FILES);
    $imageFile=basename($_FILES['image']['name']);
    // print_r($imageFile);
    // console.log("sdsd"+ $imageFile);	
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $mobileNumber = $_POST['mobileNumber'];
    $about = $_POST['about'];

        $query = "INSERT INTO team(name,designation,mobileNumber,about,image) VALUES ('$name','$designation','$mobileNumber','$about','$imageFile')";
        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
            $_SESSION['status']= "Added Succesfully";
             header("Location: all-students.html");
        }
        else
        {
            $_SESSION['status']= "Failed to add";
             header("Location: all-students.html");
        }
    

}

// $name = $first_name.' '.$last_name;


?>