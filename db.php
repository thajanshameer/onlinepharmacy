<?php
// Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$database = "addtocart";

// Create a connection to the database
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
