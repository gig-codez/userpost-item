<?php
  include("../includes/connect.php");
  if (isset($_POST["submit"])) {
      
    $visible = $_POST["visible"];

    $item = $_POST["itemUpdate"];

    $sql = "UPDATE items SET visible='$visible' WHERE id=$item";
    mysqli_query($conn,$sql);
    mysqli_close($conn);

    header("location: home.php");
  }
?>