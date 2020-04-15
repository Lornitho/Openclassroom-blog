<?php $this->title = "Accueil"; ?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/home.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/home.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <?= $this->session->show('add_article'); ?>
    <?= $this->session->show('edit_article'); ?>
    <?= $this->session->show('delete_article'); ?>
    <?= $this->session->show('add_comment'); ?>
    <?= $this->session->show('flag_comment'); ?>
    <?= $this->session->show('delete_comment'); ?>
    <?= $this->session->show('register'); ?>
    <?= $this->session->show('login'); ?>
    <?= $this->session->show('logout'); ?>
    <br/>
    <?php
if ($this->session->get('pseudo')) {
    ?>
    <a href="../public/index.php?route=logout">Déconnexion</a>
    <a href="../public/index.php?route=profile">Profil</a>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <a href="../public/index.php?route=administration">Administration</a>
        <?php
}
?>
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
              <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>
         
      <?php } ?>
  
</div>
