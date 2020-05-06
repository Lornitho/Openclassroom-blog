
<header>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>
</header>
<?php $this->title = "Nouvel article"; ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-6">
        <h3>Création d'un nouvelle article</h3>
        </div>
        <div class="col-6">
                <a href="../public/index.php" class="float-right btn btn-dark"><i class="fa fa-back"></i> Retour à l'accueil</a>
        </div>
    </div>
    <div>
    <form method="post" action="../public/index.php?route=addArticle">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" required class="form-control"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="Envoyer" class="btn btn-success" id="submit" name="submit">
    </form>  
    </div>
</div>