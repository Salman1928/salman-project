<?php 

if (isset($_POST['upload'])) {

	# database connection file
	include 'db.conn.php';

	$images = $_FILES['images'];

	# Number of images
    $num_of_imgs = count($images['name']);

    for ($i=0; $i < $num_of_imgs; $i++) { 
    	
    	# get the image info and store them in var
    	$image_name = $images['name'][$i];
    	$tmp_name   = $images['tmp_name'][$i];
    	$error      = $images['error'][$i];

    	# if there is not error occurred while uploading
    	if ($error === 0) {
    		
    		# get image extension store it in var
    		$img_ex = pathinfo($image_name, PATHINFO_EXTENSION);

    	
			$img_ex_lc = strtolower($img_ex);
            
            
			$allowed_exs = array('jpg', 'jpeg', 'png');


			

			if (in_array($img_ex_lc, $allowed_exs)) {
				
				$new_img_name = uniqid('IMG-', true).'.'.$img_ex_lc;
                
                # crating upload path on root directory
                $img_upload_path = 'uploads/'.$new_img_name;

                # inserting imge name into database
                
                $sql  = "INSERT INTO images (img_name)
                         VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$new_img_name]);

                # move uploaded image to 'uploads' folder
                move_uploaded_file($tmp_name, $img_upload_path);

		    	# redirect to 'index.php'
	            header("Location: index.php");


			}else {
				# error message
    	     	$em = "You can't upload files of this type";

	    		/*
		    	redirect to 'index.php' and 
		    	passing the error message
		        */

	            header("Location: index.php?error=$em");
			}

   
    	}else {
    		# error message
    		$em = "Unknown Error Occurred while uploading";

    		/*
	    	redirect to 'index.php' and 
	    	passing the error message
	        */

	        header("Location: index.php?error=$em");
    	}
    }	
}