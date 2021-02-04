<!DOCTYPE html>
<html>
<head>

  </form>
</head>
<title>Przemek Madejczyk 2Ti Gr2</title>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" href="https://www.pinclipart.com/picdir/middle/104-1042073_variety-of-services-money-bag-icon-png-clipart.png" type="image/icon type">
<body>
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk">Github</a></strong>
<h1>Przemek Madejczyk 2ti 20</h1>
<div class="nav">
    <a class="nav_link" href="../index.php">strona głowna</a>
    <a class="nav_link" href="../pracownicy/pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="../pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="../pracownicy/pracownicy i organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="../pracownicy/Data_czas.php">Data i czas</a>
    <a class="nav_link" href="/formularz.html">Formularze</a>
    <a class="nav_link" href="../pracownicy/daneDoBazy.html">dane do bazy danych</a>
    <a class="nav_link" href="/function.php">funkcja</a>
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
        echo("<th>zarobki2</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki2"]."</td>");
                echo("</tr>");
            }
        echo("</table>");
        }
zadanie('SELECT * FROM pracownicy');
  
  
?>
