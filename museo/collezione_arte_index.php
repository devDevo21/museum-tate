<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <title>TATE - Ricerca Opere</title>

    <style>
        body {
            max-width: 1200px;
        }
        .divp {
            display: flex;
        }
        fieldset {
            display: block;
            width: 400px;
            margin: 10px
        }
        .valid {
            margin-left: 10px
        }
    </style>

</head>

<body>
    <?php include('navbar.php') ?>

    <h2 style="margin-top:100px">Scopri le Opere D'arte</h2>

    <form action="collezione_arte.php" method="POST">
        <div class="divp">
            <div>
                <fieldset>
                    <label>Artista</label>
                    <input type="text" name="nome_artista" placeholder="nome artista" autofocus>
                </fieldset>
                <fieldset>
                    <label>Titolo</label>
                    <input placeholder="Titolo" type="text" name="nome_artista" autofocus>
                </fieldset>
                </fieldset>
                <input class="valid" type="submit" value="Search">
            </div>

            <div>
                <fieldset>
                    <label>Anno</label>
                    <input placeholder="Anno" type="text" name="anno_n" autofocus>
                </fieldset>
                <fieldset>
                    <label>Tipo</label>
                    <input placeholder="Tipo" type="text" name="genere" autofocus>
                </fieldset>
            </div>
        </div>
    </form>

    <?php include('footer.php') ?>
</body>

</html>