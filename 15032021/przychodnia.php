<?php
    $link = mysqli_connect('localhost','root','','15032021');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./przychodnia.css">
    <title>Przychodnia</title>
</head>
<body>
    <header><h1>PRAKTYKA LEKARZA RODZINNEGO</h1></header>
    <main>
        <section>
            <h3>LISTA PACJENTOW</h3>
            <?php
                $sql = "SELECT id, imie, nazwisko FROM `pacjenci`";
                $result = $link->query($sql);
                while($row = mysqli_fetch_assoc($result)){
                    echo $row['id'].". ".$row['imie']." ".$row['nazwisko']."<br>";
                }
            ?>
            <br><br>
            <form action="pacjent.php" method="POST">
                <label for="inid">Podaj id:</label>
                <br>                <input type="number" name="inid">
                <input type="submit" value="Pokaż dane">
            </form>
            <h3>LEKARZE</h3>
            <ul>
                <li>pn - śr
                    <ol>
                        <li>Anna Kwiatkowska</li>
                        <li>Jan Kowalewski</li>
                    </ol>
                </li>
                <li>pn - śr
                    <ol>
                        <li>Krzysztof Nowak</li>
                    </ol>
                </li>
            </ul>
        </section>
        <section>
                <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
                <p>brak wybranego pacjenta</p>
        </section>
    </main>
    <footer>
        <p>utworzone przeze mnie :)</p>
        <a href="./kwerendy.txt">Pobierz plik z kwerendami</a>
    </footer>
</body>
</html>