<?php
require_once("conn.php");
$sql =  "DELETE FROM pracownicy where id_pracownicy='".$_POST['id']."'";
echo($sql);
mysqli_query($conn,$sql);
mysqli_close($conn);
?>
