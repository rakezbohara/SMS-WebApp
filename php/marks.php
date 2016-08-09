<?php
include 'db_connection.php';
	$sid=$_GET['sid'];
	$firter=$_GET['firter'];
	$secter=$_GET['secter'];
	$thiter=$_GET['thiter'];
	


	$sql="INSERT INTO marks VALUES(".$sid.",'".$firter."','".$secter."','".$thiter."')";
	if(mysqli_query($conn, $sql)){

		echo 'success';

	}else{
		$sql="UPDATE marks SET firter ='".$firter."', secter ='".$secter."', thiter = '".$thiter."' WHERE sid =".$sid;

		echo $sql;
		if(mysqli_query($conn, $sql)){
			echo 'updated';
		}
		
	}	




include 'db_connectionclose.php';
?>