<?php
# here we are adding the connection functionality to this page
  include("includes/connect.php");
# here we check if our data is submited via the post
if (isset($_POST["submit"])) {

    $name = $_POST["itemName"];

    $cost = $_POST["cost"];

    $qty = $_POST["quantity"];

    $visible = "no";
# this code below inserts the data in a table called items
    $sql = "INSERT INTO items (itemName,itemCost,itemQuantity,visible)VALUES('$name','$cost','$qty','no')";
# here we execute the sql code and perform the database connection
    mysqli_query($conn,$sql);
   # here we close the databse connection after execution
    mysqli_close($conn);

    header("location: listing.php");
  
}

/***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
?>
