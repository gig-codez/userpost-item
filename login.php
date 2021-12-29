<?php
# here we are adding the connection functionality to this page
include("includes/connect.php");
# here we check if our data is submited via the post
if (isset($_POST["submit"])) {

  session_start();
   
    $username = $_POST["username"];

    $password = $_POST["passcode"];
# this code below selects all the data in a table called users
    $sql =  "SELECT * FROM users WHERE username='$username' AND password='$password'";
   # here we execute the sql code and perform the database connection
    $query = mysqli_query($conn,$sql);
    if($query){
        $_SESSION["user"] = $username;
    }
    header("location:page.php");
}else{
    header("location:index.php");
}

/***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
?>