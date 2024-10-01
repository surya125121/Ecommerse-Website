<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/b.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to our premier e-commerce destination, where your online shopping experience is our top priority. At Fashion World, we stand out as your preferred choice for a myriad of reasons.
              Enjoy a seamless and secure shopping journey with our user-friendly interface and robust payment gateways. Elevate your shopping experience with Fashion World—where excellence meets convenience.





</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.webp" alt="">
         <p> Shopping at Fashion World has been an absolute delight! The vast selection of products is impressive, and the quality is top-notch and really nice.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sararti bacha</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.jpg" alt="">
         <p> I appreciate the user-friendly interface that makes navigation a breeze, and the secure checkout process adds an extra layer of confidence.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Jaiwa</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/picc-3.jpg" alt="">
         <p>The shipping was prompt, and the packaging ensured that my items arrived in perfect condition. The customer support team was quick to respond and incredibly helpful.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cheena</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.jpg" alt="">
         <p>The product range is extensive, and I love that they offer the latest trends alongside timeless classics. The checkout process is seamless and secure</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nonu</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p>he shipping was fast, and my items arrived in perfect condition. Overall, a five-star experience—I highly recommend to all the users. it is very easy.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mr. Bean</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.jpg" alt="">
         <p>The checkout process is seamless and secure, providing peace of mind. What truly sets Fashion World apart is their commitment to customer satisfaction. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ben Ten</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>