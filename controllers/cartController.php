<?php
  if(isset($_GET['cartid'])){
      $cartid = $_GET['cartid']; 
      $delcart = $ct->del_product_cart($cartid);
  }
      
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
      // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
      $cartId = $_POST['cartId'];
      $proId = $_POST['proId'];
      $quantity = $_POST['quantity'];
      $update_quantity_Cart = $ct -> update_quantity_Cart($proId,$cartId, $quantity); // hàm check catName khi submit lên
    if ($quantity <= 0) {
      $delcart = $ct->del_product_cart($cartId);
    }
  } 
?>
