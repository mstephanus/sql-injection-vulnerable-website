<?php
$servername = "localhost";
$username = "root";
$password = "N0d932lb3st?";

// Create connection
$conn = new mysql($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>