<?php
$servername = "localhost";
$username = "2dotask";
$password = "2dotask";
$dbname = "2dotask";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>