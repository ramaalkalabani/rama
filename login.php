<?php

require'connect.php';
session_start();
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql= "SELECT * FROM users WHERE email='$email' AND password='$password';";
    $result = mysqli_query($conn, $sql);
    $loggedinuser= mysqli_fetch_assoc($result);
    print_r($loggedinuser);
    if($loggedinuser){
     $_SESSION['petshop']=$email;
     header("Location: index.php");
 
}

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <script src="https://kit.fontawesome.com/5c8d7697f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <nav>
            <div class="leftnav">
            <a href="index.php">Home</a>
            <a href="">Products</a>
            <a href="contact.php">Contact</a>
            </div>
            <img src="assests\9b76b5c45d6d2d5c7f0b279a5af7ca5d.jpg" alt="" width="120px">
            <div class="rightnav">
            <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
            <a href="signin.php"><i class="fa-solid fa-user"></i></a>
            <form >
            <input type="search" >
            <button type="submit">Search</button>
            </form>
        </div>
        </nav>
    </header>
    <h1>Login with email address</h1>
    <p>Login with email address or <a href="signin.php">create account</a></p>

    <form id="loginform" action="" method="post"> 
       
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"required minlength="8" > <br> <br>
     
        <button type="submit" name="login">LOG IN</button>

        <a href="">forgot password?</a>
       
       
    </form>        


    
    <footer>
        <h2>About us</h2>
        <p>We offer a variety of top brands for all your pet needs. From healthy food and reliable litter boxes to fun toys and tasty treats, we have options for every pet and budget. Whether you want popular favorites or something special, you will find the perfect products for your cats and dogs here!</p>
        <div class="loc">
        <i class="fa-solid fa-location-dot"></i>
        <p>Amman, Mecca street </p>
        </div>
        <div class="email">
        <i class="fa-solid fa-envelope"></i>
        <p>PetShop@gmail.com </p>
        </div>
        <div class="number">
            <i class="fa-solid fa-phone"></i>
            <p> 0793681883</p>
            </div>
    
      <h2>Follow us on</h2>
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-brands fa-discord"></i>
      <i class="fa-brands fa-twitter"></i>
    </footer>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

</body>

</html>