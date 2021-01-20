<?php 
	$conn=mysqli_connect("localhost", "varun05", "passw0rd", "bank");
	if(!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
	}
?>