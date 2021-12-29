<?php
# here we initialise the session object
    session_start();
    include"includes/connect.php";
    # if the session have value or set then your a valid user
    if (!empty($_SESSION["user"])) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Item</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./includes/style.css">
    </head>
    <body>
<nav>
    <h4>Hi <?php echo $_SESSION["user"];?></h4>
    <a href="./logout.php">Logout</a>
</nav>


<main>
    
<?php include"includes/settings.php";?>
      <form action="itemscat.php" method="POST">
          <p>
              <center style="font-size:19px;">Post your item</center>

              </p>
          <label for="">Name of Item</label>
          <input type="text" name="itemName" id=""/>
          <br/><br/>
          <label for="">Cost Of Item</label>
          <input type="text" name="cost" id=""/>
          <br/><br/>
          <label for="">Quantity Of Item</label>
          <input type="text" name="quantity" id=""/>
          <br/>
         <!-- <input type="hidden" name="visible" value="no"/> -->
         <br/>
            <input type="submit" name="submit" value="Post Item"/>
      </form>

      </main>
     </body>
     <?php include"includes/footer.php"?>
     

</html>

<?php
    }else{
        header("location:index.php");
    }
    /***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
?>