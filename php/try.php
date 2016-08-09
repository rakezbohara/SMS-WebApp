<?php
include 'db_connection.php';
	$sid=$_GET['sid'];
	$name=$_GET['name'];
	$grade=$_GET['grade'];
	$gender=$_GET['gender'];

	$sql="INSERT INTO info VALUES(".$sid.",'".$name."','".$grade."','".$gender."')";
	if(mysqli_query($conn, $sql)){

		echo 'success';
	account($sid);


	}else{
		$sql="UPDATE info SET name ='".$name."', grade ='".$grade."', gender = '".$gender."' WHERE sid =".$sid;
		if(mysqli_query($conn, $sql)){
			account($sid);
			echo 'updated';


		}

		
	}	



function account($uid){
	include 'db_connection.php';
	$sql="INSERT INTO users VALUES(".$uid.",'user".$uid."','user".$uid."')";
	mysqli_query($conn, $sql);

}
include 'db_connectionclose.php';
?>