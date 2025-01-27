<?php
require 'connect.php';  

if (isset($_POST['updateorder'])) {
    $id = $_POST['id']; 
    $product_quantity = $_POST['product_quantity'];  

    $sql = "UPDATE orders SET product_quantity = $product_quantity WHERE id = $id;";


    $result = mysqli_query($conn, $sql);

    if ($result) {
      
        header("Location: cart.php");
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
}
?>
