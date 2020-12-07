<?php
$servername = "localhost";
$username = "root";
$password = "21086";
$dbname = "cctv";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($conn, 'SET CHARACTER SET UTF8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
?>