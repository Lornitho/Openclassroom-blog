<?php $this->title='Administration'; ?>
<?= $this->session->show('add_article'); ?>
<?= $this->session->show('edit_article'); ?>
<?= $this->session->show('delete_article'); ?>
<?= $this->session->show('unflag_comment'); ?>
<?= $this->session->show('delete_comment'); ?>
<div class="container">
<h2>Articles</h2>
    <a href="../public/index.php?route=addArticle " class="btn btn-warning">Nouvel article</a><a href="../public/index.php?route=profile"class="btn btn-danger">Modifier profile</a>
    <table class="table table-bordered">
        <tr>
            <td>Id</td>
            <td>Titre</td>
            <td>Contenu</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
        <?php
        foreach ($articles as $article)
        {
            ?>
            <tr>
                <td><?= htmlspecialchars($article->getId());?></td>
                <td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
                <td><?= substr($article->getContent(), 0, 150);?></td>
                <td><em>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></em></td>
                <td>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="../public/index.php?route=editArticle&articleId=<?= $article->getId();?>">Modifier</a></li>
                        <li class="list-group-item"><a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId();?>">Supprimer</a></li>
                    </ul>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>



<h2>Commentaires signalés</h2>
<table class="table table-bordered">
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Pseudo</th>
        <th scope="col">Message</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</td>
    </tr>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <tr>
            <td><?= htmlspecialchars($comment->getId());?></td>
            <td><?= htmlspecialchars($comment->getPseudo());?></td>
            <td><?= substr($comment->getContent(), 0, 150);?></td>
            <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
            <td>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId();?>">Désignaler</a></li>
                <li class="list-group-item"><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId();?>">Supprimer le commentaire</a></li>
                </ul>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>
