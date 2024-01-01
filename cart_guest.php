<?php

include 'config.php';

session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/about-img.png" type="image/x-icon">
   <title>Turnip Cart</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header_guest.php'; ?>
<div class="heading">
   <h3>Turnip Cart</h3>
   <p> <a href="home_guest.php">Trang chủ</a> / Giỏ hàng </p>
</div>
<section class="shopping-cart">
</section>
</body>
</html>