<!DOCTYPE html>
<html>
<head>

  </form
</head>
  <link rel="stylesheet" href="../assets/style.css">
<body>
<strong><a href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk">Github</a></strong>
<h1>Przemek Madejczyk 2ti 20</h1>
<div class="nav">
    <a class="nav_link" href="/pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="/funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="/pracownicy i organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="/index.php">strona głowna</a>
  <a class="nav_link" href="/Data_czas.php">Data i czas</a>
  <a class="nav_link" href="/formularz.html">Formularze</a>
  <a class="nav_link" href="/daneDoBazy.php">dane do bazy danych</a>
  <a class="nav_link" href="/function.php">funkcja</a>
  
</div>
<?php
echo("<h1>Wypożyczone książki:</h1>");
$sql = 'SELECT * from bibl_wypozycenie';
echo("<li>".$sql);

$result = $conn->query($sql);
   echo("<table>");
   echo("<th>id</th>");
   echo("<th>Autor</th>");
   echo("<th>Tytul</th>");
   echo("<th>Usuń</th>");
       while($row=$result->fetch_assoc()){ 
           echo("<tr>");
                echo("<td>".$row['id']."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
                echo("<td><form action='delete.php' method=POST>");
                echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                echo("<input type='submit' value='Usuń'>");
               echo("</form></td>");
           echo("</tr>");
       }

   echo("</table>");
   
?>