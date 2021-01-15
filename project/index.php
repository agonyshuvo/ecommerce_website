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
            
            <div class="col-lg-4">
                <form action="manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/12pro.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                          <a href="details.php" target="blank">
                            <h5 class="card-title">Apple Iphone 12 Pro</h5>
                           </a>
                            <p class="card-text"> Price:12</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone 12 Pro">
                            <input type="hidden" name="Price" value="12">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <form action= "manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/12.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                        <a href="https://www.gsmarena.com/apple_iphone_12-10509.php" target="blank">
                            <h5 class="card-title">Apple Iphone 12 </h5>
                           </a>
                            <p class="card-text"> Price:10</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone 12">
                            <input type="hidden" name="Price" value="10">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <form action="manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/11pro.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                        <a href="d11.php" target="blank">
                            <h5 class="card-title">Apple Iphone 11 pro </h5>
                           </a>
                            <p class="card-text"> Price:11</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone 11 pro">
                            <input type="hidden" name="Price" value="12">
                        </div>
                    </div>
                </form>
            </div>
            
           <tr>
            <div class="col-lg-4" >
                <form action="manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/11.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                        <a href="d11e.php" target="blank">
                            <h5 class="card-title">Apple Iphone 11 </h5>
                           </a>
                            <p class="card-text"> Price:12</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone 11">
                            <input type="hidden" name="Price" value="12">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <form action="manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/XR.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                        <a href="https://www.gsmarena.com/apple_iphone_xr-9320.php" target="blank">
                            <h5 class="card-title">Apple Iphone XR </h5>
                           </a>
                            <p class="card-text"> Price:12</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone XR">
                            <input type="hidden" name="Price" value="12">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <form action="manage_cart.php" method="POST">
                    <div class="card" >
                        <img src="images/xs.jpg" class="card-img-top" >
                        <div class="card-body text-center" >
                        <a href="https://www.gsmarena.com/apple_iphone_xs-9318.php" target="blank">
                            <h5 class="card-title">Apple Iphone XS </h5>
                           </a>
                            <p class="card-text"> Price:12</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> 
                            <input type="hidden" name="Item_Name" value="Apple Iphone XS2">
                            <input type="hidden" name="Price" value="12">
                        </div>
                    </div>
                </form>
            </div>
            </tr>
        </div>
     </div>  
</body>
</html>