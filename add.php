<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "gestion";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);

if(isset($_POST['save'])){
    $brand =$_POST['brand'];
    $pn =$_POST['pn'];
    $reference =$_POST['reference'];
    $price =$_POST['price'];
    $quantity =$_POST['quantity'];


    if(mysqli_query($con,"INSERT INTO product (Brand, Product_name, Reference, Price, Quantity)
      VALUES ('$brand','$pn','$reference','$price','$quantity')"))
    { header("location: products.php");
    }else{
        $e=mysqli_error($con);}
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b60c15b16a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Add product</title>
</head>
<body>
    
    <div class="login-form">
        <div class="container">
            <div class="main">
                
                <div class="content">
                    <h2>Add a product</h2>
                    <form id="form" action="" method="POST">
                        <input class="inp"  type="text" name="brand" id="username" placeholder="Brand">
                        <input class="inp" type="text" name="pn"  id="password" placeholder="Product name" >
                        <input class="inp"  type="number" name="reference" id="username" placeholder="Reference">
                        <input class="inp"  type="number" name="price" id="username" placeholder="Price">
                        <input class="inp"  type="number" name="quantity" id="username" placeholder="Quantity">
                        <input class="btn"  name="save" id="btn" type="submit" value="Submit">
                        <a href='http://localhost/shopnowbe/products.php' style="margin-left :50%; background:none; color:black;">
                            Cancel 
                        </a>
                    </form>
                </div>
                
                <div class="form-img">
                    <img src="pic/product.png">
                </div>
        
            </div>
        </div>
    </div>
</html>