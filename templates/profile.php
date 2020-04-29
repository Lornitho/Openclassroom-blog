<?php $this->title = 'Mon profil'; ?>
<div class="container">

        <h4>Mon profile</h4>
        <table class="table">
       <td><?= $this->session->show('update_password'); ?></td>
       
       <td><h5><?= $this->session->get('username'); ?></h5></td>
       <td><?= $this->session->get('id'); ?></p></td>
       <td><a href="../public/index.php?route=updatePassword">Modifier son mot de passe</a></td>

        <br>
        </table>
        <a href="../public/index.php">Retour à l'accueil</a>
        
</div>