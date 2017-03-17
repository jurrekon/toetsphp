<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"){

		// Create connection
		$conn = new mysqli("localhost", "root", "", "schoenmerken");
		$id = $conn->escape_string($_GET['id']);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$query = "SELECT * FROM merken WHERE id='$id'";
		$result = $conn->query($query);
		$merken = $result->fetch_all(MYSQLI_ASSOC);
	}
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
		// Create connection
		$conn = new mysqli('localhost', 'root', '', 'schoenmerken');
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$id = $conn->escape_string($_POST['id']);
		$naam = $conn->escape_string($_POST['naam']);
		$maat_38 = $conn->escape_string($_POST['maat_38']);
		$maat_39 = $conn->escape_string($_POST['maat_39']);
		$maat_40 = $conn->escape_string($_POST['maat_40']);
		$maat_41 = $conn->escape_string($_POST['maat_41']);
		$maat_42 = $conn->escape_string($_POST['maat_42']);
		$maat_43 = $conn->escape_string($_POST['maat_43']);
		$maat_44 = $conn->escape_string($_POST['maat_44']);
		$maat_45 = $conn->escape_string($_POST['maat_45']);
		$maat_46 = $conn->escape_string($_POST['maat_46']);
		$maat_47 = $conn->escape_string($_POST['maat_47']);

		$query = "UPDATE merken SET naam='$naam', maat_38='$maat_38', maat_39='$maat_39', maat_40='$maat_40', maat_41='$maat_41', maat_42='$maat_42', maat_43='$maat_43', maat_44='$maat_44', maat_45='$maat_45', maat_46='$maat_46', maat_47='$maat_47' WHERE id=$id";

		$result = $conn->query($query);

		$conn->close();

		header('location: ./');
	}
?>