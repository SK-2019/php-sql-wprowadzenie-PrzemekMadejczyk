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
require_once('conn.php');
<?php
echo("asd");
function nazwajakas()
{
  echo("<li>teraz działa funkcja");
  echo("<li test ");
  for($i =1; $i <10; $i++)
  {
  echo("lito jest w petli: ".$i);
  }
}
nazwajakas();
?>
