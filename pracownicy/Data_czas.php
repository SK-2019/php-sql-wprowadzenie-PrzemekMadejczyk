<!DOCTYPE html>
<html>
<head>
<title>Przemek Madejczyk 2Ti Gr2</title>
<link rel="stylesheet" href="../assets/style.css">
<link rel="icon" href="https://www.pinclipart.com/picdir/middle/104-1042073_variety-of-services-money-bag-icon-png-clipart.png" type="image/icon type">
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
require_once('../assetsconn.php');
       echo("<hr>");
                echo("<h3>zadanie 1</h3>");
                echo("<h3>Wiek poszczególnych pracowników (w latach)</h3>");
                        
            $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL:  $sql ");
                        echo("<th>id</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        echo("<th>nazwa działu</th>");
                        echo("<th>wiek</th>");
                        echo("<th>data_urodzenia</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td><td>".$row['data_urodzenia']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
                                                                                    
    
    
        echo("<h3>zadanie 2</h3>");
        echo("<h3>Wiek poszczególnych pracowników (w latach) z działu serwis</h3>");
                $sql=('SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy,organizacja where dzial=id_org and nazwa_dzial="serwis"');
                $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa działu</th>");
        echo("<th>wiek</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc())
        {
            echo("<tr>");
                echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['wiek']."</td><td>".$row['data_urodzenia']."</td>");
            echo("</tr>");
        }
        echo("</table>");
        echo("<hr />");
    
      echo("<h3>zadanie 3</h3>");
      echo("<h3>Suma lat wszystkich pracowników</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma_lat from pracownicy');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma_lat</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma_lat']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
    
    echo("<h3>zadanie 4</h3>");
    echo("<h3>Suma lat pracowników z działu handel</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja WHERE id_org=dzial and nazwa_dzial="handel";');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>Suma</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['Suma']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");

    
                            echo("<h3>zadanie 5</h3>");
                           echo("<h3>Suma lat kobiet</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWiekuKobiet from pracownicy WHERE imie LIKE "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>SumaWiekuKobiet</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['SumaWiekuKobiet']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
    
    
                    echo("<h3>zadanie 6</h3>");
                  echo("<h3>Suma lat mężczyzn</h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWiekuMezczyzn from pracownicy WHERE imie NOT LIKE "%a"');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>SumaWiekuMezczyzn</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['SumaWiekuMezczyzn']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
        
    
                     echo("<h3>zadanie 7</h3>");
                     echo("<h3>Średnia lat pracowników w poszczególnych działach</h3>");
                        $sql=('SELECT AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SredniaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial;');
                    $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>SredniaWieku</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['SredniaWieku']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
    
        echo("<h3>zadanie 8   </h3>");
       echo("<h3>Suma lat pracowników w poszczególnych działach  </h3>");
                        $sql=('SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaWieku, nazwa_dzial from pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial;');
                    $result=$conn->query($sql);//mysql
                        echo("<table border=1>");
                        echo("<li>SQL: $sql");
                        echo("<th>SumaWieku</th>");
                        echo("<th>nazwa działu</th>");
                            while($row=$result->fetch_assoc()){
                                echo("<tr>");
                                    echo("<td>".$row['SumaWieku']."</td><td>".$row['nazwa_dzial']."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");
                        echo("<hr />");
        
