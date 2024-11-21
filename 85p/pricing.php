<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>pricing</title>

        <!-- font awesome cdn link -->
         <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">

           <!-- swiper css link -->
           <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
          
         <!-- custom css file link -->
         <link rel="stylesheet" href="css/style.css">


</head>
<body>


<div class="container">

<?php @include 'header.php';  ?>



<!-- pricing bacic plan -->

<section class="pricing">
 <h1 class="heading">our pricing</h1>
 <div class="box-container">

 <!-- pricing bacic plan box -->

  <div class="box">
    <h3>Nature</h3>
    <div class="price">$250/-</div>
    <div class="list">
      <p><i class="fas fa-check"></i>Landscape Photography</p>
      <p><i class="fas fa-check"></i>Wildlife Photography</p>
      <p><i class="fas fa-check"></i>Bird Photography</p>
      <p><i class="fas fa-check"></i>Aerial photography</p>
      <p><i class="fas fa-check"></i>Forest Photography</p>
    </div>
    <a href="contact.php" class="btn">choose plan</a>
  </div>

   
 <!-- pricing premium plan box -->

  <div class="box">
    <h3>sports</h3>
    <div class="price">$650/-</div>
    <div class="list">
      <p><i class="fas fa-check"></i>FootBall Photography</p>
      <p><i class="fas fa-check"></i>Cricket Photography</p>
      <p><i class="fas fa-check"></i>Underwater Sports Photography</p>
      <p><i class="fas fa-check"></i>Motor Racing Photography</p>
      <p><i class="fas fa-check"></i>Fitness Photography</p>
    </div>
    <a href="contact.php" class="btn">choose plan</a>
  </div>

<!-- pricing Ultimate plan box -->

  <div class="box">
    <h3>wedding</h3>
    <div class="price">$1250/-</div>
    <div class="list">
      <p><i class="fas fa-check"></i>Traditional or Classic Wedding</p>
      <p><i class="fas fa-check"></i>Fine Art Wedding Photography</p>
      <p><i class="fas fa-check"></i>Natural Light Wedding Photography</p>
      <p><i class="fas fa-check"></i>Drone Wedding Photography</p>
      <p><i class="fas fa-check"></i>Cinematic Wedding Photography</p>
    </div>
    <a href="contact.php" class="btn">choose plan</a>
  </div>





 </div>

</section>

<!-- pricing end -->




<!-- client reviews -->
<section class="reviews">

<h1 class="heading">happy client</h1>

<div class="swiper reviews-slider">
  <div class="swiper-wrapper">

    <div class="swiper-slide slide">
      <img src="images/pic-1.png" alt="">
      <h3>john deo</h3>
      <p>Choosing Malcolm lismore for our wedding was the best decision we made. Their documentary style captured the genuine emotions of the day, and the results were breathtaking. The level of professionalism!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>


    <div class="swiper-slide slide">
      <img src="images/pic-2.png" alt="">
      <h3>karen jha</h3>
      <p>Choosing Malcolm lismore for our wedding was the best decision we made. Their documentary style captured the genuine emotions of the day, and the results were breathtaking. The level of professionalism!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>

    <div class="swiper-slide slide">
      <img src="images/pic-3.png" alt="">
      <h3>jaks prow</h3>
      <p>Choosing Malcolm lismore for our wedding was the best decision we made. Their documentary style captured the genuine emotions of the day, and the results were breathtaking. The level of professionalism!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>


    <div class="swiper-slide slide">
      <img src="images/pic-4.png" alt="">
      <h3>jimmy rea</h3>
      <p>Choosing Malcolm lismore for our wedding was the best decision we made. Their documentary style captured the genuine emotions of the day, and the results were breathtaking. The level of professionalism!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>



    <div class="swiper-slide slide">
      <img src="images/pic-5.png" alt="">
      <h3>kitty jane</h3>
      <p>Choosing Malcolm lismore for our wedding was the best decision we made. Their documentary style captured the genuine emotions of the day, and the results were breathtaking. The level of professionalism!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>



    <div class="swiper-slide slide">
      <img src="images/pic-6.png" alt="">
      <h3>sara Fathi</h3>
      <p>Choosing Malcolm lismore for our wedding was the best decision we made. Their documentary style captured the genuine emotions of the day, and the results were breathtaking. The level of professionalism!</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
    </div>






  </div>
  <div class="swiper-pagination"></div>
</div>


</section>
<!-- client reviews end -->

<?php @include 'footer.php';  ?>


<div>













 <!-- custom js link -->
 
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



 <!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>