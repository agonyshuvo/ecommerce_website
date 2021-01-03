<?php
 session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
            *{ 
            box-sizing : border-box;
            }

            body{
            
            background:gray;
            }

            nav{
            background :#594848; 
            width:100%;
            overflow:auto;
            }

            u1{
            margin:0;
            padding:0;
            list-style:none;
            }
            
            li{
                float: left;
            }	
            
            nav a{
            width: 120px;
            display:block;
            text-decoration: none ;
            text-align: center;
            font-size:20px; 
            color:white;
            padding: 25px 10px;
            font-family: Times New Roman;
            }
            
            nav a:hover{
            background-color: #00ffbf;
            color: black;
            font-weight: bold;
            border: 2px solid #4CAF50;
            }
    </style>


</head>
<body>
    <nav>

         
         <u1>
            <li> <a href ="index.php"> Home </a> </li> 
            
            <li> <a href ="#"> Search  </a> </li>
            
            <li> <a href ="account.php"> Account</a> </li>
            <li> <a href ="help.php"> Help </a> </li>
        </u1>
        
        <div>
             <?php
            $_count=0;
            if(isset($_SESSION['cart']))
            {
                $_count=count($_SESSION['cart']);
            }
            ?>
           <li> <a href="mycart.php"> Cart (<?php echo $_count ; ?>) </a></li>
      </div>

    </nav>
</body>
</html>