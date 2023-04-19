<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
<div id="banerlewy">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div id="banerprawy">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>
    <div id="polecamy">
        <h3>Polecamy</h3>
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'dane3');
            $res1 = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18,22,23,25)";
            $cos1 = mysqli_query($con, $res1);
            while($wiersz1 = mysqli_fetch_array($cos1)){
                echo "<div class='film'>
                        <h4>$wiersz1[0]. $wiersz1[1]</h4>
                        <div class='zdjecie' style='background-image: url($wiersz1[3]);'></div>
                        <p>$wiersz1[2]</p>
                      </div>";
            }
        ?>
    </div>
    <div id="fantastyczne">
        <h3>Filmy fantastyczne</h3>
        <?php
            $res2 = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12";
            $cos2 = mysqli_query($con, $res2);
            while($wiersz2 = mysqli_fetch_array($cos2)){
                echo "<div class='film'>
                        <h4>$wiersz2[0]. $wiersz2[1]</h4>
                        <img src='$wiersz2[3]' alt='film'>
                        <p>$wiersz2[2]</p>
                      </div>";
            }
        ?>
    </div>
    <div id="stopka">
      
        <br>
        Stronę wykonał: <a href="oskar.stawikowski1337@gmail.com">Oskar Stawikowski</a>
    </div>
</body>
</html>

