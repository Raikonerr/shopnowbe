
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "gestion";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select =mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND pass ='$password' ");
    $row  = mysqli_fetch_array($select);
    
    if(is_array($row)) {
        $_SESSION["username"] = $row['username'];
        $_SESSION["pass"]  = $row['pass'];
       
    } 
    }
    if(isset($_SESSION["username"])){
        header("location:dashboard.php");
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
    <title>ShopNow</title>
</head>
<body>
    <div class="login-form">
        
    <div class="container">
        <div class="main">
                <div class="content">
                    <h2>Welcome to ShopNow</h2>
                    <form id="form" action="index.php" method="POST">
                        <input class="inp"  type="text" name="username" id="username" placeholder="Username">
                        <input class="inp" type="password" name="password"  id="password" placeholder="Password" >
                        <input class="btn"  name="login" id="btn" type="submit" value="Log In" >
                    </form>
                    <p class="account"> Don't have an account ? <a href="#">Register</a></p>
                </div>

                <div class="form-img">
                    <img src="pic/Img.png">
                </div>

        </div>
    </div>
    </div>

</html>