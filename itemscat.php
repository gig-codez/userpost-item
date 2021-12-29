<?php

  include("includes/connect.php");

if (isset($_POST["submit"])) {

    $name = $_POST["itemName"];

    $cost = $_POST["cost"];

    $qty = $_POST["quantity"];

    $visible = "no";

    $sql = "INSERT INTO items (itemName,itemCost,itemQuantity,visible)VALUES('$name','$cost','$qty','no')";

    mysqli_query($conn,$sql);
   
    mysqli_close($conn);

    header("location: listing.php");
  
}
?>
