<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <title>TATE - Visualizza Statistiche</title>
    
    <style>
        body {
            max-width: 1200px;
        }
    </style>
    
</head>

<body>
    <?php include('navbar.php') ?>

    <h2 style="margin-top:100px">Risultati del Calcolo</h2>
    <?php
            include 'config.php';

            $anno_inizio = (int)$_GET['anno_inizio'];
            $anno_fine = (int)$_GET['anno_fine'];

            $sql = "SELECT COUNT(*) AS total_artworks, AVG(YEAR) AS avg_year 
                    FROM artworks 
                    WHERE year BETWEEN $anno_inizio AND $anno_fine";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<p>Numero totale di opere: " . $row['total_artworks'] . "</p>";
                echo "<p>Anno medio di creazione delle opere: " . round($row['avg_year'], 2) . "</p>";
            } else {
                echo "<p>Nessuna statistica disponibile per il periodo selezionato.</p>";
            }

            $conn->close();
        ?>

    <?php include_once('footer.php') ?>
</body>

</html>