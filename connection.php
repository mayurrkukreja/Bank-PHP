<?php
$servername = "localhost";
$username = "id17091389_mayur12";
$password = "Subscribe@26";
$dbname = "id17091389_sparksbank";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed due to: " . $conn->connect_error);
}
?>