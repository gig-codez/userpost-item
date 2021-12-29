<?php
# here is the code to connect to the data base
    $conn = mysqli_connect("localhost","root","","list");
    if(!$conn){
        # this function displays the error message if connection is not established
        die("Error".mysqli_connect_error($conn));
    }else{
        // echo "Connected";
    }
?>