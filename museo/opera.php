<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <title>TATE - Risultati Ricerca Opere</title>
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
        <h2 style="margin-top:100px">Risultati della Ricerca</h2>
        <?php
            include 'config.php';

            $titolo_opera = $conn->real_escape_string($_GET['titolo_opera']);
            $sql = "SELECT artworks.title, artworks.year, artworks.medium, artworks.dimensions, artists.name AS artist_name 
                    FROM artworks 
                    JOIN artists ON artworks.artist_id = artists.id 
                    WHERE artworks.title LIKE '%$titolo_opera%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<ul>";
                while($row = $result->fetch_assoc()) {
                    echo "<li><strong>" . $row['title'] . "</strong> di " . $row['artist_name'] . " (" . $row['year'] . ") - " . $row['medium'] . ", " . $row['dimensions'] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Nessuna opera trovata.</p>";
            }

            $conn->close();
        ?>

        <?php include_once('footer.php'); ?>
    </body>
    </html>
