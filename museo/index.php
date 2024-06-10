<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <link rel="stylesheet" href="photos.css">
    <title>TATE - Home Page</title>
    <style>
        body {
            max-width: 1200px;
        }

        /* style of navigation bar*/
        .navbar {
            background-color: #333;
            padding: 20px 0;
            text-align: center;
        }

        .navbar-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar-item {
            display: inline;
            margin-right: 20px;
        }

        .navbar-link {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            position: relative;
        }

        .navbar-link:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: rgb(160, 6, 127);
            /* Fluorescent color */
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }



        .navbar-link:hover:before {
            visibility: visible;
            transform: scaleX(1);
        }

        .content {
            padding: 20px;
            margin-top: 80px
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            width: 200px;
            margin: 10px;
            border: 2px solid #ccc;
        }

        .event {
            margin-top: 20px;
            border-top: 2px solid #ccc;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <!-- <header>
            <h1>TATE - Home Page</h1>
            <nav class="navbar">
                <ul class="navbar-list">
                    <li class="navbar-item"><a class="navbar-link" href="index.html"> Home </a></li>
                    <li class="navbar-item"><a class="navbar-link" href="artista.html">Artisti </a></li>
                    <li class="navbar-item"><a class="navbar-link" href="opera.php"> Opere </a></li>
                    <li class="navbar-item"><a class="navbar-link" href="statistica.html"> Statistiche </a></li>
                    <li class="navbar-item"><a class="navbar-link" href="visita.html">Visita</a></li>
                </ul>
            </nav>
            
        </header> -->
    <?php include('navbar.php') ?>

    <div class="content">
        <!-- <center><h2>BENVENUTO AL MUSEO TATE</h2></center>
            <p>Esplora la nostra vasta collezione di opere d'arte, artefatti storici e molto altro ancora.</p>
            <p>Scopri le nostre ultime esposizioni e partecipa ai nostri emozionanti eventi culturali.</p>
            <p>Visita il nostro museo oggi stesso!</p> -->

        <?php include('card.php') ?>

        <div>
            <div>
                <h2 style="padding:25px 0px 10px 15px;color:grey">ESPLORA LE NOSTRE GALLERIE ONLINE</h2>
                <hr />
            </div>
            <div class="photo_display">
                <a href="https://www.tate.org.uk/visit/tate-modern/display/materials-and-objects">
                    <figure>
                        <img img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/T15640_Official_View.width-1440.jpg"
                            alt="Mountains">
                        <figcaption> Tate (Sam Day)  </figcaption>
                    </figure>
                </a>
                <a href="https://www.tate.org.uk/visit/tate-modern/display/performer-and-participant">
                    <figure>
                        <img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/.width-1440_xFqoqX4.jpg"
                            alt="Mountains">
                        <figcaption> Mari Katayama</figcaption>
                    </figure>
                </a>
            </div>

            <div class="photo_display">
                <a href="https://www.tate.org.uk/visit/tate-modern/display/tanks">
                    <figure>
                        <img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/tanks_staircase_tate_modern_1_W3VMCQj.width-2560.jpg"
                            alt="Mountains">
                        <figcaption>Rikard Österlund</figcaption>
                    </figure>
                </a>
                <!-- style="--c:#fff5" -->
                <a href="https://www.tate.org.uk/visit/tate-britain/display/modern-and-contemporary-british-art">
                    <figure>
                        <img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/.width-1440_wIrflDa.jpg">
                        <figcaption>Pauline Boty</figcaption>
                    </figure>
                </a>
            </div>
        </div>

        <div class="left-content" style="margin-top:20px;">
            <h2>PROSSIMI EVENTI</h2>
                <p>Scopri i nostri prossimi eventi culturali:</p>
                <ul>
                    <li>Conferenza sull'arte contemporanea - 25 Luglio</li>
                    <li>Visita guidata alla mostra "Rinascimento Italiano" - 7 Agosto</li>
                    <li>Workshop di pittura per bambini - 19 Agosto</li>
                </ul>
            </div>
        </div>
        

    <!-- <footer>
            <address>
                123 Main Street, Art-City, England<br>
                Phone: 123-456-7890<br>
            </address>
            <p>"L'arte non riproduce ciò che è visibile, ma rende visibile ciò che non sempre lo è." - Paul Klee</p>
            <p>&copy; 2024 Museo Tate. Tutti i diritti riservati.</p>
        </footer> -->
    <?php include_once('footer.php') ?>
</body>

</html>