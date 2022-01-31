<?php

session_start();
if(!isset($_SESSION['user'])&&!isset($_SESSION['pass'])&&empty($_SESSION['user'])&&empty($_SESSION['pass'])){
    header('location:index.php');
  }
include 'connexion.php';

$sql = "SELECT * FROM product";
$listep = mysqli_query($conn,$sql);
$product = array();
while($l=mysqli_fetch_array($listep)){
  $product[]=$l;

}


if(isset($_POST['del'])){
  
  $id= $_POST['id'];
 
  if(mysqli_query($conn,"DELETE FROM product where ID_P ='$id'")){
    header("location : products.php");
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="./products.css">
  <title>Products</title>
</head>
<body>
  <div class="container">
    <aside>

      <div class="top">
        <div class="logo">
          <img src="./images/—Pngtree—shop now banner free vector_6213142.png" alt="logo">
          <h2>Shop<span class="now">Now</span></h2>
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <a href="./dashboard.php">
          <span class="material-icons-sharp">grid_view</span>
          <h3>Dashboard</h3>
        </a>
        <a href="#" class="active">
          <span class="material-icons-sharp">inventory</span>
          <h3>Products</h3>
        </a>
        <a href="add.php" > <span class="material-icons-sharp">
            add
            </span>
          <h3>Add a product</h3>
        <a href="logout.php">
          <span class="material-icons-sharp">logout</span>
          <h3>Log out</h3>
        </a>
      </div>
    </aside>

    <main>
      <h1>Products</h1>
      <div class="products">
        <form method="POST" >
          <table>
            <thead>

              <tr>
                <th>Brand</th>
                <th>Product Name</th>
                <th>Reference</th>
                <th>Price</th>
                <th>Quantity</th>
              </tr>

            </thead>
            <?php foreach ($product as $p) : ?>
            <tbody>
          
              <tr>
                <td><?php echo $p [1] ?></td>
                <td><?php echo $p [2] ?></td>
                <td><?php echo $p [3] ?></td>
                <td><?php echo $p [4] ?></td>
                <td><?php echo $p [5] ?></td>
                <form method="POST" class ="delete">
                <td class="hidden"><input value=<?php echo $p[0]?> name="id"></td>
                <td> <button id="delete" name="del"> DELETE</button> <td>
                <td> <a href="edit.php?id=<?php echo $p[0] ?>" name="edit" > EDIT</a> <td>
              </tr>
            
            </tbody>
            <?php endforeach; ?>
          </table>
        </form>
      
    </main>

    <div class="right">
      <div class="top">
        <button class="menu" id="menu-btn">
          <span class="material-icons-sharp">menu
          </span>
        </button>
        <div class="theme-toggler">
          <span class="material-icons-sharp active">
            light_mode
          </span>
          <span class="material-icons-sharp">
            dark_mode
          </span>
        </div>
        <div class="profile">
          <div class="info">
            <p>Hey, <b>Lorem</b></p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="./images/blank-profile-picture-973460_1280.webp">
          </div>
        </div>
      </div>

  <script src="./products.js"></script>
</body>
</html>
