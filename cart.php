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
   <link rel="stylesheet" href="css/cart.css">
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

   
    <br>
    <table> 
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
         </thead>
        <tbody>
            <?php

                $username = $_SESSION['petshop'];
                $sql = "SELECT * FROM orders WHERE username = '$username';";
                $result = mysqli_query($conn, $sql);
                $allorders = mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                $total = 0;
                
                foreach ($allorders as $userorders) {
                    $id = $userorders['id'];
                    $product_img = $userorders['product_img'];
                    $product_price = $userorders['product_price'];
                    $product_quantity = $userorders['product_quantity'];
                
                    $row_total = $product_price * $product_quantity; 
                    $total += $row_total; 
                
                    echo "
                    <tr>
                        <td><img src='$product_img' alt='Product Image' width='50'></td>
                        <td>$product_price</td>
                        <td>
                            <form action='updateitem.php' method='post'>
                                <input type='number' name='product_quantity' value='$product_quantity' min='1' max='20' >
                                <input type='hidden' name='id' value='$id'>
                                <button type='submit' name='updateorder' class='btn btn-primary'>Update</button>
                            </form>
                        </td>
                        <td>$row_total</td> 
                        <td>
                            <button class='btn btn-danger'><a class='text-light' href='deleteitem.php?id=$id'>Remove</a></button>
                        </td>
                    </tr>";
                }
                ?>
                

            
       
    </tbody>
    </table>
    <br> <br>


   
    <form id="cartform" method="post" action="">
    <label for="promocode">Promo code:</label>
    <input type="text" id="promocode" >
    <p>Delivery: <span>FREE</span></p>
    <p>Discount: <span>0 JOD</span></p>
    <p>Total: <span><?= $total ?> JOD</span></p>
    <button type="submit" name="checkout">CHECKOUT</button>
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