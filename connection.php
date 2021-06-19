<?php
$servername = "localhost";
$username = "mayur";
$password = "mayur@12";
$dbname = "sparksbank";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed due to: " . $conn->connect_error);
}
?>