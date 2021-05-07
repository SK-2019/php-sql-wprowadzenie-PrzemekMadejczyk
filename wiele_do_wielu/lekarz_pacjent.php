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
function formularz()
{
            echo ("<form action='delete1.php' method='POST'>");
            echo("<input type='number' name='row' value='".$wiersz[$dana3]."' hidden>");
            echo("<input type='text' name='table' value='".$table."' hidden>");
            echo("<input type='text' name='column' value='".$columnid."' hidden>");
            echo("<input type='submit' value='Usuń'>");
            echo("</form>");
}

require_once("../assets/conn.php");
$sql=('SELECT * from pacjent, lekarz, lekarz_pacjent where pacjent.id=id_pacjent and lekarz.id=ID_lekarz');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>pacjent</th>");
        echo("<th>lekarz</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['pacjent']."</td><td>".$row['lekarz']."</td><td>
                    <form action='delete.php' method='POST'>
                    <input type='number' name='row' value='".$wiersz[$dana3]."' hidden>
                    <input type='text' name='table' value='".$table."' hidden>
                    <input type='text' name='column' value='".$columnid."' hidden>
                    <input type='submit' value='Usuń'>
                    </form></td>");
                echo("</tr>");
            }
        echo("</table>"); 


        $sql=('SELECT * from lekarz');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>lekarz</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['lekarz']."</td><td>
                    <form action='delete.php' method='POST'>
                    <input type='number' name='row' value='".$wiersz[$dana3]."' hidden>
                    <input type='text' name='table' value='".$table."' hidden>
                    <input type='text' name='column' value='".$columnid."' hidden>
                    <input type='submit' value='Usuń'>
                    </form>");
                echo("</tr>");
            }
        echo("</table>"); 

        $sql=('SELECT * from pacjent');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>pacjent</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['pacjent']."</td><td>
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