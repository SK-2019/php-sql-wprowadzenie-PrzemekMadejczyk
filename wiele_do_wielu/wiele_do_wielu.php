<!DOCTYPE html>
<html>
<head>
<from>

<link rel="stylesheet" href="../assets/style.css">
<link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png" type="image/icon type">
  </from>
</head>
<<div class="container">
    <div class="header">
        
        <?php include("../header.php"); ?>
    </div>
    <div class="menu">
    <?php include("../menu.php"); ?>
    </div>
    <div class="main">
<?php
require_once("../assets/conn.php");
$sql=('SELECT * from autor, tytul, autor_tytul where autor.id=autor_id and tytul.id=tytul_id');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>nazwisko</th>");
        echo("<th>tytul</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td><td>".$row['tytul']."</td><td>
                    <form action='delete1.php' method='POST'>
                    <input type='number' name='row' value='".$row['id']."' hidden>
                    <input type='text' name='table' value='autor_tytul' hidden>
                    <input type='text' name='column' value='id' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

        $sql=('SELECT * from autor');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>nazwisko</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td><td>
                    <form action='delete1.php' method='POST'>
                    <input type='number' name='row' value='".$row['id']."' hidden>
                    <input type='text' name='table' value='autor' hidden>
                    <input type='text' name='column' value='id' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

        $sql=('SELECT * from tytul');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>tytul</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['tytul']."</td><td>
                    <form action='delete1.php' method='POST'>
                    <input type='number' name='row' value='".$row['id']."' hidden>
                    <input type='text' name='table' value='tytul' hidden>
                    <input type='text' name='column' value='id' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 
?>
