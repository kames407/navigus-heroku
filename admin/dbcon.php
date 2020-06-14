<?php
	$conn = new mysqli('localhost', 'root', '', 'navigus');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	