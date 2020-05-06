<?php $this->title = 'Mon profil'; ?>
<div class="container">
        <br></br>
        <h4>Mon profile</h4>
        <table class="table">
       <td><?= $this->session->show('update_password'); ?></td>
       
       <td><h5><?= $this->session->get('username'); ?></h5></td>
       <td><a href="../public/index.php?route=updatePassword"class="btn btn-warning">Modifier son mot de passe</a></td>

        <br>
        </table>
        <a href="../public/index.php" class="btn btn-dark"><i class="fa fa-back"></i> Retour à l'accueil</a>        
</div>