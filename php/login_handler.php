<?php
 	include 'db_connection.php';
   	session_start();
    $myusername = $_POST['username'];
	$mypassword = $_POST['password']; 
	$sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	if($count == 1) {
		$id=$row["sid"];
		$_SESSION['login_sid'] = $id;
        header("location: ../dashboard.php");
    }else {
        $error = "Your Login Name or Password is invalid"; 
		echo "Wrong username or password";
    }
include 'db_connection.php';

?>
