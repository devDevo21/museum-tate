<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <title>TATE - Risultati Ricerca Opere</title>

    <style>
        body {
            max-width: 1200px;
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