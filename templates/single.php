<?php $this->title = "Article"; ?>
<div class="container">
    <div class ="row mt-4 ">
        <div class="col-12">
        <h3><?= htmlspecialchars($article->getTitle());?></h3>
        </div>
        <div class="col-12">
        <p><?= htmlspecialchars($article->getContent());?></p>
        </div>
        <div class="col-6">
        <p><em>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></em></p>
        </div>
        <div class="actions">
            <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?> "class="btn btn-info">Modifier</a>
            <a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"class="btn btn-danger">Supprimer</a>
        </div>
        <div class="col-6">
        <h3>Ajouter un commentaire</h3>
        </div>
        <div class="col-12">
        <?php include('form_comment.php'); ?>
        </div>
        <div class="col-6">
            <a href="../public/index.php" class="float-right btn btn-dark"><i class="fa fa-back"></i> Retour à l'accueil</a>
        </div>
        <div class="col-12">
        <?php 
        if($comments)
        {
        ?>    
            <h3>Commentaires</h3>
        <?php    
        }
        ?>
        
            <?php
        foreach ($comments as $comment)
        {
            ?>
            <h5 class="font-weight-bold"><?= htmlspecialchars($comment->getPseudo());?></h5>
            <p><?= htmlspecialchars($comment->getContent());?></p>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
            <?php
            if($comment->isFlag()) {
                ?>
                <p>Ce commentaire a déjà été signalé</p>
                <?php
            } else {
                ?>
                <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>"class="btn btn-warning">Signaler le commentaire</a></p>
                <?php
            }
            ?>
            <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>"class="btn btn-danger">Supprimer le commentaire</a></p>
            <br>
            <?php
        }
        ?>
        
        </div>    
    </div>    
</div>
