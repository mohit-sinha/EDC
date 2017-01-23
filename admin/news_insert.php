<?php
	session_start();
    if(!isset($_SESSION['login'])){
        header("Location: ../login.php");
    }
    else{
    	// ADD validation that both the fields should not be empty 
		$headline = $_POST['heading'];
		$link = $_POST['link'];
		$posted_on = $_POST['posted_on'];
		if(!$headline || !$link || !$posted_on){
			header("Location: ../admin.php");
		}
		else{
			$con = mysqli_connect('localhost', 'root', '', 'edc');
			$sql = "INSERT INTO news (heading, link, posted_on) VALUES ('".$_POST['heading']."','".$_POST['link']."','".$_POST['posted_on']."')";
			mysqli_query($con, $sql);
			// session_start();
			// $_SESSION['posted2'] = 13;
			header("Location: ../admin.php");
		}
		
    }


	

?>