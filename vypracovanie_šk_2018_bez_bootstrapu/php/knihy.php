<?php
    include_once 'database.php'; 

    $db = mysqli_select_db($conn,"Knihy");

    $sql = mysqli_query($conn,"SELECT * FROM knihy GROUP BY Dátum_vytvorenia_knihy DESC");
    
    while($row = mysqli_fetch_array($sql)){
        $names[] = $row['Názov'];
        $text[] = $row['Text'];
        $images[] = $row['Obrázok'];
        $publicDate[] = $row['Dátum_vytvorenia_knihy'];
        $price[] = $row['Cena'];    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Sir Arthur Conan Doyle (* 22. máj 1859, Edinburgh – † 7. júl 1930, Crowborough, Sussex, Spojené kráľovstvo) bol škótsky spisovateľ, ktorý sa preslávil poviedkami o Sherlockovi Holmesovi. Jeho ďalšie veľmi známe dielo je Stratený svet.">

    <link rel="stylesheet" href="../css/style.css">

    <title>Zeniz šk 2018</title>

</head>

<body>
    <!-- Hlavička -->
    <header>
        <nav>
            <div class="logo">
                <a href="index.html"> <img src="../obrazky/logo.png" title="logo" alt="logo"> </a>
            </div>
            <div class="menu">
                <a href="../html/index.html" alt="domov" title="domov">Domov</a>
                <a href="../html/autor.html " alt="autor" title="autor">Autor</a>
                <a href="knihy.php" class="active" alt="knihy" title="knihy">Knihy</a>
            </div>
            <div class="socialne_siete">
                <a href="https://twitter.com/home"> <img src="../obrazky/socialne-siete/twitter.png" alt="twitter"
                        title="twitter">
                </a>
                <a href="https://www.facebook.com/"> <img src="../obrazky/socialne-siete/facebook.png" alt="facebook"
                        title="facebook">
                </a>
                <a href="https://sk.pinterest.com/"> <img src="../obrazky/socialne-siete/pinterest.png" alt="pinterest"
                        title="pinterest"> </a>
                <a href="https://www.instagram.com/"> <img src="../obrazky/socialne-siete/instagram.png" alt="instagram"
                        title="instagram"> </a>
            </div>
        </nav>
    </header>

    <!-- Obsah  -->
    <div class="main3">

        <div class="books">
            <div class="foto-books">
                <img src="../obrazky/knihy/<?php echo $images[0] ?> " alt="<?php echo $names[0] ?>"
                    title="<?php echo $names[0] ?>">
            </div>
            <div class="info-books">
                <h2> <?php echo $names[0] ?> </h2>
                <p class="public"> Publikované: <?php  echo date("j. M Y ",strtotime($publicDate[0])) ?> </p>
                <p class="text"> <?php echo $text[0] ?></p>
                <div class="kupa">
                    <p class="price"> <?php echo $price[0] ?> €</p>
                    <button class="button_kupit">Kúpiť</button>
                </div>
            </div>

        </div>

        <div class="books">
            <div class="foto-books">
                <img src="../obrazky/knihy/<?php echo $images[1] ?> " alt="<?php echo $names[1] ?>"
                    title=" <?php echo $names[1] ?>">
            </div>
            <div class="info-books">
                <h2> <?php echo $names[1] ?> </h2>
                <p class="public"> Publikované: <?php echo date("j. M Y ",strtotime($publicDate[1])) ?> </p>
                <p class="text"> <?php echo $text[1] ?></p>
                <div class="kupa">
                    <p class="price"> <?php echo $price[1] ?> €</p>
                    <button class="button_kupit">Kúpiť</button>
                </div>
            </div>

        </div>

        <div class="books">
            <div class="foto-books">
                <img src="../obrazky/knihy/<?php echo $images[2] ?> " alt="<?php echo $names[2] ?>"
                    title="<?php echo $names[2] ?>">
            </div>
            <div class="info-books">
                <h2> <?php echo $names[2] ?> </h2>
                <p class="public"> Publikované: <?php echo date("j. M Y ",strtotime($publicDate[2])) ?> </p>
                <p class="text"> <?php echo $text[2] ?></p>
                <div class="kupa">
                    <p class="price"> <?php echo $price[2] ?> €</p>
                    <button class="button_kupit">Kúpiť</button>
                </div>
            </div>

        </div>

    </div>

    <!-- Päta -->
    <footer>
        <div>
            <p>@2018 Zenit </p>
            <p>Miroslav Hanisko, SPŠT SNV</p>
        </div>
        <div class="vstrede">
            <p>221B Baker Street <br> Mrylebone, City of Westminister <br> Londýn</p>

        </div>
        <div class="vpravo">
            <p> <a href="https://www.arthurconandoyle.com" class="odkaz_päta" title="autor" alt="autor">
                    https://www.arthurconandoyle.com </a></p>
            <p> <a href="https://www.wikipedia.org/" class="odkaz_päta" title="wiki" alt="wiki">
                    https://www.wikipedia.org/</a></p>
        </div>
    </footer>
    <script src="../script.js"></script>
</body>

</html>