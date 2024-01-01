<?php

include 'config.php';

session_start();

//$user_id = $_SESSION['user_id'];

//if(!isset($user_id)){
//   header('location:login.php');
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="images/about-img.png" type="image/x-icon">
   <title>About Turnip</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header_guest.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="index.php">Trang chủ</a> / Về Turnip </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>Turniper ơi !</h3>
         <p>Mua hàng tại Củ cải trắng là sự lựa chọn sáng suốt của bạn</p>
         <p>Turnip đảm bảo sẽ cho bạn những lựa chọn tuyệt vời với những tác phẩm in sâu vào độc giả.</p>
         <a href="contact.php" class="btn">Liên hệ với Turnip ngay !</a>
      </div>

   </div>

</section>

<!-- <section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Comments</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kit&Mamty</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Comments</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kit&Mamty</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Comments</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kit&Mamty</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Comments</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kit&Mamty</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Comments</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kit&Mamty</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Comments</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kit&Mamty</h3>
      </div>
   </div>
</section> -->

<section class="authors">

   <h1 class="title">Tác giả</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.png" alt="">
         <div class="share">
            <a href="https://tulieuvankien.dangcongsan.vn/c-mac-angghen-lenin-ho-chi-minh/ho-chi-minh/tieu-su-cuoc-doi-va-su-nghiep/tieu-su-chu-tich-ho-chi-minh-52" class="fa-solid fa-circle-info"></a>
         </div>
         <h3>Hồ Chí Minh</h3>
      </div>

      <div class="box">
         <img src="images/author-2.png" alt="">
         <div class="share">
            <a href="https://vi.wikipedia.org/wiki/Nguy%E1%BB%85n_Nh%E1%BA%ADt_%C3%81nh" class="fa-solid fa-circle-info"></a>
         </div>
         <h3>Nguyễn Nhật Ánh</h3>
      </div>

      <div class="box">
         <img src="images/author-3.png" alt="">
         <div class="share">
            <a href="https://vi.wikipedia.org/wiki/Stephen_Hawking" class="fa-solid fa-circle-info"></a>
         </div>
         <h3>Stephen Hawking</h3>
      </div>

      <div class="box">
         <img src="images/author-4.png" alt="">
         <div class="share">
            <a href="https://vi.wikipedia.org/wiki/J._K._Rowling" class="fa-solid fa-circle-info"></a>
         </div>
         <h3>J.K.Rowling</h3>
      </div>

      <!--
      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kit&Mamty</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kit&Mamty</h3>
      </div>
      -->
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>