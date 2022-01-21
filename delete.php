<?php require_once('connexion.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <div class="container">
        <div class="message">
        <?php 
       if(isset($_GET['delete'])){

                
               echo $id;
               $id=$_GET['delete'];
               
            }
            
            if(mysqli_query($conn,"DELETE FROM product where ID_P ='$id'")){
                echo "product has been deleted";
            }else{
                echo "item not found";
            }
        echo $_GET['d'];
             ?>
            <a href="products.php">return</a>
        </div>
    </div>
    
</body>
</html>















