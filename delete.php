<?php
echo("jestes w delete.php <br>");
echo $_POST['id'];

  require_once('conn.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

