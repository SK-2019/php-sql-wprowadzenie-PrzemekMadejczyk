<!DOCTYPE html>
<html>
<?php

echo("jesteś na stronie.php");
echo("<li>imię:".$_POST["imie"]);
echo("<li>nazwisko:".$_POST["nazwisko"]);

   require_once('log.php');
$sql = "INSERT INTO `pracownicy`(`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES (null,"Przemek",2,40,1996-01-11)";"
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();;
?>
