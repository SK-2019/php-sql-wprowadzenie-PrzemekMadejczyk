  
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/style.css">
  </form
</head>
  
<body>
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk">Github</a></strong>
<h1>Przemek Madejczyk 2ti 20</h1>
<div class="sidebar" id="mySidenav">
    <a class="nav_link" href="index.php">strona głowna</a>
    <a class="nav_link" href="pracownicy/pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy/pracownicy i organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="pracownicy/Data_czas.php">Data i czas</a>
    <a class="nav_link" href="pracownicyformularz.html">Formularze</a>
    <a class="nav_link" href="pracownicydaneDoBazy.php">dane do bazy danych</a>
    <a class="nav_link" href="function.php">funkcja</a>
    <a class="nav1" href="ksiazki/ksiazki.php"><b>Książki</b></a>
  
</div>
<?php
require_once('assets/conn.php');
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<h3>Tabela Pracowników</h3>");
        echo("<li> $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki1</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>data urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
    echo("<hr />");
  
 
        
        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2 or dzial=3');
        $result=$conn->query($sql);
        
        echo("<table border=1>");
  echo("<li>SQL: $sql");
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
        
      
  $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and zarobki<30');
        $result=$conn->query($sql);
        echo("<table border=1>");
    echo("<li>SQL: $sql");
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

        
?>
