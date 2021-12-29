<?php
# here we are adding the connection functionality to this page
 include("../includes/connect.php");
 session_start();
 # here we check if our data is submited via the post
if (isset($_POST["submit"])) {
    # code...
    $username = $_POST["username"];

    $password = $_POST["passcode"];
# this code below selects all the data in a table called admin
    $sql =  "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn,$sql);
    if($query){
        # here we are setting te session variable named user
        $_SESSION["user"] = $username;
    }
    # here the user is redirected to the home.php on login successfull
    header("location:home.php");
}else{
    header("location:index.php");
}

/***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
?>