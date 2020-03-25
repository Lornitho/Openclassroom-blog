<?php 
use App\src\DAO\ArticleDAO;


$this->title = "Accueil";
var_dump($this->content)
 ?>
    <div>
        <h1>Mon blog</h1>
       
      
        <?= $this->$this->session->show('add_article'); ?>
        <p>En construction</p>
        <a href="../public/index.php?route=addArticle">Nouvel article</a>
    </div>
    <?php

        $article = new ArticleDAO();
        $articles = $article->getArticles();
       foreach ($articles as $article)
       {
        ?>
        <div>
            <h2><a href="../public/index.php?route=billet&id=<?=($article->getId());?>"><?= htmlspecialchars($article->getTitre());?></a></h2>
            <p><?= htmlspecialchars($article->getText());?></p>
            <p>Créé le : <?= htmlspecialchars($article->getDateAjout());?></p>
        </div>
        <br>
        <?php
    }
    ?>
</body>
</html>