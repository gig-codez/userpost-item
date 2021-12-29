<?php
 include("../includes/connect.php");
 session_start();
 
if (isset($_POST["submit"])) {
    # code...
  
    $username = $_POST["username"];

    $password = $_POST["passcode"];

    $sql =  "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn,$sql);
    if($query){
        $_SESSION["user"] = $username;
    }
    header("location:home.php");
}else{
    header("location:index.php");
}
?>