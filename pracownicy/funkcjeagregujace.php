<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/style.css">
</head>
<title>Przemek Madejczyk 2Ti Gr2</title>
<body>

<h1>Przemek Madejczyk 2ti 20</h1>
<div class="nav">
<a class ="nav_link" href="https://github.com/SK-2019/php-sql-wprowadzenie-PrzemekMadejczyk">Github</a>
<a class="nav_link" href="../index.php">strona głowna</a>
<a class="nav_link" href="pracownicy.php">Pracownicy - wstęp</a>
    <a class="nav_link" href="funkcjeagregujace.php">Funkcje Agregujące</a>
    <a class="nav_link" href="pracownicy i organizacja.php">Pracownicy i Organizacja</a>
  
  <a class="nav_link" href="Data_czas.php">Data i czas</a>
  <a class="nav_link" href="../cwiczenia/formularz.html">Formularze</a>
  <a class="nav_link" href="daneDoBazy.php">dane do bazy danych</a>
  <a class="nav_link" href="../cwiczenia/function.php">funkcja</a>
  <a class="nav_link" href="../ksiazki/ksiazki.php"><b>Książki</b></a>
</div>
</head>
<body>
<h2>Funkcje Agregujące</h2>  
<?php
          echo("<hr />");
      require_once('../assets/conn.php');
    
            
           
            $sql=('SELECT sum(zarobki) as suma from pracownicy');
            $result=$conn->query($sql); //mysql
                echo("<h3>zadanie 1</h3>");//nazwa nad tabelą
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>suma</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['suma']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");
        $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie like "%a" and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql); //mysql
            echo("<h3>zadanie 2</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>suma</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where imie not like "%a" and dzial=id_org and dzial=2 or dzial=3 group by dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>zadanie 3</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            
    
            $sql=('SELECT nazwa_dzial,dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org');
            $result=$conn->query($sql); //mysql
                echo("<h3>zadanie 4</h3>");//nazwa nad tabelą
                echo("<table border=1>");
                echo("<li>SQL: $sql");
                echo("<th>srednia</th>");
                echo("<th>nazwa działu</th>");
                    while($row=$result->fetch_assoc()){
                        echo("<tr>");
                            echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                        echo("</tr>");
                    }
                echo("</table>");
        echo("<hr />");

$sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=4 and dzial=id_org group by nazwa_dzial');
        $result=$conn->query($sql); //mysql
            echo("<h3>zadanie 5</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>srednia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
    echo("<hr />");
    $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where imie not like "%a" and dzial=1 or dzial=2 and dzial=id_org group by nazwa_dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>zadanie 6</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>srednia</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            
            $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where dzial=id_org');
    $result=$conn->query($sql); //mysql
        echo("<h3>zadanie 7</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,count(imie) as ilosc from pracownicy,organizacja where imie like "%a" and dzial=id_org and dzial=1 or dzial=3 group by dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>zadanie 8</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            echo("<h2>Group by</h2>");
            echo("<hr />");
            
            $sql=('SELECT nazwa_dzial,sum(zarobki) as suma from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>zadanie 8 </h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>suma</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,count(zarobki) as ilosc from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>zadanie 9 </h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>ilosc</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['ilosc']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
            $sql=('SELECT nazwa_dzial,avg(zarobki) as srednia from pracownicy,organizacja where dzial=id_org group by dzial');
    $result=$conn->query($sql); //mysql
        echo("<h3>10</h3>");//nazwa nad tabelą
        echo("<table border=1>");
        echo("<li>SQL: $sql");
        echo("<th>srednia</th>");
        echo("<th>nazwa działu</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['srednia']."</td><td>".$row['nazwa_dzial']."</td>");
                echo("</tr>");
            }
        echo("</table>");
echo("<hr />");
   
             echo("<h2>Having</h2>");
            echo("<hr />");

            
        $sql=('SELECT nazwa_dzial,avg(zarobki)as suma from pracownicy, organizacja WHERE imie not like "%a" GROUP BY nazwa_dzial HAVING avg(zarobki) > 30');
    $result=$conn->query($sql); //mysql
            echo("<h3>zadanie 11</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>średnia</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");

    $sql=('SELECT nazwa_dzial,count(id_pracownicy)as suma from pracownicy, organizacja WHERE dzial=id_org GROUP BY dzial HAVING count(id_pracownicy) > 3');
    $result=$conn->query($sql); //mysql
            echo("<h3>zadanie 12</h3>");//nazwa nad tabelą
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>ilość</th>");
            echo("<th>nazwa działu</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['suma']."</td><td>".$row['nazwa_dzial']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr>");
?>
