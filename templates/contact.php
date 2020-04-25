<?php $this->title = "contact"; ?>
<h1>Mon blog</h1>
<p>Si vous voulez contacer l'auteur veuillez saisir votre message.</p>
<?= $this->session->show('error_login'); ?>
<div>
    <form method="post" action="../public/index.php?route=contact">
    <p>
        <label for="nom">Nom/Prénom :</label>
        <input type="text" id="nom" name="nom" />  
    </p>  
    <p>  
        <label for="email">E-mail :</label>  
        <input type="text" id="email" name="email" />  
    </p>
    <p>  
        <label for="sujet">Sujet :</label>  
        <input type="text" id="sujet" name="sujet" />  
    </p>  
    <p>  
        <label for="message">Message :</label>  
        <textarea id="message" name="message" cols="40" rows="4"></textarea>  
    </p>
    <p>
        <input type="submit" name="submit" value=submit />
    </p> 
</form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>