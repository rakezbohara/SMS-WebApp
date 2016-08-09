<?php
include 'db_connection.php';
	$sid=$_GET['sid'];
	$subname=$_GET['subname'];
	$passmarks=$_GET['passmarks'];
	$fullmarks=$_GET['fullmarks'];
	

	$sql="INSERT INTO allsubjects VALUES(".$sid.",'".$subname."','".$fullmarks."','".$passmarks."')";
	if(mysqli_query($conn, $sql)){
		echo 'success';
	}

include 'db_connectionclose.php';
?>