<!DOCTYPE html>
<html>
<head>
<from>

<link rel="stylesheet" href="assets/style.css">
<link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
  </from>
</head>
  
<body>

<h1>Przemek Madejczyk 2ti 20</h1>
<div class="nav">
<a class ="nav_link" href="https://www.pinclipart.com/picdir/middle/104-1042073_variety-of-services-money-bag-icon-png-clipart.png">Github</a>
    <a class="nav_link" href="index.php">strona głowna</a>
    <a class="nav_link" href="pracownicy/pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="pracownicy/funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy/pracownicy i organizacja.php">Pracownicy i Organizacja</a>
    <a class="nav_link" href="pracownicy/Data_czas.php">Data i czas</a>
    <a class="nav_link" href="cwiczenia/formularz.html">Formularze</a>
    <a class="nav_link" href="pracownicy/daneDoBazy.php">dane do bazy danych</a>
    <a class="nav_link" href="cwiczenia/function.php">funkcja</a>
    <a class="nav_link" href="ksiazki/ksiazki.php"><b>Książki</b></a>
    <a class="nav_link" href="flexbox.html"><b>flexbox</b></a>
</div>
<?php
 require_once("assets/conn.php");
 $sql="Select * from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id";
 $result=$conn->query($sql);
 echo("<table border=1>");
 echo("<th>Nazwisko</th>");
 echo("<th>Tytul</th>");
         while($row=$result->fetch_assoc()){
             echo("<tr>");
                 echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
             echo("</tr>");}
 echo("</table>");

 
 
?>