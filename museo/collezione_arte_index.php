<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
        <title>TATE - Ricerca Opere</title>
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

        <h2 style="margin-top:100px">Scopri le Opere D'arte</h2>
        <form action="collezione_arte.php" method="POST">
            <fieldset>
		<label>Artista</label>
		<input type="text" name="nome_artista" placeholder="nome artista" autofocus >
	    </fieldset>
            <fieldset>
		<label>Titolo</label>
		<input placeholder="Titolo" type="text" name="nome_artista" autofocus >
  	    </fieldset>
          <fieldset>
		<label>Anno</label>
		<input placeholder="Anno" type="text" name="anno_n" autofocus >
	    </fieldset>
            <fieldset>
		<label>Tipo</label>
		<input placeholder="Tipo" type="text" name="genere" autofocus >
	    </fieldset>
            <input type="submit" value="Search">
        </form>

        <?php include('footer.php') ?>
</body>
</html>
