<!DOCTYPE html>
<html>
<head>
<from>

<link rel="stylesheet" href="../assets/style.css">
<link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
  </from>
</head>
  
<body>

<div class="container">
    <div class="header">
        
        <?php include("../header.php"); ?>
    </div>
    <div class="menu">
    <?php include("../menu.php"); ?>
    </div>
    <div class="main">
<?php
echo('<h1>autor i ksiazki</h1>')
 require_once("../assets/conn.php");
 $sql="Select * from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id";
 $result=$conn->query($sql);
 echo("<li>SQL:  $sql ");
 echo("<table border=1>");
 echo("<th>Nazwisko</th>");
 echo("<th>Tytul</th>");
         while($row=$result->fetch_assoc())
         {
             echo("<tr>");
                 echo("<td>".$row["nazwisko"]."</td><td>".$row["tytul"]."</td>");
             echo("</tr>");
            }
 echo("</table>");

        $sql="Select * from autor";
        $result=$conn->query($sql);  
        echo("<li>SQL:  $sql ");   
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Nazwisko</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                        echo("<td>".$row["id"]."</td><td>".$row["nazwisko"]."</td>");
                    echo("</tr>");
                }
        echo("</table>"); 
 
        $sql="Select * from tytul";
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
