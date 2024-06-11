<style>
    .footer-distributed {
        background: #666;
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        padding: 30px;
    }
    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
    }

    /* Footer left */
    .footer-distributed .footer-left {
        width: 40%;
    }

    /* The museo logo */
    .footer-distributed h3 {
        font: normal 36px 'Open Sans';
        margin: 0;
    }
    .footer-distributed h3 span {
        color: lightseagreen;
    }

    /* Footer links */
    .footer-distributed .footer-links a {
        color: white;
    }
    .footer-distributed .footer-museo-name {
        margin: 0;
        color: black;
    }

    /* Footer Center */
    .footer-distributed .footer-center {
        width: 35%;
    }
    .footer-distributed .footer-center p {
        color: #ffffff;
    }
    .footer-distributed .footer-center p a {
        color: lightseagreen;
    }
    .footer-distributed .footer-links a:before {
        content: "|";
        font-weight: 300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
    }
    .footer-distributed .footer-links .link-1:before {
        content: none;
    }

    /* Footer Right */
    .footer-distributed .footer-right {
        width: 20%;
    }
    .footer-distributed .footer-museo-about {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }
    .footer-distributed .footer-museo-about span {
        display: block;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>

<footer class="footer-distributed">
    <div class="footer-left">
        
        <a href="index.php" style="text-decoration:none">
            <h3>TA<span>TE</span></h3>
        </a>

        <p class="footer-links">
            <a href="artist_room_index.php">Artist Room</a>
            <a href="collezione_arte_index.php">Collezione Arte</a>
            <a href="statistiche_index.php">Statistiche</a>
            <a href="Informazioni.php">Informazioni</a>
        </p>

        <p class="footer-museo-name">&copy; 2024 Museo Tate. Tutti i diritti riservati.</p>
    </div>

    <div class="footer-center">
        <div style="margin:10px 0px">
            <p><span>Bankside, London,</span>SE1 9TG England</p>
        </div>
        <div style="margin:13px 0px">
            <p>+33 123-456-7890</p>
        </div>
        <div style="margin:10px 0px">
            <p><a href="mailto:support@museo.com">support@museotate.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-museo-about">
            <span>A proposito del museo TATE</span>
            Museo TATE è un museo sito Inglese, pensato, strutturato, e sviluppato utilizzando tecnologie e piattaforme
            di ultima generazione.
        </p>
    </div>

</footer>