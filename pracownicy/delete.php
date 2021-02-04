<!DOCTYPE html>
<html>
<head>

  </form>
</head>
<title>Przemek Madejczyk 2Ti Gr2</title>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" href="https://www.instalki.pl/images/newsy/01-2021/pogchamp_emote.png" type="image/icon type">
<body>

<h1>Przemek Madejczyk 2ti 20</h1>
<div class="nav">
<a class ="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk">Github</a>
<a class="nav_link" href="../index.php">strona głowna</a>
<a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy i organizacja.php">Pracownicy i Organizacja</a>
 
  <a class="nav_link" href="Data_czas.php">Data i czas</a>
  <a class="nav_link" href="../cwiczenia/formularz.html">Formularze</a>
  <a class="nav_link" href="daneDoBazy.php">dane do bazy danych</a>
  <a class="nav_link" href="../cwiczenia/function.php">funkcja</a>
  <a class="nav_link" href="../ksiazki/ksiazki.php"><b>Książki</b></a>
</div>
<?php
   echo ("<h1>id: ".$_POST['id']."</h1>");
require_once("../assets/conn.php");

 $sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";

if ($conn->query($sql) === TRUE) {
        echo("<h1 class='precord'> Usunięto pracownika </h1>");
      } else {
        echo("<h1 class='precord'>'Error: ' . $sql . '<br>' . $conn->error</h1>");
      }
    
     echo("<hr />");
           echo("<h1>Tabela Pracowników:</h1>");

$result = $conn->query('SELECT * FROM pracownicy, organizacja WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");
  header("location:https://index-a.herokuapp.com/daneDoBazy.php");
?>
