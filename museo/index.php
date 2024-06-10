<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.1.1/out/water.css">
    <link rel="stylesheet" href="photos.css">
    <title>TATE - Home Page</title>
    <style>
        body {
            max-width: 1200px;
        }

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
            background-color: rgb(160, 6, 127);
            /* Fluorescent color */
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out;
        }



        .navbar-link:hover:before {
            visibility: visible;
            transform: scaleX(1);
        }

        .content {
            padding: 20px;
            margin-top: 80px
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery img {
            width: 200px;
            margin: 10px;
            border: 2px solid #ccc;
        }

        .event {
            margin-top: 20px;
            border-top: 2px solid #ccc;
            padding-top: 20px;
        }
    </style>
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="content">

        <?php include('card.php') ?>

        <div>
            <div>
                <h2 style="padding:25px 0px 10px 15px;color:grey">ESPLORA LE NOSTRE GALLERIE ONLINE</h2>
                <hr />
            </div>
            <div class="photo_display">
                <a img class="img"  href="https://www.tate.org.uk/visit/tate-modern/display/materials-and-objects">
                    <!-- <figure> -->
                        <img img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/T15640_Official_View.width-1440.jpg"
                            alt="Mountains">
                        <!-- <figcaption> Tate (Sam Day)  </figcaption> -->
                    <!-- </figure> -->
                </a>
                <a href="https://www.tate.org.uk/visit/tate-modern/display/performer-and-participant">
                    
                        <img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/.width-1440_xFqoqX4.jpg"
                            alt="Mountains">
                        
                    
                </a>
            </div>

            <div class="photo_display">
                <a href="https://www.tate.org.uk/visit/tate-modern/display/tanks">
                   
                        <img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/tanks_staircase_tate_modern_1_W3VMCQj.width-2560.jpg"
                            alt="Mountains">
                </a>
                <!-- style="--c:#fff5" -->
                <a href="https://www.tate.org.uk/visit/tate-britain/display/modern-and-contemporary-british-art">
                    
                        <img class="img"
                            src="https://media.tate.org.uk/aztate-prd-ew-dg-wgtail-st1-ctr-data/images/.width-1440_wIrflDa.jpg">
                        
                </a>
            </div>
        </div>

    <?php include_once('footer.php') ?>
</body>

</html>