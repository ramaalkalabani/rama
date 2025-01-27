<?php

require'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <script src="https://kit.fontawesome.com/5c8d7697f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/contact.css">
    </head>
<body>
    <header>
        <nav>
         
            
            <div class="leftnav">
            <a href="index.php">Home</a>
            <a href="cats.php">Products</a>
            <a href="contact.php">Contact</a>
            </div>
            <img src="assests\9b76b5c45d6d2d5c7f0b279a5af7ca5d.jpg" alt="" width="120px">
            <div class="rightnav">

            <?php
            if (isset($_SESSION['petshop'])) {
                $username = $_SESSION['petshop'];
                echo "
                <a href='logout.php'><i class='fa-solid fa-right-from-bracket'></i></a>
                <a href='cart.php'><i class='fa-solid fa-cart-shopping'></i></a>
                ";
            } else {
                echo "
                <a href='signin.php'><i class='fa-solid fa-user'></i></a>
                <a href='cart.php'><i class='fa-solid fa-cart-shopping'></i></a>
                ";
            }


            ?>

            <form>
            <input type="search" >
            <button type="submit">Search</button>
            </form>
        </div>
     
        </nav>
    </header>
    
<h3>Contact us</h3>
<div class="contact-container">
    <div class="contact-details">
        
        <div class="contact-item">
            <i class="fa-solid fa-envelope"></i>
            <div>
                <h4>PetShop@gmail.com</h4>
            
            </div>
        </div>
        <div class="contact-item">
            <i class="fa-solid fa-phone"></i>
            <div>
                <h4>0793681883</h4>
                
            </div>
        </div>
    </div>

  
    <form id="contactform" action="" method="post">
        <input type="text" id="Name" placeholder="Name"> 
        <input type="email" id="Email" placeholder="Email"> 
        <input type="text" id="Subject" placeholder="Subject"> 
        <textarea id="message" rows="6" placeholder="Message"></textarea> 
        <button type="submit">Send Message</button>
    </form>
</div>
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