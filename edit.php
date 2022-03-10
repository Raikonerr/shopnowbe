<?php 
    include 'connexion.php';

    $id=$_GET['id'];
    $affsql="SELECT * FROM `product` WHERE `ID_P`='$id'";
    $res=mysqli_query($conn,$affsql);
   
    if(isset($_POST['save'])){
  
        $id=$_GET['id'];
        $brand =$_POST['brand'];
        $pn =$_POST['pn'];
        $reference =$_POST['reference'];
        $price =$_POST['price'];
        $quantity =$_POST['quantity'];
        
        if(mysqli_query($conn,"UPDATE `product` SET `Brand`='$brand',`Product_name`='$pn',`Reference`='$reference',`Price`='$price',`Quantity`='$quantity' WHERE `ID_P`='$id'")){
            header("location: products.php");
        }else{
            echo "item not found";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b60c15b16a.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">
    <title>update product</title>
</head>
<body>
    
    <div class="login-form">
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Edit product</h2>
                    <form id="form" action="" method="POST">
                        <?php while( $affiche=mysqli_fetch_array($res)):; ?>

                        <input class="inp" name="id" placeholder="id" value="<?php echo $_GET['id']?>">
                        <input class="inp"  type="text" name="brand" id="username" placeholder="Product brand"  value="<?php echo $affiche[1] ?>">
                        <input class="inp" type="text" name="pn"  id="password" placeholder="Product name" value="<?php echo $affiche[2] ?>">
                        <input class="inp"  type="number" name="reference" id="username" placeholder="Reference" value=<?php echo $affiche[3] ?>>
                        <input class="inp"  type="number" name="price" id="username" placeholder="Price" value=<?php echo $affiche[4] ?>>
                        <input class="inp"  type="number" name="quantity" id="username" placeholder="Quantity" value=<?php echo $affiche[5] ?>>
                        <input class="btn"  name="save" id="btn" type="submit" value="Submit">
                        <a href='http://localhost/shopnowbe/products.php' style="margin-left :50%; background:none; color:black;">
                            Cancel
                        </a>
                        <?php endwhile; ?>
                    </form>
                </div>
                <div class="form-img">
                    <img src="pic/edit.png">
                </div>
            </div>
        </div>
    </div>
</body>
</html>