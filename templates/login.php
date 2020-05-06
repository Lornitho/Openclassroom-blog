<?php $this->title = "Connexion"; ?>
<div class="container">
    <div> 
        <?= $this->session->show('error_login'); ?>
        <br></br>
        <div class="form-group row">
            <div class="col-12">
                <h2 class="row">Connexion</h2>
            </div>
            <div class="col-12">   
                <p class="row">Vous pouvez vous connectez pour avoir acces a d'avantages de contenu.</p>
            </div>
        </div>       
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
                <div class="col-12">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Connexion" id="submit" name="submit">
                </div>               
                <div class="col-12">
                    <br>
                    <a href="../public/index.php">Retour à l'accueil</a>
                </div>
            </div>    
        </form>           
    </div>        
</div>