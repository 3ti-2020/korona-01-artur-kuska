<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konie</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="all">
        <div class="item ia">
            <div class="logo"><img src="https://cdn.pixabay.com/photo/2016/06/28/14/12/horse-1484755_960_720.png"></div>
            <div class="tyt">Rancho u A</div>
            <div class="bek">
                <a href="Glowna.html" class="link"><div class="back">Strona główna</div></a>
            </div>
        </div>
        <div class="item ib">
            <div class="tabela">
                <?php

                    $ser = "34.77.223.128";
                    $use = "root";
                    $pass = "zaq1@WSX";
                    $db = "kuska";

                    $conn = new mysqli($ser, $use, $pass, $db);

                    $res1 = $conn->query("SELECT dane.id, dane.stajnia, typ, imie_konia, rasa, wiek, plec, dane_wlasciciela, numer_tel from dane, wlasciciele, stajnie where (dane.nr_wlasciciela=wlasciciele.nr_wlasciciela) and (dane.stajnia = stajnie.stajnia)");

                    echo("
                        <table>
                            <tr>
                            <th>Id</th>
                            <th>stajnia</th>
                            <th>typ</th>
                            <th>imie konia</th>
                            <th>rasa</th>
                            <th>wiek</th>
                            <th>plec</th>
                            <th>Dane wlasciciela</th>
                            <th>Numer tel</th>
                            </tr>
                    ");

                    while($row=$res1->fetch_assoc()){
                        
                        echo("<tr>");
                        echo("<td>".$row['id']."</td>");
                        echo("<td>".$row['stajnia']."</td>");
                        echo("<td>".$row['typ']."</td>");
                        echo("<td>".$row['imie_konia']."</td>");
                        echo("<td>".$row['rasa']."</td>");
                        echo("<td>".$row['wiek']."</td>");
                        echo("<td>".$row['plec']."</td>");
                        echo("<td>".$row['dane_wlasciciela']."</td>");
                        echo("<td>".$row['numer_tel']."</td>");
                        echo("</tr>");
                        
                    }

                    echo("</table>");

                ?>                 
            </div>
        </div>
    </div>
</body>
</html>