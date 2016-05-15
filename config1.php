<?php
	error_reporting(E_ALL); 
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASSWORD = ""; //Proiect1
	$DB_DATABASE = "metinpla_aci";
	$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);	
	// Check connection	
	if (!$conn) {		die("Connection failed: " . mysqli_connect_error());	}
?>