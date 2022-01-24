<?php 
include('connexion.php');


// $id=$_GET['id'];
//      $brand =$_POST['brand'];
//     $pn =$_POST['pn'];
//     $reference =$_POST['reference'];
//     $price =$_POST['price'];
//     $quantity =$_POST['quantity'];

if($_SERVER['REQUEST_METHOD']=="POST"){

    $brand= = $_POST['Name'];
    $pn = $_POST['pn'];
    $reference = $_POST['reference'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // file properties
    $file=$_FILES["image"]["tmp_name"];
    $name=$_FILES["image"]["name"];
    $extention=explode(".",$name);
    $newNmae=uniqid()."images".".".$extention[1];
    $fileUpload="uploads/".$newNmae;
    move_uploaded_file($file,$fileUpload);

    $query_prd=$conn->prepare( "INSERT INTO product (nom,description,prix,image,category,stock) VALUES
    ('$namepr','$decriptionpr',$pricepr,'$newNmae','$catepr','$stock')");
    $query_prd->execute(); 

     header("location: products.php");

}

 
 
 
 
 ?>
