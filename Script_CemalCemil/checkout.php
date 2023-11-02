<?php
error_reporting(E_ERROR);

@include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $method = $_POST['method'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, method, street, city, pin_code, total_products, total_price) VALUES('$name','$number','$method','$street','$city','$pin_code','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Terimakasih sudah berbelanja!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : Rp ".$price_total.",000,-  </span>
         </div>
         <div class='customer-details'>
            <p> Nama : <span>".$name."</span> </p>
            <p> Nomor Telp : <span>".$number."</span> </p>
            <p> Alamat : <span>".$street.", ".$city.", ".$pin_code."</span> </p>
            <p> Metode Pembayaran : <span>".$method."</span> </p>
         </div>
            <a href='menu.php' class='btn'>Lanjut Belanja</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/OrderStyle.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Complete Your Order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>Cart anda kosong!</span></div>";
      }
      ?>
      <span class="grand-total"> Total Harga : Rp <?= $grand_total; ?>,000,- </span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>Nama</span>
            <input type="text" placeholder="Masukkan nama anda" name="name" required>
         </div>
         <div class="inputBox">
            <span>Nomor Telepon</span>
            <input type="number" placeholder="Masukkan no. telp anda" name="number" required>
         </div>
         <div class="inputBox">
            <span>Alamat</span>
            <input type="text" placeholder="Masukkan alamat anda" name="street" required>
         </div>
         <div class="inputBox">
            <span>Kota</span>
            <input type="text" placeholder="e.g. Jakarta" name="city" required>
         </div>
         <div class="inputBox">
            <span>Kode Pos</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
         <div class="inputBox">
            <span>Metode Pembayaran</span>
            <select name="method">
               <option value="Cash On Delivery" selected>Cash On Delivery</option>
               <option value="Virtual Account">Virtual Account</option>
               <option value="Transfer Bank">Transfer Bank</option>
               <option value="Minimarket">Minimarket</option>

            </select>
         </div>
      </div>
      <input type="submit" value="Checkout" name="order_btn" class="btn">
   </form>

</section>

</div>

<?php include 'footer.php'; ?>