<?php
require 'connect.php';

session_start();

if (isset($_POST['addtocart'])) {
    if (isset($_SESSION['petshop'])) {

        $image = $_POST['products_img'];
        $price = $_POST['products_price'];
        $quantity = $_POST['products_quantity'];
        $username = $_SESSION['petshop'];

        $sql = "INSERT INTO `orders`( `product_img`, `product_price`, `product_quantity`, `username`) VALUES ('$image',$price,$quantity,'$username'); ";

        $result = mysqli_query($conn,$sql);


    } else {
        echo "
        <script>alert('please sign in first')</script>
        ";

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
    <link rel="stylesheet" href="css/dogs.css">
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
    
  <h3>DOGS</h3>
  <h5>Dog food</h5>
  <div class="sortby">
  <label for="sortfood">Sort by:</label>
  <select id="sortfood">
    <option value="price">Price</option>
    <option value="A-Z">A-Z</option>
    <option value="Z-A">Z-A</option>
  </select>
</div>
  <br><br>
  <div class="card-container">
  <?php
  
  $sql = "SELECT * FROM dogs_products WHERE dogs_id IN (1, 2, 3, 4)";
  $result = mysqli_query($conn, $sql);
  $allProducts = mysqli_fetch_all($result, MYSQLI_ASSOC); 
      foreach ($allProducts as $product) {
      $id = $product['dogs_id'];
      $products_name = $product["products_name"];
      $products_img = $product["products_img"];
      $products_price = $product["products_price"];
      echo '
      <div class="card" style="width: 18rem;">
          <img src="' . $products_img . '" class="card-img-top" alt="...">
          <div class="card-body">
              <p class="card-title">' . $products_name . '</p>
              <p class="card-text">' . $products_price . 'JOD</p>
          </div>
          <form method="post">
              <input type="hidden" name="products_name" value="' .($products_name) . '">
              <input type="hidden" name="products_img" value="' . ($products_img) . '">
              <input type="hidden" name="products_price" value="' . ($products_price) . '">
              <input type="hidden" name="products_quantity" value="1"> 
              <input type="submit" name="addtocart" value="Add to cart"class="btn">
          </form>
           </div> 
          ';
          
  
  }
 
  ?>
  </div>
</div>
  
  <h5>Dog Treats & Toys</h5>
  <div class="sortby">
  <label for="sortfood">Sort by:</label>
  <select id="sortfood">
    <option value="price">Price</option>
    <option value="A-Z">A-Z</option>
    <option value="Z-A">Z-A</option>
    </select>
    </div>
    <br> <br>
  <div class="card-container">
  <?php
  
  $sql = "SELECT * FROM dogs_products WHERE dogs_id IN (5, 6, 7, 8)";
  $result = mysqli_query($conn, $sql);
  $allProducts = mysqli_fetch_all($result, MYSQLI_ASSOC); 
      foreach ($allProducts as $product) {
      $id = $product['dogs_id'];
      $products_name = $product["products_name"];
      $products_img = $product["products_img"];
      $products_price = $product["products_price"];
      echo '
      <div class="card" style="width: 18rem;">
          <img src="' . $products_img . '" class="card-img-top" alt="...">
          <div class="card-body">
              <p class="card-title">' . $products_name . '</p>
              <p class="card-text">' . $products_price . 'JOD</p>
          </div>
          <form method="post">
              <input type="hidden" name="products_name" value="' .($products_name) . '">
              <input type="hidden" name="products_img" value="' . ($products_img) . '">
              <input type="hidden" name="products_price" value="' . ($products_price) . '">
              <input type="hidden" name="products_quantity" value="1"> 
              <input type="submit" name="addtocart" value="Add to cart"class="btn">
          </form>
           </div> 
          ';
          
  
  }
 
  ?>
  </div>
</div>

      <h5>Litter & Pads</h5>
      <div class="sortby">
      <label for="sortfood">Sort by:</label>
      <select id="sortfood">
        <option value="price">Price</option>
        <option value="A-Z">A-Z</option>
        <option value="Z-A">Z-A</option>
        </select>
      </div>
        <br> <br>
       <div class="card-container">
       <?php
  
  $sql = "SELECT * FROM dogs_products WHERE dogs_id IN (9, 10, 11, 12)";
  $result = mysqli_query($conn, $sql);
  $allProducts = mysqli_fetch_all($result, MYSQLI_ASSOC); 
      foreach ($allProducts as $product) {
      $id = $product['dogs_id'];
      $products_name = $product["products_name"];
      $products_img = $product["products_img"];
      $products_price = $product["products_price"];
      echo '
      <div class="card" style="width: 18rem;">
          <img src="' . $products_img . '" class="card-img-top" alt="...">
          <div class="card-body">
              <p class="card-title">' . $products_name . '</p>
              <p class="card-text">' . $products_price . 'JOD</p>
          </div>
          <form method="post">
              <input type="hidden" name="products_name" value="' .($products_name) . '">
              <input type="hidden" name="products_img" value="' . ($products_img) . '">
              <input type="hidden" name="products_price" value="' . ($products_price) . '">
              <input type="hidden" name="products_quantity" value="1"> 
              <input type="submit" name="addtocart" value="Add to cart"class="btn">
          </form>
           </div> 
          ';
          
  
  }
 
  ?>
  </div>
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

</html>