<?php
$servername = "mysql-przemek-madejczyk.alwaysdata.net";
$username = "217186";
$password = "przemekenter1";
$dbname = "przemek-madejczyk_123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

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
$conn->close();
?>
