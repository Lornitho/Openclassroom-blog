<?php $this->title = "Accueil"; ?>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenue sur le blog de Jean Forteroche</h5>
        <p>Vous pouvez consulter les articles et les commmenter </p>
      </div>
    </div>
  </div>
  <div class="container mt-3">
  <div class="jumbotron">
  <h4>Qui suis-je ?</h4>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque pariatur voluptatum deserunt, quasi deleniti dolore nobis odit 
  impedit dolorum vitae velit odio labore, nihil quisquam aperiam ducimus, autem quia hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aliquid sed illo! Quaerat architecto ab ad ullam unde mollitia,
   debitis nesciunt reprehenderit iure ipsa? Animi repudiandae quis voluptatibus saepe nostrum.
  </div>
  </div>
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
   

