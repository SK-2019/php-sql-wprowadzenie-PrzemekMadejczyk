<?php



echo("<h1>Wypożyczone książki:</h1>");
$sql = 'SELECT * from bibl_wypoz';
echo("<li>".$sql);

$result = $conn->query($sql);
   echo("<table>");
   echo("<th>id</th>");
   echo("<th>Autor</th>");
   echo("<th>Tytul</th>");
   echo("<th>Usuń</th>");
       while($row=$result->fetch_assoc()){ 
           echo("<tr>");
                echo("<td>".$row['id']."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>");
                echo("<td><form action='delete.php' method=POST>");
                echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                echo("<input type='submit' value='Usuń'>");
               echo("</form></td>");
           echo("</tr>");
       }

   echo("</table>");
   
?>