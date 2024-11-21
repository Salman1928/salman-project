<?php
$conn = mysqli_connect('localhost','root','','contact_db');
if(isset($_POST['send'])){
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $location = $_POST['location'];
   $date = $_POST['date'];
   $plan = $_POST['plan'];
   $address = $_POST['address'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `location`, `date`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$location','$date','$plan','$address','$message')";

   mysqli_query($conn, $insert);

   header('location:contact.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
 
   <!-- swiper css link -->
   <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>


   <!-- custom css file link -->
  
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
    
<div class="container">
<?php   @include 'header.php'; ?>

<section class="contact">

   <h1 class="heading">Contact us</h1>

   <form action="" method="post">

      <div class="flex">

         <div class="inputBox">
            <span>Your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>

         <div class="inputBox">
            <span>Your email</span>
            <input type="email" placeholder="enter your email" email="email" required>
         </div>

         <div class="inputBox">
            <span>Your number</span>
            <input type="number" placeholder="enter your number" number="number" required>
         </div>

         <div class="inputBox">
            <span>Your location</span>
            <input type="location" placeholder="enter your location" location="location" required>
         </div>

         <div class="inputBox">
            <span>date</span>
            <input type="date" placeholder="date" date="date" required>
         </div>

         <div class="inputBox">
            <span>choose plan</span>
            <select name="plan">
               <option value="basic">basic plan</option>
               <option value="premium">premium plan</option>
               <option value="ultimate">ultimate plan</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Your Address</Address></span>
            <textarea name="address" placeholder="enter your addresss" required cols="30" rows="10"></textarea>
         </div>

         <div class="inputBox">
            <span>Your message</span>
            <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
         </div>
      
     </div>

     <input type="submit" value="send message" name="send" class="btn">


</form>
</section>




<?php   @include 'footer.php'; ?>
    
</div>




<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>