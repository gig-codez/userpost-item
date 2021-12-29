
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./includes/style.css">
    <title>Listings</title>
</head>
<body>
    <nav>
        <h4>Listing of Items</h4>
        <a href="./page.php">back to catalog</a>
    </nav>

    <main>
        <?php include"includes/settings.php"?>
        <fieldset>
            <legend>Approved  items from stock</legend>
        
        <div id="lists">
            <?php
            # addding the database connection functionality to this page
                include "includes/connect.php";
                $sql = "SELECT * FROM items WHERE visible='yes'";
                $queriedData = mysqli_query($conn,$sql);
                while ($data = mysqli_fetch_assoc($queriedData)) {
                    echo "<p>".$data["itemName"]." &nbsp;&nbsp;&nbsp;&nbsp; <b class='approved'>".$data["itemCost"]."</b> </p>";
                }
        ?>
        
        </div>
        </fieldset>
    </main>
   
   <script src="./includes/sortable.js"></script>
    <script>
        /***Code for sorting the items */
        const listSort = document.getElementById("lists");
       new Sortable.create(listSort, { animation: 150 });
/**************************************************** */

/**********************Code for checking items  with tag p*/
       const dist = document.querySelectorAll("p");// this returns an array of domElements
       /** the returned array is now looped trough using the forEach function*/
       dist.forEach((item,index)=>{
           /***The selected item is now clicked with the onclick event */
           item.onclick = (e) => {
           const cost = (item.textContent);// this contains tne data between the p tags
           const itemCost =  parseInt((cost.replace(/[aA-zZ]/g,"")).replace(" ",""));// here we are picking on the letters only and also neglecting the whitespaces
           const itemname = (cost.replace(/[0-9]/g,"")).replace(" " , "");// here we are picking on the numbers only and also neglecting the whitespaces
       
           var result = confirm("Do you wish to purchase "+itemname+"!!");// this confirms if either proceed with your booking or not
           if(result == true){
            let qty = prompt("Enter the quantity");// the prompt widow takes in values to be used to compute data
            var ans = parseInt(qty) * itemCost;
            alert("Your total cost for " + itemname + " is "+ans);
           }else{
            alert("OOpps you didn't select any item");// this alerts the user if no item is booked or purchased
           }
       }
 })
       
   </script>
   
</body>
<!-- 
    /***
   *  @Turyahebwa Alex 18/U/23405/EVE
   */
 -->
<?php include"includes/footer.php"?>
</html>