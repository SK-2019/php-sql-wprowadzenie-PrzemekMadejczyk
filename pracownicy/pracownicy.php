<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/style.css">
<link rel="icon" href="https://www.pinclipart.com/picdir/middle/104-1042073_variety-of-services-money-bag-icon-png-clipart.png" type="image/icon type">
</head>
<body>
<h1>Przemek Madejczyk 2ti 20</h1>
    <div class="container">
      <div class="header">
        <?php include("header.php"); ?>
      </div>
      <div class="menu">
      <?php include("menu.php"); ?>
      </div>
      <div class="main"></div>
    </div>
  </body>
</html>


    <h1>Pracownicy</h1>
<?php
        echo("<hr />");
      require_once('../assets/conn.php');  
     $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2');
        $result=$conn->query($sql); //mysql
        echo("<table border=1>");
     echo("<li>SQL:  $sql ");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr />");

      
     $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2');
        $result=$conn->query($sql); //mysql
        echo("<table border=1>");
     echo("<li>SQL:  $sql ");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr />");
        
       
    $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and zarobki<30');
        $result=$conn->query($sql); //mysql
        echo("<table border=1>");
     echo("<li>SQL:  $sql ");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>data_urodzenia</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                echo("</tr>");
            }
        echo("</table>");
        echo("<hr />");

        $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org');
        $result=$conn->query($sql);                   
            echo("<table border=1>");
            echo("<li>SQL: $sql");
            echo("<th>id</th>");
            echo("<th>imię</th>");
            echo("<th>dział</th>");
            echo("<th>zarobki1</th>");
            echo("<th>nazwa działu</th>");
            echo("<th>data urodzenia</th>");
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr />");
      
     
            
            $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and dzial=2 or dzial=3');
            $result=$conn->query($sql);            
            echo("<table border=1>");
            echo("<li>SQL:  $sql ");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            echo("<th>nazwa_dzial</th>");
            echo("<th>data_urodzenia</th>");
       
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr />");
          
      $sql=('SELECT * FROM pracownicy,organizacja where dzial=id_org and zarobki<30');
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<li>SQL:  $sql ");
            echo("<th>id</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            echo("<th>nazwa_dzial</th>");
            echo("<th>data_urodzenia</th>");
     
                while($row=$result->fetch_assoc()){
                    echo("<tr>");
                        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");
                    echo("</tr>");
                }
            echo("</table>");
            echo("<hr />");
        ?>
