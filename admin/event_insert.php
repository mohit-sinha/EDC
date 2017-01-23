<?php

	// ADD validation that both the fields should not be empty 
	



	session_start();
    if(!isset($_SESSION['login'])){
        header("Location: ../login.php");
    }
    else{
    	// ADD validation that both the fields should not be empty 

    	// $target_dir = "images/";
    	$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["image_url"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		// $image = $_FILES["image_url"]["name"];
		echo $target_file;
		// echo $image;
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["image_url"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}



		$title = $_POST['title'];
		$description= $_POST['description'];
		$image_url = $target_file;

		if(!$title || !$description || !$image_url){
			echo "hello";
			header("Location: ../admin.php");
		}
		else{
			$con = mysqli_connect('localhost', 'root', '', 'edc');
			$sql = "INSERT INTO events (title, description, image_url) VALUES ('".$_POST['title']."','".$_POST['description']."','$image_url')";
			mysqli_query($con, $sql);
			// session_start();
			// $_SESSION['posted2'] = 13;
			header("Location: ../admin.php");
		}
		
    }

?> 	