<?php
include 'config.php';
session_start();

if(isset($_POST['send'])){
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = $_POST['number'];
        $msg = mysqli_real_escape_string($conn, $_POST['message']);

        $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

        if(mysqli_num_rows($select_message) > 0){
            $message[] = 'Feedback của bạn đã được nhận!';
        }else{
            mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
            $message[] = 'Gửi feedback thành công!';
        }
    } else {
      $message[] = "Vui lòng đăng nhập trước khi gửi phản hồi."; // Display a message prompting the user to log in
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
   <title>Liên hệ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header_guest.php'; ?>

<div class="heading">
   <h3>contact us</h3>
   <p> <a href="home_guest.php">Trang chủ</a> / Liên hệ</p>
</div>

<section class="contact">

   <form action="" method="post">
      <h3>Hãy nói cho Turnip điều gì đó...</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
   </form>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>