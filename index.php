  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk">Github</a></strong>
<h1>Przemek Madejczyk 2ti 20</h1>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy i organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="index.php">strona głowna</a>
</div>>
<?php
require_once('log.php');
               
    $result=$conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2');//mysql
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr />");

        $result=$conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2 or dzial=3');//mysql
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr />");
        
        $result=$conn->query('SELECT * FROM pracownicy,organizacja where dzial=id_org and zarobki<30');//mysql
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr />");

$conn->close();
?>
