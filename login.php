<?php
if (isset($_POST["submit"])) {
    # code...

  session_start();
   include("includes/connect.php");
   

    $username = $_POST["username"];

    $password = $_POST["passcode"];

    $sql =  "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn,$sql);
    if($query){
        $_SESSION["user"] = $username;
    }
    header("location:page.php");
}else{
    header("location:index.php");
}
?>