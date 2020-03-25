<?php
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

$this->title = "Article"
?>
    <h1>Mon blog</h1>
    <p>En construction</p>
    <?php
    $article = new ArticleDAO();
    $id=$_GET['id'];
    $singleArticle = $article->getArticle($id);
    
    ?>
    <div>
        <h2><?= htmlspecialchars($singleArticle->getTitre());?></h2>
        <p><?= htmlspecialchars($singleArticle->getText());?></p>
        <p>Créé le : <?= htmlspecialchars($singleArticle->getDateAjout());?></p>
    </div>
    <br>
</div>
<br>

<br>
<a href="../public/index.php">Retour à l'accueil</a>
    <div id="comments" class="text-left" style="margin-left: 50px">
        <h3>Commentaires</h3>
        <?php
        $comment = new CommentDAO();
        $comments = $comment->getCommentsFromArticle($id);
        foreach($comments as $singeComment)
        {
            ?>
            <h4><?= htmlspecialchars($singeComment->getUsername());?></h4>
            <p><?= htmlspecialchars($singeComment->getText());?></p>
            <p>Posté le <?= htmlspecialchars($singeComment->getDateComment());?></p>
            <?php
        }
        ?>
    </div>
</body>
</html>