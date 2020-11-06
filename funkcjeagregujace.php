<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk"> GitHub </a>
<div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a>    
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
</div>
</head>
<body>
<h1>Przemek Madejczyk 2Ti</h1>  
<h3>Funkcje Agregujące</h3>  
<?php
   $sql = "SELECT dzial,sum(zarobki) as suma from pracownicy group by dzial";
$result = $conn->query($sql);
        echo("<h3>zadanie 3</h3>");
      echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
  while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
  }
  echo("</table>");
echo("<hr />");
    $sql = SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial";
$result = $conn->query($sql);
        echo("<h3>zadanie 3</h3>");
      echo("<h3>$sql</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
  while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
  }
  echo("</table>");
echo("<hr />");
