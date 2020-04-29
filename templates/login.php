<?php $this->title = "Connexion"; ?>
<div class="container">
    <div> 
        <?= $this->session->show('error_login'); ?>
        <h4>Vous pouvez vous connectez pour avoir acces a d'avantages de contenu </h4>
        <form method="post" action="../public/index.php?route=login">
            <div class="form-group row">
                <label for="text3" class="col-sm-2 col-form-label">Pseudo</label><br>
                <input type="text" class="form-control" id="username" name="username"><br>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mot de passe</label><br>
                <input type="password" class="form-control" id="password" name="password"><br>
            </div>
            <div class="form-group row">
                <input type="submit" class="btn btn-primary" value="Connexion" id="submit" name="submit">
            </div>    
        </form>
            <a href="../public/index.php">Retour à l'accueil</a>
    </div>        
</div>