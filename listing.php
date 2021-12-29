
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

/**********************Code for checking items */
       const dist = document.querySelectorAll(".approved");
       dist.forEach((item,index)=>{
           item.onclick = (e) => {
           const cost = parseInt(item.textContent)
           var result = confirm("Do you wish to buy the selected item!!");
           if(result == true){
            let qty = prompt("Enter the quantity");
            var ans = parseInt(qty) * cost;
            alert("Your total cost is "+ans);
           }else{
            alert("OOpps you didn't select any item");
           }
       }
 })
       
   </script>
   
</body>

<?php include"includes/footer.php"?>
</html>