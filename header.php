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
                 <li><a href="formulaire-contact.php">Nous contacter</a></li>
                 <li>
                     <a href="index.php"><img src="./static/img/logo-round.png" alt="logo"></a>
                 </li>
                 <li><a href="#">Mon compte</a></li>
                 <li><a href="panier.php">Panier : <span class="cartQuantity">0</span></a></li>
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
