<!DOCTYPE html>
  <head>
    <title>User Login</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./includes/style.css">
    <style type="text/css">
      body{
        padding: 20px !important;
        display:flex;
        flex-direction:column;
        justify-content: center;
        align-items:center;
      }
</style>
  </head>

  <body>
    <br/>
    <br/>
    <br/>
    <div>
      <h4>User login</h4>
    </div>
    <br/>
    <br/>
<!-- this code displays the user login panel -->
      <form action="login.php" method="POST">
<!-- Here the inputs username -->

          <label for="">Username</label>
          <input type="text" name="username" id=""/>
<br/>
<!-- Here the inputs password -->
          <label for="">Password</label>
          <input type="password" name="passcode" id=""/>
<br/>
          <input type="submit" name="submit" value="Login">
      </form>
  </body>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<!-- Here the we are adding the footer code /***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */-->

  <?php include"includes/footer.php"?>
</html>