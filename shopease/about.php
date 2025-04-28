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
   <title>About</title>

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
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p>Your one-stop shop for all your needs. We provide high-quality products at affordable prices,with excellent customer service.</p>
         <p>At ShopEase, we believe shopping should be easy, enjoyable, and accessible to everyone. Since our founding, we have been committed to offering a wide selection of quality products from fashion and electronics to home essentials at prices you'll love. Our goal is to create a seamless online shopping experience backed by excellent customer support, secure transactions, and fast delivery services. Whether you're upgrading your wardrobe, enhancing your home, or finding the perfect gift, ShopEase is your trusted partner for all things shopping.
 </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpg" alt="">
         <p>I’ve been a loyal ShopEase customer for a while now and they never disappoint. The product quality is always great and shipping is fast. Even though I’m based in the province (Zambales), my orders still arrive within a few days. Every purchase is truly worth it!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.facebook.com/ciiangelo3" target="_blank">Lee Angelo Abagat</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-1.jpg" alt="">
         <p>ShopEase is super convenient to use! No need to leave the house just to shop. There were a few instances of delivery delays because of the weather, but they always kept me updated. I highly recommend it, especially for busy people like me!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/mjrecosana06/" target="_blank">MJ Recosana</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.jpg" alt="">
         <p>Affordable prices, fast customer service responses, and a wide range of product options! I bought both electronics and clothing, and they were all excellent quality. Their promos are amazing too, especially during payday sales.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/fernandojose.e.reeves" target="_blank">Fernando Jose Reeves</a></h3>
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