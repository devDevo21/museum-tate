<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <title>TATE - Visita</title>

    <style>
        body {
            max-width: 1200px;
        }
        .left-content {
            margin: 10px;
            height: 170px;
            width: 550px;
            background-color: #ecf0f3;
            border-radius: 20px;
            padding: 15px;
            box-shadow: inset -3px -3px 7px #ffffff,
                inset 3px 3px 5px #ceced1;
        }
        .titlet {
            color: lightseagreen;
            text-transform: uppercase;
        }
        .df {
            display: flex;
            justify-content: center;
        }
    </style>

    <?php include('navbar.php') ?>

    <div style="margin-top:100px">
        <div class="df">
            <div class="left-content">
                <h2 class="titlet" style="margin-top:10px">Informazioni pratiche</h2>
                <hr />
                <p> Il Museo Tate è dedicato alla conservazione e alla promozione della cultura e dell'arte
                    italiana. Situato nel cuore della città,
                    il museo ospita una vasta collezione di opere d'arte, reperti archeologici e molto altro
                    ancora.
                </p>
            </div>

            <div class="left-content">
                <h2 class="titlet" style="margin-top:10px">CHIUSURE</h2>
                <hr />
                <p>
                    lunedì non festivi
                    <br>
                    24 e 25 dicembre
                    <br>
                    1 gennaio
                </p>
            </div>
        </div>

        <div class='df'>
            <div class="left-content">
                <h2 class="titlet" style="margin-top:10px">APERTURE STRAODINARIE</h2>
                <hr />
                <p>
                    mercoledì 1 maggio (9.30 - 18.30)
                    <br>
                    domenica 2 giugno (9.30 - 18.30)
                    <br>
                    giovedì 15 agosto (10-19)
                </p>
            </div>

            <div class="left-content">
                <h2 class="titlet" style="margin-top:10px">ORARI</h2>
                <hr />
                <b> 12 settembre 2023 - 21 giugno 2024 </b>
                <p> 9.30 - 17.00 da martedì a venerdì
                    <br>
                    9.30 - 18.30 sabato, domenica e festivi
                    <br>
                    L'ingresso è consentito fino a 1 ora prima della chiusura.
                </p>
            </div>
        </div>
    </div>
    </div>

    <?php include_once('footer.php') ?>

    </body>

</html>