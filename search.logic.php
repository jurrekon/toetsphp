<?php
	$conn = new mysqli("localhost", "root", "", "schoenmerken");

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	if (isset($_POST["merk"])) {
		$merk = $_POST["merk"];
		$query = "SELECT * FROM merken WHERE naam = '$merk'";
	} elseif (isset($_POST["size"])) {
		$size = $_POST["size"];
		$query = "SELECT naam,$size FROM merken";
	}

	$result = $conn->query($query);
	$merken = $result->fetch_all(MYSQLI_ASSOC);
?>