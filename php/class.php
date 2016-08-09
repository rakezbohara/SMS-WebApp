<?php
include 'db_connection.php';

	$sid=$_GET['sid'];
	$class=$_GET['class'];
	

	$sql="INSERT INTO ".$class." VALUES(".$sid.")";
	if(mysqli_query($conn, $sql)){
		echo 'success';
	}

include 'db_connectionclose.php';
?>