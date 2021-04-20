

<!DOCTYPE html>
<html>
<head>
<title>Przemek Madejczyk 2Ti Gr2</title>

  </form
</head>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" href="https://www.pinclipart.com/picdir/middle/104-1042073_variety-of-services-money-bag-icon-png-clipart.png" type="image/icon type">
<body>

<div class="container">
      <div class="header">
        <?php include("header.php"); ?>
      </div>
      <div class="menu">
      <?php include("../menu.php"); ?>
      </div>
      <div class="main"></div>
    </div>
  </body>
</html>
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


