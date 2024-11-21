<?php 

    # database connection file
	include 'db.conn.php';

	# fetching images
	$sql  = "SELECT img_name FROM
	         images ORDER BY id DESC";

	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$images = $stmt->fetchAll();

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>upload</title>



        <!-- font awesome cdn link -->
         <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css  ">

		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

           <!-- swiper css link -->
           <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
          
         <!-- custom css file link -->
         <link rel="stylesheet" href="css/style.css">


</head>
<body>


<div class="container">

<?php @include 'header.php';  ?>

<section class="album">

<h1 class="heading">our Albums</h1>

  <div class="album-container">

  <a href="images/home-slide-1.jpg" class="box">
    <div class="image">
      <img src="images/home-slide-1.jpg" alt="">
    </div>
    <h3>Wedding</h3>
</a>



<a href="images/service-7.jpg" class="box">
    <div class="image">
      <img src="images/service-7.jpg" alt="">
    </div>
    <h3>Portrait</h3>
  </a>

  
  <a href="images/port-img-4.jpg" class="box">
    <div class="image">
      <img src="images/port-img-4.jpg" alt="">
    </div>
    <h3>Wild Life</h3>
  </a>


  <a href="images/port-img-5.jpg" class="box">
    <div class="image">
      <img src="images/port-img-5.jpg" alt="">
    </div>
    <h3>Sports</h3>
  </a>


  <a href="images/port-img-6.jpg" class="box">
   <div class="image">
     <img src="images/port-img-6.jpg" alt="">
   </div>
    <h3>Landscape</h3>
  </a>

  <a href="images/Aerial-1.jpg" class="box">
   <div class="image">
     <img src="images/Aerial-1.jpg" alt="">
   </div>
    <h3>Aerial photography</h3>
  </a>


  </div>


</section>

<form method="post" 
	      action="upload.php"
	      enctype="multipart/form-data">

	    <?php  
            if (isset($_GET['error'])) {
            	echo "<p class='error'>";
            	    echo htmlspecialchars($_GET['error']);
            	echo "</p>";
            }
	    ?>

		<input type="file"
		       name="images[]"
		       multiple>

		<button type="submit"
		        name="upload">
		    Upload</button>
	</form>

    <?php if ($stmt->rowCount() > 0) { ?>
	<div class="gallery">
		<h4></h4>
		<?php foreach ($images as $image) { ?>
		   <img src="uploads/<?=$image['img_name']?>">
		<?php } ?>
	</div>
	<?php } ?>

<?php @include 'footer.php';  ?>


<div>













 <!-- custom js link -->
 
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



 <!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>