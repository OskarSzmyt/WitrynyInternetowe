<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styll.css">
    </head>
    <body>
        <header>
          <h1>Portal Ogłoszeniowy</h1>  
        </header>
        <main>
        <section id=lewy>
            <h2>Kategorie ogłoszeń</h2>
            <ol>
                <li>Książki</li>
                <li>Muzyka</li>
                <li>Filmy</li>
            </ol>
            <img src="ksiazki.jpg" alt="Kupię/ sprzedam książkę" id="ksiazki">
            <table>
                <tr>
                    <td>Liczba ogłoszeń</td>
                    <td>Cena ogłoszeń</td>
                    <td>Bonus</td>
                </tr>
                 <tr>
                    <td>1-10</td>
                    <td>1PLN</td>
                    <td rowspan="3">Subskrypcja newslettera to upust 0,20PLN na ogłoszenie</td>
                </tr>
                 <tr>
                    <td>11-50</td>
                    <td>0,80PLN</td>
            
                </tr>
                 <tr>
                     <td> 51 i więcej</td>
                     <td> 0,60PLN</td>
                    
                </tr>
            </table>
        </section>
        <section id="prawy">
            <h2>Ogłoszenia w kategorii książki</h2>
            <?php
                $link = new mysqli('localhost','root','','ogloszenia');
                $q1 = $link -> query('SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1');
                while ($rows = $q1 -> fetch_array()) {]
                    $q2 = $link -> query('SELECT telefon FROM uzytkownik u INNER JOIN ogloszenie o ON u.id = o.uzytkownik_id WHERE o.id = '.$rows['id']);
                    echo "<h2>".$rows['id']." ".$rows['tytul']."</h2><br><p>".$rows['tresc']."</p><br><p>telefon komórkowy: ".$q2->fetch_array()['telefon']."</p>";
                }
                $link->close();
            ?>
        </section>
        </main>
        <footer>
            Portal ogłoszeniowy opracował:01311306133
        </footer>
    </body>
</html>