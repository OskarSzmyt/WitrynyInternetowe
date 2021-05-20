<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="auto.css">
  <title>Komis Samochodowy</title>
</head>

<body>
  <header>
    <h1>SAMOCHODY</h1>
  </header>
  <div id="sekcje">
    <section id="lewy">
      <h2>Wykaz samochodów</h2>
        <ul>
            <?php
                $con = mysqli_connect("localhost","root","",'auta');
                $zapytanie1 = 'SELECT id,marka, model FROM samochody';
                $wynik = mysqli_query($con,$zapytanie1);
                while($row = mysqli_fetch_assoc($wynik))
                {
                    echo "<li>";
                    foreach ($row as $value){
                        echo $value." ";
                    }
                    echo "</li>";
                }
                mysqli_close($con);
            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php
                $con = mysqli_connect("localhost","root","",'auta');
                $zapytanie2 = 'SELECT Samochody_id, Klient FROM zamowienia';
                $wynik = mysqli_query($con,$zapytanie2);
                while($row = mysqli_fetch_assoc($wynik))
                {
                    echo "<li>";
                    foreach ($row as $value){
                        echo $value." ";
                    }
                    echo "</li>";
                }
                mysqli_close($con);
            ?>
        </ul>
    </section>
    <section id="prawy">
      <h2> Pełne dane: Fiat</h2>
        <?php
                    $con = mysqli_connect("localhost","root","",'auta');
                    $query = 'SELECT s.* FROM samochody s INNER JOIN zamowienia z ON s.id = z.id WHERE s.marka = "Fiat"';
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<li>";
                        foreach($row as $value){
                            echo $value,'/';
                        }
                        echo "</li>";
                       
                    }
                    mysqli_close($con);
                ?>
    </section>
  </div>
  <footer>
    <table>
        <tr>
            <td><a href="kwerendy.txt">Kwerendy</a></td>
            <td>Autor: 000000000</td>
            <td><img src="auto.png" alt="komis samochodowy" > </td>
        </tr>  
    </table>
  </footer>
</body>

</html>
