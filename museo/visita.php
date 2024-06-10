<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="cardstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
        <title>TATE - Visita</title>
        <style> 
            body { max-width: 1200px; }
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
                background-color: rgb(160, 6, 127); /* Fluorescent color */
                visibility: hidden;
                transform: scaleX(0);
                transition: all 0.3s ease-in-out;
            }

            .navbar-link:hover:before {
                visibility: visible;
                transform: scaleX(1);
            }
        </style>

    </head>
    <body>
    <?php include('navbar.php') ?>

    <div class="left-content" style="margin-top:100px">
    <h2 style="margin-top:10px">Informazioni pratiche</h2>
    <hr />
        <p> Il Museo Tate è dedicato alla conservazione e alla promozione della cultura e dell'arte italiana. Situato nel cuore della città, 
            il museo ospita una vasta collezione di opere d'arte, reperti archeologici e molto altro ancora.
        </p>
        <div>
            <p> Aperto tutti i giorni ore 9.30-19.30
                <br>
                24 e 31 Dicembre ore 9.30-14.00
                <br>
                <strong>1° gennaio 2024 </strong>
                dalle 11.00 alle 20.00
                <br>
                Ultimo ingresso un'ora prima della chiusura
                <br>
                <strong>Giorni di chiusura</strong>
                <br>           
                1 maggio e 25 dicembre
            </p>
            <p> 
                <strong>Call center </strong>
                060608 tutti i giorni dalle 9.00 alle 19.00
                <br>
                <strong>Email</strong>
                <a href="mailto:info.museo@tate.com">       info.museo@tate.com </a>
            </p>
        </div>
    </div>

        <?php include_once('footer.php') ?>

    </body>
</html>
