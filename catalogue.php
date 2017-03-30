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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <main>
                    <h1>Notre Catalogue</h1>
                        <div class="col-xs-12 col-md-2">
                            <aside class="">
                                <h2>Filtrer</h2>
                                <form action="catalogue.php" method="get">
                                    <h3>Prix</h3>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="order" value="asc" checked="checked">Croissant
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="order" value="desc">Décroissant
                                        </label>
                                    </div>
                                    <div class="input-group">
                                        <label for="">
                                            Min : <span>25</span>
                                        </label>
                                        <input name="min" type=range min="20" max="50" value="20">
                                    </div>
                                    <div class="input-group">
                                        <label for="">
                                            Max : <span>25</span>
                                        </label>
                                        <input name="max" type=range min="20" max="50" value="50">
                                    </div>
                                    <input type="submit" name="" value="Actualiser">
                                </form>
                            </aside>
                        </div>
                    <div class="col-xs-12 col-md-10">
                        <ul>

                        <?php
                        while ($row = $result->fetch_array()) {
                        echo "<li>";
                        echo "<a class='link' href='produit.php?id=".$row['id']."'>";
                        echo "<h2>".$row['name']."</h2>";
                        echo "<p>".$row['description']."</p>";
                        echo "<span>".$row['price']." €</span>";
                        echo "</a>";
                        echo "</li>";
                }
                        $result->free();
                        $mysql->close();
                         ?>
                        </ul>
                        <!-- <li><a class="link" href="produit.html?index=0"><img class="img-responsive thumb" src="http://placehold.it/140x140"><h2 class="name">Produit 0</h2><span class="price">50 €</span><p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et egestas augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum maximus eros, a condimentum diam dapibus non. Ut tempus sapien at blandit hendrerit. Mauris vel vehicula orci. Donec non risus eu diam accumsan ornare a vel nunc. Etiam porta enim nisi, sit amet imperdiet lectus commodo eget. Nulla magna ex, dapibus sed rhoncus nec, auctor et ligula. In malesuada ante neque, quis condimentum sapien faucibus eget. Vestibulum in interdum ipsum. Duis ut lorem velit. Aenean congue cursus neque, eget egestas turpis mattis non. Mauris quis diam aliquet, blandit justo id, cursus eros. Sed et vulputate velit. Integer finibus lacus vel porta laoreet.</p></a></li> -->
                        <div id="catalog">
                            <ul class="list"></ul>
                            <ul class="pagination"></ul>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
<footer>

    <p>| &copy; Nous - 2017 |</p>

</footer>

<!-- <script src="./static/external/jQuery/dist/jquery.min.js" charset="utf-8"></script>
<script src="./static/external/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="./static/js/get_param.js" charset="utf-8"></script>
<script src="./static/external/list.js/dist/list.js" charset="utf-8"></script>
<script src="./static/js/menuCart.js" charset="utf-8"></script>
<script src="./static/js/script.js" charset="utf-8"></script> -->

</body>

</html>
