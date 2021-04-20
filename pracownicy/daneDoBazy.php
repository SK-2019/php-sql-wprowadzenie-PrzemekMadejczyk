<!DOCTYPE html>
<html>
<head>

  </form>
</head>
<title>Przemek Madejczyk 2Ti Gr2</title>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" href="https://www.pinclipart.com/picdir/middle/104-1042073_variety-of-services-money-bag-icon-png-clipart.pngg" type="image/icon type">
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
    require_once('../assets/conn.php');
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






