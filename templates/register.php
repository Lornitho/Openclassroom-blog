<?php $this->title = "Inscription"; ?>

<div class="container">

    <br>
    <h4 class="row">Inscription</h4>
    <p class="row">Pour avoir accés a d'avantage de contenu vous pouvez vous inscrire.</p>
    <br>
    <div>
        <form method="post" action="../public/index.php?route=register">
            <div class="form-group row">
                <label for="text3" class="col-sm-2 col-form-label">Pseudo</label><br>
                <input type="text" id="username" name="username"><br>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse email</label><br>
                <input type="email" id="email" name="mail"><br>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe</label><br>
                <input type="password" id="password" name="password"><br>
            </div>
            <div class="form-group row">
                <input type="submit" class="btn btn-primary" value="Inscription" id="submit" name="submit">
            </div>
        </form>
        <a href="../public/index.php">Retour à l'accueil</a>
    </div>