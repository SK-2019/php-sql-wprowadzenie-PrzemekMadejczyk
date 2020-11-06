<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Przemek Madejczyk 2Ti</h1>  
<h3>Funkcje Agregujące</h3>  
<?php
        require_once('log.php');;
            $result=$conn->query('SELECT dzial,avg(zarobki) as srednia from pracownicy group by dzial');//mysql
echo ("<h3>Funkcje Agregujące</h3");
               $result=$conn->query($sql);
                    echo("<table border=1>");
                    echo("<h3>ZAD $nr_zad</h3>");
                    echo("<li>SQL: $sql");
                    echo("<th>dział</th>");
                    echo("<th>średnia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                                echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td>");
                            echo("</tr>");
                            }
                    echo("</table>");
                    echo("<hr />");
                }
