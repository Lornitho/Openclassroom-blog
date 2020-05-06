<div class="container">
<form method="post" action="../public/index.php?route=addComment&articleId=<?= htmlspecialchars($article->getId()); ?>">
<div class="row col-8">
    <label class ="col-2"for="pseudo">Pseudo</label><br>
    <input class ="col-6" type="text" id="pseudo" name="pseudo">
    </div><br></br>
    <div class="row col-8">
    <label  class ="col-2" for="content">Message</label><br>
    <textarea  class ="col-6" id="content" name="content"></textarea>
    </div>
    <br></br>
    <input type="submit" value="Ajouter" id="submit" class="btn btn-primary" name="submit">
</form>
</div>