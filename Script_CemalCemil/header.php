<?php

include 'config.php';

?>

<header class="header">

   <div class="flex">

   <a href="home.php"><img id="logo" src="images/cemalcemil.png" alt="logo" /></a>
      <style type="text/css">
         #logo 
         {
            width: 15%;
            background: #dac52c;
            border-radius: 100%;
         }
      </style>
      <a href="home.php" class="logo"></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="aboutUs.php">About Us</a>
         <a href="menu.php">Order</a>
         
         <!-- Ini buat icon cart -->
         <?php
      
         $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
         $row_count = mysqli_num_rows($select_rows);

         ?>

         <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
      
         <div id="menu-btn" class="fas fa-bars"></div>
         <!-- icon cart selesai disini-->
         <a href="account.php">My Account</a>  
      </nav>
   </div>
</header>