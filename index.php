<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Przemek Madejczyk 2ti 20</h1>
<?php
require_once('log.php');
$sql = "SELECT * from pracownicy";
$result = $conn->query($sql);
        echo("<h3>zadanie 1</h3>");
       echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
  }
  echo("</table>");
} else {
  echo "0 results";
}

$sql = "SELECT * from pracownicy where imie not like'%a'";
$result = $conn->query($sql);
        echo("<h3>zadanie 2</h3>");
      echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
  }
  echo("</table>");
} else {
  echo "0 results";
}


$sql = "SELECT * from pracownicy where imie like '%a'";
$result = $conn->query($sql);
        echo("<h3>zadanie 3 </h3>");
        echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
  }
  echo("</table>");
} else {
  echo "0 results";
}
$conn->close();
?>
