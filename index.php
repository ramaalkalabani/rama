<?php



require 'connect.php';


session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="-yUGeCaKdfu72lcyJp0Hl_EEAf-arNigP2gONdYFnvE" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>
    <script src="https://kit.fontawesome.com/5c8d7697f8.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css\index.css">
   
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
    <section id="upperbod">
        <p>All the supplies you need for your cats and dogs!</p>
        <img src="assests\caes-e-gatos-espreitando-sobre-a-clara-linha-superior-azul-solido-banner-de-loja-de-animais-de-estimacao-sorriso-feliz-engracado-gerador-de-imagem-ai-weber_31965-214423.avif" alt="" >
        <button id="top">⬆</button>
    </section>
    <section id="shopby">
        <h2>Shop by pet!</h2>
        <a href="cats.php"><img src="assests\e2ac14e806a7955d925839d19a8a5910.jpg" alt=""> </a>
       <a href="dogs.php"><img src="assests\dcf22398192b67c572c5240d7dcf6204.jpg" alt=""></a>
    </section>
    <section id="brands">
        <h2>50+ brands in stock</h2>
        <img src="assests\ed935fd8cb36d1a7c36ba33ffe8a79b1.jpg" alt="">
        <img src="assests\images.png" alt="">
        <img src="assests\images (3).png" alt="">
        <img src="assests\images (2).png" alt="">
        <img src="assests\images (1).png" alt="">
        <img src="assests\CdntiU4u_400x400.png" alt="">
        <img src="assests\265442_f703e82deaf14dd4974fd98d84454aa1~mv2.jpg" alt="">
        <img src="assests\0265d9ff241c7928d435e9652cb11b36.jpg" alt="">
    </section>
    <section id="bestproducts">
    <h2>Our best selling products</h2>
    <div class="card-container">
      <div class="card" style="width: 18rem;">
        <img src="assests\1b6617cf347d13acab4a1815223f1225.jpg"" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Royal Canin Cat Food Digestive Comfort</h5>
          <a href="cart.php" class="btn btn-primary">add to cart</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="assests\915aea981dda4af6183fc7ad1ee1bd37.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ragdoll Adult dry food</h5>
          <a href="cart.php" class="btn btn-primary">add to cart</a>
        </div>
      </div>
      
      <div class="card" style="width: 18rem;">
        <img src="assests\14d277dc4fb7876f722893ea02dba9a0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Royal Canin Pug Adult Breed dry food</h5>
          <a href="cart.php" class="btn btn-primary">add to cart</a>
        </div>
      </div>
    </section>
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
<script src="javascript1.js"></script>
</body>

</html>
