<?php
# there code below creates and destroys the session on logout
    session_start();
    session_destroy();
# here the user is redirected to the index.php page
    header("location: index.php");
    /**
     * /***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
     */
?>