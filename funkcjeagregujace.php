<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczy"> GitHub </a>
<div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a>    
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
</div>
</head>
<body>
<h1>Przemek Madejczyk 2Ti</h1>  
<h3>Funkcje Agregujące</h3>  
<?php
      require_once('log.php');
    $result=$conn->query($sql);
    $sql = "SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial";
        echo("<h3>zadanie 3</h3>");
      echo("<table border=1>");                
    echo("<th>dzial</th>");
    echo("<th>srednia</th>");
    while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td>"); 
    echo("</tr>");

  }
  echo("</table>");
echo("<hr />");
?>
