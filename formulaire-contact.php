<?php

require_once "header.php";

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <main>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>Formulaire de Contact</h1>
                        </div>
                        <div class="panel-body">
                            <form data-toggle="validator" role="form">
                                <div class="form-group">
                                    <label for="inputName" class="control-label">Nom</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Votre Nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputName2" class="control-label">Prénom</label>
                                    <input type="text" class="form-control" id="inputName2" placeholder="Votre Prénom" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="control-label">Email</label>
                                    <input class="form-control" type="email" id="inputpass" placeholder="Entrez votre adresse mail" data-error="That email address is invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSubject" class="control-label">Sujet</label>
                                    <input type="text" class="form-control" id="inpuSubject" placeholder="Sujet" required>
                                </div>
                                <div class="form-group">
                                    <label for="">
                                        Message
                                    </label>
                                    <textarea name="name" rows="8" cols="135" placeholder="Entrez votre texte"></textarea>
                                </div>
                                <div class="row">
                                </div>
                                <div class="form-group">
                                    <button type="reset" class="btn btn-danger">Annuler</button>
                                    <button type="submit" class="btn btn-warning">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <footer>

        <p>| &copy; Nous - 2017 |</p>

    </footer>

    <script src="./static/external/jQuery/dist/jquery.min.js" charset="utf-8"></script>
    <script src="./static/external/bootstrap/dist/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="./static/js/menuCart.js" charset="utf-8"></script>
    <script src="./static/js/script.js" charset="utf-8"></script>

</body>

</html>
