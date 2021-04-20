<!DOCTYPE html>
<html>
<head>
</head>
<title>Przemek Madejczyk 2Ti Gr2</title>
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="icon" href="https://www.pinclipart.com/picdir/middle/104-1042073_variety-of-services-money-bag-icon-png-clipart.png" type="image/icon type">
  </head>
</html>
<<div class="container">
    <div class="header">
        
        <?php include("../header.php"); ?>
    </div>
    <div class="menu">
    <?php include("../menu.php"); ?>
    </div>
    <div class="main">
<?php
require_once('../assets/conn.php');
$sql=('SELECT * FROM biblautor');
$result=$conn->query($sql);
echo("<hr />");
echo("<h3>Biblioteka autor</h3>");
echo('<SELECT name= "title" id= "title">');

    while($row=$result->fetch_assoc()){
       
    echo("<option value=".$row['id_autor'].">".$row['imie']." " .$row['nazwisko']."</option>");
       
     }
    echo("</select>");

   $sql=('SELECT * FROM bibl_tytul');
   $result=$conn->query($sql);
   echo("<hr />");
   echo("<h3>Biblioteka Tytul</h3>");
   echo('<SELECT name= "title" id= "title">');
 
       while($row=$result->fetch_assoc()){
          
           echo("<option value=".$row['id_tytul'].">".$row['tytul']."</option>");
          
       }
   echo("</select>");


   $result=$conn->query('SELECT id_krzyz as id,tytul,imie,nazwisko FROM `bibl_krzyz`,bibl_tytul,biblautor where biblautor.id_autor=bibl_krzyz.id_autor and bibl_tytul.id_tytul=bibl_krzyz.id_tytul');
        echo("<table border=1>");
        echo("<h3>biblioteka autor i tytuł </h3>");
        echo("<th>id</th>");
        echo("<th>tytul</th>");
        echo("<th>imie</th>");
        echo("<th>nazwisko</th>");
           
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                echo("<td>".$row['id']."</td><td>".$row['tytul']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>");            
                echo("</tr>");
            }
        echo("</table>");
  ?>
