<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "schoenmerken");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT * FROM merken";
$result = $conn->query($query);
$merken = $result->fetch_all(MYSQLI_ASSOC);
?>