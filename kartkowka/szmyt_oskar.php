<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "", "zsk");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <table>
    <tr>
        <td>id</td>
        <td>imie</td>
        <td>nazwisko</td>
        <td>kod pocztowy</td>
        <td>miasto</td>
        <td>ulica</td>
        <td>numer domu</td>
        <td>województwo</td>
        <td>kraj</td>
        <td>NIP</td>
        </tr>
    <?php
        $query = "SELECT cl.client_id, cl.name, cl.surname, ci.postal_code, ci.city, cl.street, cl.number, s.state, co.country, cl.NIP 
        FROM (((clients cl INNER JOIN cities ci on cl.city_id = ci.city_id) INNER JOIN states s ON ci.state_id = s.state_id) INNER JOIN countries co on s.country_id = co.country_id);";
        $wynik = mysqli_query($link, $query);
        while ($row = mysqli_fetch_assoc($wynik)) {
            echo "<tr>
            <td>$row[client_id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[postal_code]</td>
            <td>$row[city]</td>
            <td>$row[street]</td>
            <td>$row[number]</td>
            <td>$row[state]</td>
            <td>$row[country]</td>
            <td>$row[NIP]</td>
            <td><a href='skrypt_szmyt.php/usun_szmyt.php?oid=$row[client_id]'>Usuń</a></td>
            </tr>";
        }
    ?>
    </table>
</body>
</html>