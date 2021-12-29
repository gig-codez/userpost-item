<?php
  include("../includes/connect.php");
  # checking if our data is submited via post
  if (isset($_POST["submit"])) {
      
    $visible = $_POST["visible"];

    $item = $_POST["itemUpdate"];
# this code below updates all the data in a table called items
    $sql = "UPDATE items SET visible='$visible' WHERE id=$item";
    mysqli_query($conn,$sql);
    # closing the database connection

    mysqli_close($conn);

    header("location: home.php");
  
  }
  /***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
?>