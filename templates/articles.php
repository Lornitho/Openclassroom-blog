<?php $this->title = "billet"; ?>
<br>
<div class="container">
  <div class="row">
    <?php


    foreach ($articles as $article)
      {
          ?>
          <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="http://www.charlottenewsvt.org/wp-content/uploads/2018/03/books.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></h5>
              <p class="card-text"><?= substr( htmlspecialchars($article->getContent()), 0, 150); ?></p>
              <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
              <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>" class="btn btn-primary">Lire la suite</a>
            </div>
          </div>
          </div>
         
      <?php } ?>
  
</div>