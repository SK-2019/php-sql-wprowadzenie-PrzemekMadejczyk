<!DOCTYPE html>
<html>
<head>

  </form
</head>
  <link rel="stylesheet" href="/style.css">
<body>
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk">Github</a></strong>
<h1>Przemek Madejczyk 2ti 20</h1>
<div class="nav">
    <a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy i organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="index.php">strona głowna</a>
  <a class="nav_link" href="Data_czas.php">Data i czas</a>
  <a class="nav_link" href="formularz.html">Formularze</a>
  <a class="nav_link" href="daneDoBazy.html">dane do bazy danych</a>
  <a class="nav_link" href="function.php">funkcja</a>
</div>
<?php


function funkcja()
{
    echo("<li>test");
    for($i=1;$i<10;$i++)
    {
        echo("<li>to jest w petli: ".$i);
    }
}
  funkcja();
function zadanie($sql){
  require_once('/conn.php');
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<h3>SQL: $sql");
        echo("<th>id</th>");
        echo("<th>imię</th>");
        echo("<th>dział</th>");
        echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
        }
zadanie('SELECT * FROM pracownicy');
  
  
?>
