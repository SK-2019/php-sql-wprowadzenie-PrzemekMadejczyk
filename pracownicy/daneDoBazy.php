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
     <a class="nav_link" href="/pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="/funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="/pracownicy i organizacja.php">Pracownicy i Organizacja</a>
  <a class="nav_link" href="/index.php">strona głowna</a>
  <a class="nav_link" href="/Data_czas.php">Data i czas</a>
  <a class="nav_link" href="/formularz.html">Formularze</a>
  <a class="nav_link" href="/daneDoBazy.php">dane do bazy danych</a>
  <a class="nav_link" href="/function.php">funkcja</a>
</div>

<form class="formularz" action="insert.php" method="POST">
   <input type="text" name="imie" placeholder="Imie">
   <br><input type="text" name="dzial" placeholder="Dzial">
   <br><input type="text" name="zarobki" placeholder="Zarobki">
   <br><input type="date" name="data_">
   <input type="submit" value="Dodaj">
   </form>

  
  </form>
       
        <h1>Usuwanie :</h1>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="usun">
</form>

<?php

     echo("<h1>Tabela Pracownków (usun)</h1>");
    require_once('conn.php');
$result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>dzial</th>");
        echo("<th>Zarobki</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>nazwa_dzialu</th>");
        echo("<th>DELETE</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                          echo("<td><form action=delete.php method=POST>");    
                          echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
                           echo("<input type=submit value=usun>");
                    echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");
?>






