<?php
	// Create a database connection
	$connection = new mysqli("localhost", "root", "", "wc2017");
	
	if (!$connection) {
		die("Database connection failed: " . $connection->connect_error);
	}
?>