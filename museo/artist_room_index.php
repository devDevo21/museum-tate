<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <title>TATE - Ricerca Artista</title>

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

    <h2 style="margin-top:100px">Cerca gli Artisti</h2>

    <form action="artist_room.php" method="POST">
        <div class="divp">
            <div class="divl">
                <fieldset>
                    <label>Nome artista</label>
                    <input placeholder="nome artista" type="text" name="nome_artista" autofocus>
                </fieldset>
                <fieldset>
                    <label>Genere</label>
                    <input placeholder="genere" type="text" name="genere" autofocus>
                </fieldset>
                <fieldset>
                    <label>Luogo Nascita</label>
                    <input placeholder="luogo nascita" type="text" name="luogo_n" autofocus>
                </fieldset>

                <input class="valid" type="submit" value="Cerca">
            </div>

            <div class="divr">
                <fieldset>
                    <label>Anno Nascita</label>
                    <input placeholder="anno nascita" type="text" name="anno_n" autofocus>
                </fieldset>
                <fieldset>
                    <label>Anno Decesso</label>
                    <input placeholder="anno decesso" type="text" name="anno_m" autofocus>
                </fieldset>
                <fieldset>
                    <label>Luogo Decesso</label>
                    <input placeholder="luogo decesso" type="text" name="luogo_m" autofocus>
                </fieldset>
            </div>
        </div>
    </form>

    <?php include('footer.php') ?>
</body>

</html>