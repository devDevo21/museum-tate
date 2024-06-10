<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
        <title>TATE - Calcolo Statistiche</title>
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

        <h2 style="margin-top:100px">Calcola Statistiche sulle Opere</h2>
        <form action="risultati_statistiche.php" method="GET">
            <label for="anno_inizio">Anno Inizio:</label>
            <input type="number" id="anno_inizio" name="anno_inizio" required>
            <label for="anno_fine">Anno Fine:</label>
            <input type="number" id="anno_fine" name="anno_fine" required>
            <button type="submit">Calcola</button>
        </form>

        <?php include('footer.php') ?>
    </body>
    </html>
