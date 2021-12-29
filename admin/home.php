<?php
    session_start();
    include("../includes/connect.php");
    if (!empty($_SESSION["user"])) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Section</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../includes/style.css">
    </head>
    <body>
        <nav>
        <h4>Hi <?php echo $_SESSION["user"];?></h4>
        <a href='./logout.php'>Logout</a>

        </nav>
        <br/>
       
        <main>
            <?php include "../includes/settings.php";?>
        <form action="updateCart.php" method="POST">
          <label>Item to Update</label>
          <select name="itemUpdate">
              <option>Choose item to update</option>
              <?php include "dropdown.php" ?>
          </select>
         <br/>
         <br/>
         <label for="visibility">Change visibility</label>
         <select name="visible">
             <option value="no">No</option>
             <option value="yes">Yes</option>
         </select>
        <br/>
        <br/>
         <input type="submit" name="submit" value="Update"/>
      </form>

        </main>

    

      <table border='2'>
          <tr>
              <th>Name</th>
              <th>Quantity</th>
              <th>Cost</th>
              <th>Visible</th>
          </tr>
          <?php
            $tt = mysqli_query($conn,"SELECT * FROM items");
            // if (mysqli_num_rows($tt) > 1) {
                while ($td = mysqli_fetch_assoc($tt)) {
                    echo "<tr>";
                    echo "<td>".$td["itemName"]."</td>";
                    echo "<td>".$td["itemQuantity"]."</td>";
                    echo "<td>".$td["itemCost"]."</td>";
                    echo "<td>".$td["visible"]."</td>";
                    echo "</tr>";
                }
            // }
          ?>
      </table>

      <br/>

    
     </body>
     <?php include"../includes/footer.php"?>
</html>
<!-- 

/***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
 -->
<?php
    }else{
        header("location:index.php");
    }
?>