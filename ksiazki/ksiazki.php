<!DOCTYPE html>
<html>
<head>

  </form
</head>
  <link rel="stylesheet" href="style.css">
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
require_once('conn.php');
$result=$conn->query('SELECT * FROM biblautor');
echo("<table border=1>");
   echo("<th>id_autor</th>");
   echo("<th>imie</th>");
   echo("<th>nazwisko</th>");

       while($row=$result->fetch_assoc()){
           echo("<tr>");
               echo("<td>" .$row["id_autor"]. "</td><td>" .$row["imie"]. "</td><td>" .$row["nazwisko"]. "</td>");
           echo("</tr>");
       }
   echo("</table>");

   $sql=('SELECT * FROM bibl_tytul');
   $result=$conn->query($sql);
   echo("<hr />");
   echo("<h3>Biblioteka Tytul</h3>");
   echo("<li>$sql");
   echo("<select name='title' id='title'>");
 
       while($row=$result->fetch_assoc()){
          
           echo("<option value=".$row['id'].">".$row['tytul']."</option>");
          
       }
   echo("</select>");

         
       }
   echo("</select>");
echo("<hr />")

   $result=$conn->query('SELECT id_krzyz as id,tytul,imie,nazwisko FROM `bibl_krzyz`,bibl_tytul,biblautor where biblautor.id_autor=bibl_krzyz.id_autor and bibl_tytul.id_tytul=bibl_krzyz.id_tytul');
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>tytul</th>");
        echo("<th>imie</th>");
        echo("<th>nazwisko</th>");
           
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                echo("<td>".$row['id']."</td><td>".$row['tytul']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");            
                echo("</tr>");
            }
        echo("</table>");
  ?>
