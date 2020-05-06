<?php $this->title = "Inscription"; ?>

<div class="container mx-auto" style="width: 850px;">
    <br>
    <div class="form-group row">
        <div class="col-12">
            <h2 class="row">Inscription</h2>
        </div>
        <div class="col-12">   
            <p class="row">Pour avoir accés a d'avantage de contenu vous pouvez vous inscrire.</p>
        </div>
    </div>        
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
                <div class="col-12">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Inscription" id="submit" name="submit">
                </div>
                <div class="col-12">
                    <br>
                    <a href="../public/index.php">Retour à l'accueil</a>
                </div>
            </div>
        </form>   
    </div>
</div>    