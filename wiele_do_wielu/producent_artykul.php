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
$sql=('SELECT * from producent, artykul, producent_artykul where producent.id=id_producent  and artykul.id=id_artykul');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>producent</th>");
        echo("<th>artykul</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['producent']."</td><td>".$row['artykul']."</td><td>
                    <form action='delete1.php' method='POST'>
                    <input type='number' name='row' value='".$row['id']."' hidden>
                    <input type='text' name='table' value='producent_artykul' hidden>
                    <input type='text' name='column' value='id' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

            $sql=('SELECT * from producent');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>producent</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['producent']."</td><td>
                    <form action='delete1.php' method='POST'>
                    <input type='number' name='row' value='".$row['id']."' hidden>
                    <input type='text' name='table' value='producent' hidden>
                    <input type='text' name='column' value='id' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

        $sql=('SELECT * from artykul');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>artykul</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['artykul']."</td><td>
                    <form action='delete1.php' method='POST'>
                    <input type='number' name='row' value='".$row['id']."' hidden>
                    <input type='text' name='table' value='artykul' hidden>
                    <input type='text' name='column' value='id' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

        ?>