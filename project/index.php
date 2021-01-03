<?php 
include ("header.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
     
     

    
    <div class="container mt-5">
        <div class="row">
            
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/12.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                          <a href="details.php" target="blank">
                            <h5 class="card-title">Apple Iphone 12</h5>
                           </a>
                            <p class="card-text"> Price:12</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone 12">
                            <input type="hidden" name="Price" value="12">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action= "manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/xr.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                            <h5 class="card-title">Apple Iphone xr</h5>
                            <p class="card-text"> Price:10</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone xr">
                            <input type="hidden" name="Price" value="10">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/12.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                            <h5 class="card-title">Apple Iphone 12</h5>
                            <p class="card-text"> Price:12</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone 12">
                            <input type="hidden" name="Price" value="12">
                        </div>
                    </div>
                </form>
            </div>

            


        </div>
     </div>  
</body>
</html>