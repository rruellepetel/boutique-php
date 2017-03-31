<?php
require_once "header.php";
$mysql->set_charset("utf8");
$sql = 'SELECT * FROM Product';
$result = $mysql->query($sql);
?>

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
                            echo "<img src='http://lorempixel.com/output/technics-q-c-250-250-9.jpg' />";
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
