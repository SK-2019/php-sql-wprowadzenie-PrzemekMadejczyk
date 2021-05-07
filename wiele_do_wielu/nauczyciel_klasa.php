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
$sql=('SELECT * from klasa, nauczyciel, klasa_nauczyciel where klasa.id=id_klasa and nauczyciel.id=id_nauczyciel');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>klasa</th>");
        echo("<th>nauczyciel</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']"</td><td>".$row['klasa']."</td><td>".$row['nauczyciel']."</td><td>
                    <form action='delete.php' method='POST'>
                    <input type='number' name='row' value='".$wiersz[$dana3]."' hidden>
                    <input type='text' name='table' value='".$table."' hidden>
                    <input type='text' name='column' value='".$columnid."' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

            $sql=('SELECT * from klasa');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>klasa</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['klasa']."</td><td>
                    <form action='delete.php' method='POST'>
                    <input type='number' name='row' value='".$wiersz[$dana3]."' hidden>
                    <input type='text' name='table' value='".$table."' hidden>
                    <input type='text' name='column' value='".$columnid."' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

        $sql=('SELECT * from nauczyciel');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>nauczyciel</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['nauczyciel']."</td><td>
                    <form action='delete.php' method='POST'>
                    <input type='number' name='row' value='".$wiersz[$dana3]."' hidden>
                    <input type='text' name='table' value='".$table."' hidden>
                    <input type='text' name='column' value='".$columnid."' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

        ?>