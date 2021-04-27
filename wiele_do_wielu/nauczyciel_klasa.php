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
    require_once("../assets/conn.php");
    $sql=('SELECT * from klasa, nauczyciel, klasa_nauczyciel where klasa.id=klasa_id and nauczyciel.id=nauczyciel_id');
        $result=$conn->query($sql);
            echo("<hr />");
            echo("<li>SQL: $sql");
            echo("<table border=1>");
            echo("<th>nazwisko</th>");
            echo("<th>tytul</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['nazwisko']."</td><td>".$row['tytul']."</td>");
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
                    echo("<td>".$row['id']."</td><td>".$row['klasa']."</td>");
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
                    echo("<td>".$row['id']."</td><td>".$row['nauczyciel']."</td>");
                echo("</tr>");
            }
        echo("</table>"); 

        ?>