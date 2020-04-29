<header>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
</header>
<?php $this->title = "Modifier l'article"; ?>
<div class="container">
<div class="row mt-3">
<div class="col-6">
    <h3>Modification article</h3>
</div>
<div class="col-6">
    <a href="../public/index.php" class="float-right btn btn-dark"><i class="fa fa-back"></i> Retour à l'accueil</a>
</div>


</div> 

<div>
    <form method="post" action="../public/index.php?route=editArticle&articleId=<?= htmlspecialchars($article->getId()); ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" class="form-control" value="<?= htmlspecialchars($article->getTitle()); ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?= htmlspecialchars($article->getContent()); ?></textarea><br>
        <input type="submit" value="Mettre à jour" id="submit" name="submit" class="btn btn-success">
    </form>
    
</div></div>