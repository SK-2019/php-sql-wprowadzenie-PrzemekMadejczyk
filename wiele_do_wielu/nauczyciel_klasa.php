<!DOCTYPE html>
<html>
<head>
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
     $sql="Select * from klasa";
     $result=$conn->query($sql);  
     echo("<li>SQL:  $sql ");   
     echo("<table border=1>");
     echo("<th>id</th>");
     echo("<th>Nazwisko</th>");
             while($row=$result->fetch_assoc())
             {
                 echo("<tr>");
                     echo("<td>".$row["id"]."</td><td>".$row["klasa"]."</td>");
                 echo("</tr>");
                }
     echo("</table>"); 

     $sql="Select * from nauczyciel";
     echo("<li>SQL:  $sql ");
     $result=$conn->query($sql);      
     echo("<table border=1>");
     echo("<th>id</th>");
     echo("<th>Tytul</th>");
             while($row=$result->fetch_assoc()){
                 echo("<tr>");
                     echo("<td>".$row["id"]."</td><td>".$row["tytul"]."</td>");
                 echo("</tr>");}
     echo("</table>"); 
        ?>