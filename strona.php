<!DOCTYPE html>
<html>
<?php

echo("jesteś na stronie.php");
echo("<h3>Imie</h3>");
echo($_POST["imie"]);
echo("</br>");
echo("<h3>Nazwisko</h3>");
echo($_POST["nazwisko"]);
echo("</br>");
echo("<h3>Pesel</h3>");
echo($_POST["pesel"]);
echo("</br>");
echo("<h3>Urodziny</h3>");
echo($_POST["urodziny"]);
echo("</br>");
echo("<h3>Adres</h3>");
echo($_POST["adres"]);
   require_once('log.php');
$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (null,"Przemek",2,40,1996-01-11)";"
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();;
?>
