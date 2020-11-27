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


     <?php

 echo("<div id='okno1'>");
        echo("<h2 class='h2strona'>Usunięto z bazy:");
        echo("<h3 class='h3strona'>ID: ".$_POST['id']."</h3>");

	require_once("conn.php");
	$sql = "DELETE FROM pracownicy WHERE id_pracownicy='".$_POST['id']."'";
	if ($conn->query($sql) === TRUE) {
        echo("<p class='precord'>  Record deleted successfully!</p>");
      } else {
        echo("<p class='precord'>'Error: ' . $sql . '<br>' . $conn->error</p>");
      }
    echo("</div>");  
	
	header('Refresh: 5; url=https://index-a.herokuapp.com/index.php');
	echo("<div class='redeem1'>Zostaniesz przekierowany na stronę !</div>");  
      
?>
