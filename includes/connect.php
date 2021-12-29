<?php
    $conn = mysqli_connect("localhost","root","","list");
    if(!$conn){
        die("Error".mysqli_connect_error($conn));
    }else{
        // echo "Connected";
    }
?>