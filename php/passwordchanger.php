<?php
 	include 'db_connection.php';
   	session_start();
    $newpassword = $_POST['password'];
	$confirmpassword = $_POST['passwordconfirm']; 
	$sid = $_SESSION['login_sid'];
	if($newpassword==$confirmpassword){
		$sql = "UPDATE users SET password = '".$newpassword."' WHERE sid = ".$sid;
   		mysqli_query($conn, $sql);
    	header("location: logout.php");
  	}else {
        $error = "Your Password is invalid"; 
		echo "Wrong username or password";
  }
include 'db_connection.php';

?>
