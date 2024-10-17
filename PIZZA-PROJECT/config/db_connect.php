<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'simon', 'test1234', 'simons_pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>