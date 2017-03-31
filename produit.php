<?php
require_once "header.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM Product WHERE id = $id";
        $result = $mysql->query($sql);
        $prod =  $result->fetch_array();
 ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <main>
                    <h1><?php echo $prod['name'];  ?></h1>
                    <?php echo "<img src='http://lorempixel.com/output/technics-q-c-450-450-9.jpg' />"; ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <div class="product-img">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <h2>Description</h2>
                            <span><?php echo $prod['price'];  ?> €</span>
                            <p><?php echo $prod['description'];  ?></p>
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
