<?php
  $que = mysqli_query($conn,"SELECT * FROM  items");
  // if (mysqli_num_rows($que) > 1) {
      while ($row = mysqli_fetch_assoc($que)) {
          echo "<option value='".$row["id"]."'>".$row["itemName"]."</option>";
      }
  // }

?>