<?php

	$conn = $conn = new mysqli("localhost", "root", "", "the bank of india","3306");
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>