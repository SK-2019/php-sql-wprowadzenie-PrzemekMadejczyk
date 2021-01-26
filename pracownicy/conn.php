<?php
$servername = "mysql-przemekmadejczyk.alwaysdata.net";
$username = "217532";
$password = "przemek1234567";
$dbname = "przemekmadejczyk_123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
