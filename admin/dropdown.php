<?php
  $que = mysqli_query($conn,"SELECT * FROM  items");
  // if (mysqli_num_rows($que) > 1) {
      while ($row = mysqli_fetch_assoc($que)) {
        #here we loop through the different items from the database
          echo "<option value='".$row["id"]."'>".$row["itemName"]."</option>";
      }
  // }


  /***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
?>