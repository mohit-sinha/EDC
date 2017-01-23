<?php 

	$email = $_POST['email'];
    $password  = $_POST['password'];
    echo $email;
    echo $password;
	$con = mysqli_connect('localhost', 'root', '', 'edc');
	// echo $con;
	$sql = "SELECT * FROM admins WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}' ";
	echo $sql;
	$result = mysqli_fetch_assoc(mysqli_query($con, $sql));
	
	if ($result) {
        
        
        session_start();
        $_SESSION['login'] = 11;
        

        // $_SESSION['user'] = $result['username'];
        
        // echo "hello admin";
        header("Location: ../admin.php");
    }
    
    else {
		       
        header("Location: ../login.php");
    }


?>