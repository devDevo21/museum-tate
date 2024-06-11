<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <title>TATE - Calcolo Statistiche</title>
    
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

    <h2 style="margin-top:100px">Calcola Statistiche sulle Opere</h2>
    <form action="risultati_statistiche.php" method="GET">
        <div class="divp">
            <fieldset>
                <label for="anno_inizio">Anno Inizio:</label>
                <input type="number" id="anno_inizio" name="anno_inizio" autofocus required>
            </fieldset>
            <fieldset>
                <label for="anno_fine">Anno Fine:</label>
                <input type="number" id="anno_fine" name="anno_fine" required>
            </fieldset>
        </div>
        <div>
            <button class="valid" type="submit">Calcola</button>
        </div>
    </form>

    <?php include('footer.php') ?>
</body>

</html>