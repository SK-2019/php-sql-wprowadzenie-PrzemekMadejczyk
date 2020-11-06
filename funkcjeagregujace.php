<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczy"> GitHub </a>
<div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a>    
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
</div>
</head>
<body>
<h2>Funkcje Agregujące</h2>  
<?php
      require_once('log.php');
    
    $sql = "SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial";
    $result=$conn->query($sql);
        echo("<h3>zadanie 1</h3>");
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
    
        $sql = "SELECT dzial,sum(zarobki) as suma from pracownicy group by dzial";
    $result=$conn->query($sql)
    echo("<h3>zadanie 2</h3>");
    echo("<table border=1>");                
    echo("<th>dzial</th>");
    echo("<th>suma</th>");
    while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td>"); 
    echo("</tr>");

  }
    echo("</table>");
    echo("<hr />");
    

    $sql = "SELECT dzial,min(zarobki) as minimalna from pracownicy group by dzial";
    $result=$conn->query($sql);
    echo("<h3>zadanie 3</h3>");
    echo("<table border=1>");                
    echo("<th>dzial</th>");
    echo("<th>minimalna</th>");
        while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row["dzial"]."</td><td>".$row["minimalna"]."</td>"); 
    echo("</tr>");

  }
  echo("</table>");
echo("<hr />");
        $sql = "SELECT dzial,max(zarobki) as maksymalna from pracownicy group by dzial";
    $result=$conn->query($sql);
    echo("<h3>zadanie 3</h3>");
    echo("<table border=1>");                
    echo("<th>dzial</th>");
    echo("<th>maksymalna</th>");
        while($row=$result->fetch_assoc()){
    echo("<tr>");
    echo("<td>".$row["dzial"]."</td><td>".$row["maksymalna"]."</td>"); 
    echo("</tr>");

  }
  echo("</table>");
echo("<hr />");
?>
