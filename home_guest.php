<?php

include 'config.php';

session_start();

//$user_id = $_SESSION['user_id'];

//if(!isset($user_id)){
//   header('location:login.php');
//}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'Đã có trong giỏ hàng rồi !';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Sản phẩm đã được thêm vào giỏ hàng !';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="icon" href="images/about-img.png" type="image/x-icon">

   <title>Turnip Books Store</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header_guest.php'; ?>

<section class="home">

   <div class="content">
      <h3>Chọn sách liền tay, tới ngay Turnip.</h3>
      <p>Từ những truyện cổ tích cổ xưa đến những tác phẩm văn học đương đại, hãy khám phá vô vàn cuộc phiêu lưu trên những trang sách.</p>
      <a href="about.php" class="white-btn">Xem thêm</a>
   </div>

</section>

<section class="products">

   <h1 class="title">Sản phẩm mới nhất</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">
      <?php 
      echo number_format($fetch_products['price'], 0, ',', '.') . 'vnđ';
      if(isset($fetch_products['discount_price']) && $fetch_products['discount_price'] < $fetch_products['price']) { 
        echo '/<span>' . number_format($fetch_products['discount_price'], 0, ',', '.') . 'vnđ</span>';
       } 
      ?>
</div>

      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop_guest.php" class="option-btn">Ở đây có nhiều sách</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>Về Turnip</h3>
         <p>Sách củ cải trắng nghe tò mò phải không? Hãy cùng khám phá thêm về chúng mình nhé.</p>
         <a href="about.php" class="btn">Tìm hiểu thêm</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Bạn có thắc mắc nào không?</h3>
      <p>Hãy để lại email và câu hỏi của bạn để chúng mình có thể tư vấn thêm nhé.</p>
      <a href="contact_guest.php" class="white-btn">Liên hệ ngay !</a>
   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>