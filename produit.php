<?php
define('MYSQL_SERVEUR', 'localhost');
        define('MYSQL_UTILISATEUR', 'toto');
        define('MYSQL_MOTDEPASSE', 'plop');
        define('MYSQL_BASE', 'boutique');

        $mysql = new MySQLi(MYSQL_SERVEUR,
                    MYSQL_UTILISATEUR,
                    MYSQL_MOTDEPASSE,
                    MYSQL_BASE);
        $mysql->set_charset("utf8");
        $sql = 'SELECT * FROM Product';
        $result = $mysql->query($sql);


 ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./static/external/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./static/external/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="./static/external/immersive-slider/immersive-slider.css">
    <link href="https://fonts.googleapis.com/css?family=Diplomata+SC|Clicker+Script|Gloria+Hallelujah|" rel="stylesheet">
    <link rel="stylesheet" href="./static/css/style.css">
    <title>Boutique En Ligne</title>
</head>

<body>
    <header>
        <nav>
            <ul id="main_navbar">
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="formulaire-contact.html">Nous contacter</a></li>
                <li>
                    <a href="index.html"><img src="./static/img/logo-round.png" alt="logo"></a>
                </li>
                <li><a href="#">Mon compte</a></li>
                <li><a href="panier.html">Panier : <span class="cartQuantity">0</span></a></li>
            </ul>
            <div id="secondary_nav">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher...">
                    <div class="input-group-addon"><i class="icon ion-android-search"></i></div>
                </div>

                <ul>
                    <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
                    <li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <main>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <div class="product-img">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <h2>Description</h2>
                            <input type="number" value="1" min=0>
                            <button class="addToCart">Ajouter au panier</button>
                        </div>

                        <div class="col-xs-12">
                            <h3>Nous vous recommandons également</h3>
                            <section class="suggested-products">
                            </section>
                        </div>
                    </div>
            </div>
            </main>
        </div>
    </div>
    </div>
    <footer>
        <p>&copy; Nous - 2017</p>
    </footer>
    <!-- <script src="./static/external/jQuery/dist/jquery.min.js" charset="utf-8"></script>
    <script src="./static/external/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="./static/js/menuCart.js" charset="utf-8"></script>
    <script src="./static/js/get_param.js" charset="utf-8"></script>
    <script src="./static/js/produit.js" charset="utf-8"></script> -->
</body>

</html>
