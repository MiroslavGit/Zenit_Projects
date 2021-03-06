<?php

include_once 'database.php';
$db = mysqli_select_db($conn, "zen_har");

$sluzby = mysqli_query($conn, "SELECT * FROM sluzby ");

while ($row = mysqli_fetch_array($sluzby)) {
    $obrazok[] = $row['obrazok'];
    $sluzba[] = $row['sluzba'];
    $popis[] = $row['popis'];
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krajské kolo 2018</title>
    <link rel="stylesheet" href="../css/style.css?<?php echo time(); ?>">

</head>

<body>
    <!-- Hlavička -->
    <header>
        <nav>
            <a href="index.php" class="active" title="domov">Domov</a>
            <a href="#sluzby" title="sluzby">Služby</a>
            <a href="#nasa-praca" title="nasa_praca">Naša práca</a>
            <a href="#rezervacky" title="rezervacky">Rezervačky</a>
        </nav>
    </header>

    <!-- Uvod -->
    <div class="uvod" id="uvod">
        <div class="img">

        </div>
        <div class="obsah_na_fotke">
            <img src="../obrazky/logo.png" alt="uvod" title="uvod">
            <h1 class="nazov">ZEN & HAR</h1>
            <p>Váš špecialista na veterány</p>
        </div>
    </div>

    <!-- Sluzby -->
    <div class="sluzby" id="sluzby">
        <h1 class="sluzby_nadpis">SLUŽBY</h1>
        <hr class="sluzby_ciara">
        <div class="sluzby_vypisane">
            <div class="sluzba">
                <img src="../obrazky/<?php echo $obrazok[0] ?> " alt="opravy" title="opravy">
                <p class="title_sluzby"><?php echo $sluzba[0] ?></p>
                <p class="popis_Sluzby"><?php echo $popis[0] ?></p>
            </div>
            <div class="sluzba">
                <img src="../obrazky/<?php echo $obrazok[1] ?>" alt="natery" title="natery">
                <p class="title_sluzby"><?php echo $sluzba[1] ?> </p>
                <p class="popis_Sluzby"><?php echo $popis[1] ?></p>
            </div>
            <div class="sluzba">
                <img src="../obrazky/<?php echo $obrazok[2] ?>" alt="natery" title="natery">
                <p class="title_sluzby"><?php echo $sluzba[2] ?></p>
                <p class="popis_Sluzby"><?php echo $popis[2] ?></p>
            </div>
        </div>
    </div>


    <!-- Nasa praca grid -->
    <div class="nasa_praca" id="nasa-praca">
        <h1 class="praca_nadpis">NAŠA PRÁCA</h1>
        <hr class="praca_ciara">
        <p class="praca_popis">
            Zbierka veteránov, ktoré sme renovovali s láskou
        </p>
        <div class="praca_grid">

            <div class="grid1">
                <div class="grid1_1">
                    <img src="../obrazky/foto/foto005.jpg" onclick="window.open('../obrazky/foto/foto005.jpg', '_blank')" class="ob" alt="uvod" title="uvod">
                    <div></div>
                    <img src="../obrazky/foto/foto004-nahlad.jpg" onclick="window.open('../obrazky/foto/foto004-nahlad.jpg', '_blank')" class="ob" alt="uvod" title="uvod">
                </div>
                <div class="grid1_2">
                    <img src="../obrazky/foto/foto001.jpg" onclick="window.open('../obrazky/foto/foto001.jpg', '_blank')" class="ob" alt="uvod" title="auto">
                </div>
            </div>

            <div class="grid2">
                <img src="../obrazky/foto/foto003.jpg" onclick="window.open('../obrazky/foto/foto003.jpg', '_blank')" class="ob" alt="uvod" title="uvod">
                <img src="../obrazky/foto/foto002.jpg" onclick="window.open('../obrazky/foto/foto002.jpg', '_blank')" class="ob" alt="uvod" title="uvod">

            </div>
        </div>
    </div>

    <!-- Rezervacka -->
    <div class="rezervacka" id="rezervacky">
        <h1 class="rezervacka_nadpis">REZERVAČKA</h1>
        <hr class="rezervacka_ciara">
        <div class="rezervacka_konkretna">
            <img src="../obrazky/generalka1.jpg" class="ob" alt="uvod" title="uvod">
            <div class="rezervacka_info">
                <h1 class="rezervacka_nazov"> Generálna oprava</h1>
                <p class="rezervacka_cena">
                    1 hod | 50,00 €
                </p>
                <button class="btn" id="prvaRezervacka_button" name="button" value="oprava" > REZERVOVAŤ </button>
            </div>
            <img src="../obrazky/generalka2.jpg" class="ob" alt="uvod" title="uvod">

        </div>

        <div class="rezervacka_konkretna">
            <img src="../obrazky/calunenie2.jpg" class="ob" alt="uvod" title="uvod">
            <div class="rezervacka_info">
                <h1 class="rezervacka_nazov"> Čalúnenie </h1>
                <p class="rezervacka_cena">
                    1 hod | 40,00 €
                </p>
                <button class="btn" id="druhaRezervacka_button" name="button" value="čalúnenie"> REZERVOVAŤ </button>
            </div>
            <img src="../obrazky/calunenie1.jpg" class="ob" alt="uvod" title="uvod">

        </div>

        <div class="rezervacka_konkretna">
            <img src="../obrazky/natery2.jpg" class="ob" alt="uvod" title="uvod">
            <div class="rezervacka_info">
                <h1 class="rezervacka_nazov"> Lakovanie, farbenie, nátery</h1>
                <p class="rezervacka_cena">
                    1 hod | 25,00€
                </p>
                <button class="btn" id="tretiaRezervacka_button" name="button" value="farbenie"> REZERVOVAŤ </button>
            </div>
            <img src="../obrazky/natery1.jpg" class="ob" alt="uvod" title="uvod">

        </div>

        <div class="rezervacka_konkretna">
            <img src="../obrazky/poradenstvo1.jpg" class="ob" alt="uvod" title="uvod">
            <div class="rezervacka_info">
                <h1 class="rezervacka_nazov"> Osobné konzultácie</h1>
                <p class="rezervacka_cena">
                    1 hod | 15,00€
                </p>
                <button class="btn" id="stvrtaRezervacka_button" name="button" value="konzultácia"> REZERVOVAŤ </button>
            </div>
            <img src="../obrazky/poradenstvo2.jpg" class="ob" alt="uvod" title="uvod">

        </div>
    </div>

    <!-- Modal -->
    <div class="overlay" id="overlay"></div>
    <div class="modal" id="modal">
        <button class="modal-close-btn" id="close-btn">x</button>
        <p class="modal-popis" id="modal-popis">Popis:</p> <br>
        <p id="modal-cena">Cena:</p><br>

        <form action="index.php" method="post">
            <div class="form-riadok">
                <label for="name">Meno</label>
                <input type="text" id="fname" name="Meno" maxlength="64" required placeholder="Meno..">
            </div>
            <br>
            <div class="form-riadok">
                <label for="email">Email</label>
                <input type="email" id="email" name="Email" placeholder="Email..">
            </div>
            <br>
            <div class="form-riadok">
                <label for="date">Dátum</label>
                <input type="date" id="datum" name="Datum">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>



    <?php
    // Taking all 5 values from the form data(input)

    

    $meno =  $_POST['Meno'];
    $email = $_POST['Email'];
    $datum =  $_POST['Datum'];
    


    $sql = "INSERT INTO rezervacky(id, typ_sluzby, datum_rezervacie, meno, kontakt, stav, razitko)
VALUES (' ', 'oprava' ,'$datum', '$meno','$email','prijatá', now() )";

    if (mysqli_query($conn, $sql)) {
        echo "Nahrálo sa úspešne";
    } else {
        echo "Chyba: " . $sql . "<br>" . mysqli_error($conn);
    }

    ?>



    <!-- Päta -->
    <footer>
        <div class="caption">
            <p>2021 vytvoril Miroslav Hanisko SPŠT
            </p>
            <p>© všetky práva vyhradené tím ZENIT
            </p>
        </div>
    </footer>
    <script src="../js/script.js?<?php echo time(); ?>"></script>
</body>

</html>