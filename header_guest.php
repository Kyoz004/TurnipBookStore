<?php
include 'config.php';

if(!isset($_SESSION['user_id'])){
   $_SESSION['user_id'] = null; // Set a default value for user_id if it's not already set
}
$user_id = $_SESSION['user_id'];

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>

         </div>
         <p> <a href="login.php">Đăng nhập</a> | <a href="register.php">Đăng kí</a> </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="index.php" class="logo">Turnip <img src="images/turnip.png" alt="Turnip"width="50" height="50" ></a>
         <nav class="navbar">
            <a href="home_guest.php">Trang chủ</a>
            <a href="shop_guest.php">Sản phẩm</a>
            <a href="orders_guest.php">Đơn hàng</a>
            <a href="contact_guest.php">Liên hệ</a>
            <a href="about_guest.php">Về Turnip</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page_guest.php" class="fas fa-search"></a>

            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart_guest.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            <div id="user-btn" class="fas fa-user"></div>
         </div>

         <div class="user-box">
            <?php if(isset($_SESSION['user_name'])) { ?>
            <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <?php } else { ?>
            <p>Username : <span>Guest</span></p>
            <?php } ?>
        </div>

      </div>
   </div>

</header>