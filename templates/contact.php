<?php $this->title = "contact"; ?>
<div class="container">
    <br>
    <div class="form-group row">
        <div class="col-12">
            <h2 class="row">Contact</h2>
        </div>
        <div class="col-12">   
            <p class="row">Si vous voulez contacer l'auteur veuillez saisir votre message.</p>
        </div>
    </div>
    <?= $this->session->show('error_login'); ?>
        <form method="post" action="../public/index.php?route=contact">
        
        <div class="form-group row">
            <div class="col-3">
                <label for="text3" class=" col-form-label">Nom/Prénom :</label>
            </div>
            <div class="col-6">
                <input type="text" id="nom" name="nom" class="form-control" />  
            </div>    
        </div>  
         
        <div class="form-group row">
            <div class="col-3">
                <label for="inputEmail3" class="col-form-label">E-mail :</label>  
            </div>
            <div class="col-6">
                <input type="text" id="email" name="email" class="form-control" />  
                </div>
        
        </div>
   
        <div class="form-group row">
            <div class="col-3">
                <label for="text3" class="col-form-label">Sujet :</label>  
            </div>
            <div class="col-6">
            <input type="text" id="sujet" name="sujet"  class="form-control"/>
            </div>
             
        </div>  
        
       
        <div class="form-group row">
            <div class="col-3">
                 <label for="text3" class="col-form-label">Message :</label>  
            </div>
            <div class="col-6">
            <textarea id="message" name="message" cols="40" rows="4" class="form-control"></textarea> 
            </div>
          
        </div>
        
        
        <div class="form-group row">
        <div class="col-9">
            <input type="submit" class="btn btn-primary float-rigth" name="submit" value=Envoyer />
        </div>
            
        </div>
        
    </form>
    <a href="../public/index.php">Retour à l'accueil</a>
</div>
</div>
