

<!DOCTYPE html>
<html>
<head>
<title>Przemek Madejczyk 2Ti Gr2</title>

  </form
</head>
  <link rel="stylesheet" href="../assets/style.css">
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
  
</div>>
<?php

   
echo("jesteś na stronie.php");
echo("<li>imię:".$_POST["imie"]);
echo("<li>dział:".$_POST["dzial"]);
echo("<li>zarobki:".$_POST["zarobki"]);
echo("<li>data urodzenia:".$_POST["data_"]);

   require_once('../assets/conn.php');
   $sql = "INSERT INTO pracownicy(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES(NULL,'".$_POST['imie']."', '".$_POST['dzial']."', '".$_POST['zarobki']."', '".$_POST['data_']."')";
   if ($conn->query($sql) === TRUE) {
    echo("<br>"); 
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>


