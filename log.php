<?php
$servername = "mysql-przemek-madejczyk.alwaysdata.net";
$username = "217186";
$password = "przemekenter1";
$dbname = "przemek-madejczyk_123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>