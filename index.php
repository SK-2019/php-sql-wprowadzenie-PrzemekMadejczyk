<?php
require_once('log.php');
$sql = "SELECT * from pracownicy";
$result = $conn->query($sql);
        echo("<h3>Tabela Pracowników</h3>");
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>imie</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo("<tr>");
    echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td>");
    echo("</tr>");
  }
  echo("</table>");
} else {
  echo "0 results";
}


$ sql = "select * from pracownicy where imie not like '%a'" ;
$ wynik = $ conn -> zapytanie ( $ sql );
        echo ( „<h3> Tabela Pracowników </h3>” );
        echo ( "<obramowanie tabeli = 1>" );
        echo ( "<th> id </th>" );
        echo ( "<th> imie </th>" );
        echo ( "<th> dzial </th>" );
        echo ( "<th> zarobki </th>" );

if ( $ wynik -> num_rows > 0 ) {
  // dane wyjściowe każdego wiersza
  while ( $ row = $ wynik -> fetch_assoc ()) {
    echo ( "<tr>" );
    echo ( "<td>" . $ row [ 'id_pracownicy' ]. "</td> <td>" . $ row [ 'imie' ]. "</td> <td>" . $ row [ 'dzial' ]. "</td> <td>" . $ row [ 'zarobki' ]. "</td>" );
    echo ( „</tr>” );
  }
  echo ( „</table>” );
} else {
  echo  "0 wyników" ;
}

$conn->close();
?>
