<?php

$servername = "34.77.223.128";
$username = "root";
$password = "zaq1@WSX";
$dbname = "kuska";

$conn = new mysqli($servername, $username, $password, $dbname);

$result1 = $conn->query("select id, stajnia, imie_konia, rasa, wiek, dane_wlasciciela, plec from dane, wlasciciele where dane.nr_wlasciciela=wlasciciele.nr_wlasciciela");

echo("<table border=1>");
echo("<tr>
<th>id</th>
<th>stajnia</th>
<th>imie konia</th>
<th>rasa</th>
<th>wiek</th>
<th>dane wlasciciela</th>
<th>plec</th>
</tr>");

while($row=$result1->fetch_assoc() ){
      echo("<tr>");
      echo("<td>".$row['id']."</td>");
      echo("<td>".$row['stajnia']."</td>");
      echo("<td>".$row['imie_konia']."</td>");
      echo("<td>".$row['rasa']."</td>");
      echo("<td>".$row['wiek']."</td>");
      echo("<td>".$row['dane_wlasciciela']."</td>");
      echo("<td>".$row['plec']."</td>");
      echo("</tr>");
}
echo("</table>");

?>
