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
    $sql=('SELECT * from mechanik, samochod, mechanik_samochod where mechanik.id=id_mechanik and samochod.id=id_samochod');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>mechanik</th>");
        echo("<th>model</th>");a
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['mechanik']."</td><td>".$row['model']."</td>");
                echo("</tr>");
            }
        echo("</table>"); 

            $sql=('SELECT * from mechanik');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>mechanik</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['mechanik']."</td>");
                echo("</tr>");
            }
        echo("</table>"); 

        $sql=('SELECT * from samochod');
    $result=$conn->query($sql);
        echo("<hr />");
        echo("<li>SQL: $sql");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>vin</th>");
        echo("<th>model</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id']."</td><td>".$row['vin']."</td><td>".$row['model']."</td>");
                echo("</tr>");
            }
        echo("</table>"); 
        ?>